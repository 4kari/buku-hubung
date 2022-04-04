<?php
require 'koneksi.php';
session_start();
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

    <link href="../assets/navbar-style.css" rel="stylesheet" type="text/css">
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
                <li class="list">
                    <a href="nilai.php">
                        <span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <span class="text">Nilai</span>

                    </a>

                </li>
                <li class="list active">
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
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active disabled">
                        Pilihan Menu
                    </a>
                    <a href="profil-wali.php" class="list-group-item list-group-item-action">Profil Saya</a>
                    <a href="data-siswa.php" class="list-group-item list-group-item-action">Data Siswa</a>
                    <a href="kotak-masuk.php" class="list-group-item list-group-item-action">Kotak Masuk</a>
                    <a href="kontak.php" class="list-group-item list-group-item-action">Kontak</a>
                    <a href="#" class="list-group-item list-group-item-action">Info</a>
                    <hr>
                    <a href="../backend/logout.php" class="list-group-item list-group-item-action text-center bg-danger text-white">Keluar</a>
                </div>
            </div>

        </div>
        <br>

    </div>
    <!-- <script>
    const list = document.querySelectorAll('.list');

    function activeLink() {
      list.forEach((item) =>
        item.classList.remove('active'));
      this.classList.add('active');
    }
    list.forEach((item) =>
      item.addEventListener('click', activeLink));
  </script> -->

</body>

</html>