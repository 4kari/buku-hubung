<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kotak Masuk</title>

    <link href="../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../assets/css/style-pesan.css" rel="stylesheet">
    <link href="../assets/navbar-style.css" rel="stylesheet" type="text/css">

</head>
<style>
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
        margin-left: 1rem;

    }

    #top i {
        float: left;
        right: 70%;
        color: aquamarine;
    }

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
</style>

<body>
    <!-- Button back -->
    <div id="top">
        <a href="javascript:history.back()">
            <span><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></span>
        </a>
    </div>
    <div class="top">
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
                    <li class="list active">
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
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-center">
            <div class="col col-md-6">
                <div class="card col-md-12 mt-4">
                    <div class="col col-md-12 mt-4 text-right">
                        <h4><a href="tulis-pesan.php">Tulis pesan <i class="far fa-edit"></i></a></h4>
                    </div>
                    <div id="plist" class="people-list">

                        <ul class="list-unstyled chat-list mt-2 mb-0">

                            <li class="clearfix active">
                                <img class="img-thumbnail" src="../assets/img/avatar-cewek.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Hartiningsih</div>
                                    <div class="status"> <i class="fa fa-circle online"></i><a href="pesan.php">1 Pesan baru</a></div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="img-thumbnail" src="../assets/img/avatar-cewek.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Rika Wahyuni</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i></i><a href="pesan.php">0 Pesan baru</a></div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="img-thumbnail" src="../assets/img/avatar-profil.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Agus Muhammad</div>
                                    <div class="status"> <i class="fa fa-circle online"></i></i><a href="pesan.php">2 Pesan baru</a></div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="img-thumbnail" src="../assets/img/avatar-cewek.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Dewi Astutik</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i></i><a href="pesan.php">0 Pesan baru</a></div>
                                </div>
                            </li>


                        </ul>
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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>