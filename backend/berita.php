
<?php 
include "koneksi.php";
// proses tambah berita
if(!empty($_GET['aksi'] == 'tambah'))
{
    if(isset($_POST['judul_berita']) and isset($_POST['deskripsi'])){ // Memeriksa apakah inputan judul dan pengarang ada atau tidak
        $judul_berita = $_POST['judul_berita']; // membuat variabel judul untuk menampung data inputan judul
        $tanggal_post = date('Y-m-d');
        $deskripsi = $_POST['deskripsi']; // membuat variabel pengarang untuk menampung data inputan pengarang
        $tipe_berita = $_POST['tipe_berita'];
    
        $sql="INSERT INTO berita (judul_berita, tanggal_post, deskripsi, tipe_berita) VALUES ('$judul_berita','$tanggal_post','$deskripsi','$tipe_berita')";
        if ($koneksi->query($sql) === TRUE) {
            echo '<script>alert("Tambah Data Berhasil");window.location="../guru/berita.php"</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
          }
          
          $koneksi->close();
    }
}
?>