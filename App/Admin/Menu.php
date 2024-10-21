<?php

namespace abolch\App\Admin;

class Menu {
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'adminMenu' ] );
	}

	public function adminMenu() {
		add_menu_page(
			__('Abolch Settings', 'abolch'),
			__('Abolch Settings', 'abolch'),
			'manage_options',
			'abolch-settings',
			[$this, 'adminMainSettingsPage'],
		'dashicons-welcome-view-site',);

		add_submenu_page(
			'abolch-settings',
			__('Abolch Submenu', 'abolch'),
			__('Abolch Submenu', 'abolch'),
			'manage_options',
			'abolch-settings-submenu',
			[$this, 'adminSettingsPage'],
			'dashicons-welcome-view-site',);
	}

	public function adminMainSettingsPage() {
		echo '<h1>Abolch Settings</h1>';
	}

	public function adminSettingsPage() {
		echo '<h1>Abolch Submenu</h1>';
	}
}