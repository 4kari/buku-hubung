<?php 
require '../koneksi.php';
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$mapel = $_POST['mapel'];
$nilai = $_POST['nilai'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE skor SET mapel='$mapel', nilai='$nilai' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../skor-harian.isi.php");
?>