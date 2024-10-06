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
    $qry_get_petugas = mysqli_query($conn, "select * from petugas where id_petugas = '" .  $_GET['id_petugas'] . "'");
    $dt_petugas = mysqli_fetch_array($qry_get_petugas);
    ?>
<form class="form-horizontal" action="proses_ubah_petugas.php" method="POST" >
<fieldset>
    
<legend align="center"><h3>Petugas</h3></legend>
<input type="hidden" name="id_petugas" value="<?= $dt_petugas['id_petugas'] ?>" />

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4">
  <input  name="nama_petugas" placeholder="NAMA" class="form-control input-md" value="<?= $dt_petugas['nama_petugas'] ?>" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4">
  <input name="username" placeholder="username" class="form-control input-md" value="<?= $dt_petugas['username'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">password</label>  
  <div class="col-md-4">
  <input id="password" name="password" placeholder="PASSWORD" class="form-control" value="" required="" type="password">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">level</label>  
  <div class="col-md-4">
  <?php
        $arr_level = array('owner' => 'Owner', 'supplier' => 'Supplier', 'kasir' => 'Kasir','karyawan_biasa' => 'Karyawan biasa',);
        ?>
        <select name="level" class="form-control">
            <option></option>
            <?php foreach ($arr_level as $key_level => $val_level):
                if ($key_level == $dt_petugas['level']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
                ?>
                <option value="<?= $key_level ?>" <?= $selek ?>><?= $val_level ?></option>
            <?php endforeach ?>
        </select>
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