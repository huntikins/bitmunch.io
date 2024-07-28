<div class="bm:nav__track" x-data="navbar">
    <div class="bm:nav__title">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
    </div>

    <button class="bm:btn bm:btn-menu" aria-controls="primary-menu" :aria-expanded="isOpen" aria-label="Open menu"
        @click="isOpen = !isOpen" type="button">
        <?php get_template_part('assets/icons/menu'); ?>
    </button>


    <?php get_template_part('components/navbar/partials/menu'); ?>
</div>