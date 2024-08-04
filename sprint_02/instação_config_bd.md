# Tarefa: Instalação e configuração de banco de dados.
A instalação do banco de dados foi adiantada na tarefa anterior. A ferramenta de gerenciamento SQLyog também foi instalada juntamente com o banco de dados.
O usuário para o projeto e a senha foram definidos por linha de comando conforme ilustrado na figura 02.
Figura 02: Criação do usuário e senha do banco de dados.


Fonte: Elaboração própria (2024).
Com a ferramenta SQLyog conectada ao banco de dados criamos um database chamado “projetos” clicando com o botão direito em uma das abas do lado esquerdo e depois “Create Database”.
Figura 03: Criação do data base do projeto.


Fonte: Elaboração própria (2024).
Figura 04: Criação do Data Base do projeto.


Fonte: Elaboração própria (2024).
Após a criação do Data Base “projetos” criamos as tabelas necessárias para o armazenamento dos dados do projeto. Inicialmente criamos as tabelas dados, mensagens, parametros e setup. As imagens a seguir demonstram as tabelas e colunas criadas:
Figura 05: Criação da tabela dados.


Fonte: Elaboração própria (2024).


Figura 06: Criação da tabela mensagens.


Fonte: Elaboração própria (2024).

Figura 07: Criação da tabela parametros.


Fonte: Elaboração própria (2024).


Figura 08: Criação da tabela setup.


Fonte: Elaboração própria (2024).

Para inserção dos dados nas tabelas iremos utilizar um arquivo php no servidor web que irá receber os dados por meio de POST, irá estabelecer a conexão com o BD e irá inserir por meio de SQL.
Figura 09: Código para inserir dados no banco de dados.
 
Fonte: Elaboração própria (2024).

Efetuamos testes para verificar a inserção de dados utilizando este código através de um navegador. Pudemos verificar que os dados estão sendo inseridos corretamente.
Figura 10: Teste do código para inserir dados usando navegador.
 
Fonte: Elaboração própria (2024).

Figura 11: Comprovação dos dados sendo inseridos no BD.
 
Fonte: Elaboração própria (2024).
Após estas configurações e testes já possuímos um banco de dados funcional e um método para inserir os dados.

