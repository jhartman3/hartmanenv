<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_enqueue_style( 'hover', get_stylesheet_uri() );?>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
	
	<body <?php body_class(); ?>>

<div id="header"><a class="title" href="<?php echo esc_url( home_url() ); ?>"><div id="title"><?php bloginfo('name'); ?></div></a><div id="description"><?php bloginfo('description'); ?></div></div>

	<div id="nav-container">
	<div id="nav"><div class="menu">
	<?php wp_nav_menu( array('theme_location' => 'header-nav', 'depth' => 0, 'menu_class' => 'nav' )); ?>
   
</div></div></div><div class="clear"></div>

	

<div id="container">