<?php
$con = mysqli_connect("localhost","root","","sepakbola");

// mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
?>