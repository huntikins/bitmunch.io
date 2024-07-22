<nav class="absolute top-0 left-0 w-screen h-screen p-8 sm:mx-auto text-light-primary sm:max-w-screen-2xl sm:p-12 bg-dark-primary/40 backdrop-blur-md"
    id="primary-menu" :class="!isOpen ? 'hidden' : false" x-trap="isOpen">
    <div class="absolute top-0 right-0 flex items-center justify-end h-24 px-12 py-2">
        <button class="w-10 h-10 text-brand-light stroke-brand-light" aria-controls="primary-menu"
            :aria-expanded="isOpen" aria-label="Open menu" @click="isOpen = !isOpen" type="button">
            <?php get_template_part('assets/icons/menu'); ?>
        </button>
    </div>
    <div>
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
    </div>
</nav>