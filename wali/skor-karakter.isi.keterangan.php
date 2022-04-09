<?php 
    require "koneksi.php";

    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from penilaian_siswa where id = $id");
        while ($result = mysqli_fetch_array($data)) {
            $tgl = $result['tanggal'];
        }

?>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/style-navbar.css">

</head>
<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .isi {
        color: black;
    }
</style>

<body class="bg-gradient-light">
    <nav class="navbar navbar-expand-sm bg-light justify-content-right fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="skor-karakter.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top: 60px;">

        <div class="row justify-content-center">
            <div class="col col-md-6">
                <div class="row">
                    <div class="col-sm-12">
                        
                    </div>

                </div>
                <div class="card px-1 py-4">
                    <div class="card-block stretched-link text-decoration-none">
                        <h3 style="color: black; margin-top: 5px; text-align:center;">Hasil Penilaian Karakter</h3>
                        <div class="card-body">
                            <?php
                            $id = $_GET['id'];
                            
                            $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = '$id'");
                            while ($result = mysqli_fetch_array($data)) {

                            ?>
                            <h4 class="card-title"><b>Nama Siswa</b><span> : </span><?= $result['nama']; ?></h4>
                            <h5><b>Kelas</b><span> : </span><?= $result['kelas']; ?> </h5>
                            <h5><b>No Absen</b><span> : </span><?= $result['absen']; ?> </h5>
                            <?php } ?>
                        </div>
                        <?php
                            $id = $_GET['id'];
                            $tanggal = $_GET['tanggal'];
                            $data = mysqli_query($koneksi, "SELECT * FROM penilaian_siswa WHERE id_siswa = '$id' AND tanggal = '$tanggal'");
                            while ($result = mysqli_fetch_array($data)) {

                        ?>
                        <div class="row border-dark">
                            <div class="col-sm-12">
                                <h1 style="text-align: center;"><span class="badge badge-warning text-right"><?= $result['jenis']; ?></span></h1>
                            </div>
                        </div>
                        <div class="card border-dark mb-4">
                            <div class="card-body">
                                <div class="isi">
                                    <h3>Saran:</h3>
                                    <p>
                                        <?= $result['saran']; ?>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="assets/js/chart-bar.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo2.js"></script>
    <script src="js/demo/chart-bar.js"></script>

</body>

</html>