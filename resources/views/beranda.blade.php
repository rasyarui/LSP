<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/beranda.css">
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
       <div class="content">
       <img src="/assets/Logo.png" alt="">
        <h1>Ebook Aca</h1>
        <h3>Membaca Semakin Mudah</h3>
        <p>Baca buku, berbagi koleksi bacaan dan bersosialisasi secara bersamaan. Di mana pun, kapan pun dengan nyaman bersama setiap orang.</p>
       </div>
    </div>
    
    <div class="about">
        <div class="left">
        <h1>Apa Itu Ebook</h1>
        <p>e-book adalah buku yang berbentuk elektronik atau digital yang berisi informasi atau panduan, tutorial, novel, layaknya buku pada umumnya. eBook (electronic book) ini hanya bisa dibuka dan dibaca dengan menggunakan perangkat gadget seperti komputer, tablet, dan handphone pintar.</p>
        </div>

        <div class="right">
            <img src="/assets/apa itu ebook 1.png" alt="">
        </div>
    </div>

    <div class="about">

    <div class="right">
            <img src="/assets/keuntungan 1.png" alt="">
        </div>

        <div class="left">
        <h1>Keuntungan Membaca Ebook</h1>
        <p>Buku digital mudah diakses dan dibaca serta dibuka di berbagai jenis perangkat dan dimana saja. Biasanya tersaji dalam format PDF, sehingga harus dipastikan memiliki aplikasi pembaca PDF (PDF reader) yang mana bisa diinstal di alat elektronik yang Anda miliki.</p>
        </div>

        
    </div>

    <div class="bottom">
        <h1>Ayo Baca Ebook </h1>
        <p>Mari jelajahi dunia kata-kata yang tak terbatas! Ajaklah dirimu untuk melarikan diri ke dalam petualangan menakjubkan yang hanya dapat ditemukan dalam halaman-halaman sebuah ebook</p>
        <img src="/assets/ayoo 1.png" alt="">
    </div>
</body>
</html>