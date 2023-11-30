<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <style>
       .header{
           width: 90%;
           height: 100px;
           background-color: black;
           color:white;
           text-align: center;
           line-height: 40px;
           margin: 25px auto;
       }

        .navigasi{
            width: 90%;
            height: 50px;
            background-color: blue;
            margin: 25px auto;
            color:white;
            display: flex;
            justify-content:space-around;
    }

         .navigasi ul{
            display: flex;
            list-style: none;
         }

         .navigasi ul li{
            margin-right: 10px;
        }

        .nav ul li a{
            text-decoration: none;
        }
    </style>
</head>
<body>
   <div class="header">
    <h1>My WEBSITE</h1>
    <P>selamat datang di website smk sangkuriang 1 cimahi</P>
   </div>
   <div class="navigasi">
    <h3>logo</h3>
    <ul>
        <li><a href="">home</a></li>
        <li><a href="">galleri</a></li>
        <li><a href="">login</a></li>

    </ul>
    </div>
    <?php

//memanggil file koneksi.php
require "koneksi.php";

// query Read atau View data pemain
$query = mysqli_query($con, "SELECT * FROM pemain");
$jumlahPemain = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Data Pemain</title>
    
</head>
<body>
    
    <a href="form_pemain.php" class="btn btn-primary mt-4 mb-3">Input Data Pemain</a>
        <h3 class="mt-3">Data Pemain</h3>
<table border="1">
<thead>
<tr>
<th>No</th>
<th>Nama Pemain</th>
<th>Negara Asal</th>
<th>Posisi</th>
<th>No Punggung</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
//pengecekan data jika data kosong
if($jumlahPemain==0){
?>
<tr>
<td colspan=6 class="text-center">Data Kosong</td>
</tr>
<?php
}
else{
//membuat urutan atau no dengan menggunakan increment
$jumlah = 1;
//menampilkan data pemain dalam bentuk tabel menggunakan perulangan(while)
while($data=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $jumlah; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['negara_asal']; ?></td>
<td><?php echo $data['posisi']; ?></td>
<td><?php echo $data['no_punggung']; ?></td> 
<td>
<a href="update_pemain.php?id_pemain=<?php echo $data['id_pemain']; ?>" class="btn btn-primary"> Update </a>
<a href="hapus_pemain.php?id_pemain=<?=$data['id_pemain']?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
</td>
</tr>
<?php
//increment untuk mengurutkan no dari 1 sampai terbesar
$jumlah++;
}
}
?>
</tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>