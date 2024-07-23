<?php
/**
 * The Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bitmunch.io
 */

get_header();
?>

<main id="primary" class="site-main">
    <!--HERO-->
    <?php get_template_part('templates/partials/home/hero'); ?>

    <!--QUOTE-->
    <?php get_template_part('templates/partials/global/quote'); ?>

    <!--LATEST-->
    <?php get_template_part('templates/partials/home/latest'); ?>
</main><!-- #main -->

<?php
get_footer();
