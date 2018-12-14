<?php

	global $current_user;

	$lang   = get_language_attributes();
	$theme  = get_template_directory_uri();

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pique
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	
<!-- Vendor Stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">
<!--<link href="<?=$theme?>/assets/css/material-design-iconic-font.min.css" rel="stylesheet">-->
<link href="<?=$theme?>/assets/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?=$theme?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
	
<link href="<?=$theme?>/style-dist.css" rel="stylesheet">
<link href="<?=$theme?>/assets/css/aos.css" rel="stylesheet">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	 <!-- Header -->
        <header class="spyre-navbar navbar navbar-expand-lg absolute-top bg-secondary align-items-center" data-transparent data-text-color="#ffffff">
			<!-- replaced the class "fixed-top" from header with "absolute-top"-->
            <div class="container">
                <a class="navbar-brand mr-lg-5 mr-xl-7" href="/pages/index.html">
                    <img src="<?=$theme?>/assets/images/logo-final.svg" class="d-none d-lg-block" alt="Spyre" width="183" />
                </a>


               <!--- <div class="search d-none d-lg-flex justify-content-end ml-auto mr-2">
                    <input class="form-control mr-2" type="text">
                    <i class="zmdi zmdi-search"></i>
                </div> --->

                <div class="menu-toggle">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <!-- Spyrenav Overlay -->
            <div class="spyre-navbar-overlay overlay-slide">
                <div class="container">
                    <div class="row">
                        <div class="spyre-navbar-nav-container col-md-6 col-lg-5 col-xl-4 bg-white ext-l">
                            <nav class="spyre-navbar-nav">
                                <ul class="spyre-nav">
                                   <?php
									wp_nav_menu(array
									(
										"link_before"    => "<font>",
										"link_after"     => "</font>",
										"container"      => false,
										"theme_location" => "primary"
										)); ?>
                                    
                                </ul>
                            </nav>
                        </div>
        
                      
                    </div>
                </div>
            </div>
            <!-- End of Spyrenav Overlay -->
        </header>
        <!-- End of Header -->
	
	
	<!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="circles"></div>
            </div>
        </div>
       <!--  End of Preloader -->

