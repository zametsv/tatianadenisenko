<!doctype html>
<html <?php bloginfo('language'); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') :  wp_title(''); ?></title>
        <?php wp_head(); ?>
    </head>
    <div class="wrapper">
    <body>
        <header class="header">
            <a href="<?php echo site_url(); ?>" class="header__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" width="166px" height="22px" class="header__logo-image"/>
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon.svg" alt="Menu icon" width="20px" height="11px" class="header__nav_mobile-btn">
            <nav class="header__nav">
                <ul class="header__nav-wrap">
                    <li class="header__nav-wrap-item"><a href="<?php echo site_url(); ?>" class="header__nav-link">Home</a></li>
                    <li class="header__nav-wrap-item"><a href="#" class="header__nav-link">Portfolio</a></li>
                    <li class="header__nav-wrap-item"><a href="blog" class="header__nav-link">Blog</a></li>
                    <li class="header__nav-wrap-item"><a href="about" class="header__nav-link">About</a></li>
                    <li class="header__nav-wrap-item header__nav-wrap-item_no-margin"><a href="#" class="header__nav-link">Contact</a></li>
                </ul>
            </nav>
        </header>