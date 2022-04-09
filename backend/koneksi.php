<?php
$koneksi = mysqli_connect("localhost", "root", "", "buku_hubung");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
// cara panggil class di koneksi php
class Koneksi{
    public function DBConnect(){
        $dbhost = 'localhost'; // set the hostname
        $dbname = 'tutorial_phpoop'; // set the database name
        $dbuser = 'root'; // set the mysql username
        $dbpass = '';  // set the mysql password

        try {
            $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $dbConnection->exec("set names utf8");
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return  $dbConnection;
        }
        catch (PDOException $e) {
            return 'Connection failed: ' . $e->getMessage();
        }
    }
}
?>