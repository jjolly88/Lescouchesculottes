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
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/colorbox.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style_isotope.css">

<!--<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/masonry-docs.css">-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<body <?php body_class(); ?>>
	 <div class="wrapper">
        <header></header>
        <nav><?php wp_nav_menu(array('theme_location' => 'primary' ) ); ?></nav>