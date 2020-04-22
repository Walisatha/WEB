<?php
include "../koneksi.inc.php";
if (isset($_GET['id'])) {

$kode = $_GET['id'];
} else {
die ("Error. NO Id Selected! ");
}

?>
<html>
<head>

<title>Delete Barang</title>
</head>
<body>

<?php

//proses delete barang
if (!empty($kode) && $kode != "") {

$query = "DELETE FROM barang WHERE kd_sup='$kode'"; $sql = mysqli_query ($conn,$query); if ($sql) {

echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menghapus Barang');
     window.location.href='dashboard.php?page=barang';
     </script>");

} else {

echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menghapus');
     window.location.href='dashboard.php?page=barang';
     </script>");

}
} else {

die ("Access Denied");
}
?>
</body>

</html>
