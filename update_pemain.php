<?php

//memanggil file koneksi.php
require "koneksi.php";

//memanggil parameter berdasarkan data yang dipilih pada halaman manajemen pemain
$id_pemain = $_GET['id_pemain'];

//mengambil data dari database menggunakan paramater id atau primary key
$queryAmbilData = mysqli_query($con, "SELECT * FROM pemain WHERE id_pemain='$id_pemain'");
$data = mysqli_fetch_array($queryAmbilData);

    //proses update data pemain
    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $negara_asal = $_POST['negara_asal'];
        $posisi = $_POST['posisi'];
        $no_punggung = $_POST['no_punggung'];

            //query update data pemain
            $query = mysqli_query($con,"UPDATE pemain SET nama='$nama', negara_asal='$negara_asal', posisi='$posisi', no_punggung='$no_punggung' WHERE id_pemain='$id_pemain'");
            if($query){
                echo "<script>alert('Data telah terupdate');
                document.location='index.php'</script>";
            }
            else{
                echo mysqli_error($con);
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Update Data Pemain</h3>
        <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pemain</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $data['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="negara_asal" value="<?php echo $data['negara_asal']; ?>">
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="posisi" value="<?php echo $data['posisi']; ?>">
        </div>
        <div class="mb-3">
            <label for="no_punggung" class="form-label">No Punggung</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="no_punggung" value="<?php echo $data['no_punggung']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>