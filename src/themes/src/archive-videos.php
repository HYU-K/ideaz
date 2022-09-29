<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

get_header();
$img = get_field( 'video_page_banner', 'option' ) ?: get_theme_file_uri( '/images/guarantee.jpg' );
$bg  = sprintf( 'background-image:url("%s")', $img )
?>
	<main id="primary" class="site-main" x-init="$watch('isModalOpen', toggleOverflow)" x-data="video()" @keydown.escape="isModalOpen=false">
		<div class="overlay" x-show="isModalOpen" x-cloak @click='isModalOpen=false'></div>
		<div
			class="modal"
			role="dialog"
			tabindex="-1"
			x-show="isModalOpen"
			x-cloak
			x-transition
		>
			<div class="model-inner" @click.away="isModalOpen = false">
				<iframe x-ref="iframeElement"
				        width="640" height="360" src="" frameborder="0"
				        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
				        allowfullscreen></iframe>
			</div>
		</div>
		<div class='py-12 lg:py-24 bg-center bg-cover flex items-center justify-center' style='<?php echo $bg ?>'>
			<h1 class='text-white uppercase'>videos</h1>
		</div>
		<div class='container my-6'>
			<ul class='flex items-center space-x-2 text-sm flex-wrap'>
				<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
				<li class='text-gray-500'>Videos</li>
			</ul>
		</div>
		<div class='container my-12 grid grid-cols-2 lg:grid-cols-4 gap-6'>
			<?php if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<div class='space-y-2 cursor-pointer' @click="
					isModalOpen = true;
					data = '<?php the_field( 'youtube_id' ); ?>';
                    $nextTick(() => { $refs.iframeElement.setAttribute('src', iframe_url()) });"
					>
						<div class='relative'>
							<?php the_post_thumbnail( 'video-thumb' ); ?>
							<div class='absolute inset-0 flex items-center justify-center'>
								<img class='inline-block h-12' src='<?php echo get_theme_file_uri( '/images/play.svg' ) ?>' alt=''>
							</div>
						</div>
						<?php the_title( '<h3 class="text-base text-black line-clamp-3 leading-0">', '</h3>' ) ?>
						<div class='text-gray-500 mt-1'>
							<?php nanoweb\posted_on(); ?>
						</div>
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
	<script>
		function toggleOverflow() {
			document.body.classList.toggle("overflow-hidden");
		}

		function video() {
			return {
				isModalOpen: false,
				embed_url: "https://www.youtube.com/embed/",
				data: null,
				iframe_url() {
					return this.embed_url + this.data;
				},
			};
		}
	</script>
<?php
get_footer();
