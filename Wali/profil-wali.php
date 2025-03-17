
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

    <title>Profil</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/cards-style.css" rel="stylesheet" type="text/css">

</head>
<style>
    body {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e4f5fc+0,bfe8f9+50,9fd8ef+51,2ab0ed+100;Blue+Gloss+%235 */
        background: #e4f5fc;
        /* Old browsers */
        background: -moz-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4f5fc', endColorstr='#2ab0ed', GradientType=0);
        /* IE6-9 */

        background-size: cover;

    }

    #top a {
        padding: 5px;
        background-color: #ffeaa7;
        color: black;
        border-radius: 50%;
        position: fixed;
        float: left;
        text-align: left;
        left: 10;
        bottom: 1rem;
        margin-top: 20px;

    }

    #top i {
        float: left;
        right: 70%;
        color: aquamarine;
    }
</style>

<body>
    <nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="beranda.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="berita.php">
                        <span class="icon"><i class="fa fa-newspaper" aria-hidden="true"></i></span>
                        <span class="text">Berita</span>
                    </a>

                </li>
                <li class="list">
                    <a href="pesan.php">
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
                <li class="list active">
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

    <div class="hero-image">
        <div class="container">
            <!-- Nested Row within Card Body -->
            <br>
            <div class="row mx-auto">
                <div class="card mx-auto">
                    <div class="img">
                        <img src="../assets/img/avatar-cewek.png">
                    </div>
                    <div class="infos">
                        <div class="name">
                            <h2>Dewi Puji  |  <b>Wali Murid</b></h2>
                            
                        </div>
                        <p class="text">

                        </p>
                        <table class="table table-borderless padding-large stats">
                            <tr>
                                <th>Nama Lengkap</th>
                                <th> : </th>
                                <td>Dewi Puji</td>

                            </tr>
                            <tr>
                                <th>Nama Anak</th>
                                <th> : </th>
                                <td>Putri Agustina</td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <th> : </th>
                                <td>0812345678778</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th> : </th>
                                <td>Surabaya, Jawa Timur.</td>
                            </tr>

                        </table>
                        <div class="links">
                            <button class="follow">Edit Profil</button>
                            <!-- <button class="view">View profile</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="top">
                <a href="javascript:history.back()">
                    <span><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></span>
                </a>
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profil</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/cards-style.css" rel="stylesheet" type="text/css">

</head>
<style>
    body {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e4f5fc+0,bfe8f9+50,9fd8ef+51,2ab0ed+100;Blue+Gloss+%235 */
        background: #e4f5fc;
        /* Old browsers */
        background: -moz-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4f5fc', endColorstr='#2ab0ed', GradientType=0);
        /* IE6-9 */

        background-size: cover;

    }

    #top a {
        padding: 5px;
        background-color: #ffeaa7;
        color: black;
        border-radius: 50%;
        position: fixed;
        float: left;
        text-align: left;
        left: 10;
        bottom: 1rem;
        margin-top: 20px;

    }

    #top i {
        float: left;
        right: 70%;
        color: aquamarine;
    }
</style>

<body>
    <nav class="navbar-fixed-top">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="beranda.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="berita.php">
                        <span class="icon"><i class="fa fa-newspaper" aria-hidden="true"></i></span>
                        <span class="text">Berita</span>
                    </a>

                </li>
                <li class="list">
                    <a href="pesan.php">
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
                <li class="list active">
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

    <div class="hero-image">
        <div class="container">
            <!-- Nested Row within Card Body -->
            <br>
            <div class="row mx-auto">
                <div class="card mx-auto">
                    <div class="img">
                        <img src="../assets/img/avatar-cewek.png">
                    </div>
                    <div class="infos">
                        <div class="name">
                            <h2>Dewi Puji  |  <b>Wali Murid</b></h2>
                            
                        </div>
                        <p class="text">

                        </p>
                        <table class="table table-borderless padding-large stats">
                            <tr>
                                <th>Nama Lengkap</th>
                                <th> : </th>
                                <td>Dewi Puji</td>

                            </tr>
                            <tr>
                                <th>Nama Anak</th>
                                <th> : </th>
                                <td>Putri Agustina</td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <th> : </th>
                                <td>0812345678778</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th> : </th>
                                <td>Surabaya, Jawa Timur.</td>
                            </tr>

                        </table>
                        <div class="links">
                            <button class="follow">Edit Profil</button>
                            <!-- <button class="view">View profile</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="top">
                <a href="javascript:history.back()">
                    <span><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></span>
                </a>
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