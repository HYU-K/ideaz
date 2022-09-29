<?php

namespace nanoweb\widgets;

use vnh\Widget;

class Info extends Widget {
	public function config() {
		return [
			'id_base'     => 'info',
			'classname'   => 'widget-info',
			'name'        => __( 'Info', 'vnh_textdomain' ),
			'description' => __( 'SkyWorth Info', 'vnh_textdomain' ),
			'fields'      => [
				'title' => [
					'label'   => __( 'Title:', 'vnh_textdomain' ),
					'type'    => 'text',
					'default' => esc_html__( 'Info', 'vnh_textdomain' ),
				],
			],
		];
	}

	public function widget( $args, $instance ) {
		$this->widget_start( $args, $instance );
		$address    = get_field( 'address', 'option' );
		$phone      = get_field( 'phone', 'option' );
		$tech_phone = get_field( 'tech_phone', 'option' );
		$sale_phone = get_field( 'sale_phone', 'option' );
		$email      = get_field( 'email', 'option' );

		$format = '<li class="flex space-x-2 items-center"><i class="icon border border-primary-300 rounded-full p-1 bg-primary-100 text-primary-500 text-xs %s"></i><span>%s</span></li>';

		$html   = '<ul class="space-y-2">';
		$html   .= sprintf( $format, 'icon-map-pin', $address );
		$html   .= sprintf( $format, 'icon-phone', $tech_phone );
		$html   .= sprintf( $format, 'icon-phone', $sale_phone );
		$html   .= sprintf( $format, 'icon-mail', $email );
		$html   .= '</ul>';

		echo $html;

		$this->widget_end( $args );
	}

}
