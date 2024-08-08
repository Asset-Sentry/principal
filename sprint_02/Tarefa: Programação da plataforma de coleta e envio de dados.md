## Plataforma utilizada para a codificação: linguagem em C do arduíno;<br>
### fluxograma do código:

**Início:** incialização do sistema;<br>
**Inicialização da Comunicação Serial:** configuração da comunicação;<br>
**Tentativa de Inicialização do Sensor AHT10:** Aqui temos uma tentativa de inicialização do sensor AHT10;<br>
**Sensor AHT10 Encontrado?:** Verifica se a inicialização do sensor AHT10 foi realizada;<br>
**Sim:** Se o sensor foi encontrado, imprime "Sensor encontrado com sucesso".<br>
**Não:** Se o sensor não foi encontrado, imprime "Sensor AHT10 não localizado, verificando conexão..." e entra em um loop infinito.<br>
**Loop Principal:** Executa o programa:<br>
**Ler Dados de Temperatura e Umidade:** Coleta os dados do sensor.<br>
**Imprimir Dados de Temperatura na Porta Serial:** Exibe os dados de temperatura.<br>
**Imprimir Dados de Umidade na Porta Serial:** Exibe os dados de umidade.<br>
**Aguardar time definido ms:** Pausa a execução durante o time definido antes de repetir o loop.<br>
Este fluxograma ilustra o fluxo de execução, desde a inicialização até a repetição do loop principal para a leitura e exibição dos dados do sensor AHT10.<br>

Desta forma temos uma podemos observar como se comporta o sistema de monitoramento de climatização de ambiente.<br>

Durante o desenvolvimento foi adicionado a conexão Wi-fi para a integração do código e os sensores do dispositivo.<br>

Abaixo temos a imagem do fluxograma do sistema:<br><br>
![image](https://github.com/user-attachments/assets/fdeab643-b637-43cd-95cb-0a9d3c7e27e5)
