<nav class="bm:nav__menu" id="primary-menu" :hidden="!isOpen" x-trap="isOpen">
    <div class="bm:nav__menu-button">
        <button class="bm:btn bm:btn-menu" aria-controls="primary-menu" :aria-expanded="isOpen" aria-label="Open menu"
            @click="isOpen = !isOpen" type="button">
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