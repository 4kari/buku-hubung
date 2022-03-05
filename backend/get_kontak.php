<?php
// echo "<BR>";
// echo "<BR>";
// echo "<BR>";
// echo "<BR>";
require 'connect.php';
session_start();
if(!isset($_SESSION['username'])){header('location:auth.php');}

$username = $_SESSION['username'];
//mendapatkan seluruh data chat
$data=[];
if($_SESSION['level']==1){
    $wali = $conn->query("SELECT * FROM wali WHERE username != '$username'" , PDO::FETCH_ASSOC)->fetchAll();
    foreach($wali as $w){
        $id    =$w['id'];
        $w['level'] ='wali';
        $chat       = $conn->query("SELECT * FROM chat WHERE id_guru = '$username' and id_wali = '$id'" , PDO::FETCH_ASSOC)->fetch();
        if($chat){
            $chat = $chat['id'];
            $w['chat']=$chat;
            $w['pesan'] = count($conn->query("SELECT * FROM pesan WHERE id_chat = '$chat' and terbaca IS NULL" , PDO::FETCH_ASSOC)->fetchAll());
        }else{
            $w['pesan'] = 0;
        }
        array_push($data,$w);
    }
}
if($_SESSION['level']==2){
    $username = $conn->query("SELECT * FROM wali WHERE username = '$username'" , PDO::FETCH_ASSOC)->fetch()['id'];
    $guru = $conn->query("SELECT * FROM guru WHERE username != '$username'" , PDO::FETCH_ASSOC)->fetchAll();
    foreach($guru as $g){
        $nip    =$g['nip'];
        $g['level'] ='guru';
        $chat       = $conn->query("SELECT * FROM chat WHERE id_wali = '$username' and id_guru = '$nip'" , PDO::FETCH_ASSOC)->fetch();
        if($chat){
            $chat = $chat['id'];
            $g['chat']=$chat;
            $g['pesan'] = count($conn->query("SELECT * FROM pesan WHERE id_chat = '$chat' and terbaca IS NULL" , PDO::FETCH_ASSOC)->fetchAll());
        }else{
            $g['pesan'] = 0;
        }
        array_push($data,$g);
    }
}

//=======================//


?>