<?php

namespace Abolch\App;

class Abolch {
	private $assetsPath;

	public function __construct() {
		$this->assetsPath = get_template_directory_uri().'/dist';
		if(WP_HOTRELOAD){
			$this->assetsPath = 'http://localhost:5173/src';
		}
		add_action('wp_enqueue_scripts', [$this, 'themeScripts']);
		add_action('after_setup_theme', [$this, 'supports']);
		add_action('after_setup_theme', [$this, 'menu']);
	}

	public function themeScripts(  ): void {
		$this->scripts();
		$this->styles();
	}

	private function styles(  ): void {
		wp_enqueue_style('abolch_main_style', $this->assetsPath. '/css/main-style.css', [], '0.0.1');
	}

	private function scripts(  ): void {
		wp_enqueue_script('abolch_main_script', $this->assetsPath . '/js/main-script.js', ['jquery'], '0.0.1');
	}

	public function supports(): void {
		add_theme_support('widgets');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-background');
		add_theme_support('html5', [
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		]);
	}

	public function menu(  ) {
		register_nav_menus([
			'primary' => __('Primary Menu', 'abolch'),
			'footer'  => __('Footer Menu', 'abolch')
		]);
	}
}