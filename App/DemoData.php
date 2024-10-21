<?php

namespace abolch\App;

class DemoData
{
    public function __construct()
    {
        add_action('after_switch_theme', [$this, 'demoData']);
    }

    public function demoData()
    {
        $my_post = [
            'post_title'    => 'Demo',
            'post_content'  => 'Demo content',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
        ];
        if(!Helpers::getPostByName('demo', 'page')){
            wp_insert_post( $my_post );
        }
    }
}