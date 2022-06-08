<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "webalumni";

$conn = mysqli_connect($host,$user,$pass,$dbname) or die("Koneksi gagal dibangun".$dbname.mysqli_connect_error());

?>
