Plataforma utilizada para a codificação: linguagem em C do arduíno;
fluxograma do código:

Início: incialização do sistema;
Inicialização da Comunicação Serial: configuração da comunicação;
Tentativa de Inicialização do Sensor AHT10: Aqui temos uma tentativa de inicialização do sensor AHT10;
Sensor AHT10 Encontrado?: Verifica se a inicialização do sensor AHT10 foi realizada;
Sim: Se o sensor foi encontrado, imprime "Sensor encontrado com sucesso".
Não: Se o sensor não foi encontrado, imprime "Sensor AHT10 não localizado, verificando conexão..." e entra em um loop infinito.
Loop Principal: Executa o programa:
Ler Dados de Temperatura e Umidade: Coleta os dados do sensor.
Imprimir Dados de Temperatura na Porta Serial: Exibe os dados de temperatura.
Imprimir Dados de Umidade na Porta Serial: Exibe os dados de umidade.
Aguardar time definido ms: Pausa a execução durante o time definido antes de repetir o loop.
Este fluxograma ilustra o fluxo de execução, desde a inicialização até a repetição do loop principal para a leitura e exibição dos dados do sensor AHT10.

Desta forma temos uma podemos observar como se comporta o sistema de monitoramento de climatização de ambiente.

Durante o desenvolvimento foi adicionado a conexão Wi-fi para a integração do código e os sensores do dispositivo.

Abaixo temos a imagem do fluxograma do sistema:
![image](https://github.com/user-attachments/assets/fdeab643-b637-43cd-95cb-0a9d3c7e27e5)
