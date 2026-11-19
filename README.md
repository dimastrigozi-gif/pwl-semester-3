# ArenaHub

Website turnamen esport sederhana untuk tugas mata kuliah Pemrograman Web Lanjut. Dibuat dengan Laravel, PHP, dan Blade. Tampilan memakai Tailwind CSS lewat CDN, jadi tidak perlu install npm.

## Teknologi

- Laravel 13 + PHP 8.3
- Blade
- Tailwind CSS CDN
- MySQL

## Cara Menjalankan

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Buka `http://127.0.0.1:8000`.

## Halaman

- `/` - home
- `/cari-turnamen` - cari turnamen
- `/turnamen/{id}` - detail turnamen
- `/turnamen/{id}/daftar` - pendaftaran
- `/turnamen/{id}/bayar` - pembayaran
- `/jadwal` - jadwal
- `/tentang` - tentang
- `/signin` dan `/signup` - auth sederhana
- `/organizer/dashboard` - dashboard organizer

## Struktur

- `app/Http/Controllers/PageController.php` - halaman publik
- `app/Http/Controllers/OrganizerController.php` - halaman organizer
- `app/Models/Tournament.php` - model turnamen
- `resources/views/layouts/app.blade.php` - layout utama
- `resources/views/pages` - halaman Blade
- `routes/web.php` - routing halaman

## Catatan

Project ini masih setengah jadi. Login memakai session sederhana, data turnamen di halaman publik masih dummy, dan pendaftaran/pembayaran belum tersambung ke database.
