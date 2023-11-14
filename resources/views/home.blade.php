<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">



</head> 
<body>
<section class="header">
    <div class="navbar">
        <div class="logo">
            <img src="/assets/logo.png" alt=""> 
            <h2>Ebook Aca</h2>
        </div>
        <ul>
            @can('admin')
            <li><a href="/tambah">Admin</a></li>
            @endcan
            
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

    <div class="jumbotron">
        <div class="judul">
            <h2>Gallery</h2>
            <p>Buku Fiksi</p>
        </div>  
        {{-- Buku Fiksi --}}
        <div class="buku-fiksi">
                <div class="carousel">
                    @foreach ($databuku as $data)
                    <div class="card">
                        <img src="{{ asset('storage/' . $data->image) }}" alt="">
                        <br>
                        <a href="{{ route('buku.show', $data->id) }}" class="btn">Read More</a>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- End Buku FIksi --}}

        {{-- Buku Biografi --}}
        <div class="judul-buku">
            <span>Buku Biografi</span>
        </div>
        <div class="buku-biografi">
            <div class="carousel">
                @foreach ($databuku2 as $data1)
                <div class="card">
                    <img src="{{ asset('storage/' . $data1->image) }}" alt="">
                    <br>
                    <a href="{{ route('buku.show2', $data1->id) }}" class="btn">Read More</a>
                </div>
                @endforeach
            </div>
            </div>
            {{-- End Buku Biografi --}}

        {{-- Buku Pelajaran --}}
        <div class="judul-buku">
            <span>Buku Pelajaran</span>
        </div>
        <div class="buku-pelajaran">
                <div class="carousel">
                    @foreach ($databuku3 as $data2)
                    <div class="card">
                        <img src="{{ asset('storage/' . $data2->image) }}" alt="">
                        <br>
                        <a href="{{ route('buku.show3', $data2->id) }}" class="btn">Read More</a>
                    </div>
                    @endforeach
            </div>
    </div>
    </div>
    {{-- End Buku Pelajaran --}}

    <div class="berita">
            <h1 class="judul">Berita</h1>

            <div class="content">
            <div class="card1">
                <img src="assets/berita1 1.png" alt="Avatar">
                <div class="container1">
                  <p>Ebook Aca Kini Sudah Menjadi Platform Ebook Terbaik </p> 
                </div>
              </div>
            <div class="card1">
                <div class="aca2"><img src="assets/berita2 2.png" alt="Avatar"></div>
                <div class="container1">
                  <p>Ebook Aca Kini Sudah Bisa Di Download DI Playstore </p> 
                </div>
              </div>
            <div class="card1">
                <img src="assets/berita3 3.png" alt="Avatar">
                <div class="container1">
                  <p>Ebook Aca Kini Hadir Banyak Pilihan Buku Biografi, Fiksi dan Pelajaran</p> 
                </div>
              </div>
            </div>
    </div>

    


</section>

    
          

<script>
    const menuToggle = document.querySelector('.menu-toggle input');
    const nav = document.querySelector('.navbar ul');

    menuToggle.addEventListener('click',function(){
         nav.classList.toggle('slide');
    })


</script>
</body>
</html>