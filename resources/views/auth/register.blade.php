<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Daftar</title>
</head>
<body>
    <section class="vh-100" style="margin-top: 4rem">
        <div class="container" style="width: 70vw">
          <div class="card" style="border:none">
            <div class="d-flex">
            <a href="/" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
            <img src="{{ asset('images/logo.png') }}" style="width:67px; height:68px" alt=""></div>
            <p class="h3 fw-bold text-center">Daftar</p>
            <div class="card-body" style="margin-top: 4rem">
              <form action="{{ route('register') }}" method="POST">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control rounded" placeholder="Nama Pengguna" aria-label="username" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3">
                <input type="text" class="form-control rounded" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3">
                <input type="password" class="form-control rounded" placeholder="Kata Sandi" aria-label="password" aria-describedby="basic-addon2">
              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-primary rounded mb-2" style="width: 100%">Daftar</button>
            </form>
              <a href="{{ route('login') }}">Sudah Punya Akun? Login</a>
            </div>
            </div>
          </div>
        </div>
      </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>