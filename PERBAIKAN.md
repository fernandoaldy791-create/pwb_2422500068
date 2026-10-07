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

---
# Perbaikan Pertemuan 4 (Tampil + Lanjutan CRUD Kategori)

1. View kategori salah folder (`views/kategori/` dan `views/administrator/kategori.php`) -> dipindah ke `views/administrator/kategori/{index,tambah_kategori,ubah_kategori}.php` sesuai `$this->load->view('administrator/kategori/index')` (sebelumnya error "Unable to load the requested file").
2. Sidebar: link Kategori `administrator/kategori` (404) -> `site_url('admin/kategori')`; Produk belum ada halamannya -> `#`; brand link `index3.html` -> `admin`.
3. Alert flashdata memakai Bootstrap 5 (`btn-close`, `data-bs-dismiss`, `<svg><use>`) padahal AdminLTE 3 = Bootstrap 4 -> diganti `close`, `data-dismiss`, ikon Font Awesome. Badge `bg-success/bg-danger` -> `badge-success/badge-danger`.
4. Semua link memakai `site_url()` agar tetap jalan walau mod_rewrite mati.
5. Pesan setelah Ubah "Berhasil menambahkan" -> "Berhasil mengubah".
6. Model `ubah()`: menyimpan data tanpa perubahan tidak lagi dianggap gagal (affected_rows = 0).
7. Form: pesan validasi (`form_error`), nilai input dipertahankan, helper `form` di-autoload, `<p>` yang membungkus `<form>/<div>` diganti `<div>`, output di-escape (`html_escape`), konfirmasi sebelum Hapus.
8. Menambahkan `pertemuan-04/kategori.sql` (tabel `kategori` + 2 record).
