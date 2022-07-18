<?php
include('koneksi.php');
include('header.php');
session_start();
$query = mysqli_query($koneksi, "select * from produk2");

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

?>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Hello! <?php echo htmlspecialchars($_SESSION["usersname"]); ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ RP">
                            <option>€ RP</option>
                            <option>¥ JPY</option>
                            <option>$ USD</option>
                            <option>€ EUR</option>
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call ID : <a href="https://wa.me/qr/ZXM5LFYHUI4QN1"> 62+ 082344068300</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li>
                                <i class="fab fa-opencart"></i> Hello! <?php echo htmlspecialchars($_SESSION["usersname"]); ?>
                            </li>
                            <li><a href="my-account.php">My Account</a></li>
                            <li><a href="logout.php">log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <?php
                                $sql    = "SELECT * FROM produk2";
                                $query    = mysqli_query($koneksi, $sql);
                                $count    = mysqli_num_rows($query);
                                echo "<span class='badge'>$count</span>";
                                ?>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <?php
                $sql2   = "select * from produk2 order by id_produk limit 1";
                $q2     = mysqli_query($koneksi, $sql2);
                while ($row = mysqli_fetch_array($q2)) {
                    $id_produk         = $row['id_produk'];
                    $nama_produk        = $row['nama_produk'];
                    $harga_produk = $row['harga_produk'];
                    $foto_produk = $row['foto_produk'];
                ?>
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <li class="cart-box">
                        <ul class="cart-list">
                            <li>
                                <a href="https://tokopedia.link/rj-id" class="photo"><img src="berkas/<?php echo $row['foto_produk']; ?>" class="cart-thumb" alt="" /></a>
                                <h6><a href="https://tokopedia.link/rj-id"><?php echo $nama_produk ?> </a></h6>
                                <p>1x - <span class="price"><?php echo $harga_produk ?></span></p>
                            </li>
                            <li class="total">
                                <a href="https://tokopedia.link/rj-id" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                <span class="float-right"><strong>Total</strong>: <?php echo $harga_produk ?></span>
                            </li>
                        </ul>
                    </li>
            </div>
        <?php
                }
        ?>
        <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> RJ.ID Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> RJ.ID Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="https://tokopedia.link/rj-id">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> RJ.ID Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="https://tokopedia.link/rj-id">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Products  -->
    <?php

    //pagination
    $batas = 4;
    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
    $previous = $halaman - 1;
    $next = $halaman + 1;
    $data = mysqli_query($koneksi, "select * from produk2");
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas);
    $nomor = $halaman_awal + 1;
    //end


    $sql2   = "select * from produk2 limit $halaman_awal, $batas";
    $q2     = mysqli_query($koneksi, $sql2);
    while ($row = mysqli_fetch_array($q2)) {
        $id_produk         = $row['id_produk'];
        $nama_produk        = $row['nama_produk'];
        $kategori_produk = $row['kategori_produk'];
        $harga_produk = $row['harga_produk'];
        $link_produk = $row['link_produk'];
        $stok_produk = $row['stok_produk'];
        $desc_produk = $row['desc_produk'];
        $foto_produk = $row['foto_produk'];
    ?>
        <div class="products-box">
            <div class="album py-5 bg-light">
                <div class="main">
                    <div class="content">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="berkas/<?php echo $row['foto_produk']; ?>" class="img-fluid" width="400px" height="400px">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="delete-produk.php?id_produk=<?php echo $row['id_produk']; ?>" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="https://wa.me/qr/ZXM5LFYHUI4QN1" data-toggle="tooltip" data-placement="right" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                    <a class="cart" href="<?php echo $link_produk ?>">Buy Now</a>
                                </div>

                            </div>
                            <div class="why-text">
                                <h4><?php echo $nama_produk ?></h4>
                                <p>Price : Rp.<?php echo $harga_produk ?></p>
                                <p> Stok Products : <?php echo $stok_produk ?></p>
                                <p>Etalase Products : <?php echo $kategori_produk ?></p>
                                <a href="https://tokopedia.link/rj-id" class="link-info">Link Tokopedia</a>
                                <div class="mb-3">
                                    <textarea rows="7" <input class="form-control" type="text" placeholder="<?php echo $row['desc_produk']; ?>" aria-label="Disabled input example" disabled></textarea>
                                </div>


                            </div>
                        </div>

                    </div>
                    <!-- END MAIN -->
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- End Products  -->

    <!-- PAGINATION -->
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if ($halaman > 1) {
                                            echo "href='?halaman=$previous'";
                                        } ?>>Previous</a>
            </li>
            <?php
            for ($x = 1; $x <= $total_halaman; $x++) {
            ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
            <?php
            }
            ?>
            <li class="page-item">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                            echo "href='?halaman=$next'";
                                        } ?>>Next</a>
            </li>
        </ul>
    </nav>
    <br>
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About RJ.ID Shop</h4>
                            <p>is a store that prioritizes product quality, RJ.ID has the slogan that prospective buyers are comfortable shopping at our leaders by providing the best quality products and services for potential buyers
                            </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="error.php">Customer Service</a></li>
                                <li><a href="error.php">Our Sitemap</a></li>
                                <li><a href="error.php">Terms &amp; Conditions</a></li>
                                <li><a href="error.php">Privacy Policy</a></li>
                                <li><a href="error.php">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Jl.Perintis No 71 <br> Kota Bau-Bau
                                        Sulawesi Tenggara,<br> Kode pos 93724 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>WhatsApp: <a href="https://wa.me/qr/ZXM5LFYHUI4QN1"> 62+ 082344068300
                                            770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:rajanpensas@gmail.com">rajanpensas@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="add-produk2.php">RJ.ID</a> Design By :
            <a href="https://tokopedia.link/rj-id">Tokopedia</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>