    <!-- include header -->
    <?php include "../includes/header.php";?>
    <?php include "../config/config.php";?>
    <?php 
        // if(isset($$_SESSION['username'])){
        //     header("location: ".APPURL."");
        // }

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password'])) {
echo "<script> alert('some inputs are empty'); </script>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $insert = $conn->prepare("INSERT INTO users (username, email, mypassword) VALUES (:username, :email, :mypassword)");

        $insert->execute([
            ':username' => $username,
            ':email' => $email,
            ':mypassword' => password_hash($password, PASSWORD_DEFAULT),

        ]);
        echo "<scripts> alert('registration succesful'); <scripts>";
        echo "<script>window.location.href='".APPURL."/auth/login.php' </script>";

        // header(("location: login.php"));
    }

}

    //can delete

    // if(isset($_POST['submit'])){

    // $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    // // $pass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    // // $image = $_FILES['image']['name'];
    // // $image_size = $_FILES['image']['size'];
    // // $image_tmp_name = $_FILES['image']['tmp_name'];
    // // $image_folder = 'uploaded_img/'.$image;

    // $select = mysqli_query($conn, "SELECT * FROM `homeland` WHERE email = '$email' AND password = '$password'") or
    // die('query failed');

    // if(mysqli_num_rows($select) > 0){
    // $message[] = 'user already exist';
    // }else{
    // if($pass != $cpass){
    // $message[] = 'confirm password not matched!';
    // // }elseif($image_size > 2000000){
    // // $message[] = 'image size is too large!';
    // }else{
    // $insert = mysqli_query($conn, "INSERT INTO `homeland`(name, email, password) VALUES('$name', '$email',
    // ('$password') or die('query failed');

    // if($insert){
    // move_uploaded_file($image_tmp_name, $image_folder);
    // $message[] = 'registered successfully!';
    // header('location:login.php');
    // }else{
    // $message[] = 'registeration failed!';
    // }
    // }
    // }

    // }

    ?>

    ?>

    <body>
        <div class="site-loader">
        </div>

        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div> <!-- .site-mobile-menu -->

            <div class="site-navbar mt-4">
                <div class="container py-1">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-8 col-lg-4">
                            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>DreamHome<span
                                            class="text-danger">.</span></strong></a></h1>
                        </div>
                        <div class="col-4 col-md-4 col-lg-8">
                            <nav class="site-navigation text-right text-md-right" role="navigation">

                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                        class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li class="active">
                                        <a href="/index.php">Home</a>
                                    </li>
                                    <li><a href="/buy.php">Buy</a></li>
                                    <li><a href="/rent.php">Rent</a></li>
                                    <li class="has-children">
                                        <a href="/properties.php">Properties</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#">Condo</a></li>
                                            <li><a href="#">Property Land</a></li>
                                            <li><a href="#">Commercial Building</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="/about.php">About</a></li>
                                    <li><a href="/contact.php">Contact</a></li>
                                    <li><a href="../auth/login.php">Login</a></li>
                                    <li><a href="/auth/register.php">Register</a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover inner-page-cover overlay"
            style="background-image: url(<?php echo APPURL; ?>/images/hero_bg_2.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="mb-2">Register</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="h4 text-black widget-title mb-3">Register</h3>
                        <form action="register.php" method="POST" class="form-contact-agent">

                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="username" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="phone" class="btn btn-primary" value="Register">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- include footer -->
        <?php
include "../includes/footer.php";

?>