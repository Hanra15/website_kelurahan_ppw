<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Kelurahan Hambalang - Potensi Daerah</title>
  </head>
  <body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../image/logo-kabupaten.png" alt="logo" width="25" height="30"> Kelurahan Hambalang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text-center">
          <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light list" href="struktur.php">Struktur Organisasi</a></li>
            <li><a class="dropdown-item text-light list" href="visimisi.php">Visi & Misi</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light" href="datawarga.php">Data Warga</a></li>
            <li><a class="dropdown-item text-light" href="#">Potensi Daerah</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- end navbar -->

<!-- get started -->
<div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="bc-home">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Potensi daerah</li>
  </ol>
</nav>
</div>
<!-- end get started -->

<!-- content -->
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Potensi Daerah</h1>
    <hr class="my-4">
  </div>
  <!-- taman -->
  <div class="taman">
    <h1>Taman Fathan</h1>
    <p>Taman Fathan Hambalang merupakan tempat wisata yang menawarkan keindahan panorama alam, berupa bentang Gunung Gede, Pangrango, dan Pancar. Tempat wisata ini berada dekat dengan Kantor Desa Hambalang, yang terletak di Citeureup, Bogor. Pengunjung juga dapat menikmati panorama matahari terbenam yang memesona pada sore hari.</p>
    <div id="carouseltaman" class="carousel slide carousel-fade shadow" data-bs-ride="carouseltaman">
      <div class="carousel-inner shadow">
        <div class="carousel-item active">
          <img src="../image/taman1.png" class="d-block w-100 img-fluid" alt="taman fathan">
        </div>
        <div class="carousel-item">
          <img src="../image/taman2.png" class="d-block w-100" alt="taman fathan">
        </div>
        <div class="carousel-item">
          <img src="../image/taman3.png" class="d-block w-100" alt="taman fathan">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouseltaman" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouseltaman" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <br>
  <!-- sawah -->
  <div class="sawah">
    <h1>Wilayah Sawah yang Luas</h1>
    <p>Desa Hambalang memiliki wilayah sawah yang luas mencapai 3.995.000 Ha</p>
    <div id="carouselsawah" class="carousel slide carousel-fade shadow" data-bs-ride="carouselsawah">
      <div class="carousel-inner shadow">
        <div class="carousel-item active">
          <img src="../image/sawah1.png" class="d-block w-100 img-fluid" alt="sawah">
        </div>
        <div class="carousel-item">
          <img src="../image/sawah2.png" class="d-block w-100" alt="sawah">
        </div>
        <div class="carousel-item">
          <img src="../image/sawah3.png" class="d-block w-100" alt="sawah">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselsawah" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselsawah" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end content -->

<!-- footer -->
<br>
<footer class="bd-footer py-5 mt-5 bg-dark text-light ">
  <div class="container">
    
    <h4><img src="../image/logo-kabupaten.png" alt="" width="20" heigth="30" style="margin:10px;">Kelurahan Hambalang</h4>
    <br>
    <i>Kelurahan Hambalang Copyright 2021 - Kelompok 1 PPW</i>
  </div>
</footer>
<!-- end footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>