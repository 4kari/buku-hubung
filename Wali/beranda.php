<<<<<<< HEAD
<<<<<<< HEAD
<?php
require 'koneksi.php';
require 'auth.php';
$username = $_SESSION['username'];
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
    h4,h5{
        color: black;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    h5{
        font-size: 14px;
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
        <a class="btn btn-success float-right" href="tambah/tambah_anak.php"><span><i class="fa fa-plus fa-1x" aria-hidden="true"></i>Tambah Data Diri Anak</span></a>
        <br>
        <br>
        <?php 
            
            $data = mysqli_query($koneksi, "SELECT * FROM wali WHERE username='$username'");
                while ($result = mysqli_fetch_array($data)) {
                    $id = $result['id'];
                }
        ?>
        <div class="card">
            <div class="card-body">
                <div class="card border-3">
                    <a class="card-block stretched-link text-decoration-none" href="">
                        <div class="card-body">
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE wali_id = $id");
                            while ($result = mysqli_fetch_array($data)) {

                            ?>
                            <hr>
                            <h4>Anak ke- <?= $no++; ?></h4>
                            <h5 class="card-title"><b>Nama Siswa</b><span> : </span><?= $result['nama']; ?></h5>
                            <h5><b>Kelas</b><span> : </span><?= $result['kelas']; ?> </h5>
                            <h5><b>No Absen</b><span> : </span><?= $result['absen']; ?> </h5>
                            <?php } ?>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <hr>
        <div class="alert alert-danger color-black text-center" role="alert">
            <i class="fa fa-bell" aria-hidden="true"></i>
            PENGUMUMAN
            <i class="fa fa-bell" aria-hidden="true"></i>

        </div>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC");
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

=======
<?php
require 'koneksi.php';
session_start();
=======
<?php
    require 'koneksi.php';
    //session_start();
>>>>>>> 001b053b4ca91727a41669c8aa70ef7d4323d4cc
?>

<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a class="btn btn-success float-right" href=""><span><i class="fa fa-plus fa-1x" aria-hidden="true"></i>Tambah Data Diri Anak</span></a>
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                Data Diri Siswa
            </div>

        </div>
        <hr>
        <div class="alert alert-danger color-black text-center" role="alert">
            <i class="fa fa-bell" aria-hidden="true"></i>
            PENGUMUMAN
            <i class="fa fa-bell" aria-hidden="true"></i>

        </div>
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

>>>>>>> cead4a3a6e27a1b59bcb9b597f075fc368124a05
=======

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
    <div class="card">
      <div class="card-body">
        <table>
          <tr>
            <th>Nama Siswa</th>
            <th> : </th>
            <th>Putri Agustina</th>

          </tr>
          <tr>
            <th>Kelas</th>
            <th> : </th>
            <th>12 B</th>
          </tr>
          <tr>
            <th>Absen</th>
            <th> : </th>
            <th>06</th>
          </tr>
        </table>
      </div>
    </div>
    <br>
    <?php 
    $no = 1;
		$data = mysqli_query($koneksi,"select * from berita");
		while($result = mysqli_fetch_array($data)){

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


  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>


  <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

>>>>>>> 001b053b4ca91727a41669c8aa70ef7d4323d4cc
</html>