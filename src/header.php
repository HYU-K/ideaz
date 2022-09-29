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
	<header id="masthead" class="site-header bg-white shadow head_col0">
		<div class="container">
			<div class="accordion">
				<div class="logo_item">
					<a href="<?php echo home_url(); ?>" title=""><?php the_custom_logo(); ?></a>
				</div>
				<div class="menu_item">
					<div class="menu-top wow fadeIn" data-wow-delay="0.5s">
						<div class="menu-wrapper">
							<a class="" href="#mobile-menu">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
								</svg>
							</a>
						</div>
						<div class="menu_main">
							<nav id="site-navigation" class="main-navigation">
								<?php do_action( 'nanoweb/menu' ); ?>
							</nav>
						</div>
					</div>

					<a data-fancybox data-src="#hidden-content" href="javascript:;" id="search-btn" href=""
					   internal-route="" class="" style="">
						<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
							<g transform="translate(1 1)" stroke-width="2" stroke="#000" fill="none" fill-rule="evenodd"
							   stroke-linecap="round" stroke-linejoin="round">
								<circle cx="7.5" cy="7.5" r="7.5"></circle>
								<path d="M18 18l-5-5"></path>
							</g>
						</svg>
					</a>

					<div class="translate-header">
						<a href="" class="trans-english white font-text-content" href="">EN</a>
						<a href="" class="trans-vietnam white active-color font-text-content">VI</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="popup-search" id="hidden-content" style="display: none;">
		<div class="part-top">
			<div class="container">
				<div class="item_flex">
					<div class="item-contact">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
								 fill="currentColor">
								<path
									d="M15.8314 16.9166C8.72172 16.9267 3.3259 11.4662 3.3335 4.41868C3.3335 3.95844 3.7066 3.58325 4.16684 3.58325H6.3663C6.77928 3.58325 7.13011 3.88669 7.19075 4.29519C7.33609 5.27425 7.62114 6.22739 8.03723 7.1255L8.12287 7.31034C8.24194 7.56734 8.16123 7.8727 7.93073 8.03731C7.24958 8.52374 6.98926 9.50288 7.51991 10.2669C8.18581 11.2256 9.02521 12.0648 9.98372 12.7304C10.7477 13.2609 11.7267 13.0006 12.2131 12.3196C12.3778 12.089 12.6833 12.0083 12.9405 12.1274L13.1245 12.2126C14.0227 12.6287 14.9759 12.9137 15.955 13.059C16.3635 13.1197 16.6668 13.4705 16.6668 13.8835V16.0832C16.6668 16.5435 16.2928 16.9166 15.8326 16.9166L15.8314 16.9166Z" />
							</svg>
						</div>
						<div class="text">
							<a href="" title="">0123 456 789</a>
						</div>
					</div>
					<div class="select-item">
						<select name="" id="">
							<option value="">Tiếng việt</option>
							<option value="">English</option>
						</select>
					</div>
					<div class="search-box" id="search">
						<div class="togglesearch" id="togglesearch">
							<button id="btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
									 fill="currentColor">
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M9.66699 3.33341C6.44533 3.33341 3.83366 5.94509 3.83366 9.16675C3.83366 12.3884 6.44533 15.0001 9.66699 15.0001C12.8887 15.0001 15.5003 12.3884 15.5003 9.16675C15.5003 5.94509 12.8887 3.33341 9.66699 3.33341ZM2.16699 9.16675C2.16699 5.02461 5.52486 1.66675 9.66699 1.66675C13.8091 1.66675 17.167 5.02461 17.167 9.16675C17.167 13.3089 13.8091 16.6667 9.66699 16.6667C5.52486 16.6667 2.16699 13.3089 2.16699 9.16675Z" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										  d="M13.7861 13.2858C14.1115 12.9604 14.6391 12.9604 14.9646 13.2858L18.5896 16.9108C18.915 17.2363 18.915 17.7639 18.5896 18.0893C18.2641 18.4148 17.7365 18.4148 17.4111 18.0893L13.7861 14.4643C13.4606 14.1389 13.4606 13.6113 13.7861 13.2858Z" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item-flex">
			<div class="content">
				<h2 class="title48">TÌM KIẾM</h2>
				<form action="">
					<?php get_search_form(); ?>
					<button id="btn">
						<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
							 fill="currentColor">
							<path fill-rule="evenodd" clip-rule="evenodd"
								  d="M9.66699 3.33341C6.44533 3.33341 3.83366 5.94509 3.83366 9.16675C3.83366 12.3884 6.44533 15.0001 9.66699 15.0001C12.8887 15.0001 15.5003 12.3884 15.5003 9.16675C15.5003 5.94509 12.8887 3.33341 9.66699 3.33341ZM2.16699 9.16675C2.16699 5.02461 5.52486 1.66675 9.66699 1.66675C13.8091 1.66675 17.167 5.02461 17.167 9.16675C17.167 13.3089 13.8091 16.6667 9.66699 16.6667C5.52486 16.6667 2.16699 13.3089 2.16699 9.16675Z" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								  d="M13.7861 13.2858C14.1115 12.9604 14.6391 12.9604 14.9646 13.2858L18.5896 16.9108C18.915 17.2363 18.915 17.7639 18.5896 18.0893C18.2641 18.4148 17.7365 18.4148 17.4111 18.0893L13.7861 14.4643C13.4606 14.1389 13.4606 13.6113 13.7861 13.2858Z" />
						</svg>
					</button>
				</form>
				<span class="title14 text-result">Có 0 kết quả được tìm thấy</span>
			</div>
		</div>
	</div>
