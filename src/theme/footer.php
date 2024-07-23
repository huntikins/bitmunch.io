<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bitmunch.io
 */

?>

<footer id="colophon" class="w-screen text-light-primary">
	<div class="flex items-center justify-between w-full p-8 py-12 bg-dark-secondary sm:px-12 sm:max-w-screen-2xl">
		<div id="site-navigation" class="w-full">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'primary' => 'primary-menu',
				)
			);
			?>
		</div><!-- #site-navigation -->
		<div class="w-full text-right">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'social' => 'social-menu',
				)
			);
			?>
		</div>
	</div><!-- .site-info -->
	<div class="w-full p-8 py-2 text-center bg-dark-primary sm:px-12 sm:max-w-screen-2xl">
		Copyright 2024 Hunter Trammell
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>