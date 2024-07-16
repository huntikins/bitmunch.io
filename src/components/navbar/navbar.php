<div class="fixed inset-x-0 top-0 z-50 flex items-center justify-between w-full h-20 px-6 py-2 mx-auto shadow-sm bg-dark-primary text-light-primary max-w-screen-2xl sm:px-12"
    x-data="navbar">
    <div class="site-branding">
        <div class="font-mono text-2xl">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </div>
    </div><!-- .site-branding -->

    <button class="w-8 h-8 menu-toggle" aria-controls="primary-menu" :aria-expanded="isOpen" aria-label="Open menu"
        @click="isOpen = !isOpen" type="button"><?php get_template_part('assets/icons/menu'); ?></button>
    <?php get_template_part('components/navbar/partials/menu'); ?>
</div>