# Projeto Integrador Referente a Disciplina de Seminário de Orientação de Projeto Integrador - IFRN 2024.1 <br>
## Título: Sistema de Monitoramento de Climatização para Datacenters Baseado em Dispositivos IoT.
![WhatsApp Image 2024-08-03 at 15 39 41](https://github.com/user-attachments/assets/5939a068-3fef-452c-86b7-30bcf24525cc)

<details>
<summary>INTEGRANTES</summary>
Alunos:<br>
Edmar Pereira <br>
Matricula: 20171014050043 <br>
Email: edmar.p@escolar.ifrn.edu.br <br><br>
Matheus Brito Bezerra Cavalcanti <br>
Matricula: 20232014050039 <br>
Email: brito.cavalcanti@escolar.ifrn.edu.br <br><br>
Wesley Silva de Castro <br>
Matricula: 20192014050015 <br>
Email: wesley.castro@escolar.ifrn.edu.br <br><br>
Orientador: <br>
Prof. Ivanilson França
</details>

<details>
<summary>RESUMO</summary>

O projeto visa desenvolver um sistema que utiliza dispositivos IoT para coleta, envio e armazenamento de dados de climatização em data centers. Além disso, contará com recurso dedicado à detecção de incêndio, interface gráfica para exibição de dados / gerenciamento dos alertas e ainda integração com telefonia VOIP. Este projeto é altamente relevante uma vez que monitorar esses parâmetros significa prover maior proteção dos ativos e consequentemente dos dados armazenados. Nesse contexto, o sistema pode detectar rapidamente quaisquer desvios dos parâmetros e acionar alertas em tempo real para a equipe responsável. Isso permite uma resposta imediata para corrigir problemas antes que possam causar danos aos equipamentos ou comprometer a segurança dos dados. Ao fornecer uma vigilância constante e inteligente do ambiente, essa solução contribui significativamente para a confiabilidade, disponibilidade e segurança dos serviços de TI essenciais para as organizações modernas. A entrega final deste projeto será um protótipo funcional do sistema que incluirá a integração de sensores com banco de dados através de conexão sem fio, acompanhamento em tempo real por meio de página web, gerenciamento e automação de alertas via interface gráfica e telefonia VOIP. Este projeto estabelece ligações significativas com diversas disciplinas do curso de Redes de Computadores. A disciplina de Programação para Redes é essencial para o desenvolvimento dos scripts que irão automatizar os processos de coleta e envio de dados. A disciplina de Administração Avançada de Serviços de Rede fornece os fundamentos necessários para criação e manipulação do banco de dados. Por fim, a disciplina de Implantação de Serviços VoIP é necessária para a automatização de alertas por meio de telefonia.
</details>
<details>
<summary>INTRODUÇÃO</summary>

Em um mundo cada vez mais dependente da tecnologia, a eficiência e a segurança dos data centers são vitais para operações empresariais ininterruptas. Manoel Veras (2011) destaca que as empresas buscam reduzir o consumo de energia elétrica, otimizar o uso de espaço físico, racionalizar recursos computacionais e garantir a segurança dos dados e de seus equipamentos.
Os desafios de monitoramento e rastreamento de ativos em data centers estão cada vez mais crescentes. Denis Garcia (2013) observa que a indisponibilidade dos serviços de TI pode prejudicar ou paralisar operações empresariais  ou governamentais essenciais. Portanto, é necessário inserir um sistema auxiliar confiável para prevenir que o data center entre em colapso ou um incidente com mais agravantes. Nosso projeto é uma solução que usa sensores para monitorar em tempo real a climatização de ambientes sensíveis. Utilizando plataformas sem fio, o projeto demonstrará ser viável mesmo com restrições de recursos, oferecendo uma infraestrutura que permita monitorar, prevenir e alertar possíveis imprevistos com uma gestão proativa e resposta mais rápida.
</details>

<details>
<summary>JUSTIFICATIVA</summary>

Nos últimos anos, a proteção de ativos que armazenam dados tem ganhado cada vez mais importância, especialmente no que diz respeito à integridade dos mesmos. Nesse contexto, propomos o desenvolvimento de um protótipo que permita:
1. Monitoramento via interface gráfica: O sistema proposto permitirá que os administradores monitorem em tempo real a temperatura e a umidade do ar através de interface gráfica.
2. Monitoramento via telefone: Mesmo sem interface gráfica será possível efetuar monitoramento através de telefone. Além disso, será possível efetuar configurações do sistema via telefone. Tal ferramenta é importante para que os administradores não sejam dependentes unicamente de interface gráfica.
3. Alertas Automatizados: O sistema gerará alertas automatizados via interface gráfica e telefone, o que permitirá respostas rápidas em casos de incidentes. O alerta via telefone justifica-se devido a importância da ação rápida de resposta a incidentes, principalmente em caso de incêndio. O sistema irá priorizar o alerta via interface gráfica e tomará providências caso não receba confirmação do administrador. As providências incluem tentativas de notificação via telefone e possibilidade de acionamento de equipamentos reservas de maneira automática.
4. Resposta a distância para incidentes: As respostas para incidentes poderão ser efetuadas a distância pelos administradores. Através de interface gráfica e telefonia será possível acionar equipamentos reservas de climatização ou sistema de alarme.
5. Histórico de acontecimentos: O banco de dados guardará as informações históricas de eventos, tais como variações de parâmetros, logs do sistema e etc.

A seguintes disciplinas do nosso curso de Redes de Computadores do IFRN fundamentam a integração desse projeto:
1. Programação para Redes: Essencial para o desenvolvimento de toda lógica de programação para coleta, envio, armazenamento, processamento e exibição dos dados. Conforme ementa da disciplina, utilizaremos principalmente:
Aplicações Cliente/Servidor (1.2); e
Geração de Scripts para automatização de tarefas (4).

2. Administração Avançada de Serviços de Rede: Fornecerá o conhecimento necessário para criação e administração de banco de dados. Conforme ementa da disciplina, utilizaremos principalmente:
Administração básica de servidores de banco de dados (8).

3. Implantação de Serviços VoIP: Será crucial para a implementação do alerta automatizado via telefone. Conforme ementa da disciplina, utilizaremos principalmente:
Configuração do protocolo SIP (6.1);
Configuração de menus de auto atendimento (6.3); e
Integração do Asterisk com outras soluções de VoIP (7).
</details>

<details>
<summary>OBJETIVO GERAL</summary>

O propósito principal deste projeto integrador consiste na concepção de um sistema de monitoramento de climatização e alerta contra incêndio voltado para data centers utilizando dispositivos IoT. Esta iniciativa oferece a oportunidade de aplicar os conhecimentos adquiridos ao longo do curso de Redes de Computadores no IFRN. O projeto tem como meta integrar as disciplinas de Programação para Redes, Administração Avançada de Serviços de Rede e Implantação de Serviços VoIP, com o intuito de desenvolver um protótipo que possa otimizar o monitoramento de temperatura e umidade em ambientes de data centers. Ao alcançar este objetivo geral, almejamos demonstrar nossa habilidade em transformar conceitos teóricos em aplicações práticas, contribuindo assim para soluções tecnológicas que possam ter um impacto significativo na gestão de datacenters.
</details>
<details>
<summary>OBJETIVOS ESPECÍFICOS</summary>
Configurar um ambiente com serviços de banco de dados, web e voip. Integração de sensores aos serviços instalados.
</details>
<details>
<summary>ENTREGAS</summary>

Sprint 01: Preparação do ambiente de desenvolvimento.<br>
Matheus: Pesquisa de dispositivos, sensores e outros componentes necessários para captação e envio dos dados coletados;<br>
Wesley: Preparação do ambiente de virtualização incluindo instalação de sistema operacional, ferramentas de desenvolvimento / compilação e dependências; e<br>
Edmar: Levantamento de serviços e métodos necessários para coleta, envio, armazenagem, tratamento e automatização de alertas; <br><br>

Sprint 02: Coleta e envio de dados para banco de dados.<br>
Edmar: Programação da plataforma de coleta e envio de dados;<br>
Wesley: Instalação e configuração de banco de dados; e<br>
Matheus: Montagem do circuito, testes e correção de erros.<br><br>

Sprint 03: Criação de interface gráfica.<br>
Wesley: Pesquisa de template / adaptação para o projeto;<br>
Matheus: Pesquisa de ferramentas de criação de gráficos / integração com banco de dados; e<br>
Edmar: Criação de ferramenta para habilitar/desabilitar funções do sistema.<br><br>

Sprint 04: Integração com sistema VoIP.<br>
Matheus: Instalação da plataforma Asterisk e dependências, configuração de usuários e extensões;<br>
Edmar: Criação de fluxograma para as consultas e alertas automatizados via VOIP;<br>
Wesley: Configuração de Asterisk Gateway Interface (AGI) para automatização de alertas.<br><br>

Sprint 05: Segurança e proteção de dados.<br>
Edmar: Análise de vulnerabilidades;<br>
Wesley: Correção de erros de vulnerabilidade; e<br>
Matheus: Testes de segurança.<br><br>

Sprint 6: Documentação e Apresentação<br>
Matheus: Criar manual de usuário;<br>
Edmar: Preparar um relatório técnico abrangente, documentando o processo de desenvolvimento; e<br>
Matheus: Preparar a apresentação final do projeto e a demonstração.<br><br>
</details>
<details>
<summary>REFERÊNCIAS</summary>

Marco, A, D. A. Virtualização: Componente Central do Data Center. Rio de Janeiro: Brasport, 2011.<br>

Garcia, Denis. Centro de Dados: Data Center, 2013(Artigo Científico)-Faculdade do Guarujá, São Paulo, 2013.<br>

Veras, Manoel. Cloud Computing: A Nova Arquitetura da TI / Manoel Veras - Rio de Janeiro, Brasport. 2012.<br>
</details>

<details>
<summary>RELATÓRIOS ENTREGUES</summary>
  
### Relatório da Criação do Repositório
https://drive.google.com/file/d/1HEyJAd_q9P4OeOST7Djw9FxlD4I-L_3t/view?usp=drive_link
### Relatório referente ao Sprint 01

### Relatório referente ao Sprint 02

### Relatório referente ao Sprint 03

### Relatório referente ao Sprint 04

### Relatório referente ao Sprint 05

### Relatório referente ao Sprint 06
</details>
