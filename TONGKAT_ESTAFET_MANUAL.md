# Tongkat Estafet Manual

Pondasi project ArenaHub sudah selesai di bagian awalnya. Struktur MVC sudah dipakai, routing sudah rapi di `routes/web.php`, dan halaman-halamannya sudah memakai Blade. Controller untuk halaman publik ada di `PageController`, sedangkan halaman organizer ada di `OrganizerController`. Jadi untuk lanjut ngoding, tidak perlu mulai dari nol lagi.

Saat ini data turnamen di halaman depan masih dummy, tampilan sengaja dibuat belum lengkap, dan login masih memakai session sederhana. Bagian itu memang disiapkan supaya nanti bisa dilanjutkan sedikit demi sedikit sambil belajar.

## Roadmap Manual

### Langkah 1 - Menyambungkan Database dan Menampilkan Data Turnamen

1. Buat database baru di MariaDB, misalnya `arenahub_db`.
2. Sesuaikan bagian `DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di file `.env`.
3. Jalankan `php artisan migrate` untuk membuat tabel, lalu isi data awal dengan `php artisan db:seed`.
4. Buka `PageController.php`, bagian method `home()`. Ganti data dummy `$turnamen = []` dengan query sederhana, misalnya `Tournament::where('status', 'ongoing')->get()`.
5. Kirim data hasil query ke view `pages.home`, lalu tampilkan datanya memakai `@foreach` di Blade.
6. Setelah data asli muncul, rapikan bagian tanggal, harga, dan jumlah peserta supaya formatnya konsisten.

Yang perlu diperhatikan: jangan langsung menghapus data dummy sebelum data dari database benar-benar tampil. Lebih aman dibandingkan dulu hasilnya, baru hapus data cadangan.

### Langkah 2 - Membuat Sistem Login dan Register Asli

1. Model `User` sudah tersedia dan sudah extends `Authenticatable`, jadi bisa langsung dipakai.
2. Tambahkan proses register dengan validasi nama, username, email, dan password.
3. Simpan password memakai `Hash::make()` atau fitur hashing bawaan Laravel. Jangan simpan password dalam bentuk teks biasa.
4. Untuk login, gunakan `Auth::attempt()` dengan email dan password.
5. Ganti pemakaian `session('user')` di controller dan Blade dengan `auth()->user()`.
6. Gunakan `@auth` dan `@guest` di layout supaya menu Sign In, Profil, dan Logout muncul sesuai kondisi.
7. Kalau memakai Laravel Breeze, tetap pelajari alur login dan register-nya. Jangan hanya copy-paste tanpa tahu prosesnya.

Setelah login asli berjalan, halaman organizer sebaiknya dilindungi middleware `auth`, supaya tidak bisa dibuka tanpa login.

### Langkah 3 - Membuat CRUD untuk Fitur "Buat Turnamen"

1. Create: form di `resources/views/pages/organizer/buat-turnamen.blade.php` disambungkan ke method `simpanTurnamen()`.
2. Read: tampilkan daftar turnamen organizer memakai `Tournament::latest()->get()` atau query lain yang sesuai.
3. Update: tambahkan halaman edit, route `PUT` atau `PATCH`, dan method `update()` di controller.
4. Delete: tambahkan tombol hapus, route `DELETE`, dan method `destroy()`.
5. Pastikan field yang diisi lewat form sudah ada di `$fillable` pada model `Tournament`.
6. Kalau nanti turnamen dimiliki per organizer, tambahkan kolom `user_id` atau `organizer_id` supaya data tidak tercampur.

Untuk tahap belajar, CRUD satu tabel dulu saja. Jangan langsung membuat fitur peserta, pembayaran, dan jadwal dalam satu waktu.

### Langkah 4 - Menambahkan Validasi Form di Backend

1. Gunakan `$request->validate()` di controller sebelum data disimpan.
2. Contoh aturan dasar: `required`, `string`, `integer`, `min`, `in`, dan `date`.
3. Tampilkan pesan error di Blade memakai `$errors->first()`.
4. Gunakan `old()` pada input supaya isi form tidak hilang saat validasi gagal.
5. Jangan hanya mengandalkan validasi HTML. Validasi di backend tetap wajib.
6. Untuk form edit dan hapus, jangan lupa `@csrf` dan `@method`.

## Aturan Main Ngoding Manual

- Gunakan if-else dan perulangan sederhana dulu. Kalau logikanya sudah jalan, baru dipikirkan cara yang lebih rapi.
- Jangan pakai library aneh atau package yang belum dipahami. Fokus dulu ke PHP, controller, model, dan Blade.
- Jangan mengembalikan project ke React atau menambah npm. Tampilan tetap memakai Blade dan Tailwind CDN.
- Satu langkah diselesaikan dulu, baru lanjut ke langkah berikutnya. Jangan mengerjakan banyak fitur sekaligus.
- Setiap selesai mengubah route atau controller, buka halamannya di browser dan cek error.
- Biasakan membaca pesan error Laravel dari baris paling atas. Biasanya di situ letak masalahnya.
- Simpan perubahan dengan commit kecil-kecil supaya kalau ada kesalahan mudah dikembalikan.
- Tulis komentar seperlunya saja, terutama untuk bagian logika yang memang perlu dijelaskan.
