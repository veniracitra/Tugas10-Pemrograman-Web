<?php
include ("koneksi.php");

if(isset($_POST ["simpan"])) {
    $name        = $_POST["name"];
    $email       = $_POST["email"];
    $address     = $_POST["alamat"];
    $TahunLulus  = $_POST["tahun"];
    $pekerjaan   = $_POST["pekerjaan"];
    $message     = $_POST["message"];

    $sql    = "INSERT pesanalumni SET name='$name',email='$email', address='$address', TahunLulus='$TahunLulus', pekerjaan='$pekerjaan', message='$message'";

    $simpan = mysqli_query($conn,$sql);
    header("location: cetak data.php");
}
?>
