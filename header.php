<?php
$dir = dirname($_SERVER['PHP_SELF']);
$profile = false;
$pendidik = false;
$ekstra = false;
if ($dir === '/profilesekolah') {
    $profile = true;
} elseif ($dir === '/pendidiktenagapendidik') {
    $pendidik = true;
}


?>
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
                                <a class="dropdown-item" href="kepalasekolah.php">Kebun Raya</a>
                            </li>
                      
                                <a class="dropdown-item" href="dataguru.php">Meseum Zoologi </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="datasiswa.php">Istana Bogor</a>
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
