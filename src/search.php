<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package nanoweb
 */

get_header();
?>

	<main id="primary" class="site-main container py-12">

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title my-4">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Kết quả tìm kiếm: %s', 'vnh_textdomain' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header><!-- .page-header -->

		<div class='grid lg:grid-cols-4 child:shadow-xl gap-8'>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

		<?php the_posts_pagination(); ?>
	</main>

<?php
get_footer();
