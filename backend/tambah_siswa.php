<?php 
// include "connect.php";
require "koneksi.php";
// proses tambah berita
if(!empty($_GET['aksi'] == 'tambah'))
{
    if(isset($_POST['nama']) and isset($_POST['kelas'])){ // Memeriksa apakah inputan judul dan pengarang ada atau tidak
        $nama = $_POST['nama']; // membuat variabel judul untuk menampung data inputan judul
        $kelas = $_POST['kelas']; // membuat variabel pengarang untuk menampung data inputan pengarang
        $absen = $_POST['absen'];
        $no_hp =$_POST['no_hp'];
        $wali_id = $_POST['wali_id'];
        //$tgl = date('Y-m-d');
    
        $sql="INSERT INTO siswa (nama, kelas, absen, no_hp, wali_id) VALUES ('$nama','$kelas','$absen','$no_hp','$wali_id')";
        if ($koneksi->query($sql) === TRUE) {
            echo '<script>alert("Tambah Data Berhasil");window.location="../wali/beranda.php"</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
          }
          
          $koneksi->close();
    }
}
?>