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
                    <a href="https://my.tanaguru.com/" id="button_signin" class="gradient"><?php _e('Sign in', 'wwwtg'); ?></a>
                </div>

                <div id="signup">
                    <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_signup" class="gradient"><?php _e('Sign up', 'wwwtg'); ?></a>
                </div>

                <?php if (is_front_page()) { ?>
                    <div id="logo">
                        <h1>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAD10lEQVR42s2ZXWgUVxiGv5nd2jaN222sy9pKQmlhSaoQYaEFehOgAYpNpD8WqARI6VVuSisUSiqLDQWhlt7kpj8WJAL+awwCEciNgELAgOqyiEiCaoga42aNv7Pjc2BuRlnOmcnMxBcePiDZ73s4mZmdnGPJMlL7RVKUTdAFRShAK2QgBQ5UYQYqMAkTcK75d34WMqGkqz/a7ZR+2AZ5CZ5ZGIE9mT/r5VilFwbSGygl+AIsWX5cOAKl7PDTC5FKz3/3SrMn+wOkJPo48BeUWv57Ulu29K1tr26kHISCxJ8KfL125NH50NJz37y2mXIAXpfk8gC25vY/HAssPbul6VvKXrAl+dShL39saZ+x9I3P3thMOa4RTkK8952T98e00te7mzdSzmouiSQvlY/eHa+dbyh9rSvTTJkMcdMtwSiMwxRMw2NYBW3QCd3QA00hbs7i+olqTbykfX+PJ1YpoPAC7ILh1tP3Fhs9MeEc/D/zyZurqQPwM2TFLAUowfYXVnr64+wGylSA5/AofN92ZmFOAoZZOcq/8HmA53gnsy4IscWL+9QqQQrEgCHYEkZYRX2Oz/fCkOG8FJR8K321s6WdctHwG3Lovan5XyWiMPs3yqDhV/6HzC7bQlxH+sEC0TAKOyTCqH5wwmC2Bf1CrCsda1LUa5A3uOkK71+6MycRB4ccpWJwc87Cett1rE2QB9GwKw5hFdVX9dc74ImvLXXpAtGwBMMSZ+gPSwYuXTbmRRANox9cvr0oMUb1V3MMXIq2W5cCiIZxSSBqjoFLIS11q1X0mZIEgovJnNY05hnRZzqZlTaak0mLa6VEn8eSQHAxmZNSK+0YvG+sSmaljeY4trhSBdHQJkmEOQYuVaStGRANnZJEmGPgMmO7rlRANHwqCYQ53QYuFVZaJkE09JbX5ldLjFH9mdNj4DKppCdANDTBgMQZ+kOTgcuEVX47H+gtr/327JxEHByCveUh4WA/AqIhC3+X1+StSIXpR99/IGvgMKJ8bSGuWHvABdHQCzslwqh+0GMw21Wevn9sL7WsO0T5UswyBDs65m+6EjLMsyg7YVDMcph5X8lzO0glcMQsg3CUwbmQwjnKsQDCeOHnxXqu2R+Un8Lse7AKiwayYfY9VHbTf3sj6eXsMB2HU3HtMCFd80n7xN9a99Lt5XXcvenby7PBF+8XtkJdVjZ15eETbiTtiY9R+qC+gsJ9yiPwSQCXyoqdBPiEjaT94omfuXiXRMPYoonXoAi7wZF44nj9iz5ho5XWr3ps54jIhjxHNJeP7MQW2YhPbPXyoc/GkXUkZJ4B5iDaa06VvUMAAAAASUVORK5CYII=" alt=""/>
                            Tanaguru
                        </h1>
                    </div>
                <?php } else { ?>
                    <div id="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/tg-logo-header.png" alt=""/> Tanaguru</a>
                    </div>
                <?php } ?>   

                <div id="navbar" class="navbar">

                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <p class="menu-toggle"><?php _e('Menu', 'twentythirteen'); ?></p>
                        <a class="screen-reader-text skip-link" href="#content"><?php _e('Skip to content', 'twentythirteen'); ?></a>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

                    </nav><!-- #site-navigation -->
                </div><!-- #navbar -->
                <div id="nav2">
                    <?php get_sidebar('main'); ?>
                </div>
            </header><!-- #masthead -->

            <div id="main" class="site-main">
