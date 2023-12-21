<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="NEW-INTEGRITY-VALUE" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <h1><?php bloginfo('name'); ?></h1>
    </div>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'header-menu'
        ));
        // wp_nav_menu(array('theme_location' => 'header-menu'));

    ?>
    <div class="contact">
        <div class="phone">
            <i class="fas fa-phone"></i> +44 987 065 908
        </div>
        <div class="social-icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
        </div>
    </div>
</header>


    <?php wp_footer(); ?>
</body>
</html>
