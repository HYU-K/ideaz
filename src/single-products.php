<?php
/**
 * The template for displaying all single products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package nanoweb
 */

get_header();
$tel            = get_field( 'hotline', 'option' );
$gallery        = get_field( 'gallery' );
$price          = number_format( get_field( 'price' ) );
$compare_price  = number_format( get_field( 'compare_price' ) );
$sku            = get_field( 'sku' );
$selling_points = get_field( 'selling_points' );
$guarantee      = get_field( 'guarantee' );
$variants       = get_field( 'variants' );
$gifts          = get_field( 'gifts' );
$description    = get_field( 'description' );
$specifications = get_field( 'specifications' );
$media          = get_field( 'media' );
$check          = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-primary-500 mr-2"> <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" /> </svg>';

$detect = new Mobile_Detect;

$related = wp_get_recent_posts( [
	'numberposts' => 10,
	'post_status' => 'publish',
	'post_type'   => 'products',
	'tax_query'   => [
		[
			'taxonomy' => 'categories',
			'field'    => 'term_id',
			'terms'    => get_the_terms( $post->ID, 'categories' )[0]->term_id,
		],
	],
] );

?>
	<main id="primary" class="site-main py-8">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class='container mb-6'>
				<ul class='flex items-center space-x-2 text-sm flex-wrap'>
					<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
					<li><a href=<?php echo home_url( '/san-pham' ); ?>>Sản phẩm</a><span class='pl-2'>/</span></li>
					<li class='text-gray-400'><?php the_title(); ?></li>
				</ul>
			</div>
			<div class='grid lg:grid-cols-2 gap-8 container'>
				<div class='space-y-4'>
					<div class='dmd:-mr-6'>
						<div class="swiper gallery">
							<div class="swiper-wrapper">
								<?php foreach ( $gallery as $index => $item ) {
									printf(
										'<div class="swiper-slide text-center"><div class="swiper-zoom-container"><img class="inline-block dlg:shadow-xl" src="%s"/></div></div>',
										$item
									);
								}
								?>
							</div>
							<div class='hidden lg:block'>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
						</div>
					</div>
					<div class="swiper thumbs dlg:hidden">
						<div class="swiper-wrapper">
							<?php foreach ( $gallery as $index => $item ) {
								printf(
									'<div class="swiper-slide"> <img class="w-full h-[106px] border border-gray-300 object-cover" src="%s"/> </div>',
									$item
								);
							}
							?>
						</div>
					</div>
					<div class='text-gray-600 bg-primary-50 p-6 gifts'>
						<h4 class='mb-2 border-b border-primary-500 pb-1 text-primary-500 flex items-baseline space-x-2'>
							<i class='icon icon-gift text-2xl'></i>
							<span>QUÀ TẶNG + HỖ TRỢ</span></h4>
						<?php echo $gifts ?>
					</div>
				</div>
				<div class='space-y-4'>
					<?php the_title( '<h1 class="text-4xl">', '</h1>' ); ?>
					<div class='text-primary-500'>SKU: <?php echo $sku; ?></div>
					<div>
						<span class='text-red-500 text-2xl pr-4 font-semibold'><?php echo $price ?>đ </span>
						<span class='text-gray-500'><del><?php echo $compare_price ?></del>đ</span>
					</div>
					<ul class='text-gray-600 space-y-1'>
						<?php foreach ( $selling_points as $sp ) {
							printf( '<li>%s</li>', $sp['content'] );
						} ?>
					</ul>
					<div class='text-gray-500'>
						<h3>Bảo hành:</h3>
						<ul>
							<?php foreach ( $guarantee as $gt ) {
								printf( '<li class="flex items-center space-x-1">%s%s</li>', $check, $gt['content'] );
							} ?>
						</ul>
					</div>
					<?php if ( ! empty( $variants ) ): ?>
						<div class='my-8'>
							<h3 class='mb-2 text-gray-500'><?php printf( 'Có %s cấu hình tuỳ chọn', count( $variants ) ) ?></h3>
							<ul class='space-y-4'>
								<?php foreach ( $variants as $variant ) : ?>
									<li class='border border-gray-300 p-4 rounded lg:flex lg:space-x-2 hover:border-primary-500'>
										<div>
											<div class='text-gray-500'>SKU: <?php echo $variant['sku']; ?></div>
											<h4 class='text-gray-500'><?php echo $variant['title'] ?></h4>
											<p class='text-gray-500 text-sm my-2'>
												<?php echo $variant['description'] ?>
											</p>
										</div>
										<div>
											<div class='text-gray-500'>
												<del><?php echo $compare_price ?>đ</del>
											</div>
											<div class='text-primary-500 font-semibold'><?php echo $price ?>đ</div>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
					<div class='my-8'>
						<a class='button' href=<?php echo home_url( '/dang-ky-san-pham' ) ?>>Đăng ký sản phẩm</a>
						<a class='button2 ml-4' href=<?php echo home_url( '/lien-he' ) ?>>Liên hệ ngay</a>
					</div>
				</div>
			</div>
			<div x-data="{tab: 1}">
				<div class='container sticky top-0 pt-10 bg-white text-center uppercase font-medium my-12'>
					<nav class='space-x-8 inline-block border-b border-primary-500 dlg:text-sm text-xl'>
						<button :class="{'font-semibold !border-primary-500':tab===1}" @click="tab = 1;$scroll('#description')" class='button3'>
							Mô tả chi tiết
						</button>
						<button :class="{'font-semibold !border-primary-500':tab===2}" @click="tab = 2;$scroll('#specifications')"
						        class='button3'>
							Thông số kỹ thuật
						</button>
						<button :class="{'font-semibold !border-primary-500':tab===3}" @click="tab = 3;$scroll('#media')" class='button3'>
							Hình ảnh & vi deo sản phẩm
						</button>
					</nav>
				</div>
				<div id='description' class='container my-12' x-data='{more: false}'>
					<h2><span class='rounded-full w-8 h-8 text-center border border-primary-500 inline-block mr-2'>1</span>Mô tả chi tiết</h2>
					<div class='prose max-w-full my-4' :class="{'line-clamp-3': more===false}">
						<?php echo $description ?>
					</div>
					<div class='text-center'>
						<button class='inline-flex items-center text-primary-500' @click="more = !more" x-show='more === false'>Xem thêm
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ml-2">
								<path fill-rule="evenodd"
								      d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
								      clip-rule="evenodd"/>
							</svg>
						</button>
						<button class='inline-flex items-center text-primary-500' @click="more = !more" x-show='more === true'>
							Thu gọn
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 ml-2">
								<path fill-rule="evenodd"
								      d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
								      clip-rule="evenodd"/>
							</svg>
						</button>
					</div>
				</div>
				<div id='specifications' class='container py-12'>
					<h2><span class='rounded-full w-8 h-8 text-center border border-primary-500 inline-block mr-2'>2</span>Thông số kỹ thuật</h2>
					<div class='prose max-w-full my-4'>
						<?php
						foreach ( $specifications as $s ) {
							printf(
								'<div class="grid grid-cols-2 border border-gray-200 -mb-px"><div class="border-r border-gray-200 px-4 py-2">%s</div><div class="px-4 py-2 truncate">%s</div></div>',
								$s['title'],
								$s['content']
							);
						}
						printf( '<div class="grid grid-cols-2 border border-gray-200 -mb-px"><div class="border-r border-gray-200 px-4 py-2">Size</div><div class="px-4 py-2 truncate">%s</div></div>',
							get_the_taxonomies( 0, [ 'template' => '<span class="screen-reader-text">%s:</span> %l' ] )['sizes'] ?? null
						);
						printf( '<div class="grid grid-cols-2 border border-gray-200 -mb-px"><div class="border-r border-gray-200 px-4 py-2">Brand</div><div class="px-4 py-2 truncate">%s</div></div>',
							get_the_taxonomies( 0, [ 'template' => '<span class="screen-reader-text">%s:</span> %l' ] )['brands'] ?? null
						);
						?>
					</div>
				</div>
				<?php if ( ! empty( $media ) ): ?>
					<div id='media' class='container my-12'>
						<h2>
							<span class='rounded-full w-8 h-8 text-center border border-primary-500 inline-block mr-2'>3</span>
							Hình ảnh & Video sản phẩm
						</h2>
						<div class='prose max-w-full my-4'>
							<?php echo $media ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class='container text-center my-8'>
				<a class='button' href=<?php echo home_url( '/dang-ky-san-pham' ) ?>>Đăng ký sản phẩm</a>
				<a class='button2 ml-4' href=<?php echo home_url( '/lien-he' ) ?>>Liên hệ ngay</a>
				<div class='my-8'>
					Góp ý từ khách hàng về Skyworth: <a class='text-red-500 font-medium' href='tel:<?php echo $tel ?>'><?php echo $tel ?></a>
				</div>
			</div>
		<?php endwhile; ?>
		<div class='container py-12'>
			<h3 class='uppercase text-2xl mb-4 font-bold'>sản phẩm liên quan</h3>
			<div class='related swiper'>
				<div class="swiper-wrapper">
					<?php foreach ( $related as $item ) : ?>
						<div class='swiper-slide'>
							<div
								class='space-y-2 hover:shadow-xl hover:border-transparent transition-all border border-gray-300 text-center p-4'>
								<a href='<?php echo get_permalink( $item['ID'] ) ?>'>
									<?php echo get_the_post_thumbnail( $item['ID'], 'product-thumb' ); ?>
								</a>
								<div>
									<?php echo $item['post_title'] ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</main>
<?php
get_footer();
