<?php
require 'auth.php';
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
</style>

<body class="bg-gradient-light">
    <nav class="navbar navbar-expand-sm bg-light justify-content-right fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="skor-karakter.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top: 100px;">

        <div class="row justify-content-center">
            <div class="col col-md-6">
                <div class="row">
                    <h3 style="color: black; margin-top: 5px;">Hasil Penilaian</h3>
                    <div class="col-sm-12">
                        <h1 style="text-align: right;"><span class="badge badge-secondary text-right" style="background-color: limegreen; ">Januari 2022</span></h1>
                    </div>

                </div>

                <div class="card border-3">
                    <a class="card-block text-decoration-none">

                        <div class="card-body">
                            <h2 class="card-title" style="color: black;"><b>Data Siswa</b></h2>
                            <br>
                            <table>
                                <tr>
                                    <th>Nama</th>
                                    <th> : </th>
                                    <th>Putri Agustina</th>

                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <th> : </th>
                                    <th>12 B</th>
                                </tr>
                                <tr>
                                    <th>No. Absen</th>
                                    <th> : </th>
                                    <th>06</th>
                                </tr>
                            </table>
                        </div>
                    </a>
                </div>
                <hr>
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title"><u>Hasil penilaian karakter</u></h4>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col col-9">
                                <div class="card bg-warning text-center text-white">
                                    <div class="card-body">Sangat Baik</div>
                                </div>
                                <br>
                                <div class="card bg-success text-center text-white">
                                    <div class="card-body">Baik</div>
                                </div>
                                <br>
                                <div class="card bg-success text-center text-white">
                                    <div class="card-body">Cukup | Kurang</div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="skor-karakter.isi.keterangan.php" class="btn btn-outline-warning mt-5" style="border: 2px solid black;"><i>Klik Disini</i></a>
                                </div>
                            </div>


                        </div>
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