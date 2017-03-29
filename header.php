<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exciting-travelling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?c2sn1i">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default menu">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri()?>/img/logo.png"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <?php 
				wp_nav_menu( array( 
				'theme_location' => '', 
				'menu' => 'navbar navbar-default', 
				'container' => 'div', 
				'container_class' => 'collapse navbar-collapse', 
				'container_id' => 'main-menu', 
				'menu_class' => 'nav navbar-nav navbar-right', 
				'menu_id' => '', 
				'echo' => true, 
				'fallback_cb' => 'wp_page_menu', 
				'before' => '', 
				'after' => '', 
				'link_before' => '', 
				'link_after' => '', 
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
				'depth' => 0, 
				'walker' => '', 
				) ); 
			?>
		 
		      <ul class="nav navbar-nav navbar-right social">
		        <li><a href="https://plus.google.com" class="socicon-googleplus"></a></li>
		        <li><a href="https://vk.com/kate.datsenko" class="socicon-vkontakte"></a></li>
		        <li><a href="#" class="socicon-telegram"></a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
			<span class="glyphicon glyphicon-globe globe"></span>
		  </div><!-- /.container -->
		</nav>

		<!--
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'exciting-travelling' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">