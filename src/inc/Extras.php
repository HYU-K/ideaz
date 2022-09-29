<?php

namespace nanoweb;

use vnh\contracts\Bootable;
use WP_Query;

class Extras implements Bootable {
	public function boot() {
		add_action( 'pre_get_posts', [ $this, 'pre_get_posts' ] );
	}

	public function pre_get_posts( WP_Query $query ) {
		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}

		if ( is_post_type_archive( 'videos' ) ) {
			$query->set( 'posts_per_page', '12' );
		}

		if ( is_post_type_archive( 'products' ) ) {
			$products_tax_query = [ 'relation' => 'OR', ];
			if ( ! empty( $_GET['sizes'] ) ) {
				$products_tax_query[] = [ 'taxonomy' => 'sizes', 'field' => 'term_id', 'terms' => explode( ',', $_GET['sizes'] ), ];
			}
			if ( ! empty( $_GET['brands'] ) ) {
				$products_tax_query[] = [ 'taxonomy' => 'brands', 'field' => 'term_id', 'terms' => explode( ',', $_GET['brands'] ), ];
			}
			if ( ! empty( $_GET['categories'] ) ) {
				$products_tax_query[] = [ 'taxonomy' => 'categories', 'field' => 'term_id', 'terms' => explode( ',', $_GET['categories'] ), ];
			}
			if ( ! empty( $_GET['weights'] ) ) {
				$products_tax_query[] = [ 'taxonomy' => 'weights', 'field' => 'term_id', 'terms' => explode( ',', $_GET['weights'] ), ];
			}
			$query->set( 'tax_query', $products_tax_query );
			$query->set( 'posts_per_page', '12' );
		}

		if ( is_post_type_archive( 'agencies' ) ) {
			$agencies_tax_query = [ 'relation' => 'OR', ];
			if ( ! empty( $_GET['location'] ) ) {
				$agencies_tax_query[] = [ 'taxonomy' => 'location', 'field' => 'term_id', 'terms' => explode( ',', $_GET['location'] ), ];
			}
			$query->set( 'tax_query', $agencies_tax_query );
		}
	}
}
