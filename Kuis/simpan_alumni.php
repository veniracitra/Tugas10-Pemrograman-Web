<?php
include ("koneksi.php");

if(isset($_POST ["simpan"])) {
    $posted    = date("Y-m-d");
    $name      = $_POST["name"];
    $address   = $_POST["alamat"];
    $email     = $_POST["email"];
    $angkatan  = $_POST["angkatan"];
    $jurusan   = $_POST["jurusan"];
    $username  = $_POST["username"];
    $password  = $_POST["password"];

    $sql    = "INSERT alumni SET posted='$posted',name='$name',address='$address',email='$email', angkatan='$angkatan', jurusan='$jurusan', username='$username', password='$password'";

    $simpan = mysqli_query($conn,$sql);
    header("location : cetak data.php");
}
?>
