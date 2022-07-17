<?php

session_start();

include("koneksi.php");
include('proses.php');

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

//for login page
if (isset($_POST["submit"])) {
    if (empty($_POST["usersname"]) || empty($_POST["password"])) {
        echo '<script>alert("Both Fields are required")</script>';
    } else {
        $usersname = mysqli_real_escape_string($koneksi, $_POST["usersname"]);
        $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
        $query = "SELECT * FROM user WHERE usersname = '$usersname'";
        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                if (password_verify($password, $row["password"])) {
                    //return true;  
                    $_SESSION["usersname"] = $usersname;
                    $_SESSION["alamat"] = $alamat;
                    $_SESSION["nomor_hp"] = $nomor_hp;
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    header("location:index.php");
                } else {
                    //return false;  
                    echo '<script>alert("Wrong User Details")</script>';
                }
            }
        } else {
            echo '<script>alert("Wrong User Details")</script>';
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
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
                            <h4>RJ.ID</h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="registrasi.php" class="toggle">Sign up</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="usersname" type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>
                            <div class="input-wrap">
                                <input name="password" type="password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <input name="submit" type="submit" value="Sign In" class="sign-btn"><br><br>

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>

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
                                <h2>Login Now</h2>
                                <h2>RJ.ID shopping</h2>
                                <h2>Invite Your friends</h2>
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