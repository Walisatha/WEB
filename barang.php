<h2 class="mt-4" style="color: grey;"><i class="fas fa-people-carry fa"></i> DATA SUPPLIER</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Supplier</li>
  </ol>
</nav>
<p>
  <i class="far fa-hand-point-right fa-lg"></i><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    INPUT SUPPLIER BARU
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form action="" method="post" accept-charset="utf-8">
        <div class="form-group">
    <label>Kode Supplier</label>
    <input type="number" class="form-control" name="kode" id="exampleFormControlInput1" placeholder="Kode Supplier" required>
  </div>
  <div class="form-group">
    <label>Nama Supplier</label>
    <input type="text" class="form-control" name="nama" id="exampleFormControlInput2" placeholder="Nama Supplier" required>
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alm" id="exampleFormControlInput2" placeholder="JL.Mangga" required>
  </div>
  <div class="form-group">
    <label>Kota</label>
    <input type="text" class="form-control" name="kota" id="exampleFormControlInput2" placeholder="Semarang" required>
  </div>
  <div class="form-group">
    <label>Kode Pos</label>
    <input type="text" class="form-control" name="pos" id="exampleFormControlInput2" placeholder="59026" required>
  </div>
  <div class="form-group">
    <label>Telp</label>
    <input type="number" class="form-control" name="telp" id="exampleFormControlInput2" placeholder="024*****" required>
  </div>
  <div class="form-group">
    <label>HP</label>
    <input type="number" class="form-control" name="hp" id="exampleFormControlInput3" placeholder="+62" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" id="exampleFormControlInput2" placeholder="blabla@gmail.com" required>
  </div>
<div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp
<button type="reset" class="btn btn-danger">Cancel</button>    
</div>
    </form>
  </div>
</div>
<div class="card mb-4" style="margin-top: 10px;">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DATA BARANG</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>KODE SUPPLIER</th>
                                                <th>NAMA SUPPLIER</th>
                                                <th>ALAMAT</th>
                                                <th>KOTA</th>
                                                <th>KODE POS</th>
                                                <th>TELP</th>
                                                <th>HP</th>
                                                <th>EMAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$query = mysqli_query($conn,"SELECT * FROM barang");
while ($hasil = mysqli_fetch_array ($query)) { $kode = $hasil['kd_sup'];
$nama = stripslashes ($hasil['nm_sup']); $alm = stripslashes ($hasil['alm_sup']); $kota = stripslashes ($hasil['kota_sup']); $pos = stripslashes ($hasil['kode_pos']);
$telp = stripslashes ($hasil['telp_sup']); $hp = stripslashes ($hasil['hp_sup']); $email = stripslashes ($hasil['email_sup']); //tampilkan barang
echo "<tr>
<td>$kode</td><td>$nama</td><td>$alm</td>
<td>$kota</td><td>$pos</td><td>$telp</td><td>$hp</td><td>$email</td>";?>
<td><a href="" style="color:white;" class="btn btn-warning" data-toggle="modal" data-target="#myModalM<?php echo $kode; ?>">Edit</a> |
<a class="btn btn-danger" href="barang_hapus.php?id=<?php echo $kode; ?>" onclick="return confirm('Yakin Hapus?')">Delete</a></td><?php }
?>
<div class="modal fade" id="myModalM<?php echo $kode; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MENU EDIT BARANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" accept-charset="utf-8">
            <div class="form-group">
            <label for="">KODE SUPPLIER</label>
            <input type="number" class="form-control" name="kode_edit" id="exampleFormControlInput1" value="<?php echo $kode; ?>" readonly>
            </div>
            <div class="form-group">
            <label for="">NAMA SUPPLIER</label>
            <input type="text" class="form-control" name="nama_edit" id="exampleFormControlInput1" value="<?php echo $nama; ?>">
            </div>
            <div class="form-group">
            <label for="">ALAMAT</label>
            <input type="text" class="form-control" name="alm_edit" id="exampleFormControlInput1" value="<?php echo $alm; ?>">
            </div>
            <div class="form-group">
            <label for="">KOTA</label>
            <input type="text" class="form-control" name="kota_edit" id="exampleFormControlInput1" value="<?php echo $kota; ?>">
            </div>
            <div class="form-group">
            <label for="">KODE POS</label>
            <input type="text" class="form-control" name="pos_edit" id="exampleFormControlInput1" value="<?php echo $pos; ?>">
            </div>
            <div class="form-group">
            <label for="">TELP</label>
            <input type="text" class="form-control" name="telp_edit" id="exampleFormControlInput1" value="<?php echo $telp; ?>">
            </div>
            <div class="form-group">
            <label for="">HP</label>
            <input type="text" class="form-control" name="hp_edit" id="exampleFormControlInput1" value="<?php echo $hp; ?>">
            </div>
            <div class="form-group">
            <label for="">EMAIL</label>
            <input type="text" class="form-control" name="email_edit" id="exampleFormControlInput1" value="<?php echo $email; ?>">
            </div>
            </select>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</table>
                                </div>
                            </div>
                        </div>
<?php
if (isset($_POST["submit"]))
    {
        $kode=$_POST['kode'];
        $nama=$_POST['nama'];
        $alm=$_POST['alm'];
        $kota=$_POST['kota'];
        $pos=$_POST['pos'];
        $telp=$_POST['telp'];
        $hp=$_POST['hp'];
        $email=$_POST['email'];
        $input=mysqli_query($conn,"INSERT INTO barang VALUES('$kode','$nama','$alm','$kota','$pos','$telp','$hp','$email')");
        if ($input) 
        {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambahkan Barang');
              window.location.href='dashboard.php?page=barang'; </script>");
        }
        else
        {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambahkan Periksa Kembali !!!');
        window.location.href='dashboard.php?page=barang'; </script>");
        }
    }
?>

<?php
if (isset($_POST["edit"])) {
    $kd_edit=$_POST['kode_edit'];
    $nm_edit=$_POST['nama_edit'];
    $alm_edit=$_POST['alm_edit'];
    $kt_edit=$_POST['kota_edit'];
    $pos_edit=$_POST['pos_edit'];
    $telp_edit=$_POST['telp_edit'];
    $hp_edit=$_POST['hp_edit'];
    $email_edit=$_POST['email_edit'];

    $sql = mysqli_query($conn,"UPDATE barang set nm_sup='$nm_edit', alm_sup='$alm_edit', kota_sup='$kt_edit',
    kode_pos='$pos_edit', telp_sup='$telp_edit', hp_sup='$hp_edit', email_sup='$email_edit' WHERE kd_sup='$kd_edit'" );
    if ($sql)
    {
     echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Diubah');
     window.location.href='dashboard.php?page=barang';
     </script>");
    }
    else
    {
        echo 
        "
            <script type='text/javascript'>
                alert('Gagal Diubah');
                window.location='dashboard.php?page=barang';
            </script    
        ";
    }
}
?>