<?php
include ("koneksi.php");
$sql=mysqli_query($conn, "SELECT * FROM tb_siswa") or die("Proses cetak gagal");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAENDAFTARAN SISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
</head>
<body>
  <div class="container">
    <h1  class="text-bg-dark p-3 mt-4 text-center">DATA SISWA BARU</h1>
    <table class="table table-info table-bordered p-3 mt-4">
      <tr class="table table-light text-center">
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Alamat</th>
      </tr>
      <tr>
      <?php 
      $no=1;
      while ($hasil= mysqli_fetch_row($sql)){ 
      echo "<tr>
      <td>$no</td>
      <td>$hasil[1]</td>
      <td>$hasil[2]</td>
      <td>$hasil[3]</td>
      </tr>";
      $no++;
      }
      ?>
  </tr>   
    </table>
        <a href="pendaftaran.html" role="button" class="btn btn-success mt-3">DAFTAR</a>
        <a href="reportdataexcel.php" role="button" class="btn btn-danger mt-3">EXPORT EXCEL</a>

  </div> 
</body>
</html>
