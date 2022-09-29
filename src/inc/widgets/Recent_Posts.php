<?php

namespace nanoweb\widgets;

use vnh\Widget;

class Recent_Posts extends Widget {
	public function config() {
		return [
			'id_base'     => 'recent',
			'classname'   => 'widget-recent-posts',
			'name'        => __( 'Recent Posts', 'vnh_textdomain' ),
			'description' => __( 'Display recent post based on number of comments or number of like.', 'vnh_textdomain' ),
			'fields'      => [
				'title'           => [
					'label'   => __( 'Title:', 'vnh_textdomain' ),
					'type'    => 'text',
					'default' => esc_html__( 'Recent Posts', 'vnh_textdomain' ),
				],
				'number_of_posts' => [
					'label'   => __( 'Number of posts:', 'vnh_textdomain' ),
					'type'    => 'number',
					'options' => [
						'min' => 1,
						'max' => 10,
					],
					'default' => 5,
				],
			],
		];
	}

	public function widget( $args, $instance ) {
		$this->widget_start( $args, $instance );

		$recent_posts = wp_get_recent_posts( [
			'numberposts' => $instance['number_of_posts'],
			'post_status' => 'publish',
		] );
		?>

		<?php foreach ( $recent_posts as $item ) : ?>
			<div class='grid grid-cols-[90px,1fr] gap-4 my-4'>
				<div>
					<?php echo get_the_post_thumbnail( $item['ID'], 'news-thumb' ); ?>
				</div>
				<a class='text-black' href='<?php echo get_permalink( $item['ID'] ) ?>'>
					<?php echo $item['post_title'] ?>
				</a>
			</div>
		<?php endforeach; ?>

		<?php
		$this->widget_end( $args );
	}
}
