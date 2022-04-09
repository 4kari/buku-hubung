<?php 
require 'koneksi.php';
require 'auth.php';
$username = $_SESSION['username'];
$data = mysqli_query($koneksi, "SELECT * FROM wali WHERE username='$username'");
while ($result = mysqli_fetch_array($data)) {
    $id = $result['id'];
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
        font-family: 'Times New Roman', Times, serif;
    }

    img {
        width: 53PX;
        height: 60PX;
        padding: 2px;
    }
</style>

<body class="bg-gradient-light">
    <nav class="navbar navbar-expand-sm bg-light justify-content-right fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="skor-harian.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <div class="container" style="margin-top: 70px;">
        <div class="card border-3">
            <div class="row">
                <div class="card-body col col-md-12 text-center justify-content-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE wali_id = '$id'");
                            while ($result = mysqli_fetch_array($data)) {

                            ?>
                        <tr>
                            
                            <td><?= $no++; ?></td>
                            <td><?= $result['nama']; ?></td>
                            <td class="inline">
                                <a href="skor-harian.isi.siswa.php?id=<?= $result['id']; ?>" class="btn btn-md btn-info">Lihat</a>
                                <a href="#edit" class="btn btn-md btn-warning">Edit</a>
                            </td>
                            
                        </tr>
                        <?php } ?>
                    </table>
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