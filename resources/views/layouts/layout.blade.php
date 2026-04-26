<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gojek Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- <link rel="icon" type="image/png" href="{{ asset('assets/icon.png') }}"> --}}
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" href="#">Envyra</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Layanan</a>
        <a class="nav-link" href="#">Cara Kerja</a>
        <a class="nav-link" href="#">Jenis Sampah</a>
        <a class="nav-link" href="#">Marketplace</a>
      </div>
    </div>
    <div class="d-flex">
        <a class="nav-link bg-primary text-light" href="#">Gabung Sekarang</a>
    </div>
  </div>
</nav>
    @yield('content')

    <footer class="bg-light py-5">
  <div class="container">
    <div class="row">
      
      <div class="col-md-4 mb-4 mb-md-0">
        <h4 class="fw-bold" style="color: #1a4d2e;">Envyra</h4>
        <p class="text-secondary small mt-3">
          © 2024 Envyra. Conscious Stewardship for <br> a Greener Planet.
        </p>
      </div>

      <div class="col-md-2 mb-4 mb-md-0">
        <ul>
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Contact Info</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4 mb-md-0">
        <ul>
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Terms of Service</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">FAQ</a></li>
        </ul>
      </div>

      <div class="col-md-3">
        <ul
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Twitter</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">LinkedIn</a></li>
        </ul>
      </div>

    </div>
  </div>
</footer>
</body>
</html>
