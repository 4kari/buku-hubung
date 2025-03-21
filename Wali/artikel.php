<?php
require 'koneksi.php';
require 'auth.php';
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda Wali</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">

</head>
<style>
    body {
        font-family: 'Times New Roman', Times, serif;

    }

    figure {
        width: 5rem;
        height: 5rem;
        cursor: pointer;
        position: relative;
    }

    img {
        width: 53px;
        height: 60px;
        transform: scale(0.75);
        transition: all 0.4s ease;
    }

    figcaption {
        color: white;
        font-size: 0.9rem;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 2px;
        transition: all 0.6s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -40%);
        color: whitesmoke;
    }

    figure:hover img {
        transform: scale(0.5);
        filter: blur(4px) brightness(70%);
    }

    figure:hover figcaption {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
</style>

<body class="">
<div class="bg-nav"></div>
    <nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="beranda.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="berita.php">
                        <span class="icon"><i class="fa fa-newspaper" aria-hidden="true"></i></span>
                        <span class="text">Berita</span>
                    </a>

                </li>
                <li class="list">
                    <a href="kotak-masuk.php">
                        <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                        <span class="text">Chat</span>
                    </a>

                </li>
                <li class="list">
                    <a href="nilai.php">
                        <span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <span class="text">Nilai</span>

                    </a>

                </li>
                <li class="list">
                    <a href="lainnya.php">
                        <span class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                        <span class="text">Lainnya</span>
                    </a>

                </li>
                <div class="indicator">

                </div>
            </ul>

        </div>
    </nav>
    <div class="container" style="margin-top: 140px;">
        <br>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "select * from berita");
        while ($result = mysqli_fetch_array($data)) {

        ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?= $result['judul_berita']; ?></h4>
                    <br>
                    <a class="btn btn-info" href="isi-artikel.php?id=<?= $result['id']; ?>">Baca selengkapnya......</a>
                </div>
                <div class="card-footer">
                    <p class="small text-muted"><?= $result['tanggal_post']; ?></p>
                </div>
            </div>
        <?php } ?>
        <br>
    </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

=======
=======
>>>>>>> 001b053b4ca91727a41669c8aa70ef7d4323d4cc
<?php
require 'koneksi.php';
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda Wali</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style-navbar.css">

</head>
<style>
    body {
        font-family: 'Times New Roman', Times, serif;

    }

    figure {
        width: 5rem;
        height: 5rem;
        cursor: pointer;
        position: relative;
    }

    img {
        width: 53px;
        height: 60px;
        transform: scale(0.75);
        transition: all 0.4s ease;
    }

    figcaption {
        color: white;
        font-size: 0.9rem;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 2px;
        transition: all 0.6s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -40%);
        color: whitesmoke;
    }

    figure:hover img {
        transform: scale(0.5);
        filter: blur(4px) brightness(70%);
    }

    figure:hover figcaption {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
</style>

<body class="bg-gradient-light">
    <nav class="navbar navbar-light bg-gradient-light fixed-top">
        <a class="navbar-brand" href="#">Beranda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse scrollmenu justify-content-center" id="navbarNav">
            <ul class="navbar-nav hover-zoom ">
                <li class="nav-item active">
                    <a class="nav-link active" href="beranda.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artikel.php">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kotak-masuk.php">Kotak Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tulis-pesan.php">Tulis pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skor-harian.php">Skor Harian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skor-karakter.php">Skor Karakter</a>
                </li>
            </ul>
        </div>
        <ul class="nav nav-tabs" style="font-size:20px; margin-left: auto; margin-right: auto; ">
            <li id="carousel">
                <a href="beranda.php">
                    <span class="img">
                        <figure>
                            <img src="../assets/icon/house.png">
                            <figcaption>
                                Beranda
                            </figcaption>
                        </figure>
                    </span>
                </a>
            </li>
            <li id="carousel">
                <a href="artikel.php">
                    <span class="img">
                        <figure>
                            <img src="../assets/icon/news.png">
                            <figcaption>
                                Berita
                            </figcaption>
                        </figure>
                    </span>
                </a>
            </li>
            <li id="carousel">
                <a href="tulis-pesan.php">
                    <span class="img">
                        <figure>
                            <img src="../assets/icon/edition.png">
                            <figcaption>
                                Tulis Pesan
                            </figcaption>
                        </figure>
                    </span>
                </a>
            </li>
            <li id="carousel">
                <a href="#pesan.php">
                    <span class="img">
                        <figure>
                            <img src="../assets/icon/messenger.png">
                            <figcaption>
                                Chats
                            </figcaption>
                        </figure>
                    </span>
                </a>
            </li>

        </ul>
    </nav>
    <div class="container" style="margin-top: 140px;">
        <br>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "select * from berita");
        while ($result = mysqli_fetch_array($data)) {

        ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?= $result['judul_berita']; ?></h4>
                    <br>
                    <a class="btn btn-info" href="isi-artikel.php?id=<?= $result['id']; ?>">Baca selengkapnya......</a>
                </div>
                <div class="card-footer">
                    <p class="small text-muted"><?= $result['tanggal_post']; ?></p>
                </div>
            </div>
        <?php } ?>
        <br>
    </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>