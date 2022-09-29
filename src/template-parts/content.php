<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta my-4 text-gray-600">
				<?php nanoweb\posted_on(); ?>
			</div>
		<?php endif; ?>
	</header>

	<?php nanoweb\post_thumbnail(); ?>

	<?php if ( is_singular() ): ?>
		<div class="entry-content prose max-w-full">
			<?php
			the_content();

			wp_link_pages(
				[
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vnh_textdomain' ),
					'after'  => '</div>',
				]
			);
			?>
		</div>
	<?php endif; ?>
</article>
