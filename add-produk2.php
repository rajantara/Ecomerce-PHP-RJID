<?php
include('koneksi.php');
include('proses.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create Produk
            </div>
            <form action="proses.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $nama_produk ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_produk" class="col-sm-2 col-form-label">Harga Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="<?php echo $harga_produk ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok_produk" class="col-sm-2 col-form-label">Stok Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stok_produk" name="stok_produk" value="<?php echo $stok_produk ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="desc_produk" class="col-sm-2 col-form-label">Deskrispi</label>
                        <div class="col-sm-10">
                            <textarea rows="9" <input type="text" class="form-control" id="desc_produk" name="desc_produk" value="<?php echo $desc_produk ?>"> </textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="link_produk" class="col-sm-2 col-form-label">Link Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="link_produk" name="link_produk" value="<?php echo $link_produk ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="wa_produk" class="col-sm-2 col-form-label">WhatsApp Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="wa_produk" name="wa_produk" value="<?php echo $wa_produk ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori_produk" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kategori_produk" name="kategori_produk" value="<?php echo $kategori_produk ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Input File Here</label>
                        <input class="form-control" type="file" name="foto_produk">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg |</p>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="save2" value="save" class="btn btn-primary" />
                        <a class="btn btn-dark my-2 my-sm-0" href="index.php" role="button">Back</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>