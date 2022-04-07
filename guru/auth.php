<?php

session_start();
if($_SESSION['level']!=1){
    header('location:../backend/auth.php');
}

?>