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

<main id="primary" class="site-main bg-light-primary">
    <!--HERO-->
    <?php get_template_part('templates/partials/home/hero'); ?>

    <!--ABOUT-->
    <?php get_template_part('templates/partials/home/about'); ?>


    <section></section><!-- #latest -->
    <section></section> <!-- #featured dev diaries -->
    <section></section> <!-- # featured articles -->
    <section></section> <!-- # featured tutorials -->
    <section></section> <!-- # contact -->
</main><!-- #main -->

<?php
get_footer();
