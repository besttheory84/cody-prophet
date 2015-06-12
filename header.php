<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="banner" role="banner">
            <img src="<?=get_bloginfo('template_directory');?>/images/logo.png" height="70" />
        </header>
        <nav class="menu" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>