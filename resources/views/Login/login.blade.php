<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto+Slab:wght@500&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">


    <title>Login</title>

</head>

<body>
    
    <div class="title">
        <img src="assets/logo.png" alt="">
        <h2>Ebook Aca</h2>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <section class="form">
        <div class="login">
            <form action="/login" method="POST">
                {{ csrf_field() }}
                <div class="container">
                    <h1>Masuk</h1>
                    <p>Selamat datang. Silahkan masuk menggunakan akun Ebook anda</p>
                    <label for="name"><b>Nama</b></label>
                    <input type="text" name="name" id="name" @error('telepon') is-invalid @enderror required>
                    <label for="password"><b>Sandi</b></label>
                    <input type="password" name="password" id="password" @error('password') is-invalid @enderror
                        required>
                    <button type="submit" class="loginbtn">Masuk</button>
                </div>
            </form>
        </div>


        <div class="register">
            <form action="/register" method="POST">
                @csrf
                <div class="container-regis">
                    <h1>Daftar</h1>
                    <p>Bergabung sebagai siswa</p>
                    @error('name')
                        {{ $message }}
                    @enderror
                    <label for="name"><b>Nama</b></label>
                    <input type="text" name="name" id="name">
                    <label for="password"><b>Sandi</b></label>
                    <input type="password" name="password" id="password" required>
                    <br>
                    <button type="submit" class="loginbtn">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
