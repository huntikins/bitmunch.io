<article class="relative w-full h-full shadow-2xl text-light-primary">
    <div class="absolute top-0 left-0 w-full h-full">
        <!-- The post image -->
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'block object-cover w-full h-full sm:object-left brightness-50 saturate-75 contrast-75']); ?>
    </div>
    <div class="relative z-10 flex flex-col h-full p-6 sm:p-12 bg-dark-primary/60">
        <div class="flex items-center justify-start pb-6">
            <!--Author-->
            <span class="inline-block w-10 h-10 mr-3">
                <?php echo get_avatar(get_the_author_meta('ID'), $size = '60', $default = 'mystery', $alt = '', $args = array('class' => 'rounded-full')); ?>
            </span>
            <span class="font-mono text-base">
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                    title="<?php echo esc_attr(get_the_author()); ?>">
                    @<?php the_author(); ?>
                </a>
            </span>
        </div>
        <div class="py-12">
            <strong class="pb-2 font-mono text-sm italic sm:text-xs text-light-primary">
                <span class="text-brand-dark" aria-hidden="true">//</span>
                <span><?php echo get_the_date('F jS, Y'); ?></span>
            </strong>
            <h3 class="pb-2 text-2xl font-bold"><?php the_title(); ?></h3>
            <p>
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>
        <div class="flex flex-col mt-auto">
            <div class="w-full">
                <div class="flex items-center justify-start">
                    <span class="sr-only">Reading time </span>
                    <span class="inline-block w-4 h-4 mr-2"
                        aria-hidden="true"><?php get_template_part('assets/icons/read'); ?></span>
                    <span>
                        <?php echo the_reading_time(the_post()); ?>
                    </span>
                </div>
                <hr class="my-3 border-1 border-light-primary/70">
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
            </div>
            <div class="pt-6">
                <a href="<?php the_permalink(); ?>" aria-label="Read <?php the_title(); ?>"
                    class="bm:btn bm:btn-primary">
                    <span class="font-mono text-lg uppercase">Read now</span>
                    <span class="inline-block w-6 h-6 ml-2"><?php get_template_part('assets/icons/arrow-b-r'); ?></span>
                </a>
            </div>
        </div>
</article>