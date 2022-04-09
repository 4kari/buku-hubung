<?php
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php //var_dump($_GET);
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-2 shadow-lg my-4 col-lg-9 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h5 mb-4">Silahkan Masukkan Data Diri Anak Anda!</h1>
                                <form class="user" action="backend/register-siswa.php" method="post">
                                    <input type="hidden" name="id" class="form-control form-control-user" id="exampleInput">
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control form-control-user" id="exampleInput" placeholder="Nama Siswa">
                                    </div>
                                    <div class="form-group">
                                        <!-- dropdown -->
                                        <select>
                                            <option>01</option>
                                        </select>
                                        <input type="text" name="kelas" class="form-control form-control-user" id="exampleInput" placeholder="Kelas">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="absen" class="form-control form-control-user" id="exampleInput" placeholder="No. Absen">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="no_hp" class="form-control form-control-user" id="exampleInput" placeholder="No. Telepon">

                                    </div>

                                    <input type="submit" value="Masuk" class="btn btn-success btn-user btn-block">
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>