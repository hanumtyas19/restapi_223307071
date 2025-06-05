Proyek ini dibuat untuk memahami dan mengimplementasikan konsep RESTful API dan pengelolaan database menggunakan PHP native. API ini berfungsi untuk mengelola data karyawan melalui endpoint CRUD (Create, Read, Update, Delete) dengan pengujian menggunakan POSTMAN.
Struktur folder terdiri atas:
- connection.php – File koneksi ke database MySQL
- api-karyawan.php – File utama REST API yang memuat fungsi-fungsi endpoint
- .htaccess – Konfigurasi URL rewrite agar endpoint dapat diakses secara rapi dan RESTful

 🧩 Fitur API
- GET /api-karyawan – Ambil semua data karyawan
- GET /api-karyawan/{id} – Ambil data karyawan berdasarkan ID
- POST /api-karyawan – Tambah data karyawan
- PUT /api-karyawan/{id} – Ubah data karyawan
- DELETE /api-karyawan/{id} – Hapus data karyawan

🛠 Teknologi yang Digunakan
- PHP Native
- MySQL
- Apache (via XAMPP)
- .htaccess (mod_rewrite)
- POSTMAN untuk uji coba
