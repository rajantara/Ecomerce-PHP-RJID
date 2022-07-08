<?php
include "koneksi.php";


//untuk add produk
if (isset($_POST['save'])) {
    $temp = $FILES['foto_produk']['tmp_name'];
    $filename = rand(0, 9999) . $_FILES['foto_produk']['name'];
    $folder = "berkas/";
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $stok_produk = $_POST['stok_produk'];
    $desc_produk = $_POST['desc_produk'];
    $link_produk = $_POST['link_produk'];
    $wa_produk = $_POST['wa_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $size = $_FILES['foto_produk']['size'];
    $type = $_FILES['foto_produk']['type'];
    if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($_FILES['foto_produk']['tmp_name'], $folder . $filename);
        mysqli_query($koneksi, "insert into produk(size,type,foto_produk,nama_produk,harga_produk,stok_produk,desc_produk,link_produk,wa_produk,kategori_produk) values('$type','$size','$filename','$nama_produk','$harga_produk','$stok_produk','$desc_produk','$link_produk','$wa_produk','$kategori_produk')");
        header('location:index.php');
    } else {
        echo "<b>Gagal Upload File</b>";
    }
}

// untuk id random
function random_num($length)
{

    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        # code...

        $text .= rand(0, 9);
    }

    return $text;
}
