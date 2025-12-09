🐟 E Fish Marketplace

E Fish adalah aplikasi marketplace pemesanan ikan segar. Sistem menghubungkan pembeli dengan penyedia ikan. Aplikasi ini dibangun menggunakan Laravel framework dan dilengkapi dashboard admin untuk memantau transaksi dan mengelola produk.

✨ Fitur Utama
👥 Multi User Role

Pembeli. Cari produk ikan. Lihat detail. Pesan. Pantau status pesanan

Admin. Kelola produk. Kelola pesanan. Analisis riwayat transaksi dan data penjualan

🛍️ Fitur Pembeli

Registrasi dan login

Jelajahi katalog produk

Tambah pesanan

Lihat total dan status pesanan

Riwayat transaksi

🧑‍💼 Fitur Admin

Kelola produk. Tambah. Edit. Hapus

Kelola dan ubah status pesanan

Dashboard insight penjualan

Lihat dan filter riwayat pesanan selesai atau dibatalkan

🚀 Teknologi

Laravel 10

PHP 8.2

MySQL

TailwindCSS

Blade Template

⚙️ Instalasi

Clone repository

git clone [url-repository]
cd e-fish


Install dependencies

composer install


Copy environment dan generate key

cp .env.example .env
php artisan key:generate


Konfigurasi database di file .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=efish
DB_USERNAME=root
DB_PASSWORD=


Migrasi database

php artisan migrate


Jalankan aplikasi

php artisan serve


Aplikasi berjalan pada http://localhost:8000

📝 ERD Database
erDiagram
    Users ||--o{ Orders : has
    Orders ||--o{ OrderItems : contains
    Products ||--o{ OrderItems : referenced

    Users {
        int id
        string name
        string email
        string password
        string role
    }

    Products {
        int id
        string nama
        int stok
        int harga
        text deskripsi
    }

    Orders {
        int id
        int user_id
        int total
        string status
        datetime created_at
    }

    OrderItems {
        int id
        int order_id
        int product_id
        int qty
        int subtotal
    }

📄 LRS Logical Record Structure
Tabel Users
Field	Type	Description
id	INT PK	Id user
name	VARCHAR	Nama user
email	VARCHAR UNIQUE	Email untuk login
password	VARCHAR	Password terenkripsi
role	ENUM(admin, user)	Hak akses
Tabel Products
Field	Type	Description
id	INT PK	
nama	VARCHAR	
stok	INT	
harga	INT	
deskripsi	TEXT	
Tabel Orders
Field	Type	Description
id	INT PK	
user_id	INT FK users.id	
total	INT	
status	ENUM(pending, diproses, selesai, dibatalkan)	
created_at	TIMESTAMP	
Tabel OrderItems
Field	Type	Description
id	INT PK	
order_id	INT FK orders.id	
product_id	INT FK products.id	
qty	INT	
subtotal	INT	
📷 Modul Aplikasi
Halaman Publik

Landing page menampilkan daftar produk

Area Pembeli

Dashboard pesanan

Buat pesanan dan lihat riwayat

Area Admin

Dashboard admin insight penjualan

Kelola produk dan stok

Kelola status pesanan

👥 Tim Pengembang
Developer

Fullstack. Azwul

Pembimbing

Dosen Pembimbing. Bapak Haerul Fatah M.Kom

Program Studi. Sistem Informasi

Universitas Bina Sarana Informatika

📄 Lisensi

Hak Cipta © 2025 E Fish Marketplace
Lisensi MIT