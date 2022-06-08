<?php
include("koneksi.php");

$id = $_GET["id"];
$pengguna = $_GET["pengguna"];
$sql = mysqli_query($conn,"SELECT * FROM pesanalumni WHERE id='$id'");
$array = mysqli_fetch_assoc($sql);


    if(isset($_POST ["simpan"])) {
        $posted      = date("Y-m-d");
        $name        = $_POST["name"];
        $email       = $_POST["email"];
        $address     = $_POST["alamat"];
        $TahunLulus  = $_POST["tahun"];
        $pekerjaan   = $_POST["pekerjaan"];
        $message     = $_POST["message"];
    
        $sql    = "UPDATE pesanalumni SET name='$name',email='$email', address='$address', TahunLulus='$TahunLulus', pekerjaan='$pekerjaan', message='$message'";
    
        $simpan = mysqli_query($conn,$sql);
        header("location: cetak data.php?idn=".$pengguna."");
    }
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
  <center><h1 class="col-sm-6 mt-2">PESAN ALUMNI</h1></center>
  <form action="" method="post">

      <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text" name="name" id="name" class="form-control "  placeholder="Nama Lengkap" value="<?php echo $array["name"]; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-3 mt-2 col-form-label">Email </label>
        <div class="col-sm-6 mt-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?php echo $array["email"]; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="alamat" class="col-sm-3 mt-3 col-form-label">Address </label>
        <div class="col-sm-6 mt-3">
        <textarea class="form-control mt-2" placeholder="Alamat" id="alamat" name="alamat"><?php echo $array["name"]; ?></textarea>
      </div>
      </div>

      <div class="form-group row">
        <label for="kota" class="col-sm-3 mt-2 col-form-label">Tahun Lulus</label>
        <div class="col-sm-6 mt-3">
          <input type="text" name="tahun" id="tahun" class="form-control"  placeholder="contoh :2019" value="<?php echo $array["TahunLulus"] ;?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label">Pekerjaan</label>
        <div class="col-sm-6 mt-3">
          <input type="text" name="pekerjaan" id="pekerjaan" class="form-control "  placeholder="Pekerjaan" value="<?php echo $array["pekerjaan"]; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="pesan" class="col-sm-3 mt-2 col-form-label">Message </label>
        <div class="col-sm-6 mt-3">
        <textarea class="form-control" placeholder="Message" id="message" name="message"><?php echo $array["message"]; ?></textarea>
      </div>
      </div>

      <div class="form-group mt-3 pb-5">
        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
    </div>
   
  </div>
    
</body>
</html>
