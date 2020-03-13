# CRUD-Ticket

Teste de conhecimento PHP

1 - Detalhes sobre o projeto serão informados a seguir.

## Tela inicial ##

A tela inicial conta com formulario de login e botão para o formulario de cadastro

![image](https://user-images.githubusercontent.com/9875524/76583161-3d645600-64b7-11ea-93be-cd12b9d11486.png)


## Tela de cadastro ##

Simples e intuitiva, a tela de cadastro conta apenas com três campos

![image](https://user-images.githubusercontent.com/9875524/76583205-540aad00-64b7-11ea-9890-c15c654db1b8.png)


## Criando um ticket ##

Também simples, conta com campos para titulo, descrição do problema, status e a prioridade do serviço. O campo data já vem preenchido com a data atual do sistema, e bloqueado de edição.

![image](https://user-images.githubusercontent.com/9875524/76583238-697fd700-64b7-11ea-8a1b-e7f88e4a6e4c.png)

## Barra de navegação ##

Fora adicionado uma barra de navegação para facilitar o uso do sistema.

![image](https://user-images.githubusercontent.com/9875524/76583282-9338fe00-64b7-11ea-9701-23828cb26e49.png)

## Listagem de tickets ##

Na listagem de tickets, poderá ver todos os chamados abertos, com os respectivos status, e informações. Também dois botoes ( deletar e editar ). O deletar faz a desativação do chamado no banco de dados, removendo ele da tela ( mas por segurança mantem a linha na tabela do banco de dados ). O editar, abre uma nova pagina contendo os dados do ticket passiveis de edição.


![image](https://user-images.githubusercontent.com/9875524/76583394-d7c49980-64b7-11ea-9892-1d87492751df.png)


![image](https://user-images.githubusercontent.com/9875524/76583426-e7dc7900-64b7-11ea-924d-b1fbce33c9b2.png)

##  Banco de dados ##

O banco de dados contem apenas duas tabelas, sendo uma para usuarios e outra para os tickets.

A criptografia da senha foi feita com hash MD5, visando não deixar em modo texto. 

Arquivo sql do banco está no projeto.

## Técnologias utilizadas ##

1 - PHP 7
2 - Bootstrap 4 (Front-end)
3 - CSS
4 - JS
5 - MYSQL


