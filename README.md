# cabinet

# Getting started

## Installation

Clone the repository :

    git clone https://github.com/youssef-ettafssaoui/pfa-app.git

Switch to the repo folder :

    cd pfa-app

Install all the dependencies using composer :

    composer install

Update all the dependencies using composer :

    composer update

Copy the example env file and make the required configuration changes in the .env file :

    cp .env.example .env

Generate a new application key :

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/youssef-ettafssaoui/pfa-app.git
    cd cabinet
    composer install
    cp .env.example .env
    php artisan key:generate

**Make sure you set the correct database connection information before running the migrations**:

    php artisan migrate
    php artisan serve

## Database seeding

Open the DataSeeder and set the property values as per your requirement

    database/seeds/DataSeeder.php

Run the database seeder and you're done

    php artisan db:seed

**_Note_** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:fresh
