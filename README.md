## About Project

Solluti é uma api para criar lojas e produtos vinculados as lojas,não precisa de autenticação ,e é uma API aberta,pode acessar diretamente os endpoints


## Tools
 
- **[Laravel Framework](https://laravel.com/)** 

## Config Project

You need to configure the .env file steps

- 1 criar envio de e-mail de configuração quando um novo pedido for criado, adicione EMAIL_SEND ao seu .env com um e-mail válido
- 2 config MAIL_USERNAME e MAIL_PASSWORD para enviar email (Eu uso o **[https://mailtrap.io/inboxes](https://mailtrap.io/inboxes)**)
- 3 Configure QUEUE_CONNECTION (Eu uso o banco de dados)
- 4 Configure seu banco de dados

## Run Project

- composer update 
- php artisan migrate
- php artisan key:generate
- php artisan serve
- php artisan queue:work


## TODOS

Helper

- Response 
- Errors

Resources collection

- Order

Searchs e paginate no endpoints

-  GET 'api/v1/lojas'
-  GET 'api/v1/produtos'


 







