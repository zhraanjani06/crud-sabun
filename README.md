### CRUD Data Sabun - Laravel 12

### Deskripsi
Project ini merupakan aplikasi web sederhana berbasis Laravel 12 yang digunakan untuk mengelola data sabun.
Aplikasi ini menerapkan konsep CRUD (Create, Read, Update, Delete) sehingga pengguna dapat menambah, melihat, mengubah, dan menghapus data sabun yang tersimpan dalam database.

### Fitur Utama
* Menambahkan data sabun
* Menampilkan data sabun dalam bentuk tabel
* Mengedit data sabun
* Menghapus data sabun

### Teknologi yang Digunakan
* Laravel 12
* PHP
* MySQL
* VS Code

### Cara Instalasi dan Menjalankan Project
1. Clone Repository
```blash
git clone https://github.com/zhraanjani06/crud-sabun.git
```
2. Masuk ke Folder Project
```blash
cd crud-sabun
```
3. Install Dependency
```blash
composer install
```
4. Copy File Environment
```blash
cp .env.example .env
```
5. Konfigurasi Database
```blash
Buka file .env, lalu sesuaikan:
DB_DATABASE=sabun_db
DB_USERNAME=root
DB_PASSWORD=
```
6. Generate Key
```blash
php artisan key:generate
```
7. Migrasi Database
```blash
php artisan migrate
```
8. Jalankan Server
```blash
php artisan serve
```
9. Akses Aplikasi
```blash
Buka browser dan akses: http://127.0.0.1:8000/sabun
```

### Tujuan
Project ini dibuat sebagai tugas pembelajaran Laravel dan implementasi CRUD sederhana.

### Author
Nama: Zahra Anjani Putri Dewi
[Nim : 240180037]
