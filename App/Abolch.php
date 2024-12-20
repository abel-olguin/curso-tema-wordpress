<?php

namespace Abolch\App;

class Abolch
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'supports']);
        add_action('after_setup_theme', [$this, 'menu']);
        add_action('after_switch_theme', [$this, 'capabilities']);
        add_action('after_switch_theme', [$this, 'roles']);
    }

    public function supports(): void
    {
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

    public function menu()
    {
        register_nav_menus([
            'primary' => __('Primary Menu', 'abolch'),
            'footer'  => __('Footer Menu', 'abolch')
        ]);
    }

	public function capabilities(): void{
		$admin = get_role('administrator');
		$editor = get_role('editor');
		$admin->add_cap('abolch_settings');
		$editor->add_cap('abolch_settings');
	}

	public function roles(): void{
		#remove_role('moderator');
		add_role('moderator', __('Moderator', 'abolch'), [
			...get_role('editor')->capabilities,
			'abolch_settings' => true
		]);
		#get_role('moderator')->add_cap('abolch_settings');
		#get_role('moderator')->remove_cap('abolch_settings');
	}
}