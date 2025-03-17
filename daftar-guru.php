<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                                <img class="img-fluid" style="width: 100px;" src="assets/icon/logo-home.svg">
                                <h1 class="h5 text-gray-900">Pantau aktivitas anak didik baik di <br>
                                    sekolah maupun di rumah dengan <br>
                                    cepat dan praktis langsung di ponsel anda <br>
                                    Daftar sekarang!

                                </h1>
                            </div>
                            <form class="user" action="backend/register.php" method="post">
                                <input type="hidden" name="level" value="2">

                                <div class="form-group">
                                    <input type="text" name="nip" class="form-control form-control-user" id="exampleInput" placeholder="N I P">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInput" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="exampleInput" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user" id="exampleInput" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_hp" class="form-control form-control-user" id="exampleInput" placeholder="No. Telepon">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <input type="submit" value="Daftar Akun" class="btn btn-success btn-user btn-block">
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? Masuk!</a>
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