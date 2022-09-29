<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

get_header();
$img       = get_field( 'agencies_page_banner', 'option' ) ?: get_theme_file_uri( '/images/agency-archive.jpg' );
$bg        = sprintf( 'background-image:url("%s")', $img );
$locations = get_terms( 'location', [ 'orderby' => 'name', 'order' => 'ASC', ] );
?>
	<main id="primary" class="site-main">
		<div class='py-12 lg:py-24 bg-center bg-cover' style='<?php echo $bg ?>'>
			<div class='container'>
				<h2 class='uppercase mb-4 text-center'>hệ thống đại lý</h2>
				<form class='border border-gray-300 bg-white p-1 lg:max-w-1/3 flex mx-auto rounded' method="get"
				      action="<?php echo home_url( '/he-thong-dai-ly' ); ?>"
				>
					<select class='flex-1 form-select border-none px-3 py-2' name="location">
						<option value=''>Vui lòng chọn địa điểm</option>
						<?php
						foreach ( $locations as $location ) {
							printf(
								'<option %s value="%s">%s</option>',
								$location->term_id == get_query_var( 'location' ) ? 'selected' : '',
								$location->term_id,
								$location->name );
						}
						?>
					</select>
					<button type='submit' class='px-3 py-2 rounded bg-primary-500 text-white'>
						<i class='icon icon-search pr-1'></i> Search
					</button>
				</form>
			</div>
		</div>
		<div class='container my-12 grid md:grid-cols-2 gap-12'>
			<?php if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<div class='text-gray-600'>
						<?php the_post_thumbnail(); ?>
						<h2 class='my-4 border-b border-gray-400 pb-2'>
							<i class='icon icon-location1 text-primary-500 mr-1'></i>
							<?php the_title(); ?>
						</h2>
						<p class='text-sm my-2'><b>Địa chỉ:</b> <?php the_field( 'address' ); ?></p>
						<p class='text-sm my-2'><b>Số điện thoại:</b> <?php the_field( 'phone' ); ?></p>
						<p>
							<a class='font-medium' target='_blank' href='<?php the_field( 'map' ); ?>'>
								<i class='icon icon-map pr-2'></i>
								Bản đồ chỉ đường
							</a>
						</p>
					</div>
				<?php
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
		<div class='container'>
			<?php the_posts_pagination(); ?>
		</div>
	</main>
<?php
get_footer();
