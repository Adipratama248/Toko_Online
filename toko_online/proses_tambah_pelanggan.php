<?php
if ($_POST){
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $no_pelanggan=$_POST['notelp'];
    $username_pelanggan=$_POST['username_pelanggan'];
    $password_pelanggan=$_POST['password_pelanggan'];
    
    if(empty($nama_pelanggan)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($no_pelanggan)){
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include"koneksi_toko.php";
        $insert=mysqli_query($conn,"insert into pelanggan( `nama`, `alamat`, `telp`, `password`, `username`) 
        value ('".$nama_pelanggan."','".$alamat."','".$no_pelanggan."','".md5($password_pelanggan)."','".$username_pelanggan."') ")
        or die(mysqli_error($conn));
         if($insert){
             echo "<script>alert('Sukses menambahkan pelanggan');location.href='login_pelanggan.php';</script>";
         } else {
             echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
         }
    }
} 
?>