<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bitmunch.io
 */

get_header();

$page = get_queried_object();
?>

<main id="primary" class="site-main">
	<section class="relative h-128">
		<div class="absolute top-0 left-0 w-full h-128 max-w-screen-2xl" aria-hidden="true">
			<?php echo get_the_post_thumbnail($page, 'post-thumbnail', ['class' => 'block object-cover w-full h-128 sm:object-left brightness-50 saturate-75 contrast-75']); ?>
		</div>
		<div
			class="absolute top-0 left-0 w-full p-8 pt-24 h-128 bg-dark-primary/80 sm:p-12 sm:pt-20 text-light-primary max-w-screen-2xl">
			<div class="flex flex-col items-center justify-center w-full h-full">
				<div class="flex flex-col items-start justify-center w-full">
					<h1 class="max-w-3xl text-5xl leading-tight sm:text-6xl text-brand-light">
						<?php echo $page->post_title; ?>
					</h1>
				</div>
			</div>
		</div>
	</section><!-- #featured -->
	<section class="w-full p-8 sm:p-12 bg-dark-secondary/80">
		<div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
			<?php
			$args = array(
				'post_type' => 'post',
				'orderby' => 'date',
				'post_status' => 'publish',
				'order' => 'DESC',
				'posts_per_page' => -1 // this will retrive all the post that is published 
			);
			$result = new WP_Query($args);

			if ($result->have_posts()):
				while ($result->have_posts()):
					$result->the_post();
					get_template_part('components/card/main');
				endwhile;
			endif;
			wp_reset_postdata();

			?>
			<div
				class="relative flex flex-col items-center justify-center h-full p-8 py-12 shadow-2xl sm:p-12 bg-dark-primary min-h-128">
				<p class="w-full mx-auto font-mono text-3xl font-bold leading-tight text-center text-light-primary">
					WOULD YOU LIKE TO KNOW <span class="drop-shadow shadow-brand-light text-brand-light">MORE</span>?
				</p>
				<span
					class="w-12 h-12 pt-8 text-light-primary stroke-light-primary"><?php get_template_part('assets/icons/arrow-b-r'); ?></span>
				<a class="absolute top-0 left-0 w-full h-full" href="<?php echo get_post_type_archive_link('post'); ?>"
					aria-label="View all posts"></a>
			</div>
		</div>
	</section><!-- #about-->
	<?php get_template_part('templates/partials/global/marketing'); ?>
</main><!-- #main -->

<?php
get_footer();
