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

<footer id="colophon" class="w-dvw text-light-primary">
	<div class="p-8 py-12 bg-dark-secondary sm:px-12 sm:max-w-screen-2xl sm:mx-auto">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'bitmunch-io')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'bitmunch-io'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'bitmunch-io'), 'bitmunch-io', '<a href="https://huntertrammell.dev">Hunter Trammell</a>');
		?>
	</div><!-- .site-info -->
	<div class="p-8 py-2 text-center bg-dark-primary sm:px-12 sm:max-w-screen-2xl sm:mx-auto">
		Copyright 2024 Hunter Trammell
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>