<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class='container-fluid relative'>
			<img src='<?php echo get_theme_file_uri( '/images/product-archive.jpg' ) ?>' alt=''>
		</div>
		<div class='container my-6'>
			<ul class='flex items-center space-x-2 text-sm flex-wrap'>
				<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
				<li class='text-gray-500'>Sản phẩm</li>
			</ul>
		</div>
		<div class='container my-12 grid grid-cols-3 gap-6'>
			<?php if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<div class='space-y-2 shadow-xl text-center p-4'>
						<?php the_post_thumbnail( 'medium' ); ?>
						<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark">', '</a></h2>' ) ?>
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
get_sidebar();
get_footer();
