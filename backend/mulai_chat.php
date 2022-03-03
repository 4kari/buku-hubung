<?php

require 'connect.php';

session_start();
$username = $_SESSION['user'];
$user2 = $_get['username'];

//menambahkan pesan ke tabel pesan berdasarkan id_chat
$sql    = "INSERT INTO chat (id_guru, id_wali) VALUES (:id_guru, :id_wali)";
$query  = $conn->prepare($sql);
$id=0;
if($_SESSION['level']==1){
    $query->execute(array(
        ':id_guru' => $username,
        ':id_wali' => $user2,
    ));
    $id = $conn->query("SELECT * FROM chat WHERE id_guru = '$username' and id_wali = '$user2'" , PDO::FETCH_ASSOC)->fetch()['id'];
}else{
    $query->execute(array(
        ':id_guru' => $user2,
        ':id_wali' => $username,
    ));
    $id = $conn->query("SELECT * FROM chat WHERE id_guru = '$user2' and id_wali = '$username'" , PDO::FETCH_ASSOC)->fetch()['id'];
}
header("location:../pesan.php/?id=".$id);
//=======================//

?>