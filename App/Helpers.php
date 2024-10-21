<?php

namespace Abolch\App;

class Helpers
{
    public static function view($view, $params = [])
    {
        echo self::getView($view, $params);
    }

    public static function getView(string $view, array $params = [])
    {
        ob_start();
        get_template_part("views/parts/{$view}", null, $params);
        $content = ob_get_contents();
        ob_clean();

        return $content;
    }

    public static function getPostByName($slug, $type = 'post')
    {
        $posts = get_posts([
            'post_type' => $type,
            'post_name' => $slug,
            'numberposts' => 1,
            'fields' => 'ids'
        ]);

        return array_shift($posts);
    }
    public static function labels(string $singular, string $plural){
        return [
            "name"                  => _x( ucfirst($plural), "Post type general name", "abolch" ),
            "singular_name"         => _x( ucfirst($singular), "Post type singular name", "abolch" ),
            "menu_name"             => _x( ucfirst($plural), "Admin Menu text", "abolch" ),
            "name_admin_bar"        => _x( ucfirst($singular), "Add New on Toolbar", "abolch" ),
            "add_new"               => __( "Add New", "abolch" ),
            "add_new_item"          => __( "Add New {$singular}", "abolch" ),
            "new_item"              => __( "New {$singular}", "abolch" ),
            "edit_item"             => __( "Edit {$singular}", "abolch" ),
            "view_item"             => __( "View {$singular}", "abolch" ),
            "all_items"             => __( "All {$plural}", "abolch" ),
            "search_items"          => __( "Search {$plural}", "abolch" ),
            "parent_item_colon"     => __( "Parent {$plural}:", "abolch" ),
            "not_found"             => __( "No {$plural} found.", "abolch" ),
            "not_found_in_trash"    => __( "No {$plural} found in Trash.", "abolch" ),
            "featured_image"        => _x( ucfirst($singular)." Cover Image", "Overrides the “Featured Image” phrase for this post type. Added in 4.3", "abolch" ),
            "set_featured_image"    => _x( "Set cover image", "Overrides the “Set featured image” phrase for this post type. Added in 4.3", "abolch" ),
            "remove_featured_image" => _x( "Remove cover image", "Overrides the “Remove featured image” phrase for this post type. Added in 4.3", "abolch" ),
            "use_featured_image"    => _x( "Use as cover image", "Overrides the “Use as featured image” phrase for this post type. Added in 4.3", "abolch" ),
            "archives"              => _x( ucfirst($singular)." archives", "The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4", "abolch" ),
            "insert_into_item"      => _x( "Insert into recipe", "Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4", "abolch" ),
            "uploaded_to_this_item" => _x( "Uploaded to this {$singular}", "Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4", "abolch" ),
            "filter_items_list"     => _x( "Filter recipes list", "Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4", "abolch" ),
            "items_list_navigation" => _x( "{$plural} list navigation", "Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4", "abolch" ),
            "items_list"            => _x( "{$plural} list", "Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4", "abolch" ),

        ];
    }
}