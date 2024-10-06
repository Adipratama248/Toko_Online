<!DOCTYPE html>
<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<form class="form-horizontal" action="proses_tambah_pelanggan.php" method="POST">
<legend align="center"><h3>PELANGGAN</h3></legend>
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label">Nama Pelanggan</label>  
  <div class="col-md-4">
  <input id="nama_pelanggan" name="nama_pelanggan" placeholder="NAMA" class="form-control input-md" value="" required="" type="text">
  </div>
</div>

  <div class="form-group">
  <label class="col-md-4 control-label">Alamat</label>  
  <div class="col-md-4">
  <input id="alamat" name="alamat" placeholder="ALAMAT" class="form-control input-md" value="" required="" type="text">
  </div>
  </div>

  <div class="form-group">
  <label class="col-md-4 control-label">No.telp</label>  
  <div class="col-md-4">
  <input id="notelp" name="notelp" placeholder="NO.TELP" class="form-control input-md" value="" required="" type="text">
  </div>
  </div>

  <div class="form-group" align="center">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
  </div>
  </div>

</fieldset>
</form>
</body>
</html>