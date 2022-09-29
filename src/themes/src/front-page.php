<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		if ( have_posts() && have_rows( 'blocks' ) ) :
			while ( have_rows( 'blocks' ) ) : the_row();
				if ( get_row_layout() === 'hero' ):
					$hero = get_sub_field( 'hero' );
					$html = '<div class="swiper hero"><div class="swiper-wrapper">';
					foreach ( $hero as $hr ) {
						$html .= sprintf(
							'<div class="swiper-slide"> <a href="%s"><img class="object-cover w-full h-full" src="%s" alt=""></a></div>',
							$hr['link']['url'],
							$hr['image']
						);
					}
					$html .= '</div><div class="swiper-pagination"></div></div>';

					echo $html;
				elseif ( get_row_layout() === 'banners' ):
					$banner_1 = get_sub_field( 'banner_1' )['url'];
					$banner_2 = get_sub_field( 'banner_2' )['url'];
					$banner_3 = get_sub_field( 'banner_3' )['url'];
					printf(
						'<div class="grid lg:grid-cols-3 gap-1 mt-1"><div><img class="object-cover w-full h-full" src="%s" alt="banner 1"></div><div><img class="object-cover w-full h-full" src="%s" alt="banner 2"></div><div><img class="object-cover w-full h-full" src="%s" alt="banner 3"></div></div>',
						$banner_1,
						$banner_2,
						$banner_3
					);
				elseif ( get_row_layout() === 'register_support' ):
					$register      = get_sub_field( 'register' );
					$register_html = '<div class="relative lg:max-h-[50vh]">';
					$register_html .= sprintf(
						'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><i class="icon text-black icon-focus text-[80px]"></i><h3 class="text-2xl text-black">%s</h3><p class="text-gray-700">%s</p></div></div></a>',
						$register['link'],
						$register['title'],
						$register['description']
					);
					$register_html .= sprintf(
						'<img class="object-cover w-full h-full aspect-square" src="%s" alt=""></div>',
						$register['background']
					);

					$support      = get_sub_field( 'support' );
					$support_html = '<div class="relative lg:max-h-[50vh]">';
					$support_html .= sprintf(
						'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><i class="icon text-black icon-support text-[80px]"></i><h3 class="text-2xl text-black">%s</h3><p class="text-gray-700">%s</p></div></div></a>',
						$support['link'],
						$support['title'],
						$support['description']
					);
					$support_html .= sprintf(
						'<img class="object-cover w-full h-full aspect-square" src="%s" alt=""></div>',
						$support['background']
					);

					printf( '<div class="grid lg:grid-cols-2 my-1 gap-1 lg:max-h-[50vh]">%s %s</div>', $register_html, $support_html );
				elseif ( get_row_layout() === 'links' ):
					$link_1      = get_sub_field( 'link_1' );
					$link_1_html = '<div class="relative">';
					$link_1_html .= sprintf(
						'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
						$link_1['url'],
						$link_1['title'],
						$link_1['description'] ?? null
					);
					$link_1_html .= sprintf(
						'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
						$link_1['background']
					);

					$link_2      = get_sub_field( 'link_2' );
					$link_2_html = '<div class="relative">';
					$link_2_html .= sprintf(
						'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
						$link_2['url'],
						$link_2['title'],
						$link_2['description'] ?? null
					);
					$link_2_html .= sprintf(
						'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
						$link_1['background']
					);

					$link_3      = get_sub_field( 'link_3' );
					$link_3_html = '<div class="relative">';
					$link_3_html .= sprintf(
						'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
						$link_3['url'],
						$link_3['title'],
						$link_3['description'] ?? null
					);
					$link_3_html .= sprintf(
						'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
						$link_3['background']
					);

					$link_4      = get_sub_field( 'link_4' );
					$link_4_html = '<div class="relative">';
					$link_4_html .= sprintf(
						'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
						$link_4['url'],
						$link_4['title'],
						$link_4['description'] ?? null
					);
					$link_4_html .= sprintf(
						'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
						$link_4['background']
					);

					printf( '<div class="grid col-span-2 my-1 lg:grid-cols-4 gap-1">%s%s%s%s</div>',
						$link_1_html,
						$link_2_html,
						$link_3_html,
						$link_4_html );
				endif;
			endwhile;
		else:
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main>
<?php
get_footer();
