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
    <title>TOKO SEJAHTERA</title>
  </head>
  <body>
<div class="container">
    <div class="card" style="width: 10rem; margin: auto; width: 40%; margin-top: 15%;">
  <div class="card-body">
    <h5 class="card-title"><center><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"> LOGIN</i></center></h5><hr>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <form action="" method="post" accept-charset="utf-8">
      <input type="text" class="form-control" name="user" placeholder="Username" style="height:2.5rem;">
      <input type="password" class="form-control" name="pass" placeholder="Password" style="height:2.5rem;">
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <p>Belum punya akun ? <a href="signin.php">Buat akun</a>
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
if (isset($_POST["submit"])) {
session_start();
include "koneksi.inc.php";
$user=$_POST['user'];
$pass=$_POST['pass'];
$login = mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($login);
$data=mysqli_fetch_assoc($login);
if ($cek == 1) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    // alihkan ke halaman dashboard admin
    header("location:dist/dashboard.php");
}
}
?>