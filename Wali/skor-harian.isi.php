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

    <title>Skor Harian</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

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
                <a class="nav-link" href="skor-harian.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <div class="container" style="margin-top: 70px;">
        <div class="card border-3">
            <?php

            $no = 1;
            $data = mysqli_query($koneksi, "select * from siswa");
            while ($result = mysqli_fetch_array($data)) {
            ?>
                <a class="card-block stretched-link text-decoration-none" href="">
                    <div class="card-body">
                        <h4 class="card-title"><?= $result['nama']; ?><span> - </span> <b>Siswa</b></h4>
                        <br>
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th> : </th>
                                <th><?= $result['nama']; ?></th>

                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <th> : </th>
                                <th> <?= $result['kelas']; ?></th>
                            </tr>
                            <tr>
                                <th>Absen</th>
                                <th> : </th>
                                <th> <?= $result['absen']; ?></th>
                            </tr>
                        </table>
                    </div>
                </a>
            <?php } ?>
        </div>

        <br>
        <div class="card border-0">
            <div class="card-body">
                <h2 class="text-black">Perolehan Nilai</h2>

                <!-- Bar Chart -->
                <div class="card" style="margin-bottom: 10%;">
                    <div class="card-header">
                        <h4 class="card-title text-center" style="margin-top: 1%;"><b>Tema 1 Subtema 1</b></h4>
                    </div>
                    <div class="card-body" style="margin-bottom: 30px;">
                        <div class="container">
                            <canvas id="myChart" width="100" height="100"></canvas>
                        </div>
                        <?php
                        $mapel       = mysqli_query($koneksi, "SELECT mapel FROM skor WHERE id_siswa=2");
                        $penghasilan = mysqli_query($koneksi, "SELECT nilai FROM skor WHERE id_siswa=2");
                        ?>
                        <script>
                            var ctx = document.getElementById("myChart");
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: [<?php while ($b = mysqli_fetch_array($mapel)) {
                                                    echo '"PB ' . $b['mapel'] . '",';
                                                } ?>],
                                    datasets: [{
                                        label: 'Mapel',
                                        data: [<?php while ($p = mysqli_fetch_array($penghasilan)) {
                                                    echo '"' . $p['nilai'] . '",';
                                                } ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo2.js"></script>


</body>

</html>