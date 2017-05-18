<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div class="top-header">
		<div class="row">
			<div class="small-12 medium-2 columns text-center"><img src="/img/head.png" alt="Szkoła Jazdy Ekspert"  title="Szkoła Jazdy Ekspert" /></div>
			<div class="small-12 medium-expand columns align-self-bottom"></div>
			<div class="small-12 medium-4 align-self-middle columns text-center"><img src="/img/cena.png" /></div>
		</div>
	</div>	

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="mobile-menu">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">NAUKA JAZDY WE WROCŁAWIU</a></h1>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">NAUKA JAZDY WE WROCŁAWIU</a></h1></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
