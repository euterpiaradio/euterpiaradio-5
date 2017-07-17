<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="main">
    <div class="brand">
        <a href="<?php echo get_home_url(); ?>">Euterpia Radio</a>
    </div>
    <div class="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'navigation-container', 'menu_class' => 'navigation-links' ) ); ?>
    </div>
</nav>
