<?php

namespace Abolch\App;

class Scripts
{
    private $assetsPath;

    public function __construct()
    {
        $this->assetsPath = get_template_directory_uri() . '/dist';
        if (defined('WP_HOTRELOAD') && WP_HOTRELOAD) {
            $this->assetsPath = 'http://localhost:5173/src';
        }
        add_action('wp_enqueue_scripts', [$this, 'themeScripts']);
        add_filter('script_loader_tag', [$this, 'addModuleAttribute'], 10, 2);
    }

    public function themeScripts(): void
    {
        $this->scripts();
        $this->styles();
    }

    public function addModuleAttribute($tag, $handle)
    {
        if (!in_array($handle, ['abolch_main_script', 'abolch_alpine_script', 'abolch_hot_reload'])) return $tag;
        return str_replace(' src', ' type="module" src', $tag);
    }

    private function styles(): void
    {
        wp_enqueue_style('abolch_main_style', $this->assetsPath . '/css/main-style.css', [], '0.0.1');
    }

    private function scripts(): void
    {
        if (defined('WP_HOTRELOAD') && WP_HOTRELOAD) {
            wp_enqueue_script('abolch_hot_reload', 'http://localhost:5173/@vite/client', [], null);
        }

        wp_enqueue_script('abolch_main_script', $this->assetsPath . '/js/main-script.js', ['jquery'], '0.0.1', true);


        wp_enqueue_script('abolch_alpine_script', $this->assetsPath . '/js/alpine-script.js', ['jquery'], '0.0.1',
            true);
    }
}