php artisan make:model Customer --all
php artisan make:model Invoice --all

-   Customer hasMany Invoices 1-to-many relationship

php artisan migrate:fresh --seed

-   seed bd

php artisan make:resource V1/CustomerResource

-   manipulate single customer response

php artisan make:resource V1/CustomerCollection

-   manipulate customer collection response
