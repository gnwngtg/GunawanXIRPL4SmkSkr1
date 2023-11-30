<?php
require "koneksi.php";
$koneksi = $con;
function insert_pemain($function){
    $nama = $_POST["nama"];
    $negara_asal = $_POST["negara_asal"];
    $posisi = $_POST["posisi"];
    $no_punggung = $_POST["no_punggung"];
    $input = "INSERT INTO pemain(nama, negara_asal, posisi, no_punggung) VALUES ('$nama','$negara_asal','$posisi','$no_punggung')";
    mysqli_query($function, $input);
    echo "<script>alert('Data telah tersimpan.');
    document.location='index.php'</script>";
    }
    if(isset($_POST["simpan"])){
        insert_pemain($koneksi);
    }
?>