<?php

session_start();
if($_SESSION){
    if($_SESSION['level']==1){
        // ke halaman guru
        header('location:../guru/beranda.php');
    }
    if($_SESSION['level']==2){
        // ke halaman wali
        header('location:../Wali/beranda.php');
    }
}else{
    // ke halaman login
    header('location:../login.php');
}

?>