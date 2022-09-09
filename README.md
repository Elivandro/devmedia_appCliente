# AppCliente - [devmedia](https://www.devmedia.com.br/)

## Framework:

- [**Laravel 9**](https://laravel.com/)
- [**bootstrap 5.2**](https://getbootstrap.com/)


## Requerimenos minimos
- [**PHP 8**](https://www.php.net/)
- [**Composer**](https://getcomposer.org/)
- [**Git**](https://git-scm.com/)


<hr>

### Curso Laravel
curso de laravel 5.2 feito pela plataforma devmedia afim de aperfeiçoar e adquirir novas experiencias.

<hr>

### Como rodar a aplicação:

Cópie o repositório:

`git clone git@github.com:Elivandro/devmedia_appCliente.git`

Para instalar as dependências:

`composer install`

renomeie arquivo de variaveis env

`cp .env.example .env`

Gere uma chave para aplicação

`php artisan key:generate`

### arquivo .env

``APP_NAME`` 

configure o banco de dados

``DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
``

rode as migrações

``php artisan migrate``

coloque alguns dados no banco

``php artisan db:seed``

por fim rode o servidor

``php artisan serve``