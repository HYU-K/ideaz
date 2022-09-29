<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package nanoweb
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
<?php nanoweb\wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vnh_textdomain' ); ?></a>
	<header id="masthead" class="site-header py-4 bg-white shadow">
		<div class="container flex items-center justify-between">
			<div class='flex items-center'>
				<div class="site-branding mr-8">
					<?php the_custom_logo(); ?>
				</div>
				<nav id="site-navigation" class="main-navigation dlg:hidden">
					<?php do_action( 'nanoweb/menu' ); ?>
				</nav>
			</div>
			<div>
				<a class="lg:hidden" href="#mobile-menu">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
					</svg>
				</a>
				<div class='dlg:hidden'>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>
