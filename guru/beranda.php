<?php
require 'koneksi.php';
include '../backend/berita.php';
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
<!-- ini style navbar -->
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
</style>

<body>
    <div class="bg-nav"></div>
    <nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="list active">
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
    <div class="container">
        <br>

        <div class="alert alert-danger color-black text-center" role="alert">
            <i class="fa fa-bell" aria-hidden="true"></i>
            PENGUMUMAN
            <i class="fa fa-bell" aria-hidden="true"></i>

        </div>
        <a class="btn btn-success float-right" href=""><span><i class="fa fa-plus fa-1x" aria-hidden="true"></i>Tambah Pengumuman</span></a>
        <br>
        <hr>
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
            <hr>
        <?php } ?>
    </div>

</body>

</html>