<?php include('backend/get_kontak.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Kotak</title>

        <!-- Custom fonts for this template-->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="assets/css/style-pesan.css" rel="stylesheet">

        
    </head>

    <body class="bg-gradient-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="beranda.php">Beranda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="beranda.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">Berita</a>
                    </li>
                    <li class="nav-item active">
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

        </nav>

        <div class="container pt-4">
            <?php foreach($data as $d){?>
                <div class="row pt-4 mt-4">
                    <div class="col-sm-2">
                        <img style="width:140px; height:140px" src="assets/img/avatar-cewek.png" alt="Avatar">
                    </div>
                    <div class="col-sm-8">
                        <h2><?=$d['nama']?></h2>
                        <h4><strong>Jabatan</strong> <?=$d['level']?></h4>      
                        <p><strong>no_hp</strong> <?=$d['no_hp']?></p>
                        <?php   if(isset($d['chat'])){?>
                            <div class="status"> <i class="fa fa-circle online"></i><a href="pesan.php/?id=<?=$d['chat'];?>"><?=$d['pesan'];?> Pesan baru</a></div>
                        <?php   } else{ ?>
                            <a href="backend/mulai_chat.php/?username=<?= $d['username']; ?>">mulai percakapan baru</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>