# Where Are U API

## Install

1. git clone https://github.com/softwareofsweden/where-are-u-api.git
2. cd where-are-u-api
3. composer install
4. touch storage/wau.db
5. cp .env.example .env
6. Modify .env<br>
DB_CONNECTION=sqlite<br>
DB_DATABASE= [YOUR FULL PATH HERE]/where-are-u-api/storage/wau.db
7. php artisan migrate
8. php -S localhost:8000 -t public

API is now available at:
http://localhost:8000/api/activities
