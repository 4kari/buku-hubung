<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skor Harian</title>

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
        <div class="card border-0 rounded-circle" style="border-radius: 15px;">
            <a class="card-block stretched-link text-decoration-none" href="skor-harian.isi.php">
                <div class="card-body bg-gradient-primary  text-white text-center">
                    <h1 class="card-title"><b>Minggu 1</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="">
                <div class="card-body bg-gradient-info   text-white text-center">
                    <h1 class="card-title"><b>Minggu 2</b></h1>
                </div>
            </a>

        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="">
                <div class="card-body bg-gradient-success   text-white text-center">
                    <h1 class="card-title"><b>Minggu 3</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="">
                <div class="card-body bg-gradient-warning   text-white text-center">
                    <h1 class="card-title"><b>Minggu 4</b></h1>
                </div>
            </a>
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