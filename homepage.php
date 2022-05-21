<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Amosfoto.id</title>
</head>
<style>
  .carousel-contain {
    background-color: #212529;
  }
</style>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm" style="background-color: white;">
    <div class="container-md">
      <a class="navbar-brand" href="#">Amosfoto.id</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homepage.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Banner -->
  <div class="container-fluid banner d-flex align-items-center">
    <div class="container">
      <h1 class="text-light text-center display-3">Welcome to Amosfoto.id</h1>
      <h1 class="text-light text-center display-6">Jasa Foto & Video, Harga Murah Kualitas Mewah</h1>
    </div>
  </div>
  <!-- Akhir Banner -->

  <!-- Carousel -->
  <div class="container-fluid carousel-contain py-5">
    <div class="container">
      <div id="carouselExampleCaptions" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.jpg" class="d-block w-100" alt="Wedding">
            <div class="carousel-caption d-none d-md-block">
              <h4 class="font-fluid" style="text-shadow: 5px 5px 5px #212529;">Wedding Photography</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide2.jpg" class="d-block w-100" alt="Model">
            <div class="carousel-caption d-none d-md-block">
              <h4 style="text-shadow: 5px 5px 5px #212529;">Fashion Photography</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide3.jpg" class="d-block w-100" alt="Product">
            <div class="carousel-caption d-none d-md-block">
              <h4 style="text-shadow: 5px 5px 5px #212529;">Product Photography</h4>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- Akhir Carousel -->

  <!-- Card -->
  <section class="alasan">
    <div class="container py-5">
      <div class="row text-center">
        <div class="col">
          <h4>Photography Services</h4>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="images/card1.png" width="50px" class="img-responsive mx-auto d-block py-2" alt="card1">
            <div class="card-body">
              <h6>BERPENGALAMAN</h6>
              <p class="card-text">Pengalaman menjadi modal utama kami untuk terus menciptakan inovasi terbaik di setiap jasa foto dan video yang kami tawarkan untuk anda.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="images/card2.png" width="50px" class="img-responsive mx-auto d-block py-2" alt="card2">
            <div class="card-body">
              <h6>HARGA TERJANGKAU</h6>
              <p class="card-text">Kami menjangkau kemudahan bagi anda untuk mendapatkan hasil foto dan video berkualitas yang anda harapkan sesuai anggaran anda.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="images/card3.png" width="50px" class="img-responsive mx-auto d-block py-2" alt="card3">
            <div class="card-body">
              <h6>KUALITAS TERBAIK</h6>
              <p class="card-text">Inovasi dan kualitas dari hasil foto dan video serta Efektifitas dan efisiensi waktu produksi menjadi hal terbaik yang kami persembahkan untuk anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Card -->

  <!-- Footer -->
  <footer class="text-white text-center text-lg-start" style="background-color: #1a1e22;">
    <div class="container py-4">
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-center">Amosfoto.id</h5>
          <p class="text-center">
            Amosfoto.id - Jasa Fotografi dan Video Shooting dengan Harga yang relatif Terjangkau, Fleksibel dan Berkualitas
            untuk Acara Pernikahan, Pre Wedding, Acara Kantor, Seminar, Family Gathering, Pesta Ulang Tahun, Video Company
            Profile & foto sesuai kebutuhan anda!
          </p>
        </div>
        <!-- Akhir Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 offset-lg-2">
          <h5 class="text-uppercase mb-0 text-center">Menu</h5>

          <ul class="list-unstyled text-center">
            <li>
              <a href="homepage.php" style="text-decoration:none" class="text-white">Homepage</a>
            </li>
            <li>
              <a href="blog.php" style="text-decoration:none" class="text-white">Blog</a>
            </li>
            <li>
              <a href="about.php" style="text-decoration:none" class="text-white">About</a>
            </li>
            <li>
              <a href="contact.php" style="text-decoration:none" class="text-white">contact</a>
            </li>
            <li>
              <a href="logout.php" style="text-decoration:none" class="text-white">Logout</a>
            </li>
          </ul>
        </div>
        <!-- Akhir Grid column-->
      </div>

      <!-- Sosmed -->
      <div class="row justify-content-center py-2">
        <div class="col-lg-1 mb-0 d-flex justify-content-center">
          <a href="https://www.instagram.com/arthuro.mos/" style="color: white;"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="col-lg-1 mb-0 d-flex justify-content-center">
          <a href="https://wa.me/6282125731832" style="color: white;"><i class="bi bi-whatsapp"></i></a>
        </div>
        <div class="col-lg-1 mb-0 d-flex justify-content-center">
          <a href="https://www.youtube.com/channel/UC_PQiT5eJnICfHlr2oyb2WQ" style="color: white;"><i class="bi bi-youtube"></i></i></a>
        </div>
      </div>
      <!-- Akhir Sosmed -->
    </div>
    <div class="text-center py-3" style="background-color: #1a1e22;">
      Copyright 2022 ©
      <a class="text-white" style="text-decoration:none" href="homepage.php">Amosfoto.id - PT. Amos</a>
    </div>
  </footer>
  <!-- Akhir Footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>