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
//$video         = sprintf( 'background-image:url("%s")', get_the_post_thumbnail_url() );
$video  = get_field( 'video', 'image');
?>
	<main id="primary" class="site-main">
		<div class="banner_home">
<!--			--><?php
//			echo do_shortcode('[smartslider3 slider="2"]');
//			?>
            <div class="bann_home slide_destinations" data-aos="zoom-in" data-aos-duration="1000">
                <div class="bg">
                    <img src='<?php echo get_theme_file_uri( '/images/banner.png') ?>' alt=''>
                    <div class="offset-1">
                        <h5 class="carousel-cell__topic title16">Boffi<span>Novelties 2022</span></h5>
                        <h4 class="carousel-cell__title title48">Novelties 2022</h4>
                        <a class="btn-cta title16" href="" internal-route="">
                            khám phá nhiều hơn
                        </a>
                    </div>
                </div>
                <div class="bg">
                    <img src='<?php echo get_theme_file_uri( '/images/banner.png') ?>' alt=''>
                    <div class="offset-1">
                        <h5 class="carousel-cell__topic title16">Boffi<span>Novelties 2022</span></h5>
                        <h4 class="carousel-cell__title title48">Novelties 2022</h4>
                        <a class="btn-cta title16" href="" internal-route="">
                            khám phá nhiều hơn
                        </a>
                    </div>
                </div>
                <div class="bg">
                    <img src='<?php echo get_theme_file_uri( '/images/banner.png') ?>' alt=''>
                    <div class="offset-1">
                        <h5 class="carousel-cell__topic title16">Boffi<span>Novelties 2022</span></h5>
                        <h4 class="carousel-cell__title title48">Novelties 2022</h4>
                        <a class="btn-cta title16" href="" internal-route="">
                            khám phá nhiều hơn
                        </a>
                    </div>
                </div>
            </div>
			<span class="pagingInfo"></span>
		</div>

<!--		<div class="container">-->
<!--			--><?php
//			if ( have_posts() && have_rows( 'blocks' ) ) :
//				while ( have_rows( 'blocks' ) ) : the_row();
//					if ( get_row_layout() === 'hero' ):
//						$hero = get_sub_field( 'hero' );
//						$html = '<div class="html_introduce_home"><div class="elements">';
//						foreach ( $hero as $hr ) {
//							$html .= sprintf(
//								'<div class="video_pro wow fadeInUp" data-wow-delay="0.5s" data-fancybox="gallery" href="%s">
//											<div class="swiper-slide img"> <img class="object-cover w-full h-full" src="%s" alt=""></div>
//											<div class="play-video"><i class="fas fa-play"></i></div>
//										</div>
//										<div class="text-intro">
//											<div class="title title24">
//												Ý tưởng ideaz
//											</div>
//											<ul>
//												<li class="title18">
//													<p>The Green from inside</p>
//												</li>
//												<li class="title18">
//													<p>Innovations with great care of details</p>
//												</li>
//											</ul>
//										</div>
//									</div>
//								</div>',
//								$hr['link']['url'],
//								$hr['image']
//							);
//						}
//						$html .= '</div><div class="swiper-pagination"></div></div>';
//
//						echo $html;
//					elseif ( get_row_layout() === 'banners' ):
//						$banner_1 = get_sub_field( 'banner_1' )['url'];
//						$banner_2 = get_sub_field( 'banner_2' )['url'];
//						$banner_3 = get_sub_field( 'banner_3' )['url'];
//						printf(
//							'<div class="grid lg:grid-cols-3 gap-1 mt-1"><div><img class="object-cover w-full h-full" src="%s" alt="banner 1"></div><div><img class="object-cover w-full h-full" src="%s" alt="banner 2"></div><div><img class="object-cover w-full h-full" src="%s" alt="banner 3"></div></div>',
//							$banner_1,
//							$banner_2,
//							$banner_3
//						);
//					elseif ( get_row_layout() === 'register_support' ):
//						$register      = get_sub_field( 'register' );
//						$register_html = '<div class="relative lg:max-h-[50vh]">';
//						$register_html .= sprintf(
//							'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><i class="icon text-black icon-focus text-[80px]"></i><h3 class="text-2xl text-black">%s</h3><p class="text-gray-700">%s</p></div></div></a>',
//							$register['link'],
//							$register['title'],
//							$register['description']
//						);
//						$register_html .= sprintf(
//							'<img class="object-cover w-full h-full aspect-square" src="%s" alt=""></div>',
//							$register['background']
//						);
//
//						$support      = get_sub_field( 'support' );
//						$support_html = '<div class="relative lg:max-h-[50vh]">';
//						$support_html .= sprintf(
//							'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><i class="icon text-black icon-support text-[80px]"></i><h3 class="text-2xl text-black">%s</h3><p class="text-gray-700">%s</p></div></div></a>',
//							$support['link'],
//							$support['title'],
//							$support['description']
//						);
//						$support_html .= sprintf(
//							'<img class="object-cover w-full h-full aspect-square" src="%s" alt=""></div>',
//							$support['background']
//						);
//
//						printf( '<div class="grid lg:grid-cols-2 my-1 gap-1 lg:max-h-[50vh]">%s %s</div>', $register_html, $support_html );
//					elseif ( get_row_layout() === 'links' ):
//						$link_1      = get_sub_field( 'link_1' );
//						$link_1_html = '<div class="relative">';
//						$link_1_html .= sprintf(
//							'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
//							$link_1['url'],
//							$link_1['title'],
//							$link_1['description'] ?? null
//						);
//						$link_1_html .= sprintf(
//							'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
//							$link_1['background']
//						);
//
//						$link_2      = get_sub_field( 'link_2' );
//						$link_2_html = '<div class="relative">';
//						$link_2_html .= sprintf(
//							'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
//							$link_2['url'],
//							$link_2['title'],
//							$link_2['description'] ?? null
//						);
//						$link_2_html .= sprintf(
//							'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
//							$link_1['background']
//						);
//
//						$link_3      = get_sub_field( 'link_3' );
//						$link_3_html = '<div class="relative">';
//						$link_3_html .= sprintf(
//							'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
//							$link_3['url'],
//							$link_3['title'],
//							$link_3['description'] ?? null
//						);
//						$link_3_html .= sprintf(
//							'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
//							$link_3['background']
//						);
//
//						$link_4      = get_sub_field( 'link_4' );
//						$link_4_html = '<div class="relative">';
//						$link_4_html .= sprintf(
//							'<a href="%s"><div class="absolute hover:bg-opacity-50 transition-all z-10 inset-0 flex items-center justify-center text-center bg-white bg-opacity-60"><div><h3 class="text-2xl text-black">%s</h3><p class="text-gray-600">%s</p></div></div></a>',
//							$link_4['url'],
//							$link_4['title'],
//							$link_4['description'] ?? null
//						);
//						$link_4_html .= sprintf(
//							'<img class="object-cover w-full aspect-square" src="%s" alt=""></div>',
//							$link_4['background']
//						);
//
//						printf( '<div class="grid col-span-2 my-1 lg:grid-cols-4 gap-1">%s%s%s%s</div>',
//							$link_1_html,
//							$link_2_html,
//							$link_3_html,
//							$link_4_html );
//					endif;
//				endwhile;
//			else:
//				get_template_part( 'template-parts/content', 'none' );
//			endif;
//			?>
<!--		</div>-->
        <div class="container">
            <div id="homepage__collections-launcher">
                <div class="title_main">
                    <h2 class="title32">sản phẩm & thương hiệu</h2>
                </div>
                <div id="cards-5-layout-1492339521572" class="launcher cards-5 restricted-container-fluid el-init el-show-complete" el-id="abstract-element_oBueo__collections-launcher">
                    <div class="row vertical-spacer">
                        <div class="col-12 col-lg-8 fade-in-parallax el-init el-show-complete el-scroll-state-exit-viewport wow fadeInUp" data-wow-delay="0.5s"
                             el-id="abstract-element_oBueo__collections-launcher__card-layout__module-0">
                            <a class="card card-section-launch img-lazyloaded" href="" internal-route=""
                               style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="card-img">
                                    <div class="img"><img src='<?php echo get_theme_file_uri( '/images/image.png') ?>' alt=''></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="card-block">
                                        <h4 class="card-title btn-white title24">Project_Code</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-lg-4 fade-in-parallax el-init el-show-complete el-scroll-state-exit-viewport wow fadeInUp"
                             data-wow-delay="0.5s"
                             el-id="abstract-element_oBueo__collections-launcher__card-layout__module-1">
                            <a class="card card-section-launch img-lazyloaded" href="" internal-route=""
                               style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="card-img">
                                    <div class="img"><img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="card-block">
                                        <h4 class="card-title btn-white title24">Bathrooms</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-lg-4 fade-in-parallax el-init el-show-complete el-scroll-state-exit-viewport wow fadeInUp"
                             data-wow-delay="0.5s"
                             el-id="abstract-element_oBueo__collections-launcher__card-layout__module-2">
                            <a class="card card-section-launch img-lazyloaded" href="" internal-route=""
                               style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="card-img">
                                    <div class="img"><img src='<?php echo get_theme_file_uri( '/images/image2.png') ?>' alt=''></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="card-block">
                                        <h4 class="card-title btn-white title24">Storage</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-lg-4 fade-in-parallax el-init el-show-complete el-scroll-state-exit-viewport wow fadeInUp"
                             data-wow-delay="0.5s"
                             el-id="abstract-element_oBueo__collections-launcher__card-layout__module-3">
                            <a class="card card-section-launch img-lazyloaded" href="" internal-route=""
                               style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="card-img">
                                    <div class="img"><img src='<?php echo get_theme_file_uri( '/images/image.png') ?>' alt=''></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="card-block">
                                        <h4 class="card-title btn-white title24">Outdoors</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-lg-4 fade-in-parallax el-init el-show-complete el-scroll-state-exit-viewport wow fadeInUp"
                             data-wow-delay="0.5s"
                             el-id="abstract-element_oBueo__collections-launcher__card-layout__module-4">
                            <a class="card card-section-launch img-lazyloaded" href="" internal-route=""
                               style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="card-img">
                                    <div class="img"><img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''></div>
                                </div>
                                <div class="card-img-overlay">
                                    <div class="card-block">
                                        <h4 class="card-title btn-white title24">Complementary Items</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new_col12_tintuc">
                <div class="title_main">
                    <h2 class="title32">News</h2>
                </div>
                <div class="new_item news-main wow fadeInUp" data-wow-delay="0.5s">
                    <a href="" title="" class="">
                        <div class="item_image">
                            <div class="img">
                                <img src='<?php echo get_theme_file_uri( '/images/new.png') ?>' alt='' />
                            </div>
                        </div>
                        <div class="detail">
                            <div class="item_title">
                                <h3 class="title32">5 gợi ý thiết kế nội thất hiện đại sang trọng cho căn hộ.</h3>
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <p class="title18">Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?</p>
                            </div>
                            <button>
                                <span>khám phá</span>
                            </button>
                        </div>
                    </a>
                </div>
                <div class="news_slide news_slide-js owl-carousel owl-theme wow fadeInUp" data-wow-delay="0.5s">
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new1.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new2.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new3.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new4.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new1.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new2.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new3.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="">
                        <div class="new_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new4.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="item_title">
                                <h3 class="title24">Loạt giải pháp chặn đồn thổi, sốt giá, nhiễu loạn thị trường bất động sản</h3>
                            </div>
                            <div class="item_detail">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                                d="M15.488 18.1308H4.40462C3.53017 18.1308 2.82129 17.4219 2.82129 16.5475V5.46415C2.82129 4.5897 3.53017 3.88082 4.40462 3.88082H5.98796V2.29749H7.57129V3.88082H12.3213V2.29749H13.9046V3.88082H15.488C16.3624 3.88082 17.0713 4.5897 17.0713 5.46415V16.5475C17.0713 17.4219 16.3624 18.1308 15.488 18.1308ZM4.40462 8.63082V16.5475H15.488V8.63082H4.40462ZM4.40462 5.46415V7.04749H15.488V5.46415H4.40462ZM13.9046 14.9642H12.3213V13.3808H13.9046V14.9642ZM10.738 14.9642H9.15462V13.3808H10.738V14.9642ZM7.57129 14.9642H5.98796V13.3808H7.57129V14.9642ZM13.9046 11.7975H12.3213V10.2142H13.9046V11.7975ZM10.738 11.7975H9.15462V10.2142H10.738V11.7975ZM7.57129 11.7975H5.98796V10.2142H7.57129V11.7975Z" />
                                    </svg>
                                    <div class="text">NOV 30, 2021</div>
                                </div>
                                <div class="text-content title18">
                                    Đã bao giờ bạn cảm thấy không gian phòng của bạn vẫn còn trống trải
                                    và muốn sắm thêm nội thất? bạn muốn lấp đầy những gian tường nhà nhưng lại không
                                    biết bắt đầu từ đâu?
                                </div>
                                <button>
                                    <span>khám phá</span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="html_introduce_home">
                <div class="slide-elements owl-carousel owl-theme">
                    <div class="elements">
                        <div class="images wow fadeInUp" data-wow-delay="0.3s">
                            <img src='<?php echo get_theme_file_uri( '/images/image.png') ?>' alt=''>
                        </div>
                        <div class="text-intro text-center">
                            <div class="text-center">
                                <h3 class="title36">Xanh</h3>
                                <p class="title18">Chú trọng chất lượng sống với các yếu tố không khí, nước, ánh sáng, thiên
                                    nhiên</p>
                            </div>
                        </div>
                    </div>
                    <div class="elements">
                        <div class="images wow fadeInUp" data-wow-delay="0.3s">
                            <img src='<?php echo get_theme_file_uri( '/images/image.png') ?>' alt=''>
                        </div>
                        <div class="text-intro text-center">
                            <div class="text-center">
                                <h3 class="title36">Xanh</h3>
                                <p class="title18">Chú trọng chất lượng sống với các yếu tố không khí, nước, ánh sáng, thiên
                                    nhiên</p>
                            </div>
                        </div>
                    </div>
                    <div class="elements">
                        <div class="images wow fadeInUp" data-wow-delay="0.3s">
                            <img src='<?php echo get_theme_file_uri( '/images/image.png') ?>' alt=''>
                        </div>
                        <div class="text-intro text-center">
                            <div class="text-center">
                                <h3 class="title36">Xanh</h3>
                                <p class="title18">Chú trọng chất lượng sống với các yếu tố không khí, nước, ánh sáng, thiên
                                    nhiên</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="html_technology_col">
                <div class="title_main">
                    <h2 class="title32">Công nghệ & Dịch vụ</h2>
                </div>
                <div class="technology_slide news_slide-js owl-carousel owl-theme wow fadeInUp" data-wow-delay="0.5s">
                    <a href="" title="" class="card-section-launch">
                        <div class="technology_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-block">
                                    <h4 class="card-title btn-white title24">Vách nhẹ & Kết cấu nhẹ</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="card-section-launch">
                        <div class="technology_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-block">
                                    <h4 class="card-title btn-white title24">Tối ưu năng lượng</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="card-section-launch">
                        <div class="technology_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-block">
                                    <h4 class="card-title btn-white title24">Dịch vụ Turnkey</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" title="" class="card-section-launch">
                        <div class="technology_item">
                            <div class="item_image">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/new.png') ?>' alt='' />
                                </div>
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-block">
                                    <h4 class="card-title btn-white title24">Tối ưu năng lượng</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="html_technology_services">
                <div class="flickity-viewport">
                    <div class="flex-viewport">
                        <div class="media-inner-content content-left">
                            <div class="image wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s" data-fancybox="gallery" href='<?php echo get_theme_file_uri( '/images/image1.png') ?>'>
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="title">
                                    <h3 class="title42">Bền Vững</h3>
                                </div>
                                <a href="" title="" class="butt btn-more">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                        <div class="media-inner-content content-right">
                            <div class="image wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s"
                                 data-fancybox="gallery" href='<?php echo get_theme_file_uri( '/images/image1.png') ?>'>
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="title">
                                    <h3 class="title42">Bền Vững</h3>
                                </div>
                                <a href="" title="" class="butt btn-more">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flickity-viewport">
                    <div class="flex-viewport">
                        <div class="media-inner-content content-left">
                            <div class="image wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s" data-fancybox="gallery" href='<?php echo get_theme_file_uri( '/images/image1.png') ?>'>
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="title">
                                    <h3 class="title42">Bền Vững</h3>
                                </div>
                                <a href="" title="" class="butt btn-more">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                        <div class="media-inner-content content-right">
                            <div class="image wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s"
                                 data-fancybox="gallery" href='<?php echo get_theme_file_uri( '/images/image1.png') ?>'>
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="title">
                                    <h3 class="title42">Bền Vững</h3>
                                </div>
                                <a href="" title="" class="butt btn-more">
                                    <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="html_introduce_home">
                <div class="elements">
                    <div class="images wow fadeInUp" data-wow-delay="0.3s">
                        <img src='<?php echo get_theme_file_uri( '/images/image.png') ?>' alt=''>
                    </div>
                    <div class="text-intro text-about">
                        <div class="text-center">
                            <h3 class="title24">Về chúng tôi</h3>
                            <p class="title18">ideAZ được thành lập năm 2017, bởi các cổ đông từ Việt nam, Hà lan có
                                trên 25 kinh nghiệm trong lĩnh vực công nghệ xây dựng, hoàn thiện nội thất.</p>
                            <a href="" title="" class="btn-discover active">
                                <span>Khám phá</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="form_registration wow fadeInDown" data-wow-delay="0.5s">
			<div class="container">
				<div class="form">
					<div class="item-text">
						<h3 class="title32">liên hệ</h3>
					</div>
					<form action="" class="wow fadeInUp" data-wow-delay="0.5s">
						<div class="form-field">
							<input type="text" id="" name="" placeholder="Họ - tên">
						</div>
						<div class="form-field">
							<input type="text" id="" name="" placeholder="Số điện thoại">
						</div>
						<div class="form-field">
							<input type="email" id="" name="" placeholder="E-mail">
						</div>
						<button class="butt active">
							<span>Gửi</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();
