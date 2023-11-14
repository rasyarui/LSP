<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/deskripsi.css') }}">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="navbar">
        <div class="logo">
            <img src="/assets/logo.png" alt=""> 
            <h2>Ebook Aca</h2>
        </div>
        <ul>
            @can('admin')
            <li><a href="/tambah">Admin</a></li>
            @endcan
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
</div>

<div class="card">
    <div class="col1">
        <img src="{{ asset('storage/' . $buku2->image) }}" alt="">
    </div>


    <div class="col2">
        <h2>{{ $buku2->judul }}</h2>    
        <p class="tgl">{{ $buku2->tanggal }}</p>
        <p>{{ $buku2->deskripsi }}</p>

            <a href="{{ route('buku.edit2', $buku2->id) }}">
                @can('admin')
                <button class="button">
                        Edit
                </button>
                @endcan
            </a>
            <br>
            <br>
            <form action="{{ route('buku.delete2', $buku2->id) }}" method="POST">
                @csrf
                @method('DELETE')
                @can('admin')
                <button class="button2" type="submit">
                    Remove
                </button>
                @endcan
            </form>
            @can('user')
            <button class="button2" type="submit">
                Borrow
            </button>
            @endcan

              

    </div>
    </form> 
</div>

</body>
</html>