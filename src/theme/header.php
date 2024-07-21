<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bitmunch.io
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="mx-auto max-w-screen-2xl scroll-smooth">
	<?php wp_body_open(); ?>
	<div id="page">
		<a class="sr-only" href="#primary"><?php esc_html_e('Skip to content', 'bitmunch-io'); ?></a>
		<header id="masthead" class="site-header">
			<?php get_template_part('components/navbar/main'); ?>
		</header>