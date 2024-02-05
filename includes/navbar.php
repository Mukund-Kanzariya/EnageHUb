<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= urlOf('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/slick/slick-theme.css') ?>">
    <!-- icon css-->
    <link rel="stylesheet" href="<?= urlOf('assets/elagent-icon/style.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/niceselectpicker/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/animation/animate.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css') ?>">
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
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>Doc</span>y</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <a class="navbar-brand header_logo" href="index-2.html">
                    <img class="first_logo sticky_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu">
                            <a href="<?= urlOf('') ?>" class="nav-link dropdown-toggle">Home</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="index-2.html" class="nav-link dropdown-toggle">Community Hall</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="<?= urlOf('pages/discussForum.php') ?>" class="nav-link dropdown-toggle">Discuss Forums</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="<?= urlOf('pages/contact.php') ?>" class="nav-link dropdown-toggle">Contact</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="index-2.html" class="nav-link dropdown-toggle">Profile</a>
                        </li>
                    </ul>
                    <div class="right-nav">
                        <a class="nav_btn" href="#">Login</a>
                        <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                            <label for="something" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something"></label>
                            <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                        </div>
                    </div>
                </div>
            </div>
        </nav>