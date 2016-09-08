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
?>
<?php 
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/Images/favicon.ico"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
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

	        	<?php 
	        		$lang = pll_current_language('slug');

					switch ($lang) {
						case 'en':
							$titleLogo = 'Go back to Tanaguru website';
							break;
						case 'fr':
							$titleLogo = 'Retourner sur le site de Tanaguru';
							break;
						default:
							$titleLogo = 'Go back to Tanaguru website';
					}
	        	?>

	            <div id="logo">
	                <h1>
	                	<a title="<?php echo $titleLogo ?>" href="http://www.tanaguru.com/<?php echo $lang ?>">
		                    <img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt=""/>
		                    <span>Tanaguru</span>
		                </a>
	                </h1>
	            </div>
	        <?php } else { ?>
	            <div id="logo">
	                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/logo_tg.png" alt=""/><span>Tanaguru</span></a>
	            </div>
	        <?php } ?>   

	        <div id="navbar" class="navbar">

	            <nav id="site-navigation" class="navigation main-navigation" role="navigation">
	                <p class="menu-toggle"><?php _e('Menu', 'twentythirteen'); ?></p>
	<!--                        <a class="screen-reader-text skip-link" href="#content"><?php _e('Skip to content', 'twentythirteen'); ?></a>-->
	                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

	            </nav><!-- #site-navigation -->
	        </div><!-- #navbar -->
	        <div id="nav2">
	            <?php get_sidebar('main'); ?>
	        </div>
	    </header><!-- #masthead -->

	    <div id='page_title_gradient'>
	        <div id="page_title_filter"></div>    
	        <div id="page_title"><h1 class="entry-title">Blog</h1></div>
	    </div>

		<div id="main" class="site-main">
