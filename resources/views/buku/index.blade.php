<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="p-5">
    <!-- Nav  -->
    <nav class="navbar navbar-expand-lg navbg shadow-sm bg-body rounded">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="100" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link round" href="/buku">Buku</a>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link round">Logout</button>
                    </form>
                </li>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- akhir Nav  -->

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col">
                <a href="/tambah" class="btn btn-primary">Tambah buku</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">nama buku</th>
                        <th scope="col">rilis</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $buk )
                      <tr>
                        <td>{{ $buk->nama_buku }}</td>
                        <td>{{ $buk->rilis }}</td>
                        <td>
                            <a href="edit/{{ $buk }}" class="btn btn-warning">Edit</a>
                            <a href="delete/{{ $buk->id }}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
