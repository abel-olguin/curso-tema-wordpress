<?php

namespace Abolch\App;

class Abolch
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'supports']);
        add_action('after_setup_theme', [$this, 'menu']);
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


}