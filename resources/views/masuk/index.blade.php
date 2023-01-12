<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
  <body>

    <!-- isi -->
    <section class="text-center mb-5">
        <div class="container">
            <img src="img/logo.PNG" width="200" alt="">
            @if (session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <h3>Masuk ke Laravel 8</h3>
            <button type="button" class="btn btn-outline-dark mb-2"><img src="img/gmail.png" width="25" alt=""><a href="auth/google" style="text-decoration: none;">Masuk Dengan Gmail</a></button>
            <br>
            <img src="img/OR.jpg" width="300" alt="">
            <form action="/login" method="POST">
                @csrf
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label d-flex justify-content-start">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div class="mb-3">
                                <button type="submit" class="btn btn-dark mb-3 rounded-pill" style="width: 100%;">Masuk</button>
                              </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <button type="button"  class="btn btn-secondary mb-3 rounded-pill" style="width: 97%;">Lupa Password</button>
                            <p>Tidak Punya Akun? <span><a href="/register">Daftar</a></span></p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- akhir isi -->




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
