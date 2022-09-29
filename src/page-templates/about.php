<?php
/**
 * Template Name: About Us
 */

get_header();
?>
	<main id="primary" class="site-main space-y-12">
<!--		--><?php
//		if ( have_posts() ) :
//			while ( have_posts() ) :
//				the_post();
//				$intro         = get_field( 'intro' );
//				$vision        = get_field( 'vision' );
//				$mission       = get_field( 'mission' );
//				$awards        = get_field( 'awards' );
//				$history       = get_field( 'history' );
//				$partners      = get_field( 'partners' );
//				$feature_image = get_the_post_thumbnail_url();
//
//				$html = sprintf( "<div class='h-72'> <img class='w-full h-full object-cover' src='%s' alt=''></div>", $feature_image );
//				$html .= sprintf( '<div class="grid lg:grid-cols-2 gap-12 container items-center"> <div class="space-y-2 text-justify">%s</div> <div>%s</div> </div>',
//					$intro['content'],
//					$intro['media']
//				);
//
//				$vision_html  = sprintf( '<div class="space-y-3"><img src="%s" alt=""><h4>%s</h4><p class="text-gray-500 text-sm">%s</p></div>',
//					$vision['image'],
//					$vision['title'],
//					$vision['description'] );
//				$mission_html = sprintf( '<div class="space-y-3"><img src="%s" alt=""><h4>%s</h4><p class="text-gray-500 text-sm">%s</p></div>',
//					$mission['image'],
//					$mission['title'],
//					$mission['description'] );
//				$html         .= sprintf(
//					'<div class="bg-gray-100 align-full py-12"><div class="grid lg:grid-cols-2 gap-4 container">%s%s</div></div>',
//					$vision_html,
//					$mission_html
//				);
//
//				$html .= '<div class="container text-center">';
//				$html .= '<h3 class="text-3xl mb-8">Thành tựu</h3>';
//				$html .= '<div class="awards swiper mb-12"><div class="swiper-wrapper">';
//				foreach ( $awards as $award ) {
//					$html .= sprintf( '<div class="swiper-slide"><img src="%s" alt=""></div>', $award['image'] );
//				}
//				$html .= '</div><div class="swiper-pagination"></div></div>';
//				$html .= '</div>';
//
//				$html  .= '<div class="bg-gray-100 align-full py-12"><div class="container">';
//				$html  .= '<h2 class="text-center text-3xl">Quy trình hoạt động phát triển</h2>';
//				$html  .= '<div class="relative mx-auto lg:max-w-2/3 lg:timeline">';
//				foreach ( $history as $index => $his ) {
//					$html .= sprintf( '<div class="%s lg:w-1/2 relative p-4 z-10 my-8"><h3 class="mb-2">%s</h3><p class="text-gray-500">%s</p></div>',
//						$index % 2 ? "left-0 lg:border-r-2 border-primary-500" : "lg:left-1/2 lg:border-l-2 border-primary-500",
//						$his['year'],
//						$his['content'] );
//				}
//				$html .= '</div>';
//				$html .= '<div class="text-center text-xl my-8 dmd:hidden">Hiện tại</div>';
//				$html .= '</div></div>';
//
//				$html .= '<div class="my-12">';
//				$html .= '<h2 class="text-center text-3xl mb-8">Đối tác</h2>';
//				$html .= '<div class="container grid grid-cols-2 lg:grid-cols-6 gap-4 pb-12">';
//				foreach ( $partners as $partner ) {
//					$html .= sprintf( '<div><img src="%s" alt=""></div>', $partner['image'] );
//				}
//				$html .= '</div>';
//
//				echo $html;
//			endwhile;
//		else :
//			get_template_part( 'template-parts/content', 'none' );
//		endif;
//		?>
        <div class="banner-col" data-aos="zoom-in" data-aos-duration="1000">
            <div class="bann_col slide_destinations">
                <div class="bg">
                    <img src='<?php echo get_theme_file_uri( '/images/banner.png') ?>' alt=''>
                </div>
                <div class="bg">
                    <img src='<?php echo get_theme_file_uri( '/images/banner.png') ?>' alt=''>
                </div>
                <div class="bg">
                    <img src='<?php echo get_theme_file_uri( '/images/banner.png') ?>' alt=''>
                </div>
            </div>
            <span class="pagingInfo"></span>
        </div>
        <div class="html_about_content wow fadeInLeft" data-wow-delay="0.5s">
            <div class="container">
                <div class="card-block">
                    <h3 class="card-topic title32">ideaz - Vision with innovations</h3>
                    <div class="card-title">
                        <p class="title18">ideAZ được thành lập năm 2017, bởi các cổ đông từ Việt nam, Hà lan có trên 25 kinh nghiệm trong lĩnh vực công nghệ xây dựng, hoàn thiện nội thất. Hệ thống IDEAZ có 3 công ty, sở hữu các công nghệ bản quyền về xây dựng nhanh, đại diện độc quyền tại Việt nam cho hơn 10 thương hiệu hàng đầu châu Âu về nội thất, vật tư kỹ thuật và hoàn thiện, hệ thống showroom và văn phòng tại Hà nội và TP. Hồ chí minh.</p>
                    </div>
                </div>
                <div class="banner">
                    <img src='<?php echo get_theme_file_uri( '/images/bann-1.png') ?>' alt=''>
                </div>
                <div class="card-block">
                    <h3 class="card-topic title32">ideaz - Vision with innovations</h3>
                    <div class="card-title">
                        <p class="title18">ideAZ được thành lập năm 2017, bởi các cổ đông từ Việt nam, Hà lan có trên 25 kinh nghiệm trong lĩnh vực công nghệ xây dựng, hoàn thiện nội thất. Hệ thống IDEAZ có 3 công ty, sở hữu các công nghệ bản quyền về xây dựng nhanh, đại diện độc quyền tại Việt nam cho hơn 10 thương hiệu hàng đầu châu Âu về nội thất, vật tư kỹ thuật và hoàn thiện, hệ thống showroom và văn phòng tại Hà nội và TP. Hồ chí minh.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="html_technology_services">
            <div class="container">
                <div class="flickity-viewport">
                    <div class="flex-viewport">
                        <div class="media-inner-content content-left">
                            <div class="image wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s" data-fancybox="gallery" href="../images/image1.png">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="title"><h3 class="title36">Bền Vững</h3></div>
                                <div class="literature-text">
                                    <p class="title18">ideAZ được thành lập năm 2017, bởi các cổ đông từ Việt nam, Hà lan có trên 25 kinh nghiệm trong lĩnh vực công nghệ xây dựng, hoàn thiện nội thất. Hệ thống IDEAZ có 3 công ty, sở hữu các công nghệ bản quyền về xây dựng nhanh, đại diện độc quyền tại Việt nam cho hơn 10 thương hiệu hàng đầu châu Âu về nội thất, vật tư kỹ thuật và hoàn thiện, hệ thống showroom và văn phòng tại Hà nội và TP. Hồ chí minh</p>
                                </div>
                            </div>
                        </div>
                        <div class="media-inner-content content-right">
                            <div class="image wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s" data-fancybox="gallery" href="../images/image1.png">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flickity-viewport">
                    <div class="flex-viewport">
                        <div class="media-inner-content content-left">
                            <div class="image wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s" data-fancybox="gallery" href="../images/image1.png">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="title"><h3 class="title36">Bền Vững</h3></div>
                                <div class="literature-text">
                                    <p class="title18">ideAZ được thành lập năm 2017, bởi các cổ đông từ Việt nam, Hà lan có trên 25 kinh nghiệm trong lĩnh vực công nghệ xây dựng, hoàn thiện nội thất. Hệ thống IDEAZ có 3 công ty, sở hữu các công nghệ bản quyền về xây dựng nhanh, đại diện độc quyền tại Việt nam cho hơn 10 thương hiệu hàng đầu châu Âu về nội thất, vật tư kỹ thuật và hoàn thiện, hệ thống showroom và văn phòng tại Hà nội và TP. Hồ chí minh</p>
                                </div>
                            </div>
                        </div>
                        <div class="media-inner-content content-right">
                            <div class="image wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s" data-fancybox="gallery" href="../images/image1.png">
                                <div class="img">
                                    <img src='<?php echo get_theme_file_uri( '/images/image1.png') ?>' alt=''>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="html_contact_col12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="banner">
                <img src='<?php echo get_theme_file_uri( '/images/bann-1.png') ?>' alt=''>
            </div>
            <div class="contents">
                <div class="container">
                    <div class="contact_item">
                        <div class="form">
                            <div class="item-text">
                                <h3 class="title32">liên hệ</h3>
                            </div>
                            <ul class="infor-item">
                                <li class="infor title18"><span class="bold">Tel:</span><span>024 32069898</span></li>
                                <li class="infor title18"><span class="bold">Email:</span><span>mkt01@ideaz.com.vn</span></li>
                                <li class="infor title18"><span class="bold">Add:</span><span></span>Số 11 Mai Hắc Đế, Phường Bùi Thị Xuân, Hai Bà Trưng, Hà Nội</li>
                            </ul>
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
                                <a href="./chitiet-vechungtoi.html" title="" class="butt active">
                                    <span>Gửi</span>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</main>
<?php
get_footer();
