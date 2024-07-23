<?php

$next_post = get_adjacent_post(null, '', false);
if (empty($next_post)) {
    $posts = get_posts(array('posts_per_page' => 1, 'order' => 'ASC'));
    $next_post = $posts[0];
}

$previous_post = get_adjacent_post(null, '', true);
if (empty($previous_post)) {
    $posts = get_posts(array('posts_per_page' => 1, 'order' => 'DESC'));
    $previous_post = $posts[0];
}

$next = $next_post->ID;
$prev = $previous_post->ID;

?>

<section class="flex justify-between w-screen max-w-screen-2xl">
    <div class="relative w-full h-64 text-left">
        <div class="absolute top-0 left-0 w-full h-64" aria-hidden="true">
            <?php echo get_the_post_thumbnail($prev, 'post-thumbnail', ['class' => 'block object-cover w-full h-64 sm:object-left brightness-50 saturate-75 contrast-75']); ?>
        </div>
        <div class="absolute top-0 left-0 w-full h-64 p-8 bg-dark-primary/80 sm:p-12 text-light-primary">
            <div class="flex flex-col items-center justify-center w-full h-full">
                <div class="flex flex-col items-start justify-center w-full h-2/3">
                    <!-- <strong class="pb-2 font-mono text-xl italic text-light-primary">
                        <span class="text-brand-dark" aria-hidden="true">//&nbsp;</span>
                        <span>Previous article</span>
                    </strong> -->
                    <h3 class="w-full text-2xl leading-tight md:text-4xl sm:text-3xl text-brand-light">
                        <?php echo get_the_title($prev); ?>
                    </h3>
                </div>
            </div>
        </div>
        <a class="absolute top-0 left-0 w-full h-full" href="<?php echo get_the_permalink($prev); ?>">
            <span class="sr-only">Read <?php echo get_the_title($prev); ?></span>
        </a>
    </div>
    <div class="relative w-full text-right">
        <div class="absolute top-0 left-0 w-full h-64" aria-hidden="true">
            <?php echo get_the_post_thumbnail($next, 'post-thumbnail', ['class' => 'block object-cover w-full h-64 sm:object-left brightness-50 saturate-75 contrast-75']); ?>
        </div>
        <div class="absolute top-0 left-0 w-full h-64 p-8 bg-dark-primary/80 sm:p-12 text-light-primary">
            <div class="flex flex-col items-center justify-center w-full h-full">
                <div class="flex flex-col items-end justify-center w-full h-2/3">
                    <!-- <strong class="pb-2 font-mono text-xl italic text-light-primary">
                        <span class="text-brand-dark" aria-hidden="true">//&nbsp;</span>
                        <span>Next article</span>
                    </strong> -->
                    <h3 class="w-full text-2xl leading-tight md:text-4xl sm:text-3xl text-brand-light">
                        <?php echo get_the_title($next); ?>
                    </h3>
                </div>
            </div>
        </div>
        <a class="absolute top-0 left-0 w-full h-full" href="<?php echo get_the_permalink($next); ?>">
            <span class="sr-only">Read <?php echo get_the_title($next); ?></span>
        </a>
    </div>
</section>