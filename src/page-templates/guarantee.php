<?php
/**
 * Template Name: Guarantee
 */

get_header();
$bg = sprintf( 'background-image:url("%s")', get_the_post_thumbnail_url() )
?>
	<main id="primary" class="site-main">
		<div class='py-12 lg:py-24 bg-center bg-cover' style='<?php echo $bg ?>'>
			<div class='flex items-center justify-center'>
				<h1 class='text-white uppercase'>Bảo hành</h1>
			</div>
		</div>
		<div class='container grid lg:grid-cols-2 gap-12 py-12 items-center'>
			<div class='prose'>
				<p>Tất cả trung tâm bảo hành của Skyworth a trên toàn quốc đều được đào tạo và chỉ sử dụng linh kiện chính hãng Skyworth trong mọi hoạt động sửa chữa.</p>
				<p class='text-gray-400'>(Nhập số seri trên thẻ bảo hành, sau đó click tra cứu để lấy dữ liệu)</p>
				<form class='flex w-full space-x-2'>
					<input class='form-input rounded flex-1' placeholder='Số seri' type='text'>
					<button class='px-3 py-2 rounded bg-primary-500 text-white'><i class='icon icon-search pr-1'></i>Search</button>
				</form>
			</div>
			<div>
				<img src='<?php echo get_theme_file_uri('/images/baohanh.jpg') ?>' alt=''>
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
