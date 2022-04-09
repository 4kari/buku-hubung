<?php

session_start();
<<<<<<< HEAD
if($_SESSION){
    if($_SESSION['level']==1){
        // ke halaman guru
        header('location:../guru/beranda.php');
    }
    if($_SESSION['level']==2){
        // ke halaman wali
        header('location:../wali/beranda.php');
    }
=======
if($_SESSION['level']==1){
    // ke halaman guru
    header('location:../guru/beranda.php');
}elseif($_SESSION['level']==2){
    // ke halaman wali
    header('location:../wali/beranda.php');
>>>>>>> cead4a3a6e27a1b59bcb9b597f075fc368124a05
}else{
    // ke halaman login
    header('location:../login.php');
}

?>