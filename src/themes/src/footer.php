<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nanoweb
 */

?>

		<footer id="colophon" class="site-footer py-10 bg-[#F9F9F9]">
			<div class='container'>
				<div class="grid  md:grid-cols-2 lg:grid-cols-[2fr,2fr,1fr,1fr] gap-8 my-4">
					<section>
						<?php the_custom_logo(); ?>
						<?php do_action('nanoweb/social_menu'); ?>
					</section>
					<div>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				</div>
				<div class='border-t border-gray-400 lg:flex justify-between text-sm text-gray-500 pt-3'>
					<div>@2022 Bản quyền thuộc công ty Skyworth</div>
					<div>Design by <a target='_blank' href='https://nanoweb.vn'>Nanoweb</a></div>
				</div>
			</div>
		</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
