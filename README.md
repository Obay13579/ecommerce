Tata cara run locally

1. `composer install`
2. ganti `.env.example` jadi `.env`
3. bikin Database di phpMyAdmin
4. konfigurasi database di `.env` sesuai dengan database yang sudah dibuat
5. `php artisan migrate`
6. `php artisan db:seed`
7. `php artisan serve`