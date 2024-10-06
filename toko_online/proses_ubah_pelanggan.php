<?php
if ($_POST) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama= $_POST['nama'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    

        include "koneksi_toko.php";
            $update = mysqli_query($conn, "UPDATE `pelanggan` SET `nama` = '" . $nama . "', `username` = '" . $username . "',  `alamat` = '" . $alamat . "',  `telp` = '" . $notelp . "', `password` = '" . md5($password) . "' WHERE `id_pelanggan` = '" . $id_pelanggan . "' ")
             or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='list_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pelanggan.php?id_pelanggan=" . $id_pelanggan . "';</script>";
            }
        }
    


?>