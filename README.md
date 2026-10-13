# Tugas Rutin 9 — Setup Laravel

Proyek ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web: Setup Laravel, Konfigurasi Database, Route Custom, Model, Controller, dan Blade View.

## 🛠️ Langkah Instalasi & Jalankan Proyek

1. **Clone Repository**
   ```bash
   git clone [https://github.com/username/TugasWeb-P9-LaravelSetup.git](https://github.com/username/TugasWeb-P9-LaravelSetup.git)
   cd TugasWeb-P9-LaravelSetup
   ```

2. **Install Dependency Composer**
   ```bash
   composer install
   ```

3. **Konfigurasi File Environment (.env)**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Atur koneksi database pada file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_tugas_p9
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key & Migration**
   ```bash
   php artisan key:generate
   php artisan migrate
   ```

5. **Jalankan Development Server**
   ```bash
   php artisan serve
   ```
   Buka URL `http://127.0.0.1:8000` di browser.

---

## 📂 Penjelasan Struktur Folder Utama Laravel

- **`app/`**: Berisi kode utama aplikasi.
  - `Http/Controllers/`: Tempat menyimpan Controller (misal: `PageController.php`) untuk menangani logika aplikasi.
  - `Models/`: Tempat menyimpan Model Eloquent (misal: `Profile.php`) yang merepresentasikan tabel database.
- **`bootstrap/`**: Berisi file booting kerangka kerja dan konfigurasi auto-loader.
- **`config/`**: Menyimpan seluruh konfigurasi aplikasi (database, mail, app settings, dll).
- **`database/`**:
  - `migrations/`: Berisi skema pembuatan tabel database berbasis versi.
  - `factories/` & `seeders/`: Untuk membuat data dummy/awal.
- **`public/`**: Folder root web berisi `index.php` sebagai entry point serta aset publik (gambar, CSS, JS).
- **`resources/`**:
  - `views/`: Tempat menyimpan file template UI menggunakan Blade Engine (`.blade.php`).
- **`routes/`**:
  - `web.php`: Berisi pendaftaran endpoint/URL yang diakses melalui browser.
- **`storage/`**: Tempat menyimpan file log, cache, dan unggahan berkas (uploads).
- **`vendor/`**: Berisi paket/dependency Pihak Ke-3 yang diinstall melalui Composer.

## 📸 Hasil Screenshot (SS)

Berikut adalah tampilan dari hasil project yang telah dijalankan:

## 1. Tampilan Default Laravel
![Tampilan Default](./screenshoot%20welcome%20page/welcomepage-laravel.png)
*Keterangan: Tampilan default welcome page dari Laravel*

## 2. Tampilan Halaman Web Custom
![Tampilan Buatan Sendiri](./screenshoot%20welcome%20page/welcomepage-buatan-sendiri.png)
*Keterangan: Tampilan welcome page buatan sendiri*