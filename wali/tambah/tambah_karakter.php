<?php
require '../koneksi.php';
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../assets/css/navbar-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e4f5fc+0,bfe8f9+50,9fd8ef+51,2ab0ed+100;Blue+Gloss+%235 */
        background: #e4f5fc;
        /* Old browsers */
        background: -moz-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #e4f5fc 0%, #bfe8f9 50%, #9fd8ef 51%, #2ab0ed 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4f5fc', endColorstr='#2ab0ed', GradientType=0);
        /* IE6-9 */

        background-size: cover;

    }
</style>

<body>
    <nav class="navbar-fixed-top">
        
    </nav>
    <div class="container">
        <div class="row">
            <div class="container mt-5 mb-5 d-flex justify-content-center">
                <div class="card px-1 py-4">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Tambahkan nilai siswa</h6>
                        <form action="../../backend/nilai.php?aksi=tambah_nilai" method="POST">
								
								
                                
								<div class="form-group">
                                    <label for="">Pilih Siswa</label>
									<select class="form-control" name="id_siswa" id="id_siswa">
                                        <?php 
                                        $data = mysqli_query($koneksi, "select * from siswa");
                                        while ($result = mysqli_fetch_array($data)) {
                                        ?>
                                        <option class="form-control" value="<?= $result['id'];  ?>"><?= $result['nama']; ?></option>
                                        <?php } ?>
                                    </select>
								</div>
                                <div class="form-group">
                                    <label for="">Pilih Karakter</label>
									<textarea class="form-control" name="saran" id="" cols="30" rows="10"></textarea>
								</div>
                                <div class="form-group">
									<label>Nilai Karakter</label>
									<select class="form-control" name="jenis" id="jenis">
                                        <option value="SANGAT BAIK">SANGAT BAIK</option>
                                        <option value="BAIK">BAIK</option>
                                        <option value="CUKUP">CUKUP</option>
                                    </select>
								</div>
                                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
                                    <small class="agree-text">Pastikan semua data yang di inputkan sudah benar!</small> 
                                    <div class="inline text-center px-5 mt-3 mb-3"> 
                                        <a href="../skor-karakter.php" class="btn btn-warning btn-md" name="create"><i class="fa fa-close"></i> Cancel</a>
                                     
                                        <button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"></i> Tambah</button>
                                    </div>
                                    
                                </div>
						</form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>