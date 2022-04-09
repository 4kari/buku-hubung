<?php
require 'koneksi.php';
session_start();
if($_SESSION['level']!=2){
    header('location:../backend/auth.php');
}

?>