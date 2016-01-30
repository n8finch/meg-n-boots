<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meg-n-Boots
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
<div class="container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'meg-n-boots' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<!--Original _s menu -->

<!--		<nav id="site-navigation" class="main-navigation" role="navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'meg-n-boots' ); ?><!--</button>-->
<!--			--><?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<!--		</nav><!-- #site-navigation -->





		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->

				<div class="site-branding text-left col-xs-4">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description sr-only"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
					endif; ?>
				</div><!-- .site-branding -->

				<div id="navbar-button-group" class="text-right">
					<button type="button" class="navbar-button"  data-toggle="" data-target="">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-search"></span>
					</button>
					<button type="button" class="navbar-button"  data-toggle="" data-target="">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<button type="button" class="navbar-button"  data-toggle="" data-target="">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-option-horizontal"></span>
					</button>
				</div>

				<div class="navbar-header">

				</div><!--end navbar-header-->
				<div class="collapse navbar-collapse menu-primary navbar-right" id="bs-example-navbar-collapse-1">
<!--					--><?php
//					wp_nav_menu( array(
//							'menu'              => '',
//							'theme_location'    => 'primary',
//							'depth'             => 2,
//							'container'         => '',
//							'container_class'   => 'collapse navbar-collapse',
//							'container_id'      => 'bs-example-navbar-collapse-1',
//							'menu_class'        => 'nav navbar-nav',
//							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
//							'walker'            => new wp_bootstrap_navwalker())
//					);
//					?>
					<div class="col-sm-3 col-md-3 hidden search-navbar"> <!-- Hidden Search Bar -->
						<form class="navbar-form" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
							<div class="input-group">
								<input type="text" id="searchbox" class="form-control" placeholder="Search" name="s" id="s">
								<div class="input-group-btn">
									<button class="btn btn-default"  id="searchsubmit"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div> <!-- end hidden Search Bar -->
				</div><!--end navbar-colapse-->
			</div><!--end container-->
		</nav>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
