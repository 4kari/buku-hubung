<?php
require 'connect.php';
        
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $user = $_POST['username'];
        $pass = MD5($_POST['password']);

        $query    = $conn->query("SELECT * FROM user WHERE username = '$user' and password = '$pass'", PDO::FETCH_ASSOC);
        $data     = $query->fetch();
        $num_rows = $query->rowCount();
        if ($num_rows > 0) {
            session_start();

            $_SESSION['user'] = $data['nama'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header('location:auth.php');
        }else {
            // $message="* Username atau Password salah";
        }
    }else{
        // $message="* Silahkan isi Username dan Password dengan benar"
    }

?>