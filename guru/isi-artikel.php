<<<<<<< HEAD
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
    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">

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
<nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="beranda.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list active">
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
<body class="bg-gradient-light">
    <div class="container" style="margin-top: 140px;">
        <?php
        $no = 1;
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from berita where id = $id");
        while ($result = mysqli_fetch_array($data)) {

        ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center" style="color: black;"><b><?= $result['judul_berita']; ?></b></h4>
                    <hr>
                    <?php
 
							// membaca input dari form
							$input = $result['deskripsi'];
							
							// memecah string input berdasarkan karakter '\r\n\r\n'
							$pecah = explode("\r\n\r\n", $input);
							
							// string kosong inisialisasi
							$text = "";
							
							// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
							// lalu menggabungnya menjadi satu string utuh $text
							for ($i=0; $i<=count($pecah)-1; $i++)
							{
								$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
								$text .= $part;
							}
							
							
							?>
							<p><?php echo $text?></p>
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

=======
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
    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">

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
    <div class="bg-nav"></div>
    <nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="">
                    <a class="nav-link" href="berita.php"><i class="fa fa-arrow-left" style="font-size:24px"></i><span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
<body class="bg-gradient-light">
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

>>>>>>> cead4a3a6e27a1b59bcb9b597f075fc368124a05
</html>