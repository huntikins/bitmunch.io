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

function bitmunch_io_remove_wp_styles()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style');
	wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'bitmunch_io_remove_wp_styles', 100);

// Remove Global Styles and SVG Filters from WP 5.9.1
function remove_global_styles_and_svg_filters()
{
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
	remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('init', 'remove_global_styles_and_svg_filters');

// Disable Gutenberg on the back end.
add_filter('use_block_editor_for_post', '__return_false');

// Disable Gutenberg for widgets.
add_filter('use_widgets_block_editor', '__return_false');

// Removes from admin menu
add_action('admin_menu', 'bitmunch_remove_admin_menus');
function bitmunch_remove_admin_menus()
{
	remove_menu_page('edit-comments.php');
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support()
{
	remove_post_type_support('post', 'comments');
	remove_post_type_support('page', 'comments');
}
// Removes from admin bar
function bitmunch_admin_bar_render()
{
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'bitmunch_admin_bar_render');

/**
 * Imports
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/metabox/featured-post.php';
require get_template_directory() . '/inc/metabox/seo.php';
require get_template_directory() . '/inc/metabox/a11y.php';

if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}