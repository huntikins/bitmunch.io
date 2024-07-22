<section class="w-full p-8 sm:p-12 bg-dark-secondary/80">
    <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
        <?php
        $posts = get_posts(
            array(
                'posts_per_page' => 20
            )
        );

        if ($posts) {
            foreach ($posts as $post):
                setup_postdata($post);

                get_template_part('components/card/main');

            endforeach;
            wp_reset_postdata();
        }
        ?>
        <div class="relative flex flex-col items-center justify-center p-8 py-12 shadow-2xl sm:p-12 bg-dark-primary ">
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