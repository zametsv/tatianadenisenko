<!doctype html>
<html <?php bloginfo('language'); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') :  wp_title(''); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="burger">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-button.svg" class="burger__close-btn" alt="Close button" height="21px" width="20px">
            <ul class="burger__nav-wrap">
                <li class="burger__nav-wrap-item"><a href="<?php echo site_url(); ?>" class="burger__nav-link burger__nav-link_color">Home</a></li>
                <li class="burger__nav-wrap-item burger__nav-wrap-item_click"><a href="#" class="burger__nav-link burger__nav-link_click-item">Portfolio+</a>
                    <ul class="burger__nav-wrap_hidden-menu">
                        <li class="burger__nav-wrap-item burger__nav-wrap-item_big-margin burger__nav-wrap-item_hidden"><a href="fashion" class="burger__nav-link">Fashion</a></li>
                        <li class="burger__nav-wrap-item burger__nav-wrap-item_small-margin burger__nav-wrap-item_hidden"><a href="beauty" class="burger__nav-link">Beauty</a></li>
                        <li class="burger__nav-wrap-item burger__nav-wrap-item_small-margin burger__nav-wrap-item_hidden"><a href="editorial" class="burger__nav-link">Editorial</a></li>
                        <li class="burger__nav-wrap-item burger__nav-wrap-item_small-margin burger__nav-wrap-item_hidden"><a href="tests" class="burger__nav-link">Tests</a></li>
                        <li class="burger__nav-wrap-item burger__nav-wrap-item_small-margin burger__nav-wrap-item_hidden"><a href="family" class="burger__nav-link">Family</a></li>
                    </ul>
                </li>
                <li class="burger__nav-wrap-item"><a href="blog" class="burger__nav-link burger__nav-link_color">Blog</a></li>
                <li class="burger__nav-wrap-item"><a href="about" class="burger__nav-link burger__nav-link_color">About</a></li>
                <li class="burger__nav-wrap-item"><a href="contact" class="burger__nav-link burger__nav-link_color">Contact</a></li>
            </ul>
        </div>  
        <div class="wrapper">  
            <header class="header">
                <a href="<?php echo site_url(); ?>" class="header__logo-link"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-icon.svg" alt="Menu icon" width="20px" height="11px" class="header__nav_mobile-btn">
                <nav class="header__nav">
                    <ul class="header__nav-wrap">
                        <li class="header__nav-wrap-item"><a href="<?php echo site_url(); ?>" class="header__nav-link">Home</a></li>
                        <li class="header__nav-wrap-item"><a href="#" class="header__nav-link header__nav-link_open-modal-lb">Portfolio</a></li>
                        <li class="header__nav-wrap-item"><a href="blog" class="header__nav-link">Blog</a></li>
                        <li class="header__nav-wrap-item"><a href="about" class="header__nav-link">About</a></li>
                        <li class="header__nav-wrap-item header__nav-wrap-item_no-margin"><a href="contact" class="header__nav-link">Contact</a></li>
                    </ul>
                </nav>
            </header>