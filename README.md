## Requirement :

PHP ^7.3|^8.0

composer

npm

mysql database

## Set Up

#### Install composer dependencies

composer install

### Install npm dependencies

npm install

### Configure environment viarable

create a copy of .env.example and rename to .env
or
run php -r "file_exists('.env') || copy('.env.example', '.env')

### Database setup

Create an empty database for the application.

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

### Create database tables

Run database migrations

run php artisan migrate

### Seed database

run php artisan db:seed

### Generate an app encryption key

php artisan key:generate

### smtp server setup

Provide the configurations for your smtp sever in the .env file for email notifications

In the .env file fill in the MAIL_HOST,MAIL_PORT,MAIL_USERNAME,MAIL_PASSWORD,MAIL_ENCRYPTION,MAIL_FROM_ADDRESS options to match the credentials of the smtp server.

### Start the development server

php artisan serve