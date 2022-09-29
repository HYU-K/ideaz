<?php

namespace nanoweb;

use nanoweb\widgets\Info;
use nanoweb\widgets\Recent_Posts;

add_theme_support( 'nanoweb_widgets', [
	Info::class,
	Recent_Posts::class
] );

add_theme_support( 'nanoweb_widget_areas', [
	'sidebar'  => [
		'name'        => esc_html__( 'Sidebar', 'vnh_textdomain' ),
		'description' => esc_html__( 'Add widgets here.', 'vnh_textdomain' ),
		'before_title'  => '<h2 class="widget-title border2 uppercase text-xl">',
		'after_title'   => '</h2>',
	],
	'footer-1' => [
		'name'        => esc_html__( 'Footer 1', 'vnh_textdomain' ),
		'description' => esc_html__( 'Add widgets here.', 'vnh_textdomain' ),
	],
	'footer-2' => [
		'name'        => esc_html__( 'Footer 2', 'vnh_textdomain' ),
		'description' => esc_html__( 'Add widgets here.', 'vnh_textdomain' ),
	],
	'footer-3' => [
		'name'        => esc_html__( 'Footer 3', 'vnh_textdomain' ),
		'description' => esc_html__( 'Add widgets here.', 'vnh_textdomain' ),
	],
] );

trait Theme_Supports {
}
