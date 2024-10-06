<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $username_petugas=$_POST['username_petugas'];
    $password_petugas=$_POST['password_petugas'];
    $level_petugas=$_POST['level_petugas'];

        include"koneksi_toko.php";
        $insert=mysqli_query($conn,"insert into petugas(`nama_petugas`, `username`, `password`, `level`)
        value ('".$nama_petugas."','".$username_petugas."','".md5($password_petugas)."', '".$level_petugas."') ")
        or die(mysqli_error($conn));
         if($insert){
             echo "<script>alert('Sukses registrasi');location.href='login.php';</script>";
         } else {
             echo "<script>alert('Gagal registrasi');location.href='register.php';</script>";
         }
    }
?>