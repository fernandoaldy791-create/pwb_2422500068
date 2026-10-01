# Perbaikan PWB Aldi (Pertemuan 3: Administrator dan Login)

1. `.htaccess`: `RewriteEngine %{REQUEST_FILENAME}` diganti `RewriteCond` (penyebab error 500).
2. Template dipindah ke `application/views/administrator/templates/` (header, sidebar, footer) sesuai PDF. Sebelumnya ada di `views/templates/`.
3. `index_page` dikembalikan ke `index.php` sesuai PDF (`localhost/pwb_aldi/index.php/admin/login`). Tetap jalan walau `mod_rewrite` mati.
4. Helper `is_admin_logged_in()` mengarah ke route `admin/login` (route `administrator/login` tidak ada, hasilnya 404).
5. Login memakai Bootstrap 4 (AdminLTE 3): pesan error `data-dismiss`, ikon Font Awesome, pesan validasi tidak merusak tata letak, ikon amplop sesuai PDF.
6. Footer: `</body>` ganda dihapus. Path gambar dropdown header diperbaiki memakai `base_url()`. Link menu memakai `site_url()`.
7. Menambahkan `pertemuan-03/administrator.sql` (tabel `administrator` + 1 record: admin / admin).
8. Latihan Logout: route `admin/logout`, method `logout()` dan menu Logout di sidebar.

## Menjalankan di XAMPP
1. Ekstrak ke `C:\xampp\htdocs\pwb_aldi\`, jalankan Apache dan MySQL.
2. phpMyAdmin: pilih database `dbpwb`, impor `pertemuan-03/administrator.sql`.
3. Buka `http://localhost/pwb_aldi/index.php/admin/login` (username `admin`, password `admin`).
