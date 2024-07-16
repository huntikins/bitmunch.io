<?php
/**
 * bitmunch.io functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bitmunch.io
 */

if (!defined('BITMUNCH_VERSION')) {
	// Replace the version number of the theme on each release.
	define('BITMUNCH_VERSION', '0.1.0');
}

function bitmunch_io_setup()
{
	register_nav_menus(
		array(
			'primary' => esc_html__('Primary', 'bitmunch-io'),
			'secondary' => esc_html__('Secondary', 'bitmunch-io'),
			'social' => esc_html__('Social', 'bitmunch-io'),
			'footer' => esc_html__('Footer', 'bitmunch-io'),
		)
	);

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'bitmunch_io_setup');

function bitmunch_io_scripts()
{
	wp_enqueue_style('bitmunch-theme', get_template_directory_uri() . '/assets/css/main.css', array(), BITMUNCH_VERSION);
	wp_enqueue_script('bitmunch-core', get_template_directory_uri() . '/assets/js/core.js', array(), BITMUNCH_VERSION, false);
	wp_enqueue_script('bitmunch-main', get_template_directory_uri() . '/assets/js/main.js', array(), BITMUNCH_VERSION, true, array('strategy' => 'defer'));
}
add_action('wp_enqueue_scripts', 'bitmunch_io_scripts');

/**
 * Imports
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

