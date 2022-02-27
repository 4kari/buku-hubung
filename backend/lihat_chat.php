<?php
require 'connect.php';
session_start();
$username = $_SESSION['user'];
$id = $_GET['id'];
//mendapatkan seluruh data pesan dari tiap chat
$query = $conn->query("SELECT * FROM pesan WHERE id_chat = $id" , PDO::FETCH_ASSOC);
$data_pesan = $query->fetch();
//=======================//
//untuk tampilan nanti ada kondisi jika username = pengirim maka warnanya berbeda

?>