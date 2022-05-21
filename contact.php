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
    <title>PT. Amos</title>
</head>

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
                        <a class="nav-link" aria-current="page" href="homepage.php">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
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
    <div class="container-fluid banner3 d-flex align-items-center">
        <div class="container">
            <h1 class="text-light text-center display-5">Contact</h1>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Contact -->
    <div class="container-fluid py-4">
        <div class="container card-body">
            <h2 class="text-center">Contact Us</h2>

            <form name="contact-form" action="contact-proccess.php" method="post" enctype="multipart/form-data" class="col-lg-6 offset-lg-3 mt-5">
                <div class="mb-3">
                    <label for="nama" class="form-label"><strong>Nama</strong></label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="nomorwa" class="form-label"><strong>Nomor WhatsApp</strong></label>
                    <input type="text" class="form-control" name="nomorwa" id="nomorwa">
                </div>
                <div class="mb-3">
                    <label for="jasa" class="form-label"><strong>Pilih Jasa</strong></label>
                    <select id="jasa" class="form-select" name="jasa">
                        <option>Foto/Video Wedding</option>
                        <option>Foto/Video Fashion</option>
                        <option>Foto/Video Product</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="budget" class="form-label"><strong>Budget</strong></label>
                    <input type="text" class="form-control" id="budget" name="budget" placeholder="ex: 1.000.000">
                </div>
                <div class="mb-3">
                    <label for="konsep" class="form-label"><strong>Jelaskan konsep keinginan anda!</strong></label>
                    <textarea class="form-control" id="konsep" name="konsep" rows="3"></textarea>
                </div>
                <button type="submit" name="kirim" class="btn text-light w-100" style="background-color: #1a1e22;">Kirim</button>
            </form>
        </div>
    </div>
    <!-- Akhir Contact -->

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