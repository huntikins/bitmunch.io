<?php
$args = array(
    'posts_per_page' => 1,
    'meta_key' => 'meta-checkbox',
    'meta_value' => 'yes'
);
$featured = new WP_Query($args);

if ($featured->have_posts()):
    while ($featured->have_posts()):
        $featured->the_post(); ?>
<section class="bm:hero bm:hero-full">
    <div class="bm:hero__bg" aria-hidden="true">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'bm:hero__bg--image']); ?>
    </div>
    <div
        class="absolute top-0 left-0 w-screen h-screen p-8 pt-24 bg-dark-primary/80 sm:p-12 sm:pt-20 text-light-primary max-w-screen-2xl">
        <div class="flex flex-col items-center justify-center w-full h-full">
            <div class="flex flex-col items-start justify-center w-full h-2/3">
                <strong class="pb-2 font-mono text-xl italic text-light-primary"><span class="text-brand-dark"
                        aria-hidden="true">//</span>
                    Featured article</strong>
                <h1 class="max-w-3xl text-5xl leading-tight sm:text-6xl text-brand-light"><?php the_title(); ?>
                </h1>
            </div>
            <div class="flex items-end w-full h-1/3">
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
                    <li class="flex flex-col pb-4 sm:pb-0 sm:pr-16">
                        <strong class="font-mono italic text-brand-light">Published</strong>
                        <span class="text-base"><?php echo get_the_date('F jS, Y'); ?></span>
                    </li>
                    <!-- <li class="flex flex-col pb-4 pr-16 sm:pb-0">
                                    <strong class="font-mono italic text-brand-light">Reading time</strong>
                                    <span class="text-base">3 minutes</span>
                                </li> -->
                    <li class="flex flex-col pr-8">
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
                <a href="<?php the_permalink(); ?>" aria-label="Read <?php the_title(); ?>" class="bm:btn bm:btn-box">
                    <?php get_template_part('assets/icons/arrow-b-r'); ?>
                </a>
            </div>
        </div>
    </div>
</section><!-- #featured -->
<?php
    endwhile;
else:
endif;
?>