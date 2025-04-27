
# 📦 Sistem Manajemen Inventory

Proyek ini adalah aplikasi manajemen inventory berbasis Laravel yang memungkinkan pengguna untuk mencatat, mengelola, dan memantau stok barang. Dibuat sebagai bagian dari tugas UTS mata kuliah Pemrograman Sistem Server.

## ✨ Fitur

- ✅ **Create + Read Data Item**
- ✅ **Create + Read Data Kategori**
- ✅ **Create + Read Data Supplier**
- 📊 **Ringkasan Stok**
  - Total stok barang
  - Total nilai stok (`harga × jumlah`)
  - Rata-rata harga barang
- 🚨 **Barang Hampir Habis**
  - Menampilkan item dengan stok < 5 unit

## ⚙️ Teknologi yang Digunakan

- **Laravel 12**
- **Laravel Sail**
- **MariaDB**


## 🚀 Cara Menjalankan

### 🔧 Jalankan via Laravel Sail (disarankan)

1. **Clone repository**
   ```bash
   git clone https://github.com/tata-afk/UTS---SisiServer.git
   ```

2. **Salin file konfigurasi lingkungan dan setup lingkungan development**
   ```bash
   cp .env.example .env # lalu sesuaikan .env 
   docker run --rm --interactive --tty -v $(pwd):/app composer install
   ./vendor/bin/sail up -d
   ./vendor/bin/sail artisan key:generate
   ./vendor/bin/sail artisan migrate --seed
   ```

3. **Buka di browser**
   ```
   http://localhost:8900
   ```

## 🧩 Struktur Proyek

- `app/Models` – Model untuk Item, Category, Supplier
- `app/Http/Controllers` – Logic CRUD
- `resources/views` – Blade views
- `routes/web.php` – Routing aplikasi
- `docker-compose.yml` – Konfigurasi Docker

## 🧮 Alur Ringkasan Perhitungan

- **Total Stok:** Penjumlahan seluruh `stok` item.
- **Total Nilai Stok:** Penjumlahan `harga × stok` semua item.
- **Rata-Rata Harga:** Total harga seluruh item dibagi jumlah item.
- **Barang Hampir Habis:** Filter item dengan `stok < 5`.

## 👨‍💻 Kontributor

- Octaviana Sholikhah – A11.2022.14640
