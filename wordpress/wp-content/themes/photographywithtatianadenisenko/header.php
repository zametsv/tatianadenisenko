<!doctype html>
<html <?php bloginfo('language'); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') :  wp_title(''); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <a href="<?php echo site_url(); ?>" class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" width="166px" height="22px" />
            </a>
            <nav class="header__nav">
                <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </nav>
        </header>