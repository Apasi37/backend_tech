backend:
.env
composer install
php artisan key:gen
php artisan jwt:secret

frontend:
npm install
