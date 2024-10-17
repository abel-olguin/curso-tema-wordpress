<?php

namespace abolch\App;

class PostTypes
{
    public function __construct()
    {
        add_action('init', [$this, 'registerPostTypes']);
    }

    public function registerPostTypes(){
        $args = [
            'labels'             => Helpers::labels('testimonial', 'testimonials'),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => ['slug' => 'testimonial'],
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title', 'author', 'thumbnail', 'excerpt'],
        ];

        register_post_type( 'testimonial', $args );
    }
}