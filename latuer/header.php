<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package latuer
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'latuer' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

<!--    	inicio comentario dos lineas para eliminar titulo y detalle corto de cabecera -->
<!--			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>-->
<!--			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
<!--    	fin comentario dos lineas para eliminar titulo y detalle corto de cabecera -->

		</div><!-- .site-branding -->

<!--		<nav id="site-navigation" class="main-navigation" role="navigation">
<!--		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'latuer' ); ?></button>
<!--			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<!--    	</nav><!-- #site-navigation -->

<!--    	inicio sidebar agregado para imagen del encabezado -->
<div class="row">
  <div class="col-md-12"><?php if ( is_active_sidebar('encabezado') ) { ?>
			<?php dynamic_sidebar('encabezado'); ?>
			<?php } ?></div>
</div>
<!--    	fin sidebar agregado para imagen del encabezado -->

<!-- INICIO de lo que agrege para integrar bootstrap -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
					<?php bloginfo('name'); ?>
					</a>
				</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<?php 
				wp_nav_menu( array(
					'menu' => 'primary',
					'theme_location' => 'primary',
					'depth' => 2,
					'container' => false, 
					
					'menu_class' => 'nav navbar-nav',
					'fallback_cb' => 'wp_page_menu',
					'walker' => new wp_bootstrap_navwalker() )
				);
				?>




		</div> <!-- /.navbar-collapse -->
		</div><!-- .container -->
		</nav>
		</nav><!-- #site-navigation -->

<!-- fin de lo que agrege para integrar bootstrap -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
