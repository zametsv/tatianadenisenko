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
        <div class="wrap">
            <header class="header">
                <a href="<?php echo site_url(); ?>" class="header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" width="166px" height="22px" />
                </a>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon.svg" alt="Menu icon" width="20px" height="11px" class="mobile-nav-icon">
                <nav class="header__nav">
                   <ul>
                       <li><a href="<?php echo site_url(); ?>">Home</a></li>
                       <li><a href="#">Portfolio</a></li>
                       <li><a href="blog">Blog</a></li>
                       <li><a href="about">About</a></li>
                       <li><a href="#">Contact</a></li>
                   </ul>
                </nav>
            </header>
        </div>