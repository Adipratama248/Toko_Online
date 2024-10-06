<?php
if ($_POST) {
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas= $_POST['nama_petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    

        include "koneksi_toko.php";
            $update = mysqli_query($conn, "UPDATE `petugas` SET `nama_petugas` = '" . $nama_petugas . "', `username` = '" . $username . "', `password` = '" . md5($password) . "', `level` = '" . $level . "' WHERE `id_petugas` = '" . $id_petugas . "' ")
             or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='list_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_petugas.php?id_petugas=" . $id_petugas . "';</script>";
            }
        }
    


?>