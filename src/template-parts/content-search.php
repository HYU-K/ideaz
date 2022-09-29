<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail( 'product-thumb' ); ?>
	<header class="entry-header px-4 py-2">
		<?php the_title( sprintf(
			'<h2 class="entry-title line-clamp-1 text-base my-2"><a class="text-black hover:underline" href="%s" rel="bookmark">',
			esc_url( get_permalink() ) ),
			'</a></h2>' );
		?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php nanoweb\posted_on(); ?>
			</div>
		<?php endif; ?>
	</header>

</article><!-- #post-<?php the_ID(); ?> -->
