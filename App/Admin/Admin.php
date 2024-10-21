<?php

namespace abolch\App\Admin;

class Admin {
	public function __construct() {
		$this->addOptions();
	}

	private function addOptions() {
		add_option('abolch_social_media', [
			'facebook' => 'https://www.facebook.com/abolch',
			'twitter' => 'https://twitter.com/abolch',
		], '', true);

		add_option('abolch_demo_token', 'abcde');
	}

	public function updateOptions() {
		update_option('abolch_social_media', [
			'facebook' => 'https://www.facebook.com/prueba',
			'twitter' => 'https://twitter.com/prueba',
		]);

		add_option('abolch_demo_token', 'xyz');
	}
}