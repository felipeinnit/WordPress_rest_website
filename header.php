<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header">

	<div class="header-inner container">
		<div class="site-branding">
			<!-- TODO -->
			<img class="logo" src="<?php bloginfo('template_url'); ?>/assets/coolmat_logo.svg" alt="coolmat brand logo, boy and girl plus coolmate in korean">
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- TODO -->
		<div class="languege-select">
			<a lang="ko-KR" hreflang="ko-KR" href="<?php echo site_url('/kr'); ?>">KR</a>
			| 
			<a lang="en-UK" hreflang="en-UK" href="<?php echo site_url(); ?>">EN</a>
		</div>
	</div>

		

	</header><!-- #masthead -->

<div id="content" class="site-content">
</div>