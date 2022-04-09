<?php
session_start();
$_SESSION=array();
var_dump($_SESSION);
header('location:auth.php');
?>