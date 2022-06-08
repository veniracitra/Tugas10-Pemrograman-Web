<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "db_siswa";
$conn    = mysqli_connect($host, $user, $password, $database) or die("Koneksi gagal terhubung".$database.mysqli_connect_error()) ;

?>
