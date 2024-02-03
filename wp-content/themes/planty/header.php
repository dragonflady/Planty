<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <?php if(has_custom_logo()) : ?>
    <a class="logo-brand" href="<?php bloginfo('url'); ?>"><?php the_custom_logo(); ?></a>
    <?php else : ?>
        <h1><a class="site-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php endif; ?>
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