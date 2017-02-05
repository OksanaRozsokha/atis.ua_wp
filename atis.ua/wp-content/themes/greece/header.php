<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Atis</title>
    <!-- Bootstrap -->

    <link href="<?php bloginfo('template_url')?>/css/lib/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/fonts/fontawesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/lib/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/lib/slick-theme.css"/>
    <link href="<?php bloginfo('stylesheet_url')?>" media="screen, projection" rel="stylesheet" type="text/css"/>
    <script src="<?php bloginfo('template_url')?>/js/lib/jquery-3.1.1.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/lib/slick.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/main.js"></script>


</head>
<body>
<!-------------------POPUP-------------------------->

<div class="wrap-popup">
    <div class="flex-popup">
        <div class="popup">
            <button id="close-popup" ><i class="fa fa-times" aria-hidden="true"></i></button>
            <h2>Welcome to Greece! It`s very fun here.</h2>
            <img class="img-fluid rounded" src="<?php bloginfo('template_url')?>/img/popup-img.jpg" alt="">
        </div>
    </div>
</div>

<!----------------------END-POPUP-------------------------->

<!----------------MENU-ON-CLICK--------------------->

<nav class="menu-wrap">
    <ul class="menu-items">
        <li><a href="#">Flights</a></li>
        <li><a href="#">Hotels</a></li>
        <li><a href="#">Explore</a></li>
        <li><a href="#">Restaurants</a></li>
        <li><a href="#">Things to do</a></li>
        <li><a href="#">About Greece</a></li>
    </ul>
</nav>
<!----------------------------------------------------->

<!-----------------------INTRO-SECTION----------------->

<section class="intro">
    <div class="img-bg">

        <!--------------------HEADER--------------------->
        <header class="main-header">
            <div class="container">
                <div class="flex-header">
                    <a href="<?php echo home_url();?>" class="logo">
                        <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
                    </a>
                    <div class="flex-right">
                        <nav class="main-nav">
                            <?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'menu-list'));?>
<!--                            <ul class="menu-list hidden-md-down">-->
<!--                                <li><a href="#">Flights</a></li>-->
<!--                                <li><a href="#">Hotels</a></li>-->
<!--                                <li><a href="#">Explore</a></li>-->
<!--                                <li><a href="#">Restaurants</a></li>-->
<!--                                <li><a href="#">Things to do</a></li>-->
<!--                                <li><a href="#">About Greece</a></li>-->
<!--                            </ul>-->
                            <button class="menu-btn hidden-lg-up"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        </nav>
                        <button class="popup-btn padding-btn background-btn border-radius shadow-btn color-btn hover-btn">Become a host</button>
                    </div>
                </div>
            </div>
        </header>