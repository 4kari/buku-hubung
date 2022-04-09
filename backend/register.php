<?php
require 'connect.php';
session_start();
if (isset($_SESSION['level'])) {
  header('location:auth.php');
}

if (isset($_POST['nama']) && (isset($_POST['username']) || isset($_POST['nip'])) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['password']) && isset($_POST['level'])) {
    $nama       = $_POST['nama'];
    if(isset($_POST['username'])){$username = $_POST['username'];}
    if(isset($_POST['nip'])){$username = $_POST['nip']; $nip = $_POST['nip'];}
    $alamat     = $_POST['alamat'];
    $no_hp      = $_POST['no_hp'];
    $password   = MD5($_POST['password']);
    $level   = $_POST['level'];
    
    $query = $conn->query("SELECT * FROM user WHERE username = '$username'", PDO::FETCH_ASSOC);
    $data_user = $query->fetch();
    if($data_user){
        echo "A";
        header('location:auth.php');
        // $message = "Username sudah ada";
    }else{
        echo "B";
        //waktu sekarang
        $t  =time();
        $tgl=date("Y-m-d",$t);
        $sql    = "INSERT INTO user (username,password,level,tanggal_buat) VALUES (:username, :password, :level, :tgl)";
        $query  = $conn->prepare($sql);
        $query->execute(array(
            ':username' => $username,
            ':password' => $password,
            ':level' => $level,
            ':tgl'  => $tgl
        ));
        if($level==1){
            echo "C";
            //guru
            $query = $conn->query("SELECT * FROM guru WHERE nip = '$nip'", PDO::FETCH_ASSOC);
            $data_guru = $query->fetch();

            if($data_guru){
                $message="data guru sudah ada";
            }else{
                $sql    = "INSERT INTO guru (username,nama,alamat,no_hp,nip) VALUES (:username, :nama, :alamat, :no_hp, :nip)";
                $query  = $conn->prepare($sql);
                $query->execute(array(
                    ':username' => $username,
                    ':nama' => $nama,
                    ':alamat'    => $alamat,
                    ':no_hp'      => $no_hp,
                    ':nip'      => $nip
                ));
            }
        }
        if($level==2){
            echo "D";
            //wali
            $query = $conn->query("SELECT * FROM wali WHERE username = '$username'", PDO::FETCH_ASSOC);
            $data_wali = $query->fetch();

            if($data_wali){
                $message="data guru sudah ada";
            }else{
                $sql    = "INSERT INTO wali (username,nama,alamat,no_hp) VALUES (:username, :nama, :alamat, :no_hp)";
                $query  = $conn->prepare($sql);
                $query->execute(array(
                    ':username' => $username,
                    ':nama' => $nama,
                    ':alamat'    => $alamat,
                    ':no_hp'      => $no_hp,
                ));
            }
        }

        if ($query) {
            $wali = $conn->query("SELECT * FROM wali WHERE username = '$username'", PDO::FETCH_ASSOC)->fetch();
            $id=$wali['id'];
            header("location:../daftar-siswa.php/?id=".$id);
        }
    }
}

?>