<?php 
require "koneksi.php";
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
    @media print {
        .noPrint{
            display:none;
        }
    }
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: black;
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
                <a class="nav-link" href="skor-harian.isi.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <div class="container" id="data-siswa" style="margin-top: 70px;">
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
        

        <br>
        <div class="card border-0">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Mapel</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $no = 1;
                        $join = "select * from skor join mapel on mapel.id = skor.mapel where id_siswa='$id'";
                        $select = mysqli_query($koneksi, $join);
                        //$data = mysqli_query($koneksi,"select * from skor where id_siswa='$id'");
                        while($d=mysqli_fetch_array($select)){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['keterangan']; ?></td>
                                <td><?php echo $d['nilai']; ?></td>
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <h2 class="text-black">Perolehan Nilai</h2>

                <!-- Bar Chart -->
                <div class="card noPrint" style="margin-bottom: 10%;">
                    <div class="card-header">
                        <h4 class="card-title text-center" style="margin-top: 1%;"><b>Tema 1 Subtema 1</b></h4>
                    </div>
                    <div class="card-body" style="margin-bottom: 30px;">
                        <div class="chart-bar">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mb-4 mt-1">
            <div class="col justify-content-center d-flex">
                <button onclick="window.print();" class=" btn btn-light noPrint">
                    Print Data
                </button>
            </div>
        </div>
    </div>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <!-- <script src="js/demo/chart-pie-demo.js"></script> -->
    <!-- <script src="js/demo/chart-bar-demo2.js"></script> -->

</body>

</html>