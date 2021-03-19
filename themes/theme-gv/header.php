<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-gv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-gv' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_gv_description = get_bloginfo( 'description', 'display' );
			if ( $theme_gv_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_gv_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
        <?php
		if ( is_front_page()) : ?>
<section class="carrousel">
    <div><img src="http://localhost/4w4-wordpress/wp-content/uploads/2021/03/image2.jpg" alt=""></div>
    <div><img src="http://localhost/4w4-wordpress/wp-content/uploads/2021/03/image1.jpg" alt=""></div>
    <div><img src="http://localhost/4w4-wordpress/wp-content/uploads/2021/03/image3-1.jpg" alt=""></div>
</section>

<section class="radio">
<!-- <button id="un">1</button>
<button id="deux">2</button>
<button id="trois">3</button> -->
<input type="radio" name="radio" id="un" />
<input type="radio" name="radio" id="deux" />
<input type="radio" name="radio" id="trois" />
</section>
<?php endif ?>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu-alt-1&amp;color=000000" width="32" height="32"></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
