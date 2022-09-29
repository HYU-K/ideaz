<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

get_header();
?>

	<main id="primary" class="site-main container py-12">

		<?php if ( have_posts() ) : ?>

		<header class="page-header my-4">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		<div class='grid grid-cols-3 gap-4'>
			<?php while ( have_posts() ) :the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php nanoweb\post_thumbnail(); ?>
					<header class="entry-header my-2">
						<?php
						the_title( '<h2 class="entry-title text-base"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">
								<?php
								nanoweb\posted_on();
								nanoweb\posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
				</article>
			<?php

			endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

		<?php the_posts_pagination(); ?>
	</main>

<?php
get_sidebar();
get_footer();
