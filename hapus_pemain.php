<?php
require "koneksi.php";
 $id_pemain = $_GET['id_pemain'];
 $query = mysqli_query($con, "DELETE FROM pemain WHERE id_pemain='$id_pemain'");
 if($query){
 echo "<script>alert('Data berhasil dihapus!.');
 document.location='index.php'</script>";
}else{
 echo "<script>alert('Data gagal dihapus!.');
 document.location='index.php'</script>";
}
?>