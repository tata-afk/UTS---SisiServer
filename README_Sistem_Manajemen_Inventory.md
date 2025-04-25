
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

- **Laravel 10**
- **MySQL**
- **Vite + Bootstrap/Blade**
- **Docker + Docker Compose**

## 🚀 Cara Menjalankan

### 🔧 Jalankan via Docker (disarankan)

1. **Clone repository**
   ```bash
   git clone https://github.com/username/sistem-manajemen-inventory.git
   cd sistem-manajemen-inventory
   ```

2. **Salin file konfigurasi lingkungan**
   ```bash
   cp .env.example .env
   ```

3. **Bangun dan jalankan container**
   ```bash
   docker-compose up -d --build
   ```

4. **Akses container dan jalankan migrasi**
   ```bash
   docker exec -it app php artisan migrate --seed
   ```

5. **Buka di browser**
   ```
   http://localhost:8000
   ```

### 💻 Alternatif: Jalankan secara lokal (tanpa Docker)

```bash
composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# Setup database di .env lalu jalankan
php artisan migrate --seed

php artisan serve
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
