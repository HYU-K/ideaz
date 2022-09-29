<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package nanoweb
 */

get_header();
$post_id = get_the_ID();
$related = wp_get_recent_posts( [
	'numberposts'  => 2,
	'post_status'  => 'publish',
	'post__not_in' => [ $post_id ],
	'category'     => get_the_category( $post_id )[0]->term_id,
] );

?>
	<div class='container my-6'>
		<ul class='flex items-center space-x-2 text-sm flex-wrap'>
			<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
			<li><a href=<?php echo home_url( '/tin-tuc' ); ?>>Tin tức</a><span class='pl-2'>/</span></li>
			<li class='text-gray-400'><?php the_title(); ?></li>
		</ul>
	</div>
	<div class='grid lg:grid-cols-[2fr,1fr] gap-8 container mb-12'>
		<main id="primary" class="site-main">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/

			endwhile; // End of the loop.
			?>
			<div class='my-12'>
				<h3 class='uppercase my-6 text-2xl border1'>tin tức liên quan</h3>
				<div class='grid grid-cols-2 gap-8'>
					<?php foreach ( $related as $item ) : ?>
						<div>
							<a href='<?php echo get_permalink( $item['ID'] ) ?>'>
								<?php echo get_the_post_thumbnail( $item['ID'], 'news-thumb' ); ?>
							</a>
							<a href='<?php echo get_permalink( $item['ID'] ) ?>'>
								<h4 class='my-2 text-gray-600'>
									<?php echo $item['post_title'] ?>
								</h4>
							</a>
							<div class='line-clamp-2 text-sm text-gray-600'>
								<?php echo $item['post_excerpt'] ?>
							</div>
							<div class='my-2 text-gray-400'>
								<i class="icon icon-clock"></i>
								<?php
								echo get_the_date( '', $item['ID'] )
								?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</main>
		<?php get_sidebar(); ?>
	</div>
<?php
get_footer();
