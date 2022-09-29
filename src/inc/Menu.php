<?php

namespace nanoweb;

class Menu {
	public function boot() {
		$this->header();
	}

	public function header() {
		add_action( 'nanoweb/menu', [ $this, 'main_menu' ] );
		add_action( 'wp_footer', [ $this, 'mobile_menu' ] );
	}

	public function main_menu() {
		$mega_menu = get_field( 'mega_menu', 'option' );
		if ( empty( $mega_menu ) ) {
			wp_nav_menu(
				[
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				]
			);
		} else {
			$html = '<div x-cloak x-data="{item:{0:true}}" @click.outside="item={}">';
			$html .= '<ul class="menu">';
			foreach ( $mega_menu as $k => $item ) {
				$level2 = $item['level_2'];
				$html   .= '<li>';
				if ( $level2 ) {
					$html .= sprintf( '<a class="cursor-pointer" @click.prevent="item={};item[%s]=!item[%s];">%s</a>',
						$k,
						$k,
						$item['link']['title'] );
				} else {
					$html .= sprintf( '<a href="%s">%s</a>', $item['link']['url'], $item['link']['title'] );
				}
				$html .= '</li>';
			}
			$html .= '</ul>';
			foreach ( $mega_menu as $k => $item ) {
				$level2 = $item['level_2'];
				if ( ! empty( $level2 ) ) {
					$html .= "<div x-show='item[$k]==true' x-collapse x-data='{item2:0}' class='absolute border-t border-gray-200 z-40 left-0 right-0 bg-white shadow'>";
					$html .= '<div class="bg-gray-100"><div class="container lg:flex flex-wrap lg:space-x-8">';
					foreach ( $level2 as $k2 => $l2 ) {
						$class = ":class='item2==$k2 && \"underline\"'";
						if ( ! empty( $l2['title'] ) ) {
							$html .= sprintf(
								"<div class='text-center cursor-pointer px-3 py-4' @click='item2=$k2'><img class='inline-block' src='%s' /><h3 $class class='text-base'>%s</h3></div>",
								$l2['icon'],
								$l2['title'] );
						}
					}
					$html .= '</div></div>';
					foreach ( $level2 as $k2 => $l2 ) {
						$level3 = $l2['level_3'];
						if ( ! empty( $level3 ) ) {
							$html .= "<div class='container grid lg:grid-cols-4 gap-4' x-show='item2==$k2' x-data='{item3:0}'>";
							$html .= '<div class="border-r border-gray-200 py-4 space-y-2">';
							foreach ( $level3 as $k3 => $l3 ) {
								$class = ":class='item3==$k3 && \"underline pb-2\"'";
								$html  .= sprintf( "<h4 class='cursor-pointer' @click='item3=$k3' $class>%s</h4>", $l3['title'] );
							}
							$html .= '</div>';
							foreach ( $level3 as $k3 => $l3 ) {
								$series   = $l3['series'];
								$explorer = $l3['explorer'];
								$extra    = $l3['extra'];

								$class = ! $explorer ? 'col-span-2' : '';

								$html .= "<ul class='py-4 space-y-2 border-r border-gray-200 $class' x-show='item3==$k3'>";
								foreach ( $series as $s ) {
									$html .= sprintf( '<li><a class="text-gray-600" href="%s">%s</a></li>',
										$s['link']['url'],
										$s['link']['title'] );
								}
								$html .= '</ul>';

								if ( ! empty( $explorer ) ) {
									$html .= "<ul class='py-4 space-y-2 border-r border-gray-200' x-show='item3==$k3'>";
									foreach ( $explorer as $x ) {
										$html .= sprintf( '<li><a class="text-gray-600" href="%s">%s</a></li>',
											$x['link']['url'],
											$x['link']['title'] );
									}
									$html .= '</ul>';
								}

								$html .= '<div class="place-self-end space-y-1 mb-4 py-8 text-center">';
								$html .= sprintf( '<h3>%s</h3>', $extra['title'] );
								$html .= sprintf( '<p class="text-gray-500">%s</p>', $extra['description'] );
								if ( ! empty( $extra['link'] ) ) {
									$html .= sprintf( '<a href="%s" class="button my-4">%s</a>',
										$extra['link']['url'],
										$extra['link']['title'] );
								}
								$html .= '</div>';
							}
							$html .= '</div>';
						}
					}
					$html .= '</div>';
				}
			}
			$html .= '</div>';
			echo $html;
		}
	}

	public function mobile_menu() {
		echo '<nav id="mobile-menu">';
		wp_nav_menu(
			[
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			]
		);
		echo '</nav>';
	}
}
