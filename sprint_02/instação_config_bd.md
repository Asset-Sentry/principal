# Tarefa: Instalação e configuração de banco de dados.
A instalação do banco de dados foi adiantada na tarefa anterior. A ferramenta de gerenciamento SQLyog também foi instalada juntamente com o banco de dados.
O usuário para o projeto e a senha foram definidos por linha de comando conforme ilustrado na figura 02.
![image](https://github.com/user-attachments/assets/2cc92b8b-49e6-4a30-aa77-af44434898a9)

Com a ferramenta SQLyog conectada ao banco de dados criamos um database chamado “projetos” clicando com o botão direito em uma das abas do lado esquerdo e depois “Create Database”.
![image](https://github.com/user-attachments/assets/b521d77f-7a47-46f1-a6bc-f2db23a1f127)
![image](https://github.com/user-attachments/assets/9c4e9f06-3c42-4fc1-a32d-79188a7106e2)

Após a criação do Data Base “projetos” criamos as tabelas necessárias para o armazenamento dos dados do projeto. Inicialmente criamos as tabelas dados, mensagens, parametros e setup. As imagens a seguir demonstram as tabelas e colunas criadas:
![image](https://github.com/user-attachments/assets/5655d417-b9cb-4745-aea6-4ab3885fdd41)
![image](https://github.com/user-attachments/assets/9013b345-755d-4beb-a8dc-975e3679d791)
![image](https://github.com/user-attachments/assets/d1384473-ce5d-4afe-8c09-120b2989045a)
![image](https://github.com/user-attachments/assets/e792dba5-2741-4e6a-b9c3-81a0ab15c1c2)


Para inserção dos dados nas tabelas iremos utilizar um arquivo php no servidor web que irá receber os dados por meio de POST, irá estabelecer a conexão com o BD e irá inserir por meio de SQL.
![image](https://github.com/user-attachments/assets/fb56755d-e804-47cd-b128-a7d9aa632fe5)


Efetuamos testes para verificar a inserção de dados utilizando este código através de um navegador. Pudemos verificar que os dados estão sendo inseridos corretamente.<br>
![image](https://github.com/user-attachments/assets/4298eba4-8b5d-45d3-97e2-2e23dce35156)
![image](https://github.com/user-attachments/assets/44022d42-1626-43c7-ba3d-43784286d3ca)

Após estas configurações e testes já possuímos um banco de dados funcional e um método para inserir os dados.


