<?php

session_start();
if($_SESSION['level']==1){
    // ke halaman guru
    header('location:../profil-user.php');
}elseif($_SESSION['level']==2){
    // ke halaman wali
    header('location:../profil-wali.php');
}else{
    // ke halaman login
    header('location:../login.php');
}
?>