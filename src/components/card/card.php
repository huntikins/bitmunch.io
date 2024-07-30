<article class="bm:card">
    <div class="bm:card__bg">
        <!-- The post image -->
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'bm:card__bg--image']); ?>
    </div>
    <div class="bm:card__content">
        <div class="bm:card__content--heading">
            <!--Author-->
            <span class="bm:card__avatar">
                <?php echo get_avatar(get_the_author_meta('ID'), $size = '60', $default = 'mystery', $alt = '', $args = array('class' => 'rounded-full')); ?>
            </span>
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                title="<?php echo esc_attr(get_the_author()); ?>">
                @<?php the_author(); ?>
            </a>
        </div>
        <div class="bm:card__content--description">
            <strong class="bm:card__date">
                <span class="bm:accent" aria-hidden="true">//</span>
                <span><?php echo get_the_date('F jS, Y'); ?></span>
            </strong>
            <h3 class="bm:card__title"><?php the_title(); ?></h3>
            <p>
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>
        <div class="bm:card__content--info">
            <div class="bm:card__info">
                <div class="bm:card__info--details">
                    <span class="sr-only">Reading time </span>
                    <span class="bm:icon bm:icon-small bm:mr-2"
                        aria-hidden="true"><?php get_template_part('assets/icons/read'); ?></span>
                    <span>
                        <?php echo the_reading_time(the_post()); ?>
                    </span>
                </div>
                <hr class="bm:divider">
                <span>
                    <?php
                    $post_tags = get_the_tags();

                    if (!empty($post_tags)) {
                        foreach ($post_tags as $post_tag) {
                            ?>
                            <span class="bm:mr-2">
                                <a
                                    href="<?php echo get_term_link($post_tag, $post_tag->name); ?>">#<?php echo $post_tag->name; ?></a>
                            </span>
                            <?php
                        }
                    } ?>
                </span>
            </div>
            <div class="bm:pt-4">
                <a href="<?php the_permalink(); ?>" aria-label="Read <?php the_title(); ?>"
                    class="bm:btn bm:btn-primary">
                    <span>Read now</span>
                    <span class="bm:icon bm:icon-small"><?php get_template_part('assets/icons/arrow-b-r'); ?></span>
                </a>
            </div>
        </div>
</article>