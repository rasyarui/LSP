<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<div class="navbar">
        <div class="logo">
        <img src="/assets/Logo.png" alt="">
        <h1>Ebook Aca</h1>
        </div>

        <ul>
            @can('admin')
            <li><a href="/tambah">Admin</a></li>
            @endcan
            <li><a href="/beranda">beranda</a></li>
            <li><a href="/home">activity</a></li>
            <li><a href="/profile">profile</a></li>
            <button class="logout">Logout</button>
            
        </ul>
    </div>


    <div class="jumbotron">
        <div class="bar">
            <h3>Tentang Kami</h3>
            <h3>Struktur Organisasi</h3>
            <h3>Panduan Perpustakaan</h3>
            <h3>Tata Tertib Perpustakaan</h3>
            <h3>FAQ</h3>
        </div>

        <div class="content">
            <h1>Tentang Kami</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
    </div>


    <div class="struktur">
        <h1>Struktur Organisasi</h1>
        <img src="/assets/struktur 1.png" alt="" >
    </div>

    <hr>

    <div class="panduan">
        <h1>Panduan Perpustakaan</h1>
        <h2>A.Baca Buku</h2>
        <h3>Berikut langkah-langkah baca buku digital pada website ebook aca :</h3>
        <p>1. Pertama anda harus masuk ke bagian activity dengan cara mengklik menu activity yang ada di atas.</p>
        <p>2. Jika sudah, kalian pilih buku yang ingin di baca dengan mengklik tombol read yang ada di bawah buku.</p>
    </div>
<br>
<br>
<br>
    <div class="tata">
        <h1>Tata Tertib Perpustakaan</h1>
        <h2>Untuk Siswa Dan Guru :</h2>
        <p>1. Siswa atau guru tidak boleh menggunakan akun admin.</p>
        <p>2. Siswa dan guru hanya boleh melihat informasi semua data ebook yang tersedia pada perpustakaan.</p>
        <p>3. Siswa dapat meminjam buku pada perpustakaan.</p>

        <h2>Untuk Admin : </h2>
        <p>1. Admint dapat mengubah, menghapus dan mengupdate data ebook.</p>
        <p>2. Admint harus login terlebih dahulu sebelum melakukan perubahan data.</p>
        <p>3. Admint dapat melihat semua data pinjaman ebook. </p>
    </div>
<br>
<br>
    <div class="faq">
        <h1>FAQ</h1>
        
        <h2>Apakah Website Ini Bisa Meminjam Buku?</h1>
        <p>Bisa banget loh</p>

        <h2>Apakah Website Ini Bisa Mencari Jodoh?</h2>
        <p>Sayang Sekali Website Ini Hanya Bisa Meminjam Buku Saja Bukan Untuk Mencari Jodoh</p>

        <h2>Apakah Saya Boleh Mencintai Yang Buat Website Ini?</h2>
        <p>Klik Read Lalu Pinjam Buku</p>
    </div>
</body>
</html>