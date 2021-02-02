# Niagahoster Landing Page

Niagahoster fullstack developer test - step 1.

## Installation
1. Clone this repository
2. `cd` to project-niagahoster directory (or whatever the name of the clone directory that you use)
3. Run `mkdir mysql`
4. `cd` to src directory
5. Run `cp .env.example .env`
6. Set the .env with the following:
    APP_URL=http://niagahoster.test
    DB_CONNECTION=mysql
    DB_HOST=0.0.0.0
    DB_PORT=3306
    DB_DATABASE=niagahoster
    DB_USERNAME=user
    DB_PASSWORD=password
7. Run `composer install`
8. Run `php artisan key:generate`
9. Run `docker-compose build`
10. Run `docker-compose up`
11. Run `php artisan migrate`
12. Run `php artisan db:seed` 
13. Set the .env with the following: `DB_HOST=mysql`
14. Website can be accessed at http://niagahoster.test
    - If you can't open it, add `127.0.0.1  niagahoster.test` in your host file