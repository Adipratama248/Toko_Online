<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" ">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
  <?php
  include "header_admin.php"
  ?>
<form class="form-horizontal" action="p.php" method="POST"  enctype="multipart/form-data">
<fieldset>
    
<legend align="center"><h3>PRODUK</h3></legend>

<div class="form-group">
  <label class="col-md-4 control-label">Nama Produk</label>  
  <div class="col-md-4">
  <input name="nama_produk" placeholder="NAMA PRODUK" class="form-control input-md" value="" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Deskripsi</label>  
  <div class="col-md-4">
  <input  name="deskripsi_produk" placeholder="DESKRIPSI" class="form-control input-md" value="" required="" type="text">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Harga</label>  
  <div class="col-md-4">
  <input  name="harga_produk" placeholder="HARGA" class="form-control input-md" value="" required="" type="number">    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Foto Produk</label>  
  <div class="col-md-4">
  <input type="file" id="foto_produk" name="foto_produk" class="form-control">
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