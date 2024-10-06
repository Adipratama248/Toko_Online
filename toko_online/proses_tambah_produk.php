<?php
if($_POST){
    $nama_produk=$_POST['nama_produk'];
    $deskripsi_produk=$_POST['deskripsi_produk'];
    $harga_produk=$_POST['harga_produk'];

            
        include "koneksi_toko.php";
        $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi, harga) 
        value ('".$nama_produk."','".$deskripsi_produk."','".$harga_produk."')")
         or die(mysqli_error($conn));
         if($insert){
             echo "<script>alert('Sukses menambahkan produk');location.href='tampil_produk.php';</script>";
         } else {
             echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
         }
    }

?>