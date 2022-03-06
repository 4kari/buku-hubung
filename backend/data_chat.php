<?php
require 'connect.php';

session_start();
$username = $_SESSION['user'];
//mendapatkan seluruh data chat
$query = $conn->query("SELECT * FROM chat WHERE
id_guru = (SELECT nip FROM guru WHERE username = '$username') or 
id_wali = (SELECT id FROM wali WHERE username = '$username')" , PDO::FETCH_ASSOC);
$data_chat = $query->fetch();
//=======================//


?>