<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Poppins:wght@500&display=swap" rel="stylesheet">


</head>
<body>

    <div class="header">
        <div class="navbar">
            <div class="logo">
                <img src="/assets/logo.png" alt=""> 
                <h2>Ebook Aca</h2>
            </div>
            <ul>
                <li><a href="/tambah">Admin</a></li>
                <li><a href="#">Beranda</a></li>
                <li><a href="/home">Activity</a></li>
                <li><a href="#">Profile</a></li>
                @auth
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="logout">Logout</button>
                </form>
                </li>
                    @else
                    <li><a href="/login">Masuk</a></li>
                @endauth
            </ul>
    
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
        </div>

  <div class="container">
    <section class="pinjaman">
        <ul>
            <h2>Admin</h2>
        </ul>
      <ul>
        <li><a  href="/tambah">
          <img src="/assets/icon/tambah.png" alt="">
          <span class="item">Tambah</span>
        </a></li>
        <li><a href="/edit">
          <img src="/assets/icon/edit.png" alt="">
          <span class="item">Edit</span>
        </a></li>
        <li><a href="#">
          <img src="/assets/icon/data.png" alt="">
          <span class="item">Data Pinjaman</span>
        </a></li>

      </ul>
    </section> 
    </div>
    </div>

    <div class="tambah">
      <div class="form">
          <h2>Edit Buku</h2>
          <form action="{{ route('buku.update3', $data3->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <p>Url Gambar</p>
              <input type="file"  name="image" id="image" >
                <br>
              <p>Judul Buku</p>
              <input type="text"  name="judul" id="judul" value="{{ $data3->judul }}">
              <br>
              <p>Tahun Terbit</p>
              <input type="text"  name="tanggal" id="tanggal" value="{{ $data3->tanggal }}">
              <br>
              <p>Deskripsi</p>
              <input type="text"  name="deskripsi" id="deskripsi" class="deskripsi" value="{{ $data3->deskripsi }}" >

              <button id="ajukan">Submit</button>
          </form>
      </div>
  </div>
   


</body>
</html>