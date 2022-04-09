<?php
require 'connect.php';
session_start();
if (isset($_SESSION['level'])) {
  header('location:auth.php');
}

if (isset($_POST['nama']) &&  isset($_POST['kelas']) && isset($_POST['absen']) && isset($_POST['no_hp'])) {
    $nama       = $_POST['nama'];
    $kelas     = $_POST['kelas'];
    $no_hp      = $_POST['no_hp'];
    $id   = $_POST['id'];
    $absen   = $_POST['absen'];

    $sql    = "INSERT INTO siswa (nama,kelas,absen,no_hp,wali_id) VALUES (:nama, :kelas, :absen, :no_hp, :wali_id)";
    $query  = $conn->prepare($sql);
    $query->execute(array(
        ':nama' => $nama,
        ':kelas' => $kelas,
        ':absen' => $absen,
        ':no_hp'  => $no_hp,
        ':wali_id'=>$id
    ));
    if ($query) {
        header('location:auth.php');
    }
}

?>