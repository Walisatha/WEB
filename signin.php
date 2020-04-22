<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style type="text/css" media="screen">
.card {
  background-color:rgb(255, 255, 255, 0.6);
}  
</style>
    <title>GUDANG BERAS</title>
  </head>
  <body>
<div class="container">
    <div class="card" style="width: 10rem; margin: auto; width: 50%; margin-top: 2%;">
  <div class="card-body">
    <h5 class="card-title"><center><i class="fa fa-users fa-3x" aria-hidden="true"></i><br><br><h3>DAFTAR ANGGOTA BARU</h3></center></h5><hr>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <form action="" method="post" accept-charset="utf-8">
      <label for=""><b>Nama</b></label>
      <input type="text" class="form-control" name="nama" placeholder="Nama" style="height:2.5rem;" required>
      <label for=""><b>Username</b></label>
      <input type="text" class="form-control" name="user" placeholder="Username" style="height:2.5rem;" required>
      <label for=""><b>Password</b></label>
      <input type="password" class="form-control" name="pass" placeholder="Password" style="height:2.5rem;" required>
      <label for=""><b>Jenis Kelamin</b></label>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Laki-laki">
  <label class="form-check-label" for="inlineRadio1">LAKI - LAKI </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="perempuan">
  <label class="form-check-label" for="inlineRadio2">PEREMPUAN</label>
</div><br><br>
      <button type="submit" class="btn btn-primary" name="login">Daftar Sekarang</button>
    </form>
  </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include "koneksi.inc.php";
if (isset($_POST["login"])) {
$user=$_POST['nama'];
$usern=$_POST['user'];
$pass=$_POST['pass'];
$radio=$_POST['radio'];
$sql = mysqli_query($conn,"INSERT INTO user VALUES('','$user','$usern','$pass','$radio')");
if ($sql) {
  echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mendaftarkan Account Baru');
     window.location.href='index.php';
     </script>");
}else{
  echo "gagal";
}
}
?>