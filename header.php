<?php 
/**
 * The header template our theme
 * @package khatri-news
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
<head>
<meta charset="<?php bloginfo("charset"); ?>" >
<link rel="profile" href="http://gmph.org/xfn/11" />
<link rel="pingback" <?php bloginfo("pingback_url");?> />
<meta http-eduiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title><?php bloginfo("name"); ?> </title>

<!-- StyleSheets -->
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/plugin.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/animate.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/transition.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/icomoon.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/color-1.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" href="<?php echo  get_template_directory_uri(); ?>/css/font-awesome.min.css">

<!-- Switcher CSS -->
<link href="<?php echo  get_template_directory_uri(); ?>/switcher/switcher.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" id="skins" href="<?php echo  get_template_directory_uri(); ?>/css/color-1.css" type="text/css" media="all">

<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300italic,300,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- JavaScripts -->
<script src="<?php echo  get_template_directory_uri(); ?>/js/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="<?php echo  get_template_directory_uri(); ?>/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo  get_template_directory_uri(); ?>/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<!-- Wrapper -->
<div class="wrap push">

    <!-- Header -->
    <div class="header-wrap">

        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">

                    <!-- Top Left Nav -->
                    <div class="col-sm-6 col-xs-6">
                        <ul class="top-left">
                            <li><i class="fa fa-phone"></i>+84 868.8568</li>     
                            <li><i class="fa fa-envelope-o"></i>support@example.com</li>
                        </ul>
                    </div>
                    <!-- Top Left Nav -->

                    <!-- Top Right Nav -->
                    <div class="col-sm-6 col-xs-6 r-full-width">
                        <ul class="top-right text-right">
                            <li class="md-trigger" data-modal="login-popup"><a href="<?php echo  get_template_directory_uri(); ?>/#"><i class="fa fa-key">
                            </i>login</a></li>
                            <li class="md-trigger" data-modal="register-popup"><a href="<?php echo  get_template_directory_uri(); ?>/#"><i class="icon-user"></i>register</a></li>

                        </ul>
                    </div>
                    <!-- Top Right Nav -->

                </div>
            </div>
        </div>
        <!-- Top Bar -->

        <!-- Navigation Holder -->
        <header class="header">
            <div class="container">
                <div class="nav-holder">

                    <!-- Logo Holder -->
                    <div class="logo-holder">
                        <a href="<?php echo  get_template_directory_uri(); ?>/index.html" class="inner-logo"></a>
                    </div>
                    <!-- Logo Holder -->

                    <!-- Navigation -->
                    <div class="cr-navigation">

						<!-- Navbar -->
                         <nav class="cr-nav">
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'theme_location'        => 'header_menu',
                                        'container_class'       => 'cr-nav',
                                        'items_wrap'            => '<ul>%3$s</ul>'
                                    )
                                );

                            ?>
                        </nav>
						<!-- Navbar -->

                        <ul class="cr-add-nav">
                            <li><a href="<?php echo  get_template_directory_uri(); ?>/#" class="icon-search md-trigger" data-modal="search-popup"></a></li>
                            <li><a href="<?php echo  get_template_directory_uri(); ?>/#menu" class="menu-link"><i class="fa fa-bars"></i></a></li>
                        </ul>

                    </div>
                    <!-- Navigation -->

                </div>
            </div>
        </header>
        <!-- Navigation Holder -->

    </div>
    <!-- Header -->