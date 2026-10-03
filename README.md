# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 - Pemrograman Web (3KOM40115)
Muhammad Hafizh Maulana - Ilmu Komputer, Universitas Negeri Medan - Kelas PSIK 25D

## Deskripsi
Project Laravel sederhana berisi halaman Home, About, Contact, dan Testimoni
dengan tampilan Tailwind CSS (CDN), serta route parameter `/hello/{nama}`.

## Persyaratan
- PHP 8.2 atau lebih baru
- Composer
- MySQL (XAMPP/Laragon)

## Langkah Install
1. Clone repository:
```bash
   git clone https://github.com/muhammadhafizh0/TugasWeb-P9-LaravelSetup.git
   cd TugasWeb-P9-LaravelSetup
```
2. Install dependency:
```bash
   composer install
```
3. Salin file environment:
```bash
   copy .env.example .env
```
4. Generate application key:
```bash
   php artisan key:generate
```
5. Buat database `tugasweb_p9` di phpMyAdmin, lalu atur `.env`:
```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugasweb_p9
   DB_USERNAME=root
   DB_PASSWORD=
```
6. Jalankan migrasi:
```bash
   php artisan migrate
```
7. Jalankan server:
```bash
   php artisan serve
```
8. Buka `http://127.0.0.1:8000`

## Daftar Route
| URL | Keterangan |
|-----|------------|
| `/` | Halaman Home |
| `/about` | Halaman About |
| `/contact` | Halaman Contact |
| `/testimoni` | Halaman Testimoni |
| `/hello/{nama}` | Sapaan dinamis berdasarkan parameter |

## Struktur Folder
| Folder/File | Fungsi |
|-------------|--------|
| `app/Models/` | Model (M pada MVC), berinteraksi dengan database |
| `app/Http/Controllers/` | Controller (C pada MVC), memproses request dan memilih view |
| `resources/views/` | View Blade (V pada MVC), tampilan HTML |
| `routes/web.php` | Definisi route aplikasi web |
| `database/migrations/` | Skema tabel database (version control database) |
| `config/` | File konfigurasi aplikasi |
| `public/` | Entry point (`index.php`) dan aset publik |
| `storage/` | Log, cache, dan file upload |
| `bootstrap/` | File untuk menjalankan (boot) framework |
| `tests/` | File pengujian |
| `.env` | Konfigurasi lokal (database, APP_KEY), tidak di-commit |
| `.env.example` | Contoh template file `.env` |
| `composer.json` | Daftar dependency PHP |
| `vendor/` | Library hasil `composer install`, tidak di-commit |
