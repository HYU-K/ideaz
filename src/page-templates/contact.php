<?php
/**
 * Template Name: Contact Us
 */

get_header();
$bg         = sprintf( 'background-image:url("%s")', get_the_post_thumbnail_url() );
$address    = get_field( 'address', 'option' );
$tech_phone = get_field( 'tech_phone', 'option' );
$email      = get_field( 'email', 'option' );
?>
	<main id="primary" class="site-main">
		<div class='h-72 bg-center bg-cover' style='<?php echo $bg ?>'>
		</div>
		<div class='container py-12 grid lg:grid-cols-2 gap-12'>
			<div>
				<h1 class='mb-2'>Gửi yêu cầu liên hệ</h1>
				<p>Vui lòng điền đầy đủ thông tin theo yêu cầu để chúng tôi có thể hỗ trợ quý khách tốt nhất.</p>
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div>
			<div class='lg:flex justify-end relative'>
				<div
					class='bg-primary-500 bg-opacity-90 rounded-xl p-6 lg:absolute left-0 top-20 bottom-20 lg:w-2/3 flex flex-col justify-between text-white'>
					<div>
						<img class='rounded-xl mb-4' src='<?php echo get_theme_file_uri( '/images/logo.png' ) ?>' alt=''>
					</div>
					<ul class='space-y-4 text-xs'>
						<li class='flex items-center'>
							<div><i class="icon rounded-full p-2 mr-2 bg-primary-400 text-white text-xs icon-map-pin"></i></div>
							<?php echo $address ?>
						</li>
						<li class='flex items-center'>
							<div><i class="icon rounded-full p-2 mr-2 bg-primary-400 text-white text-xs icon-phone"></i></div>
							<?php echo $tech_phone ?>
						</li>
						<li class='flex items-center'>
							<div><i class="icon rounded-full p-2 mr-2 bg-primary-400 text-white text-xs icon-mail"></i></div>
							<?php echo $email ?>
						</li>
					</ul>
				</div>
				<img class='rounded-xl dlg:hidden' src='<?php echo get_theme_file_uri( '/images/contact2.jpg' ) ?>' alt=''>
			</div>
		</div>
		<div class='container my-12'>
			<?php the_field( 'map'); ?>
		</div>
	</main>
<?php
get_footer();
