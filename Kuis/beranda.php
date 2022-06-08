<html>
<head>
    <title>BERANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <?php
    
    include("koneksi.php");
    $identification = $_GET["idn"];

    $sql = mysqli_query($conn,"SELECT * FROM alumni WHERE id='$identification'");

    $hasil = mysqli_fetch_assoc ($sql);
    
    ?>
<h2>Selamat datang  <?php echo $hasil["name"]; ?>, <?php echo date("l jS F Y "); ?></h2>
    <h3>Menu</h3>
        <a href="pesan alumni.html" role="button" class="btn btn-primary mt-3">INPUT PESAN ALUMNI</a>
        <a href="cetak data.php?idn=<?php echo $identification; ?>" role="button" class="btn btn-secondary mt-3">LIHAT PESAN ALUMNI</a>
        <a href="login.php" role="button" class="btn btn-danger mt-3">LOG OUT</a>
      
</body>
</html>
