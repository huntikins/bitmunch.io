<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bitmunch.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="relative h-128">
        <div class="absolute top-0 left-0 w-full h-128 max-w-screen-2xl" aria-hidden="true">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'block object-cover w-full h-128 sm:object-left brightness-50 saturate-75 contrast-75']); ?>
        </div>
        <div
            class="absolute top-0 left-0 w-full p-8 pt-24 h-128 bg-dark-primary/80 sm:p-12 sm:pt-20 text-light-primary max-w-screen-2xl">
            <div class="flex flex-col items-center justify-center w-full h-full">
                <div class="flex flex-col items-start justify-center w-full pt-12 sm:pt-24">
                    <h1 class="text-3xl leading-tight md:text-5xl sm:text-4xl text-brand-light"><?php the_title(); ?>
                    </h1>
                </div>
                <div class="flex items-end w-full mt-auto">
                    <ul class="flex flex-col items-start w-full text-lg md:items-center md:flex-row">
                        <li class="flex flex-col pb-4 pr-16 sm:pb-0">
                            <strong class="font-mono italic text-brand-light">Author</strong>
                            <span class="text-base">
                                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                                    title="<?php echo esc_attr(get_the_author()); ?>">
                                    @<?php the_author(); ?>
                                </a>
                            </span>
                        </li>
                        <li class="flex flex-col pb-4 pr-16 sm:pb-0">
                            <strong class="font-mono italic text-brand-light">Published</strong>
                            <span class="text-base"><?php echo get_the_date('F jS, Y'); ?></span>
                        </li>
                        <!-- <li class="flex flex-col pb-4 pr-16 sm:pb-0">
                                    <strong class="font-mono italic text-brand-light">Reading time</strong>
                                    <span class="text-base">3 minutes</span>
                                </li> -->
                        <li class="flex flex-col pb-4 pr-16 sm:pb-0">
                            <strong class="font-mono italic text-brand-light">Tags</strong>
                            <span class="text-base">
                                <?php
                                $post_tags = get_the_tags();

                                if (!empty($post_tags)) {
                                    foreach ($post_tags as $post_tag) {
                                        ?>
                                        <span class="mr-2">
                                            <a
                                                href="<?php echo get_term_link($post_tag, $post_tag->name); ?>">#<?php echo $post_tag->name; ?></a>
                                        </span>
                                        <?php
                                    }
                                } ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- #featured -->
    <section class="w-full p-8 bg-dark-secondary/50 sm:p-12 text-light-primary max-w-screen-2xl">
        <div class="sm:px-24">
            <?php the_content(); ?>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->