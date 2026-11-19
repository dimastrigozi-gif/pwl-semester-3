(Pembuka dan penutup diucapkan secara lisan/improvisasi sendiri)

## 1. Judul

"ArenaHub: Platform Manajemen Turnamen Esport Berbasis Web"

ArenaHub adalah website yang saya buat untuk membantu peserta dan organizer turnamen esport. Di halaman ini pengguna bisa melihat turnamen, mencari turnamen berdasarkan game, dan nantinya bisa mendaftar atau membuat turnamen sendiri.

[Tampilkan di Proyektor: slide judul dan halaman home ArenaHub]

## 2. Progress Saat Ini

Tampilan yang sudah selesai saat ini adalah UI dark mode dengan navbar, hero section, filter game, dan card turnamen. Warna utama yang dipakai adalah abu-abu gelap dengan aksen cyan. Bagian halaman depan sengaja saya biarkan setengah jadi atau WIP, supaya kelihatan mana bagian yang masih perlu dilanjutkan.

Di bagian "Turnamen Akan Datang" masih ada teks kosong "[ Belum ada turnamen untuk saat ini ]". Tombol "Buat Turnamen" juga masih memunculkan alert() pengembangan, belum membuka form yang benar-benar berfungsi. Jadi progress kali ini lebih fokus ke pondasi dan tampilan dasar.

[Tampilkan di Proyektor: halaman home, arahkan ke bagian Turnamen Akan Datang yang masih kosong]

[Tampilkan di Proyektor: klik tombol "Buat Turnamen" sampai muncul alert() pengembangan]

## 3. Penerapan Modul PWL

Project ini memakai Laravel dengan pola MVC. Halaman publik diatur di `PageController`, sedangkan halaman organizer diatur di `OrganizerController`. Controller bertugas menyiapkan data dan mengembalikan view, jadi logika halaman tidak ditulis langsung di file tampilan.

Routing diatur di `routes/web.php`. Setiap halaman punya route sendiri, misalnya home, cari turnamen, detail turnamen, jadwal, tentang, dan halaman organizer. Untuk tampilan, saya memakai Blade Templating. Layout utama ada di `resources/views/layouts/app.blade.php`, lalu halaman lain memakai `@extends` dan `@section` supaya navbar dan footer tidak ditulis berulang.

Selain itu, project ini sudah memiliki database migration. Migration dipakai untuk membuat struktur tabel, misalnya tabel `tournaments` dan tabel `users`. Walaupun data turnamen di halaman depan masih dummy, fondasi database-nya sudah disiapkan.

[Tampilkan di Proyektor: file `app/Http/Controllers/PageController.php`]

[Tampilkan di Proyektor: file `routes/web.php` dan `resources/views/layouts/app.blade.php`]

[Tampilkan di Proyektor: folder `database/migrations` dan file migration tabel tournaments]

## 4. Tahapan Pembagian Pengerjaan Sebelumnya

Pengerjaan project ini saya bagi menjadi tiga tahap. Tahap pertama adalah riset dan desain UI. Saya melihat referensi tampilan, lalu menentukan warna, tata letak navbar, hero, filter game, dan card turnamen. Tahap kedua adalah inisialisasi Laravel dan membersihkan bagian React/JSX. Tampilan diubah supaya memakai Blade, bukan komponen React. Tahap ketiga adalah pembangunan pondasi, yaitu membuat controller, routes, dan views untuk halaman-halaman utama.

Pembagian ini membantu saya karena pekerjaan jadi lebih kecil dan mudah dicek satu per satu. Setelah pondasi selesai, fitur berikutnya tinggal disambungkan ke database dan auth.

[Tampilkan di Proyektor: halaman home sebagai hasil tahap riset dan desain UI]

[Tampilkan di Proyektor: struktur folder `resources/views` untuk menunjukkan bahwa tampilan sudah memakai Blade]

[Tampilkan di Proyektor: file `PageController.php`, `routes/web.php`, dan halaman `pages/home.blade.php`]

## 5. Progress Fitur Selanjutnya

Fitur selanjutnya adalah integrasi database penuh. Data turnamen yang sekarang masih dummy akan diganti dengan data asli dari tabel `tournaments`, jadi halaman depan dan halaman cari turnamen bisa menampilkan data yang benar-benar tersimpan.

Setelah itu saya akan membuat sistem auth memakai Laravel Breeze. Login dan register yang sekarang masih memakai session sederhana akan diganti dengan autentikasi Laravel. Setelah auth jalan, saya lanjut membuat CRUD nyata untuk fitur "Buat Turnamen", yaitu create, read, update, dan delete. Terakhir, saya akan menambahkan validasi form di backend supaya data yang masuk tidak asal-asalan.

[Tampilkan di Proyektor: roadmap pengembangan dan struktur tabel database]

[Tampilkan di Proyektor: form "Buat Turnamen" yang nantinya akan disambungkan ke proses CRUD]
