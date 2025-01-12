<?php

namespace abolch\App;

use WP_Query;

class Loop {
	private static $instance;
	private        $loop = [];

	public static function new( $postType = 'post', $perPage = - 1 ) {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		self::$instance->reset();

		self::$instance->postType( $postType );
		self::$instance->perPage( $perPage );

		return self::$instance;
	}

	public function postType( $type ) {
		$this->loop['post_type'] = $type;

		return $this;
	}

	public function perPage( $perPage ) {
		$this->loop['posts_per_page'] = $perPage;

		return $this;
	}

	public function taxonomy( $taxonomy, ...$values ) {
		$this->loop['tax_query'] = [
			[
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $values,
			],
		];

		return $this;
	}

	public function getArray() {
		$wpQuery = new WP_Query( $this->loop );

		return $wpQuery->posts;
	}

	public function call( callable $callable ) {
		$wpQuery = new WP_Query( $this->loop );
		if ( $wpQuery->have_posts() ) {
			while ( $wpQuery->have_posts() ) {
				$wpQuery->the_post();
				$callable();
			}
		}
	}

	public function reset() {
		$this->loop = [
			'posts_per_page'      => - 1,
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'ignore_sticky_posts' => 1,
		];
	}

}