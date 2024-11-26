<?php

namespace abolch\App\Admin;

use Abolch\App\Helpers;

class Menu {
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'adminMenu' ] );
	}

	public function adminMenu() {
		add_menu_page(
			__( 'Abolch Settings', 'abolch' ),
			__( 'Abolch Settings', 'abolch' ),
			'abolch_settings',
			'abolch-settings',
			[ $this, 'adminMainSettingsPage' ],
			'dashicons-welcome-view-site', );

		add_submenu_page(
			'abolch-settings',
			__( 'Abolch Submenu', 'abolch' ),
			__( 'Abolch Submenu', 'abolch' ),
			'abolch_settings',
			'abolch-settings-submenu',
			[ $this, 'adminSettingsPage' ],
			'dashicons-welcome-view-site', );
	}

	public function adminMainSettingsPage() {
		$social    = get_option( 'abolch_social_media' );
		$sliders   = get_option( 'abolch_sliders' );
		$demoToken = get_option( 'abolch_demo_token' );
		Helpers::view( 'admin/main', compact( 'social', 'demoToken', 'sliders' ) );
	}

	public function adminSettingsPage() {
		echo '<h1>Abolch Submenu</h1>';
	}
}