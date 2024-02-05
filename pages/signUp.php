<?php
require "../includes/config.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= urlOf('assets/bootstrap/css/bootstrap.min.css') ?>">
    <!-- icon css-->
    <link rel="stylesheet" href="<?= urlOf('assets/elagent-icon/style.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/animation/animate.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('css/style-main.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('css/responsive.css') ?>">
    <title>Docy</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?= urlOf('img/spinner_logo.png') ?>" alt="">
                    <br><br>
                    <h4><span>Engage</span>Hub</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="<?= urlOf('img/signup/top_ornamate.png') ?>" alt="top">
                    <img class="position-absolute bottom" src="<?= urlOf('img/signup/bottom_ornamate.png') ?>" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="<?= urlOf('img/signup/man_image.png') ?>" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3 style="color: black;">Create your Docy Account</h3>
                            <p style="color: black;">Already have an account? <a style="color: black;" href="<?= urlOf('pages/signIn.php') ?>">Sign in</a></p>
                        </div>
                        <form action="#" class="row login_form">
                            <div class="col-sm-6 form-group">
                                <div class="small_text">First name</div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Muhammad">
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Last name</div>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Jewel">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Your email</div>
                                <input type="email" class="form-control" id="email" placeholder="info@Docy.com">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Password</div>
                                <input id="signup-password" name="signup-password" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Confirm password</div>
                                <input id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off">
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Create an account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= urlOf('js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= urlOf('js/pre-loader.js') ?>"> </script>
    <script src="<?= urlOf('assets/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= urlOf('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= urlOf('js/parallaxie.js') ?>"></script>
    <script src="<?= urlOf('js/TweenMax.min.js') ?>"></script>
    <script src="<?= urlOf('assets/wow/wow.min.js') ?>"></script>
    <script src="<?= urlOf('../../unpkg.com/ionicons%405.4.0/dist/ionicons.js') ?>"></script>
    <script src="<?= urlOf('js/main.js') ?>"></script>

</body>


<!-- Mirrored from html-template.spider-themes.net/docy/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Feb 2024 10:41:26 GMT -->

</html>