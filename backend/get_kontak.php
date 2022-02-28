<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['username'])){header('location:auth.php');}

$username = $_SESSION['username'];
//mendapatkan seluruh data chat
$guru = $conn->query("SELECT * FROM guru WHERE username != '$username'" , PDO::FETCH_ASSOC)->fetchAll();
$wali = $conn->query("SELECT * FROM wali WHERE username != '$username'" , PDO::FETCH_ASSOC)->fetchAll();
$data=array();
foreach($guru as $g){array_push($data,$g);}
foreach($wali as $w){array_push($data,$w);}
//=======================//
var_dump($data);


?>