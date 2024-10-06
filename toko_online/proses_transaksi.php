<?php
include "koneksi_toko.php";

// Ambil data dari form
$id_pelanggan = $_POST['id_pelanggan'];
$id_petugas = $_POST['id_petugas'];
$tgl_transaksi = $_POST['tgl_transaksi'];

// Simpan data transaksi ke tabel transaksi
$insert_transaksi = mysqli_query($conn, "INSERT INTO transaksi (id_pelanggan, id_petugas, tgl_transaksi) VALUES ('$id_pelanggan', '$id_petugas', '$tgl_transaksi')");

// Ambil ID Transaksi terakhir
$id_transaksi = mysqli_insert_id($conn);

// Simpan detail transaksi (produk dan qty)
$produk = $_POST['produk'];
$qty = $_POST['qty'];

for ($i = 0; $i < count($produk); $i++) {
    if ($qty[$i] > 0) {
        $id_produk = $produk[$i];
        $query = mysqli_query($conn, "SELECT * FROM `produk` WHERE `id_produk` =  $id_produk");
        $produk = mysqli_fetch_array($query);
        $jumlah = $qty[$i];
        $subtotal = $produk['harga'] * $jumlah;
        mysqli_query($conn, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal) VALUES ('$id_transaksi', '$id_produk', '$jumlah', '$subtotal')");
    }
}

echo "<script>alert('Transaksi berhasil ditambahkan');location.href='tampil_transaksi.php';</script>";
?>