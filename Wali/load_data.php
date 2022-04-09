<?php 
require 'koneksi.php';
require 'auth.php';
$data = mysqli_query($koneksi, "SELECT * FROM wali WHERE username='$username'");
while ($result = mysqli_fetch_array($data)) {
    $id = $result['id'];
}

?>