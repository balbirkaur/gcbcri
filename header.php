<!DOCTYPE html>
<html lang="en">

<head>



    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?>
        <?php if ( !wp_title('', true, 'left') ); { ?> | <?php bloginfo('description'); ?> <?php } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
    <?php if (  get_option('lp_color_scheme') != '' ) { ?>
    <link rel="stylesheet"
        href="<?php bloginfo('stylesheet_directory'); ?>/style-<?php echo get_option('lp_color_scheme'); ?>.css"
        type="text/css" media="screen" />
    <?php } ?>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">


    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
        href="<?php bloginfo('rss2_url'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_head(); ?>



</head>

<body>


    <div class="container d-flex justify-content-center">
        <a class="navbar-brand" href="<?php echo get_option('home'); ?>" title="Home"><img
                src="<?php if (get_option('lp_logo')) : echo get_option('lp_logo'); else: bloginfo('stylesheet_directory');?>/images/logo.png<?php endif; ?>"
                alt="Home" class="logo" /></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">

        <div class="container d-flex align-items-center">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">

                <?php if ( function_exists('wp_nav_menu') ) { 
					 wp_nav_menu( array( 'theme_location'=>'primary', 'menu_class' => 'navbar-nav ml-auto',)); }
				
                ?>

                <!--  <li class="nav-item active"><a href="index.html" class="nav-link pl-0">HOME</a></li>-->

            </div>
        </div>
    </nav>
    <!-- END nav -->



    <!--header end-->