<?php
/**
 * Template Name: About Us
 */

get_header();
?>
	<main id="primary" class="site-main space-y-12">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				$intro         = get_field( 'intro' );
				$vision        = get_field( 'vision' );
				$mission       = get_field( 'mission' );
				$awards        = get_field( 'awards' );
				$history       = get_field( 'history' );
				$partners      = get_field( 'partners' );
				$feature_image = get_the_post_thumbnail_url();

				$html = sprintf( "<div class='h-72'> <img class='w-full h-full object-cover' src='%s' alt=''></div>", $feature_image );
				$html .= sprintf( '<div class="grid lg:grid-cols-2 gap-12 container items-center"> <div class="space-y-2 text-justify">%s</div> <div>%s</div> </div>',
					$intro['content'],
					$intro['media']
				);

				$vision_html  = sprintf( '<div class="space-y-3"><img src="%s" alt=""><h4>%s</h4><p class="text-gray-500 text-sm">%s</p></div>',
					$vision['image'],
					$vision['title'],
					$vision['description'] );
				$mission_html = sprintf( '<div class="space-y-3"><img src="%s" alt=""><h4>%s</h4><p class="text-gray-500 text-sm">%s</p></div>',
					$mission['image'],
					$mission['title'],
					$mission['description'] );
				$html         .= sprintf(
					'<div class="bg-gray-100 align-full py-12"><div class="grid lg:grid-cols-2 gap-4 container">%s%s</div></div>',
					$vision_html,
					$mission_html
				);

				$html .= '<div class="container text-center">';
				$html .= '<h3 class="text-3xl mb-8">Thành tựu</h3>';
				$html .= '<div class="awards swiper mb-12"><div class="swiper-wrapper">';
				foreach ( $awards as $award ) {
					$html .= sprintf( '<div class="swiper-slide"><img src="%s" alt=""></div>', $award['image'] );
				}
				$html .= '</div><div class="swiper-pagination"></div></div>';
				$html .= '</div>';

				$html  .= '<div class="bg-gray-100 align-full py-12"><div class="container">';
				$html  .= '<h2 class="text-center text-3xl">Quy trình hoạt động phát triển</h2>';
				$html  .= '<div class="relative mx-auto lg:max-w-2/3 lg:timeline">';
				foreach ( $history as $index => $his ) {
					$html .= sprintf( '<div class="%s lg:w-1/2 relative p-4 z-10 my-8"><h3 class="mb-2">%s</h3><p class="text-gray-500">%s</p></div>',
						$index % 2 ? "left-0 lg:border-r-2 border-primary-500" : "lg:left-1/2 lg:border-l-2 border-primary-500",
						$his['year'],
						$his['content'] );
				}
				$html .= '</div>';
				$html .= '<div class="text-center text-xl my-8 dmd:hidden">Hiện tại</div>';
				$html .= '</div></div>';

				$html .= '<div class="my-12">';
				$html .= '<h2 class="text-center text-3xl mb-8">Đối tác</h2>';
				$html .= '<div class="container grid grid-cols-2 lg:grid-cols-6 gap-4 pb-12">';
				foreach ( $partners as $partner ) {
					$html .= sprintf( '<div><img src="%s" alt=""></div>', $partner['image'] );
				}
				$html .= '</div>';

				echo $html;
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main>
<?php
get_footer();
