<?php
session_start();
include("koneksi.php");
include("proses.php");

//for registration
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $usersname = $_POST['usersname'];
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    if (!empty($usersname) && !empty($password) && !is_numeric($usersname)) {

        //save to database
        $id = random_num(20);
        $query = "insert into user (id,usersname,password,alamat,nomor_hp) values ('$id','$usersname','$password',' $alamat','$nomor_hp')";

        mysqli_query($koneksi, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">

                    <form action="" method="post" class="sign-in-form">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="login.php" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="usersname" type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Username</label>
                            </div>

                            <div class="input-wrap">
                                <input name="password" type="password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap">
                                <input name="alamat" type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Alamat</label>
                            </div>

                            <div class="input-wrap">
                                <input name="nomor_hp" type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>WhatApp</label>
                            </div>

                            <input type="submit" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>

                </div>
                </form>

            </div>

            <div class="carousel">
                <div class="images-wrapper">
                    <img src="./img/image1.png" class="image img-1 show" alt="" />
                    <img src="./img/image2.png" class="image img-2" alt="" />
                    <img src="./img/image3.png" class="image img-3" alt="" />
                </div>

                <div class="text-slider">
                    <div class="text-wrap">
                        <div class="text-group">
                            <h2>Create your own courses</h2>
                            <h2>Customize as you like</h2>
                            <h2>Invite students to your class</h2>
                        </div>
                    </div>

                    <div class="bullets">
                        <span class="active" data-value="1"></span>
                        <span data-value="2"></span>
                        <span data-value="3"></span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- Javascript file -->
    <script src="app.js"></script>

</body>

</html>