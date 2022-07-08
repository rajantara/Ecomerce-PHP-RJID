<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>WEBSITE INI</title>
</head>

<body>
    <h1 class="container">Filter</h1>
    <div class="container">
        <form action="/" method="get">
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">
                    <input class="form-check-input" type="checkbox" name="check_id" <%= query.check_id ? ' checked ' : '' %>>ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="ID" id="id" name="id" value="<%= query.id %>">
                </div>
            </div>

            <div class="form-group row">
                <label for="string" class="col-sm-2 col-form-label">
                    <input class="form-check-input" type="checkbox" name="check_string" <%= query.check_string ? ' checked ' : '' %>>String</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="String" id="string" name="string" value="<%= query.string %>">
                </div>
            </div>

            <div class="form-group row">
                <label for="integer" class="col-sm-2 col-form-label">
                    <input class="form-check-input" type="checkbox" name="check_integer" <%= query.check_integer ? ' checked ' : '' %>> Integer</label>
                <div class="col-sm-10">
                    <input type="number" id="integer" class="form-control" placeholder="Integer" name="integer" value="<%= query.integer %>">
                </div>
            </div>

            <div class="form-group row">
                <label for="float" class="col-sm-2 col-form-label">
                    <input class="form-check-input" type="checkbox" name="check_float" <%= query.check_float ? ' checked ' : '' %>> Float</label>
                <div class="col-sm-10">
                    <input type="text" id="float" class="form-control" placeholder="Float" name="float" value="<%= query.float %>">
                </div>
            </div>

            <div class="form-group row">
                <label for="startDate" class="col-sm-2 col-form-label">
                    <input class="form-check-input" type="checkbox" name="check_date" <%= query.check_date ? ' checked ' : '' %>> Date</label>
                <div class="col-9">
                    <input type="date" class="form-control col-sm-4" value="startDate" id="startDate" name="startDate" value="<%= query.startDate %>">
                    <div class="col-2">to</div>
                    <input type="date" class="form-control col-sm-4" value="endDate" id="endDate" name="endDate" value="<%= query.endDate %>">
                </div>
            </div>

            <div class="form-group row">
                <label for="boolean" class="col-sm-2 col-form-label">
                    <input class="form-check-input" type="checkbox" name="check_boolean" <%= query.check_boolean ? ' checked' : '' %>> Boolean
                </label>

                <div class="col-10">
                    <select class="custom-select my-1 mr-sm-2" id="boolean" name="boolean">
                        <option disabled selected>Choose the boolean</option>
                        <option value="true" <%= query.boolean === 'true' ? ' selected' : ''; %>> true
                        </option>
                        <option value="false" <%= query.boolean === 'false' ? ' selected' : ''; %>> false
                        </option>
                    </select>
                </div><br><br><br><br><br>
                <div class="container">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div><br>
            </div>
        </form><br>

        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">String</th>
                        <th scope="col">Integer</th>
                        <th scope="col">Float</th>
                        <th scope="col">Date</th>
                        <th scope="col">Boolean</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <%  data.forEach((item, index) => { %>
                    <tr>
                        <td><%= item.id %></td>
                        <td><%= item.string %></td>
                        <td><%= item.integer %></td>
                        <td><%= item.float %></td>
                        <td><%= item.date %></td>
                        <td><%= item.boolean %></td>
                        <td>
                            <a href="/edit/<%= item.id %>"><button type="submit" class="btn btn-success">Edit</button></a>
                            <a href="/delete/<%= item.id %>"><button type="submit" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <% }); %>
                </tbody>
            </table>
        </div>

        <div class="container">
            <a href="/add" class="btn btn-outline-primary">Add Data</a>
        </div><br />

        <nav aria-label="navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item <%= page == 1 ? 'disabled' : ''; %>">
                    <a class="page-link" href="/?page=<%= parseInt(page) - 1 %>">Previous</a>
                </li>
                <% for (let i = 1; i <= pages; i++) { %>
                <li class="page-item <%= page == i ? 'active' : ''; %>"></li>
                <a class="page-link" href="/?page=<%= i %>"><%= i %></a></li>
                <%};%>

                <li class="page-item <%= page == pages ? 'disabled' : ''; %>">
                    <a class="page-link" href="/?page=<%= parseInt(page) + 1 %>">Next</a>
                </li>
            </ul>
        </nav>
        <br>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>



























<?php
include('koneksi.php');
include('header.php');
$query = mysqli_query($koneksi, "select * from produk");
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
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
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
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
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
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>¥ JPY</option>
                            <option>$ USD</option>
                            <option>€ EUR</option>
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Our location</a></li>
                            <li><a href="#">Contact Us</a></li>
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
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shirts</a></li>
                                                    <li><a href="shop.php">Sweaters & Cardigans</a></li>
                                                    <li><a href="shop.php">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Swimwear</a></li>
                                                    <li><a href="shop.php">Skirts</a></li>
                                                    <li><a href="shop.php">Jeans</a></li>
                                                    <li><a href="shop.php">Trousers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Top Wear</a></li>
                                                    <li><a href="shop.php">Party wear</a></li>
                                                    <li><a href="shop.php">Bottom Wear</a></li>
                                                    <li><a href="shop.php">Indian Wear</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.php">Bags</a></li>
                                                    <li><a href="shop.php">Sunglasses</a></li>
                                                    <li><a href="shop.php">Fragrances</a></li>
                                                    <li><a href="shop.php">Wallets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="shop-detail.php">Shop Detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Our Service</a></li>
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
                                <span class="badge">3</span>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
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
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
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
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
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
    $sql2   = "select * from produk order by id_produk desc";
    $q2     = mysqli_query($koneksi, $sql2);
    $urut   = 1;
    while ($row = mysqli_fetch_array($q2)) {
        $id_produk         = $row['id_produk'];
        $nama_produk        = $row['nama_produk'];
        $harga_produk = $row['harga_produk'];
        $foto_produk = $row['foto_produk'];
    ?>
        <div class="products-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1>Featured Products</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special-menu text-center">
                            <div class="button-group filter-button-group">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".top-featured">Top featured</button>
                                <button data-filter=".best-seller">Best seller</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row special-list">
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="berkas/<?php echo $row['foto_produk']; ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?php echo $nama_produk ?></h4>
                                <h5>Rp.<?php echo $harga_produk ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">New</p>
                                </div>
                                <img src="berkas/<?php echo $row['foto_produk']; ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?php echo $nama_produk ?></h4>
                                <h5><?php echo $harga_produk ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="berkas/<?php echo $row['foto_produk']; ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?php echo $nama_produk ?></h4>
                                <h5><?php echo $harga_produk ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="berkas/<?php echo $row['foto_produk']; ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?php echo $nama_produk ?></h4>
                                <h5><?php echo $harga_produk ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- End Products  -->
    <?php
    include('footer.php')
    ?>






    <!-- //ini -->

    <?php
    include('koneksi.php');
    include('header.php');
    $query = mysqli_query($koneksi, "select * from produk");
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
                                        <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
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
                                    <li>
                                        <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
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
                            <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                <option>¥ JPY</option>
                                <option>$ USD</option>
                                <option>€ EUR</option>
                            </select>
                        </div>
                        <div class="right-phone-box">
                            <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                        </div>
                        <div class="our-link">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Our location</a></li>
                                <li><a href="#">Contact Us</a></li>
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
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Top</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="shop.php">Jackets</a></li>
                                                        <li><a href="shop.php">Shirts</a></li>
                                                        <li><a href="shop.php">Sweaters & Cardigans</a></li>
                                                        <li><a href="shop.php">T-shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Bottom</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="shop.php">Swimwear</a></li>
                                                        <li><a href="shop.php">Skirts</a></li>
                                                        <li><a href="shop.php">Jeans</a></li>
                                                        <li><a href="shop.php">Trousers</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Clothing</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="shop.php">Top Wear</a></li>
                                                        <li><a href="shop.php">Party wear</a></li>
                                                        <li><a href="shop.php">Bottom Wear</a></li>
                                                        <li><a href="shop.php">Indian Wear</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Accessories</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="shop.php">Bags</a></li>
                                                        <li><a href="shop.php">Sunglasses</a></li>
                                                        <li><a href="shop.php">Fragrances</a></li>
                                                        <li><a href="shop.php">Wallets</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                        </div>
                                        <!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                                <ul class="dropdown-menu">
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="shop-detail.php">Shop Detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="service.php">Our Service</a></li>
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
                                    <span class="badge">3</span>
                                </a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>
                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <li class="cart-box">
                        <ul class="cart-list">
                            <li>
                                <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Delica omtantur </a></h6>
                                <p>1x - <span class="price">$80.00</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Omnes ocurreret</a></h6>
                                <p>1x - <span class="price">$60.00</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Agam facilisis</a></h6>
                                <p>1x - <span class="price">$40.00</span></p>
                            </li>
                            <li class="total">
                                <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                <span class="float-right"><strong>Total</strong>: $180.00</span>
                            </li>
                        </ul>
                    </li>
                </div>
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
                                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
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
                                <p><a class="btn hvr-hover" href="#">Shop New</a></p>
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
        $sql2   = "select * from produk order by id_produk desc";
        $q2     = mysqli_query($koneksi, $sql2);
        $urut   = 1;
        while ($row = mysqli_fetch_array($q2)) {
            $id_produk         = $row['id_produk'];
            $nama_produk        = $row['nama_produk'];
            $harga_produk = $row['harga_produk'];
            $foto_produk = $row['foto_produk'];
        ?>
            <div class="products-box">
                <div class="album py-5 bg-light">
                    <!-- MAIN (Center website) -->
                    <div class="main">
                        <!-- Portfolio Gallery Grid -->
                        <div class="content">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <div class="type-lb">
                                        <p class="sale">Sale</p>
                                    </div>
                                    <img src="berkas/<?php echo $row['foto_produk']; ?>" class="img-fluid" width="400px" height="400px">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <a class="cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><?php echo $nama_produk ?></h4>
                                    <h5>Rp.<?php echo $harga_produk ?></h5>
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
        <?php
        include('footer.php')
        ?>




        <!-- //login -->
        <?php
        include 'koneksi.php';
        session_start();
        if (isset($_SESSION['admin_username'])) {
            header("location:admin_depan.php");
        }
        if (isset($_POST['login'])) {
            $username   = $_POST['username'];
            $password   = $_POST['password'];
            if ($username == '' or $password == '') {
                $err .= "<li>Silakan masukkan username dan password</li>";
            }
            if (empty($err)) {
                $sql1 = "select * from admin where username = '$username'";
                $q1 = mysqli_query($koneksi, $sql1);
                $r1 = mysqli_fetch_array($q1);
                if ($r1['password'] != md5($password)) {
                    $err .= "<li>Akun tidak ditemukan</li>";
                }
            }
            if (empty($err)) {
                $_SESSION['admin_username'] = $username;
                header("location:admin_depan.php");
                exit();
            }
        }

        ?>
        <!DOCTYPE html>
        <!-- saved from url=(0051)https://getbootstrap.com/docs/5.2/examples/sign-in/ -->
        <html lang="en">
        <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
        <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
        <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
        <style lang="en" type="text/css" id="dark-mode-native-style"></style>
        <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.98.0">
            <title>Tourism Website</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">





            <link href="./Signin Template · Bootstrap v5.2_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

            <!-- Favicons -->
            <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
            <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
            <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
            <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">
            <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
            <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico">
            <meta name="theme-color" content="#712cf9">


            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }

                .b-example-divider {
                    height: 3rem;
                    background-color: rgba(0, 0, 0, .1);
                    border: solid rgba(0, 0, 0, .15);
                    border-width: 1px 0;
                    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
                }

                .b-example-vr {
                    flex-shrink: 0;
                    width: 1.5rem;
                    height: 100vh;
                }

                .bi {
                    vertical-align: -.125em;
                    fill: currentColor;
                }

                .nav-scroller {
                    position: relative;
                    z-index: 2;
                    height: 2.75rem;
                    overflow-y: hidden;
                }

                .nav-scroller .nav {
                    display: flex;
                    flex-wrap: nowrap;
                    padding-bottom: 1rem;
                    margin-top: -1px;
                    overflow-x: auto;
                    text-align: center;
                    white-space: nowrap;
                    -webkit-overflow-scrolling: touch;
                }
            </style>


            <!-- Custom styles for this template -->
            <link href="./Signin Template · Bootstrap v5.2_files/signin.css" rel="stylesheet">
        </head>

        <body class="text-center">
            <?php
            if ($err) {
                echo "<ul>$err</ul>";
            }
            ?>
            <main class="form-signin w-100 m-auto">
                <form method="post" action="">
                    <img class="mb-4" src="./Signin Template · Bootstrap v5.2_files/camera.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" placeholder="Isikan Username..." />
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" placeholder="Isikan Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <input class="w-100 btn btn-lg btn-primary" type="submit" name="login" value="Sign in" />
                    <p class="mt-5 mb-3 text-muted">©2022</p>
                </form>
            </main>
        </body>

        </html>