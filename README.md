# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 — Pemrograman Web (3KOM40115), UNIMED, PSIK 25D.

## Langkah Instalasi

1. Buka folder `www` (Laragon) atau `htdocs` (XAMPP), lalu jalankan:
   ```bash
   composer create-project --prefer-dist laravel/laravel:^11.x TugasWeb-P9-LaravelSetup
   ```
2. Masuk ke folder project dan buka dengan VSCode:
   ```bash
   cd TugasWeb-P9-LaravelSetup
   code .
   ```
3. Buat database baru di phpMyAdmin, misal `tugasweb_p9`.
4. Konfigurasi file `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugasweb_p9
   DB_USERNAME=root
   DB_PASSWORD=
   ```
5. Copy file-file dari folder ini (`routes/`, `app/`, `database/migrations/`, `resources/views/`) ke project Laravel yang baru dibuat, timpa file bawaan yang namanya sama.
6. Jalankan migrasi:
   ```bash
   php artisan migrate
   ```
7. Jalankan server:
   ```bash
   php artisan serve
   ```
8. Buka `http://127.0.0.1:8000` di browser, lalu **screenshot halaman welcome/home** untuk dilampirkan sebagai bukti tugas.

## Struktur Folder Penting

- `routes/web.php` — berisi 3 route custom (`/`, `/about`, `/contact`) plus bonus `/hello/{nama}`.
- `app/Http/Controllers/HomeController.php` — controller dibuat dengan `php artisan make:controller HomeController`, menangani ketiga route dan mengirim data dinamis (array & data dari model) ke view.
- `app/Models/Testimonial.php` & `database/migrations/..._create_testimonials_table.php` — model + migration dibuat dengan `php artisan make:model Testimonial -m`, dipakai untuk data dinamis di halaman `/about`.
- `resources/views/*.blade.php` — Blade view untuk masing-masing route, menampilkan data dinamis dari controller.

## Requirement yang Dipenuhi

1. ✅ Install Composer & buat project
2. ✅ Konfigurasi `.env` untuk MySQL (buat database di phpMyAdmin secara manual)
3. ✅ `artisan serve` berjalan (screenshot manual oleh mahasiswa)
4. ✅ 3 route custom (`/`, `/about`, `/contact`) mengembalikan Blade view
5. ✅ View menampilkan data dinamis dari array (`home`, `contact`) dan dari model (`about`)
6. ✅ `make:controller` (HomeController) & `make:model -m` (Testimonial) masing-masing 1x
7. ✅ README ini menjelaskan langkah install dan struktur folder
8. Nama repo: `TugasWeb-P9-LaravelSetup`

## Bonus

- Styling menggunakan Tailwind CDN (`<script src="https://cdn.tailwindcss.com">`) di semua view.
- Route parameter bonus: `/hello/{nama}` — contoh akses: `http://127.0.0.1:8000/hello/Hafizh`
