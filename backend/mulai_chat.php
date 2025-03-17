<?php

require 'connect.php';

session_start();
$username = $_SESSION['username'];
$user2 = $_GET['username'];
//menambahkan pesan ke tabel pesan berdasarkan id_chat
$sql    = "INSERT INTO chat (id_guru, id_wali) VALUES (:id_guru, :id_wali)";
$query  = $conn->prepare($sql);
$id=0;
if($_SESSION['level']==1){
    $id_wali = $conn->query("SELECT * FROM wali WHERE username = '$user2'" , PDO::FETCH_ASSOC)->fetch()['id'];
    // $query->execute(array(
    //     ':id_guru' => $username,
    //     ':id_wali' => $id_wali,
    // ));
    $id = $conn->query("SELECT * FROM chat WHERE id_guru = '$username' and id_wali = '$id_wali'" , PDO::FETCH_ASSOC)->fetch()['id'];
}else{
    $id_wali = $conn->query("SELECT * FROM wali WHERE username = '$username'" , PDO::FETCH_ASSOC)->fetch()['id'];
    // $query->execute(array(
    //     ':id_guru' => $user2,
    //     ':id_wali' => $id_wali
    // ));
    $id = $conn->query("SELECT * FROM chat WHERE id_guru = '$user2' and id_wali = '$id_wali'" , PDO::FETCH_ASSOC)->fetch()['id'];
}
header("location:../../pesan.php/?id=".$id);
//=======================//

?>