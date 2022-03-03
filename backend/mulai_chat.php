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
    
}else{
    $query->execute(array(
        ':id_guru' => $user2,
        ':id_wali' => $username,
    ));
}

//=======================//

?>