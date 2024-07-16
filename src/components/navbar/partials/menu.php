<nav class="absolute top-0 left-0 w-screen h-screen text-light-primary navbar__menu bg-brand" id="primary-menu"
    :class="!isOpen ? 'sr-only' : false" x-trap="isOpen">
    <button class="w-8 h-8 menu-toggle " aria-controls="primary-menu" :aria-expanded="isOpen" aria-label="Open menu"
        @click="isOpen = !isOpen" type="button"><?php get_template_part('assets/icons/menu'); ?></button>
    <div id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'primary' => 'primary-menu',
            )
        );
        ?>
    </div><!-- #site-navigation -->
    <div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'social',
                'social' => 'social-menu',
            )
        );
        ?>
    </div>
</nav>