<?php
/**
 * Template Name: News
 */

use function nanoweb\posted_on;

get_header();
$bg                = sprintf( 'background-image:url("%s")', get_the_post_thumbnail_url() );
$feature_posts     = wp_get_recent_posts( [ 'numberposts' => 1, 'post_status' => 'publish', 'category' => [ 2, 3, 4, 5 ] ] );
$recent_posts      = wp_get_recent_posts( [ 'numberposts' => 9, 'post_status' => 'publish', 'offset' => 1, 'category' => [ 2, 3, 4, 5 ] ] );
$event_posts       = wp_get_recent_posts( [ 'numberposts' => 6, 'post_status' => 'publish', 'category' => 2, ] );
$promotion_posts   = wp_get_recent_posts( [ 'numberposts' => 6, 'post_status' => 'publish', 'category' => 3, ] );
$news_posts        = wp_get_recent_posts( [ 'numberposts' => 6, 'post_status' => 'publish', 'category' => 4, ] );
$testimonial_posts = wp_get_recent_posts( [ 'numberposts' => 6, 'post_status' => 'publish', 'category' => 5, ] );


//function tab_content( $posts ) {
//	?>
<!--	<ul class='grid lg:grid-cols-2 gap-8'>-->
<!--		--><?php //foreach ( $posts as $post_item ) : ?>
<!--			<li>-->
<!--				--><?php //echo get_the_post_thumbnail( $post_item['ID'], 'news-thumb' ); ?>
<!--				<p class='my-2 font-semibold text-black'>-->
<!--					<a class='text-black' href="--><?php //echo get_permalink( $post_item['ID'] ) ?><!--">-->
<!--						--><?php //echo $post_item['post_title'] ?>
<!--					</a>-->
<!--				</p>-->
<!--				<div class='line-clamp-2 text-gray-500 text-sm'>-->
<!--					--><?php //echo $post_item['post_excerpt'] ?>
<!--				</div>-->
<!--				<a class='mt-4 inline-block' href="--><?php //echo get_permalink( $post_item['ID'] ) ?><!--">-->
<!--					<i class='icon icon-arrow'></i>-->
<!--					Xem chi tiết-->
<!--				</a>-->
<!--			</li>-->
<!--		--><?php //endforeach; ?>
<!--	</ul>-->
<!--	--><?php
//}
//
//?>

	<main id="primary" class="site-main">
<!--		<div class='py-12 lg:py-24 bg-center bg-cover' style='--><?php //echo $bg ?><!--'>-->
<!--			<div class='flex items-center justify-center'>-->
<!--				<h1 class='text-white uppercase'>tin tức</h1>-->
<!--			</div>-->
<!--		</div>-->
		<div class='container my-6'>
			<ul class='flex items-center space-x-2 text-sm flex-wrap'>
				<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
				<li class='text-gray-500'>Tin tức</li>
			</ul>
		</div>
		<div class='container'>
			<div class="new_col12_tintuc">
				<div class="title_main">
					<h2 class="title32">News</h2>
				</div>
				<?php foreach ( $feature_posts as $post_item ) : ?>
					<div class="new_item news-main wow fadeInUp" data-wow-delay="0.5s">
						<a href="<?php echo get_permalink( $post_item['ID'] ) ?>">
							<div class="item_image">
								<div class="img">
									<?php echo get_the_post_thumbnail( $post_item['ID'], 'news-feature-thumb' ); ?>
								</div>
							</div>
							<div class="detail">
								<div class="item_title">
									<h3 class="title32"><?php echo $post_item['post_title'] ?></h3>
								</div>
								<div class="item_detail">
									<div class="date">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
											 viewBox="0 0 20 20" fill="currentColor">
											<path
												d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
										</svg>
										<div class="text">NOV <?php posted_on(); ?></div>
									</div>
									<div class="text-content title18">
										<?php echo $post_item['post_content'] ?>
									</div>
									<button>
										<span>khám phá</span>
									</button>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<div class="">
					<div class="news_list">
						<?php foreach ( $recent_posts as $post_item ) : ?>
							<a href="<?php echo get_permalink( $post_item['ID'] ) ?>" title="" class="single-news wow fadeInUp" data-wow-delay="0.5s">
								<div class="new_item">
									<div class="item_image">
										<div class="img">
											<?php echo get_the_post_thumbnail( $post_item['ID'], 'news-thumb' ); ?>
										</div>
									</div>
									<div class="item_title">
										<h3 class="title24"><?php echo $post_item['post_title'] ?></h3>
									</div>
									<div class="item_detail">
										<div class="date">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
												 viewBox="0 0 20 20" fill="currentColor">
												<path
													d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
											</svg>
											<div class="text">NOV <?php posted_on(); ?></div>
										</div>
										<div class="text-content title18">
											<?php echo $post_item['post_content'] ?>
										</div>
										<button>
											<span>khám phá</span>
										</button>
									</div>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
					<?php the_posts_pagination(); ?>
					<div class="pagination">
						<ul>
							<li><a href="" title=""></a></li>
							<li><a href="" title="">1</a></li>
							<li class="active"><a href="" title="">2</a></li>
							<li><a href="" title="">3</a></li>
							<li class="v_v"><span>...</span></li>
							<li><a href="" title="">15</a></li>
							<li><a href="" title=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();
