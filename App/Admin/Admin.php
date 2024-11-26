<?php

namespace abolch\App\Admin;

class Admin {
	public function __construct() {
		$this->addOptions();
		add_action( 'admin_enqueue_scripts', [ $this, 'addScripts' ] );
		add_action( 'admin_init', [ $this, 'addAjax' ] );
	}

	public function addScripts( $name ) {
		if ( str_contains( $name, 'abolch-settings' ) ) {
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'abolch_admin_script',
				get_template_directory_uri() . '/src/js/admin/admin.js',
				[ 'jquery', 'wp-util' ], '0.1' );

			wp_enqueue_style( 'abolch_admin_style',
				get_template_directory_uri() . '/src/css/admin-style.css',
				[], '0.0.1' );
			wp_enqueue_media();
		}
	}

	public function addAjax() {
		add_action( 'wp_ajax_abolchSaveSettings', [ $this, 'saveSettings' ] );
		#add_action('wp_ajax_nopriv_abolchSaveSettings', [$this, 'ajax']);
	}

	public function saveSettings() {
		if ( ! current_user_can( 'abolch_settings' ) ) {
			wp_send_json_error();
			wp_die();
		}
		if ( $_POST['social'] ) {
			update_option( 'abolch_social_media', $_POST['social'] );
		}
		if ( $_POST['sliders'] ) {
			update_option( 'abolch_sliders', $_POST['sliders'] );
		}

		if ( $_POST['demoToken'] ) {
			update_option( 'abolch_demo_token', $_POST['demoToken'] );
		}
		//agregar codigo de devs
		do_action( 'abolch_save_settings', $_POST['social'], $_POST['demoToken'] );
		wp_send_json_success();
		wp_die();
	}

	private function addOptions() {
		add_option( 'abolch_social_media', [
			[ 'name' => 'Facebook', 'url' => 'https://www.facebook.com/abolch', 'image' => '' ],
			[ 'name' => 'Twitter', 'url' => 'https://twitter.com/abolch', 'image' => '' ],
		], '', true );

		add_option( 'abolch_sliders', [
			[
				'img_src'     => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
				'img_alt'     => 'Prueba',
				'title'       => 'Prueba',
				'description' => 'Prueba',
				'cta_url'     => 'Prueba',
				'cta_text'    => 'Prueba',
			],
			[
				'img_src'     => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',
				'img_alt'     => 'Prueba',
				'title'       => 'Prueba',
				'description' => 'Prueba',
				'cta_url'     => 'Prueba',
				'cta_text'    => 'Prueba',
			],
			[
				'img_src'     => 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',
				'img_alt'     => 'Prueba',
				'title'       => 'Prueba',
				'description' => 'Prueba',
				'cta_url'     => 'Prueba',
				'cta_text'    => 'Prueba',
			],
		], '', true );

		add_option( 'abolch_demo_token', 'abcde' );
	}
}