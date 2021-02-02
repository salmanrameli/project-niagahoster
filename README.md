# Niagahoster Landing Page

Niagahoster fullstack developer test - step 1

## Installation
1. Clone this repository
2. `cd` to project-niagahoster directory (or whatever the name of the clone directory that you use)
3. Run `mkdir mysql`
4. Run `docker-compose build`
5. Run `docker-compose up`
6. `cd` to src directory
7. Run `cp .env.example .env`
9. Set the .env with the following:
    APP_URL=http://niagahoster.test
    DB_CONNECTION=mysql
    DB_HOST=0.0.0.0
    DB_PORT=3306
    DB_DATABASE=niagahoster
    DB_USERNAME=user
    DB_PASSWORD=password
8. Run `composer install`
10. Run `php artisan key:generate`
11. Run `php artisan migrate`
12. Run `php artisan db:seed` 
13. If you encounter any error during migration or seed, change the .env from `DB_HOST=0.0.0.0` to `DB_HOST=mysql`