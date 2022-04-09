<?php 
// include "connect.php";
require "koneksi.php";
// proses tambah berita
if(!empty($_GET['aksi'] == 'tambah'))
{
    if(isset($_POST['mapel']) and isset($_POST['nilai'])){ // Memeriksa apakah inputan judul dan pengarang ada atau tidak
        $id_siswa = $_POST['id_siswa']; // membuat variabel judul untuk menampung data inputan judul
        $mapel = $_POST['mapel']; // membuat variabel pengarang untuk menampung data inputan pengarang
        $nilai = $_POST['nilai'];
    
        $sql="INSERT INTO skor (id_siswa, mapel, nilai) VALUES ('$id_siswa','$mapel','$nilai')";
        if ($koneksi->query($sql) === TRUE) {
            echo '<script>alert("Tambah Data Berhasil");window.location="../guru/skor-harian.php"</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
          }
          
          $koneksi->close();
    }
}

// proses tambah berita
if(!empty($_GET['aksi'] == 'tambah_nilai'))
{
    if(isset($_POST['saran']) and isset($_POST['jenis'])){ // Memeriksa apakah inputan judul dan pengarang ada atau tidak
        $id_siswa = $_POST['id_siswa']; // membuat variabel judul untuk menampung data inputan judul
        $saran = $_POST['saran']; // membuat variabel pengarang untuk menampung data inputan pengarang
        $jenis = $_POST['jenis'];
        $tanggal = date('m');
    
        $sql="INSERT INTO penilaian_siswa (id_siswa, saran, jenis, tanggal) VALUES ('$id_siswa','$saran','$jenis','$tanggal')";
        if ($koneksi->query($sql) === TRUE) {
            echo '<script>alert("Tambah Data Berhasil");window.location="../guru/skor-karakter.php"</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
          }
          
          $koneksi->close();
    }
}
?>