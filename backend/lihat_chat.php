<?php
require 'connect.php';
session_start();
$username = $_SESSION['username'];
$id = $_GET['id'];
echo $id;
//mendapatkan seluruh data pesan dari tiap chat
$query = $conn->query("SELECT * FROM pesan WHERE id_chat = $id" , PDO::FETCH_ASSOC);
$data_pesan = $query->fetchAll();
//=======================//
// update pesan terbaca
$sql    = "UPDATE pesan SET terbaca=1 WHERE id_chat = $id AND Pengirim!='$username' AND terbaca IS NULL";
$conn->prepare($sql)->execute();

?>