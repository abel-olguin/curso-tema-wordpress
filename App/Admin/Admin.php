<?php

namespace abolch\App\Admin;

class Admin {
	public function __construct() {
		$this->addOptions();
		add_action('admin_enqueue_scripts', [$this, 'addScripts']);
		add_action('admin_init', [$this, 'addAjax']);
	}

	private function addOptions() {
		add_option('abolch_social_media', [
			['name' => 'Facebook','url' => 'https://www.facebook.com/abolch', 'image' => ''],
			['name' => 'Twitter', 'url' => 'https://twitter.com/abolch', 'image' => ''],
		], '', true);

		add_option('abolch_demo_token', 'abcde');
	}

	public function addScripts($name) {
		if(str_contains($name, 'abolch-settings')){
			wp_enqueue_script('abolch_admin_script', get_template_directory_uri() . '/src/js/admin/admin.js', ['jquery', 'wp-util'], '0.1');
			wp_enqueue_media();
		}
	}

	public function addAjax() {
		add_action('wp_ajax_abolchSaveSettings', [$this, 'saveSettings']);
		#add_action('wp_ajax_nopriv_abolchSaveSettings', [$this, 'ajax']);
	}

	public function saveSettings() {
		update_option('abolch_social_media', $_POST['social']);
		update_option('abolch_demo_token', $_POST['demoToken']);
		do_action('abolch_save_settings', $_POST['social'], $_POST['demoToken']);
		wp_send_json_success();
		wp_die();
	}
}