<?php
require '../config/db_connect.php';

    if (isset($_POST['login']) && $_POST['login'] == "LOGIN" ) {

        $user = $_POST['user'];
        $pass = MD5($_POST['pass']);

        $query    = $conn->query("SELECT * FROM user WHERE username = '$user' and password = '$pass'", PDO::FETCH_ASSOC);
        $data     = $query->fetch();
        $num_rows = $query->rowCount();
        if ($num_rows > 0) {
            session_start();

            $_SESSION['user'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header('location:index.php');
        }else {
            $message="* Username atau Password salah";
        }
    }

?>