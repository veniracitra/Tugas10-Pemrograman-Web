<?php
include ("koneksi.php");
$sql=mysqli_query($conn, "SELECT * FROM pesanalumni") or die("Proses cetak gagal");
$identification = $_GET["idn"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBALUMNI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
</head>
<body>
  <div class="container">
    <h1  class="text-bg-dark p-3 mt-4 text-center">PESAN ALUMNI</h1>
    <table class="table table-info table-bordered p-3 mt-4">
      <tr class="table table-light text-center">
          <th>No</th>
          <th>Posted</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>Tahun Lulus</th>
          <th>Pekerjaan</th>
          <th>Message</th>
          <th> </th>
          

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
      <td>$hasil[4]</td>
      <td>$hasil[5]</td>
      <td>$hasil[6]</td>
      <td>$hasil[7]</td>
      <td><a href='edit.php?id=".$hasil[0]."&pengguna=".$identification."' class='btn btn-success' role='button'>EDIT</a>  <a><a href='delete.php?id=".$hasil[0]."&pengguna=".$identification."' class='btn btn-danger' role='button'>HAPUS</a></td>
      </tr>";
      $no++;
      }
      ?>
  </tr>   
    </table>
        <a href="login.php" role="button" class="btn btn-success mt-3">INPUT</a>
        <a href="beranda.php?idn=<?php echo $identification; ?>" role="button" class="btn btn-danger mt-3">BACK</a>

  </div> 
</body>
</html>
