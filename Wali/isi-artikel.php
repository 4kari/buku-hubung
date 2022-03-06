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
    <nav class="navbar navbar-expand-sm bg-light justify-content-right fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="artikel.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>


    <div class="container" style="margin-top: 140px;">
        <?php
        $no = 1;
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from berita where id = $id");
        while ($result = mysqli_fetch_array($data)) {

        ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?= $result['judul_berita']; ?></h4>
                    <br>
                    <p><?= $result['deskripsi']; ?></p>
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

</html>