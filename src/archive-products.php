<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package nanoweb
 */

get_header();
$img        = get_field( 'product_page_banner', 'option' ) ?: get_theme_file_uri( '/images/product-archive.jpg' );
$brands     = get_terms( 'brands', [ 'orderby' => 'name', 'order' => 'ASC', ] );
$weights    = get_terms( 'weights', [ 'orderby' => 'name', 'order' => 'ASC', ] );
$sizes      = get_terms( 'sizes', [ 'orderby' => 'name', 'order' => 'ASC', ] );
$categories = get_terms( 'categories', [ 'orderby' => 'name', 'order' => 'ASC', ] );

$brands_params     = sprintf( '[%s]', get_query_var( 'brands' ) );
$sizes_params      = sprintf( '[%s]', get_query_var( 'sizes' ) );
$weights_params    = sprintf( '[%s]', get_query_var( 'weights' ) );
$categories_params = sprintf( '[%s]', get_query_var( 'categories' ) );
?>
	<main id="primary" class="site-main">
		<div class='h-72'>
			<img class='w-full h-full object-cover' src='<?php echo $img ?>' alt=''>
		</div>
		<div class='container my-6'>
			<ul class='flex items-center space-x-2 text-sm flex-wrap'>
				<li><a href=<?php echo home_url(); ?>>Trang chủ</a><span class='pl-2'>/</span></li>
				<li class='text-gray-500'>Sản phẩm</li>
			</ul>
		</div>
		<div class='container grid lg:grid-cols-[1fr,4fr] gap-8 my-12'>
			<div class='space-y-4 dlg:hidden' x-data>
				<div>
					<h4 class='mb-4 border-b border-gray-300 pb-2'>Danh mục</h4>
					<div class='space-y-2'
					     x-data="{ categories: <?php echo $categories_params ?> }"
					     x-init="$watch('categories', (value) => {
						    const url = new URL(window.location.href);
						    url.searchParams.set('categories', value);
						    history.pushState(null, document.title, url.toString());
						  })"
					>
						<?php
						foreach ( $categories as $category ) {
							printf(
								'<div class="flex items-center space-x-2"><input x-model="categories" class="form-checkbox" type="checkbox" name="categories" value="%s" /><span>%s</span></div>',
								$category->term_id,
								$category->name
							);
						}
						?>
					</div>
				</div>
				<div>
					<h4 class='mb-4 border-b border-gray-300 pb-2'>Thương hiệu</h4>
					<div class='space-y-2'
					     x-data="{ brands: <?php echo $brands_params ?> }"
					     x-init="$watch('brands', (value) => {
						    const url = new URL(window.location.href);
						    url.searchParams.set('brands', value);
						    history.pushState(null, document.title, url.toString());
						  })"
					>
						<?php
						foreach ( $brands as $brand ) {
							printf(
								'<div class="flex items-center space-x-2"><input x-model="brands" class="form-checkbox" type="checkbox" name="brands" value="%s" /><span>%s</span></div>',
								$brand->term_id,
								$brand->name
							);
						}
						?>
					</div>
				</div>
				<div>
					<h4 class='mb-4 border-b border-gray-300 pb-2'>Kích thước</h4>
					<div class='space-y-2'
					     x-data="{ sizes: <?php echo $sizes_params ?> }"
					     x-init="$watch('sizes', (value) => {
						    const url = new URL(window.location.href);
						    url.searchParams.set('sizes', value);
						    history.pushState(null, document.title, url.toString());
						  })"
					>
						<?php
						foreach ( $sizes as $size ) {
							printf(
								'<div class="flex items-center space-x-2"><input x-model="sizes" class="form-checkbox" type="checkbox" name="sizes" value="%s" /><span>%s</span></div>',
								$size->term_id,
								$size->name
							);
						}
						?>
					</div>
				</div>
				<div>
					<h4 class='mb-4 border-b border-gray-300 pb-2'>Cân nặng</h4>
					<div class='space-y-2'
					     x-data="{ weights: <?php echo $weights_params ?> }"
					     x-init="$watch('weights', (value) => {
						    const url = new URL(window.location.href);
						    url.searchParams.set('weights', value);
						    history.pushState(null, document.title, url.toString());
						  })"
					>
						<?php
						foreach ( $weights as $weight ) {
							printf(
								'<div class="flex items-center space-x-2"><input x-model="weights"  class="form-checkbox" type="checkbox" name="weights" value="%s" /><span>%s</span></div>',
								$weight->term_id,
								$weight->name
							);
						}
						?>
					</div>
				</div>
				<button class='button' @click="location.reload();">Lọc kết quả</button>
			</div>
			<div>
				<div class='grid lg:grid-cols-3 gap-6'>
					<?php if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
							<div
								class='space-y-2 hover:shadow-xl hover:border-transparent transition-all border border-gray-300 text-center p-4'>
								<a href='<?php the_permalink(); ?>'>
									<?php the_post_thumbnail( 'product-thumb' ); ?>
								</a>
								<?php the_title( '<h2 class="entry-title"><a class="text-base text-black" href="' . get_permalink() . '" rel="bookmark">',
									'</a></h2>' ) ?>
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
			</div>
		</div>
	</main>
<?php
get_footer();
