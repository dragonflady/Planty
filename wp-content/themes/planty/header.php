<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
    <div id="branding">
    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        
    <?php echo '<a class="logo-brand"'?> href="<?php bloginfo('url'); ?>"><?php the_custom_logo(); ?></a>
        
    </div>
    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'ul', 
        'menu_class' => 'site__header__menu' ) ); ?>
    </nav>
</header>
<div id="container">
<main id="content" role="main">