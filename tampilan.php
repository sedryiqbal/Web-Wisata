<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="Project.css">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600;1,700&family=Roboto+Sla b:wght@500;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistem Informasi | Home</title>
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- <a class="navbar-brand" href="tampilan.php"><i>KOTA BOGOR</i></b></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs- target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria- label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tampilan.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                            <li>
                                <a class="dropdown-item" href="Kebun.php">Kebun Raya</a>
                            </li>
                      
                                <a class="dropdown-item" href="Museum.php">Meseum Zoologi </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="Istana.php">Istana Bogor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Daftar.php">Pesan-Tiket</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->

    <!-- Pembuatan Lingkaran -->
    <div class="Lingkaran1 ">
    </div>
    <!-- Penjelasan Wisata -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">PARAWISATA</h1>
                    <p class="kedua">KOTA BOGOR</p>
                    <p class="lead">Pariwisata merupakan salah satu sektor unggulan yang perlu diberdayakan, karena selain sebagai sumber penerimaan daerah, serta pengembangan dan pelestarian seni budaya Kota Bogor, juga membangkitkan sektor perekonomian masyarakat Kota. <br>
                    </p>
                    <!-- <a class="btn tombol-button1 text-light" href="profile.php" role="button">&nbsp; Profil&nbsp;</a> -->
                    <!-- <a class="btn tombol-button2 text-dark" href="#" role="button">&nbsp; Hubungi Kami &nbsp;<img src="https://img.icons8.com/ios-glyphs/30/000000/circled-chevron-right.png"/></a> -->
                </div>
                <!-- End Jumbotron -->
                <!-- Carousel -->
                <!-- Foto -->
                <div class="col-md-6 mt-5">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria- label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria- label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="images\11.jpg" class=" d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images\22.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images\44.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
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
        </div>
    </div>

    <!-- End Carousel -->


    <!-- Text Informasi -->
    <br><br>
    <br><br>
    <br><br>
    

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>