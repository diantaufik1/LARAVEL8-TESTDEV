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
            <img src="img/logo.jpg" width="200" alt="">
            <h3>Buat akun anda</h3>
            <button type="button" class="btn btn-outline-dark mb-2"><img src="img/gmail.png" width="25" alt=""> Masuk Dengan Gmail</button>
            <br>
            <img src="img/OR.jpg" width="300" alt="">
            <form action="/register" method="post">
                @csrf
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label d-flex justify-content-start">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                              <div class="mb-3">
                                <button type="submit" class="btn btn-dark mb-3 rounded-pill" style="width: 100%;">Daftar</button>
                              </div>
                        </div>
                    </div>
                </div>
            </form>
            <p>Sudah Punya Akun? <span><a href="/login">Masuk</a></span></p>
        </div>
    </section>
    <!-- akhir isi -->




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
