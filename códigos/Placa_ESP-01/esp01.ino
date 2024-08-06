#include <ESP8266WiFi.h>
#include <Adafruit_AHTX0.h>

const char* ssid = "brisa-1852033";
const char* password = "rly56sgl";

Adafruit_AHTX0 aht;
Adafruit_Sensor *aht_temp;
Adafruit_Sensor *aht_humidity;

void setup(void) {
  Serial.begin(115200);

  // Conecte-se à rede WiFi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi..");
  }
  Serial.println("Connected to WiFi");

  // Espere pela comunicação serial estar pronta
  while (!Serial) {
    delay(10); // Pausa até a console serial estar aberta
  }

  Serial.println("Iniciando sensor AHT10");

  // Inicializa o sensor AHT
  if (!aht.begin()) {
    Serial.println("Falha ao iniciar sensor AHT10");
    while (1) {
      delay(5000); // Fica em loop infinito caso falhe ao iniciar o sensor
    }
  }

  Serial.println("AHT10/AHT20 iniciado!");

  // Obtém os sensores de temperatura e umidade
  aht_temp = aht.getTemperatureSensor();
  aht_humidity = aht.getHumiditySensor();

  // Imprime os detalhes dos sensores
  aht_temp->printSensorDetails();
  aht_humidity->printSensorDetails();
}

void loop() {
  sensors_event_t humidity;
  sensors_event_t temp;

  // Obtém os eventos do sensor
  aht_humidity->getEvent(&humidity);
  aht_temp->getEvent(&temp);

  // Exibe os resultados
  Serial.print("\t\tHumidity: ");
  Serial.print(humidity.relative_humidity);
  Serial.println(" % rH");
  Serial.print("\t\tTemperature: ");
  Serial.print(temp.temperature);
  Serial.println(" degrees C");

  delay(5000); // Espera 5 segundos antes da próxima leitura
}
