<?php
include "koneksi.php";
session_start();

if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];
    $query = mysqli_query($koneksi, "select * from produk where id_produk='$id_produk'");
    $data_gambar = $query->fetch_array();

    $query_hapus = mysqli_query($koneksi, "delete from produk where id_produk='$id_produk'");
    unlink('files/' . $data_gambar['foto_produk']);
    header('location:fahsion-man.php');
} else {
    header('location:fahsion-man.php');
}
