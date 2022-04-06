<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kotak Masuk</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/css/style-tulis-pesan.css" rel="stylesheet">
    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">

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
        padding: 1px;
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

    .top {
        margin-top: -60px;
    }
</style>

<body>
    <nav class="top">
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
    <div id="top">
        <a href="javascript:history.back()">
            <span><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></span>
        </a>
    </div>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <form class="chat" method="post" action="">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kirim kepada:</label>
                                        <select class="form-control">
                                            <option>Pilih</option>
                                            <option>Hartiningsih</option>
                                            <option>Rika Wahyuni</option>
                                            <optio>Agus Muhammad</optio>
                                            <option>Dewi Astutik</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="chat-history">
                            <ul class="m-b-0">
                                <li class="clearfix">

                                </li>
                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <div class="form-row mb-4">
                                <div class="col col-12">
                                    <textarea rows="2" placeholder="Tulis pesan disini..." class="form-control"></textarea>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-sm float-right mt-1">
                                        <i class="fa fa-paper-plane"></i>
                                        kirim
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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