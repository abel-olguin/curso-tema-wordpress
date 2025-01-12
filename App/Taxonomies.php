<?php

namespace Abolch\App;

class Taxonomies {
	public function __construct() {
		add_action( 'init', [ $this, 'registerTaxonomies' ] );
	}

	public function registerTaxonomies() {
		register_taxonomy( 'grupo', 'post', [
			'hierarchical' => true,
			'show_in_rest' => true,
			'labels'       => Helpers::labels( 'grupo', 'grupos' ),
			'rewrite'      => [
				'slug'         => 'grupos',
				'with_front'   => false,
				'hierarchical' => true
			],
		] );
	}
}