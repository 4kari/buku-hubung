<?php 
require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skor Karakter</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">

</head>
<style>
    body {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e4f5fc+0,bfe8f9+50,9fd8ef+51,2ab0ed+100;Blue+Gloss+%235 */
        background: #e4f5fc;
        /* Old browsers */
        background: -moz-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4f5fc', endColorstr='#2ab0ed', GradientType=0);
        /* IE6-9 */

        background-size: cover;

    }

    img {
        width: 53PX;
        height: 60PX;
        padding: 2px;
    }

    #top a {
        padding: 5px;
        background-color: #ffeaa7;
        color: black;
        border-radius: 50%;
        position: fixed;
        float: left;
        text-align: left;
        left: 10;
        bottom: 1rem;
        margin-left: 0.1rem;

    }

    #top i {
        float: left;
        right: 70%;
        color: aquamarine;
    }
</style>

<body class="top">
    <nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="beranda.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
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
                <li class="list active">
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


    <div class="container">
        <br>
        <a class="btn btn-success float-right" href="tambah/tambah_karakter.php"><span><i class="fa fa-plus fa-1x" aria-hidden="true"></i>Tambah Penilaian Karakter</span></a>
        <br>
        <hr>
        
        <div class="card border-0 rounded-circle" style="border-radius: 15px;">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=01">
                <div class="card-body bg-gradient-primary  text-white text-center">
                    <h1 class="card-title"><b>JANUARI</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=02">
                <div class="card-body bg-gradient-info   text-white text-center">
                    <h1 class="card-title"><b>FEBRUARI</b></h1>
                </div>
            </a>

        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=03">
                <div class="card-body bg-gradient-success   text-white text-center">
                    <h1 class="card-title"><b>MARET</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=04">
                <div class="card-body bg-gradient-warning   text-white text-center">
                    <h1 class="card-title"><b>APRIL</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=05">
                <div class="card-body bg-gradient-secondary   text-white text-center">
                    <h1 class="card-title"><b>MEI</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=06">
                <div class="card-body bg-gradient-dark   text-white text-center">
                    <h1 class="card-title"><b>JUNI</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=07">
                <div class="card-body bg-gradient-info   text-white text-center">
                    <h1 class="card-title"><b>JULI</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=08">
                <div class="card-body bg-gradient-primary   text-white text-center">
                    <h1 class="card-title"><b>AGUSTUS</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=09">
                <div class="card-body bg-gradient-success   text-white text-center">
                    <h1 class="card-title"><b>SEPTEMBER</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=10">
                <div class="card-body bg-gradient-warning   text-white text-center">
                    <h1 class="card-title"><b>OKTOBER</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=11">
                <div class="card-body bg-danger  text-white text-center">
                    <h1 class="card-title"><b>NOVEMBER</b></h1>
                </div>
            </a>
        </div>
        <br>
        <div class="card text-white">
            <a class="card-block stretched-link text-decoration-none" href="skor-karakter.isi.php?tanggal=12">
                <div class="card-body bg-dark   text-white text-center">
                    <h1 class="card-title"><b>DESEMBER</b></h1>
                </div>
            </a>
        </div>
   
        <!-- Button back -->
        <div id="top">
            <a href="window.history.back();">
                <span><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></span>
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


</body>

</html>