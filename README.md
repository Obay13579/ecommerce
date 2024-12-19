Tata cara run locally

1. `composer install`
2. ganti `.env.example` jadi `.env`
3. `php artisan key:generate` 
4. bikin Database di phpMyAdmin
5. konfigurasi database di `.env` sesuai dengan database yang sudah dibuat
6. `php artisan migrate`
7. `php artisan db:seed`
8. `php artisan serve`