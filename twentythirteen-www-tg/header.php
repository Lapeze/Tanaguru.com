<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <!-- DATA_HEAD -->
        <?php wp_head(); ?>
        <!-- /DATA_HEAD -->
        <?php if ( is_page( 'Contact') ) { ?>
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/Contact.css" type="text/css" media="screen" />
        <?php } ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site red_line">

            <header id="masthead" class="site-header cf" role="banner">

                <div id="signin">
                    <a href="#" id="button_signin" class="gradient"><?php _e('Sign in', 'wwwtg'); ?></a>
                </div>

                <div id="signup">
                    <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_signup" class="gradient"><?php _e('Sign up', 'wwwtg'); ?></a>
                </div>

                <?php if (is_front_page()) { ?>
                    <div id="logo">
                        <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/tg-logo-header.png" alt=""/> Tanaguru</h1>
                    </div>
                <?php } else { ?>
                    <div id="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/tg-logo-header.png" alt=""/> Tanaguru</a>
                    </div>
                <?php } ?>   

                <div id="navbar" class="navbar">

                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <p class="menu-toggle"><?php _e('Menu', 'twentythirteen'); ?></p>
                        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e('Skip to content', 'twentythirteen'); ?>"><?php _e('Skip to content', 'twentythirteen'); ?></a>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

                    </nav><!-- #site-navigation -->
                </div><!-- #navbar -->
                <div id="nav2">
                    <?php get_sidebar('main'); ?>
                </div>
            </header><!-- #masthead -->

            <div id="main" class="site-main">
