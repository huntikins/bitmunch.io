<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bitmunch.io
 */

get_header();

$page = get_queried_object();
$post = get_post($page);
?>

<main id="primary" class="site-main">
	<section class="relative h-96">
		<div class="absolute top-0 left-0 w-full h-96 max-w-screen-2xl" aria-hidden="true">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'block object-cover w-full h-96 sm:object-left brightness-50 saturate-75 contrast-75']); ?>
		</div>
		<div
			class="absolute top-0 left-0 w-full p-8 pt-24 h-96 bg-dark-primary/80 sm:p-12 sm:pt-20 text-light-primary max-w-screen-2xl">
			<div class="flex flex-col items-center justify-center w-full h-full">
				<div class="flex flex-col items-start justify-center w-full h-2/3">
					<h1 class="max-w-3xl text-5xl leading-tight sm:text-6xl text-brand-light">
						<?php echo $post->name; ?>
					</h1>
				</div>
			</div>
		</div>
	</section><!-- #featured -->
	<section class="w-full p-8 sm:p-12 bg-dark-secondary/80">
		<div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
			<?php

			$the_query = new WP_Query(
				array(
					'post_type' => 'post',
					'tax_query' => array(
						array(
							'taxonomy' => 'post_tag',
							'field' => 'name',
							'terms' => $post->name,
						)
					),
				)
			);

			while ($the_query->have_posts()):
				$the_query->the_post();
				get_template_part('components/card/main');
			endwhile;

			/* Restore original Post Data 
			 * NB: Because we are using new WP_Query we aren't stomping on the 
			 * original $wp_query and it does not need to be reset.
			 */
			wp_reset_postdata();
			?>
			<div
				class="relative flex flex-col items-center justify-center p-8 py-12 shadow-2xl sm:p-12 bg-dark-primary ">
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
</main><!-- #main -->

<?php
get_footer();