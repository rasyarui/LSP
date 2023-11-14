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
                <li><a href="/beranda">Beranda</a></li>
                <li><a href="/home">Activity</a></li>
                <li><a href="/profile">Profile</a></li>
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
        <li><a href="/home">
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
          <h2>Tambah Buku Fiksi</h2>
          <form action="{{ route('buku.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <p>Url Gambar</p>
              <input type="file"  name="image" id="image">
              <br>
              @error('image')
                    <small class="error"> {{ $message }}</small>
              @enderror
              <p>Judul Buku</p>
              <input type="text"  name="judul" id="judul">
              <br>
              @error('judul')
              <small class="error"> {{ $message }}</small>
              @enderror
              <p>Tahun Terbit</p>
              <input type="text"  name="tanggal" id="tanggal">
              <br>
              @error('tanggal')
              <small class="error"> {{ $message }}</small>
              @enderror
              <p>Deskripsi</p>
              <input type="text"  name="deskripsi" id="deskripsi" class="deskripsi">
              @error('deskripsi')
              <small class="error"> {{ $message }}</small>
              @enderror
              <button type="submit">Submit</button>
          </form>
      </div>


      <div class="form2">
        <h2>Tambah Buku Biografi</h2>
        <form action="{{ route('buku.create2') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <p>Url Gambar</p>
            <input type="file"  name="image" id="image">
            <br>
            @error('image')
                  <small class="error"> {{ $message }}</small>
            @enderror
            <p>Judul Buku</p>
            <input type="text"  name="judul" id="judul">
            <br>
            @error('judul')
            <small class="error"> {{ $message }}</small>
            @enderror
            <p>Tahun Terbit</p>
            <input type="text"  name="tanggal" id="tanggal">
            <br>
            @error('tanggal')
            <small class="error"> {{ $message }}</small>
            @enderror
            <p>Deskripsi</p>
            <input type="text"  name="deskripsi" id="deskripsi" class="deskripsi">
            @error('deskripsi')
            <small class="error"> {{ $message }}</small>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
    <br>
    <br>
      <div class="form3">
        <h2>Tambah Buku Pelajaran</h2>
        <form action="{{ route('buku.create3') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <p>Url Gambar</p>
            <input type="file"  name="image" id="image">
            <br>
            @error('image')
                  <small class="error"> {{ $message }}</small>
            @enderror
            <p>Judul Buku</p>
            <input type="text"  name="judul" id="judul">
            <br>
            @error('judul')
            <small class="error"> {{ $message }}</small>
            @enderror
            <p>Tahun Terbit</p>
            <input type="text"  name="tanggal" id="tanggal">
            <br>
            @error('tanggal')
            <small class="error"> {{ $message }}</small>
            @enderror
            <p>Deskripsi</p>
            <input type="text"  name="deskripsi" id="deskripsi" class="deskripsi">
            @error('deskripsi')
            <small class="error"> {{ $message }}</small>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
  </div>

</body>
</html>