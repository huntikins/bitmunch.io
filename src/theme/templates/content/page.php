<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bitmunch.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="relative h-96">
		<div class="absolute top-0 left-0 w-full h-96 max-w-screen-2xl" aria-hidden="true">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'block object-cover w-full h-96 sm:object-left brightness-50 saturate-75 contrast-75']); ?>
		</div>
		<div
			class="absolute top-0 left-0 w-full p-8 pt-24 h-96 bg-dark-primary/80 sm:p-12 sm:pt-20 text-light-primary max-w-screen-2xl">
			<div class="flex flex-col items-center justify-center w-full h-full">
				<div class="flex flex-col items-start justify-center w-full h-2/3">
					<h1 class="text-3xl leading-tight md:text-5xl sm:text-4xl text-brand-light"><?php the_title(); ?>
					</h1>
				</div>
			</div>
		</div>
	</section><!-- #featured -->
	<section class="w-full p-8 bg-dark-secondary/50 sm:p-12 text-light-primary max-w-screen-2xl">
		<?php the_content(); ?>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->