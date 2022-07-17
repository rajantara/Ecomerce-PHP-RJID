<?php
$servername = "localhost";
$database = "db";
$username = "root";
$password = "12345";


// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);


//agar tidak error

$nama_produk = "";
$harga_produk = "";
$stok_produk = "";
$desc_produk = "";
$link_produk = "";
$wa_produk = "";
$kategori_produk = "";

// user
$alamat = "";
$nomor_hp = "";
