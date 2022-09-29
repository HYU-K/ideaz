<?php
/**
 * Template Name: Support
 */

get_header();
$bg = sprintf( 'background-image:url("%s")', get_theme_file_uri( '/images/guarantee.jpg' ) );

$featured_posts = get_field( 'featured_posts' );
$products       = get_field( 'products' );
$services       = get_field( 'services' );
$contact        = get_field( 'contact' );
?>
	<main id="primary" class="site-main">
		<div class='py-12 lg:py-24 bg-center bg-cover' style='<?php echo $bg ?>'>
			<div class='container'>
				<div class='text-white text-center'>
					<h2 class='uppercase text-center uppercase dlg:text-xl'>CHÀO MỪNG BẠN ĐẾN DỊCH VỤ VÀ HỖ TRỢ CỦA skyworth</h2>
					<p class='mb-2'>Dịch vụ tùy biến đặc biệt dành cho bạn.</p>
				</div>
				<form class='text-center' method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<input class='border border-gray-300 bg-white rounded lg:w-96 form-input border-none px-3 py-2' type="text" name="s"
					       placeholder='Nhập từ khóa tìm kiếm'>
					<input type="hidden" value="43" name="cat" id="scat"/>
					<button type="submit" class='px-3 py-2 rounded bg-primary-500 text-white -ml-3'>
						<i class='icon icon-search'></i>
					</button>
				</form>
			</div>
		</div>
		<div class='container py-12 grid grid-cols-2 lg:grid-cols-4 gap-4'>
			<?php foreach ( $featured_posts as $post ) : ?>
				<div class='space-y-2'>
					<a href="<?php echo get_permalink( $post->ID ) ?>">
						<?php echo get_the_post_thumbnail( $post->ID, 'news-feature-thumb' ); ?>
						<p class='text-black mt-2'><?php echo $post->post_title ?></p>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<div class='bg-gray-100 py-12 text-center'>
			<h2><?php echo $products['title']; ?></h2>
			<p class='text-gray-500 mb-4'><?php echo $products['description']; ?></p>
			<div class='container grid lg:grid-cols-5 gap-1'>
				<?php foreach ( $products['links'] as $link ): ?>
					<div class='bg-white p-4'>
						<a href='<?php echo $link['link']['url'] ?>'>
							<div class='h-48'>
								<img src='<?php echo $link['image'] ?>' alt=''>
							</div>
							<h4 class='text-black'><?php echo $link['link']['title'] ?></h4>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class='py-12'>
			<div class='text-center'>
				<h2><?php echo $services['title']; ?></h2>
				<p class='text-gray-500 mb-4'><?php echo $services['description']; ?></p>
			</div>
			<div class='container grid lg:grid-cols-3 gap-8'>
				<?php foreach ( $services['links'] as $link ): ?>
					<div class='flex items-center space-x-2'>
						<img src='<?php echo $link['icon'] ?>' alt=''>
						<div>
							<a href='<?php echo $link['link']['url'] ?>'>
								<h3 class='mb-1 text-gray-600'><?php echo $link['title'] ?></h3>
								<p class='text-gray-500'><?php echo $link['description'] ?></p>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class='py-12 bg-gray-100'>
			<div class='text-center'>
				<h2><?php echo $contact['title']; ?></h2>
				<p class='text-gray-500 mb-4'><?php echo $contact['description']; ?></p>
			</div>
			<div class='container lg:!max-w-1/2 grid lg:grid-cols-2 gap-8'>
				<?php foreach ( $contact['links'] as $link ): ?>
					<div class='text-center bg-white p-4'>
						<img src='<?php echo $link['icon'] ?>' alt=''>
						<div>
							<a href='<?php echo $link['link']['url'] ?>'>
								<h3 class='mb-1 text-gray-600'><?php echo $link['title'] ?></h3>
								<p class='text-gray-500'><?php echo $link['description'] ?></p>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main>
<?php
get_footer();
