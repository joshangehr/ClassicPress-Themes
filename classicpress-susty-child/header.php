<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preload" href="<?php echo home_url( '/wp-content/themes/classicpress-susty-child/fonts/DejaVuSans-webfont.woff2' ); ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url( '/wp-content/themes/classicpress-susty-child/images/icon-white.svg' ); ?>" as="image" type="image/svg+xml">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'susty' ); ?></a>

	<header id="masthead">
		<div id="inner-header">
			<span class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo home_url( '/wp-content/themes/classicpress-susty-child/images/icon-white.svg' ); ?>" width="81" height="81"> <span class="screen-reader-text"><?php esc_html_e( 'Home', 'susty' ); ?></span></a>
			</span>
			
			<button id="menu-toggle" class="menu-toggle" type="button" aria-haspopup="true" aria-controls="site-navigation" aria-expanded="false" tabindex="0">
				<span class="menu-toggle-svg-wrapper" id="menu-toggle-svg-wrapper">
					<svg class="icon icon-menu-toggle" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100">
						<g class="svg-menu-toggle">
							<path stroke="fff" class="bar line-1" d="M5 13h90v14H5z"/>
							<path class="bar line-2" d="M5 43h90v14H5z"/>
							<path class="bar line-3" d="M5 73h90v14H5z"/>
						</g>
					</svg>
				</span>
				<span id="menu-toggle-text" class="screen-reader-text"><?php esc_html_e( 'Menu', 'susty' ); ?></span>
			</button>

			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Main menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
			
			<a href="<?php echo home_url( '/download/' ); ?>" class="get-started">Get Started</a>
		</div>
	</header>

	<div id="content">
