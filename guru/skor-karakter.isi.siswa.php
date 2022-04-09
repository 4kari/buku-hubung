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
                <a class="nav-link" href="skor-karakter.php?"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top: 100px;">

        <div class="row justify-content-center">
            <div class="col col-md-6">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 style="text-align: right;"><span class="badge badge-secondary text-right" style="background-color: limegreen; ">Januari 2022</span></h1>
                    </div>

                </div>

                <div class="card border-3">
                    <a class="card-block stretched-link text-decoration-none" href="">
                        <div class="card-body">
                            <?php
                            $id = $_GET['id'];
                            $data = mysqli_query($koneksi, "select * from siswa where id = $id");
                            while ($result = mysqli_fetch_array($data)) {

                            ?>
                            <h4 class="card-title"><b>Nama Siswa</b><span> : </span><?= $result['nama']; ?></h4>
                            <h5><b>Kelas</b><span> : </span><?= $result['kelas']; ?> </h5>
                            <h5><b>No Absen</b><span> : </span><?= $result['absen']; ?> </h5>
                            <?php } ?>
                        </div>
                    </a>
                </div>
                <hr>
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-center"><u>Penilaian karakter</u></h4>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col col-9">
                                <?php
                                $id = $_GET['id'];
                                ?>
                                <form action="../backend/nilai.php?aksi=tambah_nilai" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id_siswa" value="<?= $id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Karakter</label>
                                        <select class="form-control" name="jenis" id="jenis">
                                            <option value="SANGAT BAIK">SANGAT BAIK</option>
                                            <option value="BAIK">BAIK</option>
                                            <option value="CUKUP">CUKUP</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="saran">Saran</label>
                                        <textarea class="form-control" name="saran" id="saran" cols="30" rows="10"></textarea>
                                    </div>
                                    
                                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
                                        <div class="inline text-center px-5 mt-3 mb-3"> 
                                            
                                            <button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"></i> Tambah</button>
                                        </div>
                                        
                                    </div>
                                </form>
                                
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