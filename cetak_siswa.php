<?php
include ("koneksi.php");

if(isset($_POST ["simpan"])) {
    $nama        = $_POST["nama"];
    $kelas     = $_POST["kelas"];
    $alamat  = $_POST["alamat"];

    $sql    = "INSERT tb_siswa SET nama='$nama',kelas='$kelas', alamat='$alamat'";

    $simpan = mysqli_query($conn,$sql);
    header("Location : pendaftaran.html");
}
?>
