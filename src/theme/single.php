<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bitmunch.io
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()):
		the_post();

		get_template_part('templates/content/' . get_post_type());

	endwhile; // End of the loop.
	?>
	<?php get_template_part('templates/partials/global/marketing'); ?>
	<?php get_template_part('templates/partials/global/post-nav'); ?>
</main><!-- #main -->

<?php
get_footer();
