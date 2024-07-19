<div class="fixed inset-x-0 top-0 z-50 flex items-center justify-between w-full h-24 px-6 py-2 mx-auto text-light-primary max-w-screen-2xl sm:px-12"
    x-data="navbar">
    <div class="site-branding">
        <div class="font-mono text-3xl">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </div>
    </div><!-- .site-branding -->

    <button class="w-10 h-10 menu-toggle text-brand-dark stroke-brand-dark" aria-controls="primary-menu"
        :aria-expanded="isOpen" aria-label="Open menu" @click="isOpen = !isOpen"
        type="button"><?php get_template_part('assets/icons/menu'); ?></button>
    <?php get_template_part('components/navbar/partials/menu'); ?>
</div>