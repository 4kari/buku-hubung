<?php

if (isset($_POST['id_guru']) && isset($_POST['id_wali'])) {
    $guru = $_POST['id_guru'];
    $wali = $_POST['id_wali'];
    $query = $conn->query("SELECT * FROM chat WHERE id_guru = '$guru' and id_wali = '$wali'" , PDO::FETCH_ASSOC);
    $data_chat = $query->fetch();
    if($data_chat){
    }else{
        $sql    = "INSERT INTO chat (id_guru,id_wali) VALUES (:id_guru, :id_wali)";
        $query  = $conn->prepare($sql);
        $query->execute(array(
            ':id_guru' => $guru,
            ':id_wali' => $wali
        ));
    }
    // dialihkan ke halaman chat
}
?>