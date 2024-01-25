<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => false,
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
                <form class="d-flex navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <label for="navbar-search" class="sr-only"><?php _e('Search', 'textdomain') ?></label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" id="navbar-search">
                    </div>
                    <button class="btn btn-primary" type="submit"><?php _e('Search', 'textdomain') ?></button>

                </form>
            </div>
        </div>
    </nav>
</header>