<!doctype html>
    <html <?php bloginfo('language'); ?>>
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width">
            <title><?php bloginfo('name'); ?></title>
            <?php wp_head(); ?>
        </head>
        <body>
            <header>
                <a href="<?php echo site_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" width="166px" height="22px" />
                </a>
                <nav class="nav">
                    <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </nav>
            </header>