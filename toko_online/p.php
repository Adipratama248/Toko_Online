<?php
if ($_POST) {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi_produk'];
    $harga = $_POST['harga_produk'];
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'JPG');
    $filename = $_FILES['foto_produk']['name'];
    $ukuran = $_FILES['foto_produk']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:tambah_produk.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $filename;
            move_uploaded_file($_FILES['foto_produk']['tmp_name'], 'file/' . '' . $filename);
        }
            include "koneksi_toko.php";
            $insert = mysqli_query($conn, "INSERT INTO produk (nama_produk , deskripsi , harga , foto_produk) value ('" . $nama_produk . "','" . $deskripsi . "','" . $harga . "','" . $xx . "')") or die(mysqli_error($conn));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan Produk');location.href='home_admin.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan Produk');location.href='tambah_produk.php';</script>";
            }
        }
    }

?>