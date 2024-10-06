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
    $qry_get_produk = mysqli_query($conn, "select * from produk where id_produk = '" .  $_GET['id_produk'] . "'");
    $dt_produk = mysqli_fetch_array($qry_get_produk);
    ?>
<form class="form-horizontal" action="proses_ubah_produk.php" method="POST" enctype="multipart/form-data">
<fieldset>
    
<legend align="center"><h3>produk</h3></legend>
<input type="hidden" name="id_produk" value="<?= $dt_produk['id_produk'] ?>" />

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4">
  <input  name="nama_produk" placeholder="NAMA" class="form-control input-md" value="<?= $dt_produk['nama_produk'] ?>" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Deskripsi</label>  
  <div class="col-md-4">
  <input name="deskripsi" placeholder="DESKRIPSI" class="form-control input-md" value="<?= $dt_produk['deskripsi'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Harga</label>  
  <div class="col-md-4">
  <input name="harga" placeholder="HARGA" class="form-control input-md" value="<?= $dt_produk['harga'] ?>" required="" type="text">
  </div>
</div>

<div class="form-group">
            <label class="col-md-4 control-label">Foto Produk </label>
            <div class="col-md-4">
            <input type="file" name="foto_produk" id="foto_produk" class="form-control">
            <label class="col-md-4 control-label">(Biarkan kosong jika tidak ingin diubah) </label>
            <img src="file/<?= $dt_produk['foto_produk'] ?>" alt="Foto Produk" width="100" class="mt-3">
            
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