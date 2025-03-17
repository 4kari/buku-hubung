<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pesan</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style-tulis-pesan.css" rel="stylesheet">

    <style>
        body {
        margin: 0 auto;
        max-width: 800px;
        padding: 0 20px;
        }

        .container {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
        }

        .darker {
        border-color: #ccc;
        background-color: #ddd;
        }

        .container::after {
        content: "";
        clear: both;
        display: table;
        }

        .container img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
        }

        .container img.right {
        float: right;
        margin-left: 20px;
        margin-right:0;
        }

        .time-right {
        float: right;
        color: #aaa;
        }

        .time-left {
        float: left;
        color: #999;
        }
    </style>
</head>

<body class="bg-gradient-light">
    <nav class="navbar navbar-expand-sm bg-light justify-content-right fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="kotak-masuk.php"><i class="fa fa-arrow-left" style="font-size:24px"> Back</i><span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
    <div class="m-5 p-1"></div>
    <h2>Chat Messages</h2>

    <!-- looping disini -->
    <div class="container">
        <img src="assets/img/avatar-cewek.png" alt="Avatar" style="width:100%;">
        <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
    </div>

    <div class="container darker">
        <img src="assets/img/avatar-profil.png" alt="Avatar" class="right" style="width:100%;">
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
    </div>

    <div class="m-4" style="position: fixed; bottom: 0px; right: 0px;">
        <button class="btn btn-primary" id="tombolchat" style="border-radius: 100%;" onClick="openForm()"><i class='fas fa-comments'></i></button>
    </div>

    <div class="m-4 p-2" style="position: fixed; bottom: 0px; right: 0px; display:none;" id="FormPesan">
        <form action="/backend/kirim_pesan.php" class="form-container">
            <h1>Chat</h1>
            <input type="hidden" name="id">id</input>
            <div class="form-group">
                <label for="msg"><b>Message</b></label>
                <textarea class="w-100 mt-4 mb-4 pt-2" style="height:200px" placeholder="Type message.." name="msg" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send</button>
            <button type="button" class="btn btn-danger" onclick="closeForm()">Close</button>
        </form>
    </div>


    <script>
    function openForm() {
        document.getElementById("FormPesan").style.display = "block";
        document.getElementById("tombolchat").style.display = "none";
        }

    function closeForm() {
        document.getElementById("FormPesan").style.display = "none";
        document.getElementById("tombolchat").style.display = "block";
    }
    </script>
        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>