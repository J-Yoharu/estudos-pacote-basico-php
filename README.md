# Pacote básico Laravel

## Como usar?
Este é um pacote simples com Laravel que disponibiliza um crud básico de usuários.
Para que tudo funcione de acordo, você precisa seguir apenas os passos abaixo:
```php
/*migrar tabela de usuários (a tabela será nomeada como "pacote_users" 
para não dar conflito com outra tabela de usuários já existente*/
php artisan migrate
```
Após rodar o comando, será disponibilizada as seguintes rotas no seu aplicativo `Laravel`:
 - GET `pacote/user`: listagem de usuários;
 - GET `pacote/user/{id}`: Visualizar um usuário;
 - POST `pacote/user`: Criar um usuário;
 - PUT `pacote/user/{id}`: Atualizar um usuário;
 - DELETE `pacote/user/{id}`: Deletar um usuário;
 
Para fazer o crud, foram utilizado `Controller`, `Model`, `Repository` e `Migration`.

Obs: Esse pacote é apenas um teste para criação de pacotes em Laravel, ele está disponível
Instalando via composer executando o código abaixo:

`composer require pacote/basico`