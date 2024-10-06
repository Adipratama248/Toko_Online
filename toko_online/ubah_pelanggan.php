<!DOCTYPE html>
<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
    include "header_admin.php"
?>
    <?php
    include "koneksi_toko.php";
    $qry_get_pelanggan = mysqli_query($conn, "select * from pelanggan where id_pelanggan = '" .  $_GET['id_pelanggan'] . "'");
    $dt_pelanggan = mysqli_fetch_array($qry_get_pelanggan);
    ?>
<form class="form-horizontal" action="proses_ubah_pelanggan.php" method="POST" >
<fieldset>
    
<legend align="center"><h3>pelanggan</h3></legend>
<input type="hidden" name="id_pelanggan" value="<?= $dt_pelanggan['id_pelanggan'] ?>" />

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4">
  <input  name="nama" placeholder="NAMA" class="form-control input-md" value="<?= $dt_pelanggan['nama'] ?>" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4">
  <input name="username" placeholder="username" class="form-control input-md" value="<?= $dt_pelanggan['username'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Alamat</label>  
  <div class="col-md-4">
  <input name="alamat" placeholder="Alamat" class="form-control input-md" value="<?= $dt_pelanggan['alamat'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nomor Telpon</label>  
  <div class="col-md-4">
  <input name="notelp" placeholder="Nomor Telpon" class="form-control input-md" value="<?= $dt_pelanggan['telp'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">password</label>  
  <div class="col-md-4">
  <input id="password" name="password" placeholder="PASSWORD" class="form-control" value="" required="" type="password">
  </div>
</div>



<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" name="tambah" value="Tambah" class="btn btn-primary" >
  </div>
  </div>
  
</fieldset>
</form>
</body>
</html>