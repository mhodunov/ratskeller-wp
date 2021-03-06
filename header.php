<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ratskeller-wp
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ratskeller-wp' ); ?></a>

	<header id="masthead" class="site-header custom-container">
		<div class="header-blue-block" data-aos="fade-right" data-aos-duration="500"></div>
		<div class="header-container">
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
				$ratskeller_wp_description = get_bloginfo( 'description', 'display' );
				if ( $ratskeller_wp_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $ratskeller_wp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg class="menu-icon">
						<use href="/wp-content/themes/ratskeller-wp/img/sprite.svg#menu"></use>
					</svg>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<div class="header-contacts">
				<span><svg class="header-contacts__icon">
					<use href="/wp-content/themes/ratskeller-wp/img/sprite.svg#phone-circle"></use>
				</svg></span><a href="tel:<?php echo fw_get_db_settings_option('phone') ?>"><?php echo fw_get_db_settings_option('phone') ?></a><span><svg class="header-contacts__icon">
					<use href="/wp-content/themes/ratskeller-wp/img/sprite.svg#location"></use>
				</svg></span><a href="#">Anfahrt</a>
			</div>
			</div>
			
	</header>
