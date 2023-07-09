
Create a throwable composer
docker run --rm -v $(pwd):/app composer install
docker-compose exec php php artisan passport:install

docker-compose exec php composer require ckfinder/ckfinder-laravel-package --ignore-platform-req=ext-exif
docker-compose exec php php artisan ckfinder:download
docker-compose exec php php artisan vendor:publish --tag=ckfinder-assets --tag=ckfinder-config
docker-compose exec php php artisan vendor:publish --tag=ckfinder-views
docker-compose exec php php artisan vendor:publish --tag=ckfinder

docker-compose exec php mkdir -m 777 public/userfiles

docker-compose exec php

/* MAKER EMAIL SUBCRIBER */
docker-compose exec php  php artisan make:model Subscriber -m
docker-compose exec php php artisan  migrate --path=/database/migrations/2022_07_04_094821_create_subscribers_table.php
docker-compose exec php php artisan make:mail Subscribe --markdown=emails.subscribers
docker-compose exec php php artisan make:controller Admin/SubscriberController
docker-compose exec php php artisan make:mail Subscribe

docker-compose exec php php artisan vendor:publish --tag=laravel-mail


config .env
cp .env.example .env

bring up laravel and all services
docker-compose up

APP key
docker-compose exec php php artisan key:generate


Set permission
sudo chmod -R 777 bootstrap/cache/

sudo chmod -R 777 storage/

Chuyen owner cho user root neu khong chmod duoc:
docker-compose exec php bash
cd storage/
cat /etc/passwd | grep apac
cat /etc/passwd | grep php 
cat /etc/passwd   
chown www-data:www-data -R .

Check the site
localhost:8080

To create new module :
Make table db:
docker-compose exec php php artisan  migrate --path=/database/migrations/[filename]_table.php
Make Model:
docker-compose exec php php artisan make:model Models/Project        
Make Controller:
docker-compose exec php php artisan make:controller Admin/Project --resource

docker-compose exec php php artisan make:migration create_partner_table.php
docker-compose exec php php artisan  migrate --path=/database/migrations/2022_06_11_155550_create_partner_table.php

docker-compose exec php php artisan  migrate --path=/database/migrations/2022_06_11_155550_create_testimonial_table.php

docker-compose exec php php artisan  migrate --path=/database/migrations/2022_06_11_155550_create_slider_table.php
docker-compose exec php php artisan make:model Models/Slider
docker-compose exec php php artisan make:controller Admin/Slider --resource

docker-compose exec php php artisan  migrate --path=/database/migrations/2022_07_04_094821_create_subscribers_table.php
docker-compose exec php php artisan vendor:publish --tag=laravel-mail
docker-compose exec php php artisan make:mail config