<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Beranda</title>
  </head>
  <body>
    {{-- clas navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Belajar Laravel 12 </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                <a class="nav-link active" href="/beranda">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    RoadMap
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Routing</a></li>
                    <li><a class="dropdown-item" href="#">Models</a></li>
                    <li><a class="dropdown-item" href="#">View</a></li>
                    <li><a class="dropdown-item" href="#">Controller</a></li>
                    <li><a class="dropdown-item" href="#">MidleWare</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <nav class="container mt-3">
        <h1>Selamat datang di halaman beranda</h1>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>
