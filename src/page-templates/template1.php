<?php
/**
 * Template Name: Template 1
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class='h-72'>
			<img class='w-full h-full object-cover' src='<?php echo get_the_post_thumbnail_url() ?>' alt=''>
		</div>
		<div class='container my-6'>
			<ul class='flex items-center space-x-2 text-sm flex-wrap'>
				<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
				<li class='text-gray-500'><?php the_title(); ?></li>
			</ul>
		</div>
		<div class='container'>
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'template1' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</main>
<?php
get_footer();
