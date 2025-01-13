<?php

use Abolch\App\Abolch;
use abolch\App\CustomFields;
use Abolch\App\DemoData;
use Abolch\App\PostTypes;
use Abolch\App\Scripts;
use Abolch\App\Taxonomies;

require_once( __DIR__ . '/admin-functions.php' );
require_once( __DIR__ . '/App/Abolch.php' );
require_once( __DIR__ . '/App/Scripts.php' );
require_once( __DIR__ . '/App/Helpers.php' );
require_once( __DIR__ . '/App/PostTypes.php' );
require_once( __DIR__ . '/App/CustomFields.php' );
require_once( __DIR__ . '/App/DemoData.php' );
require_once( __DIR__ . '/App/Loop.php' );
require_once( __DIR__ . '/App/Taxonomies.php' );

new Abolch();
new Scripts();
new PostTypes();
new CustomFields();
new DemoData();
new Taxonomies();


add_filter( 'posts_where', 'search_where' );

function search_where( $where ) {
	global $wpdb;
	if ( is_search() ) {
		$where .= " OR ({$wpdb->terms}.name LIKE '%" . get_search_query() . "%'
		 AND {$wpdb->term_taxonomy}.taxonomy IN ('grupo') AND {$wpdb->posts}.post_status ='publish')";
	}

	return $where;
}

add_filter( 'posts_join', 'search_join' );
function search_join( $join ) {
	global $wpdb;
	$relations = $wpdb->term_relationships;
	$taxonomy  = $wpdb->term_taxonomy;

	if ( is_search() ) {
		$join .= " LEFT JOIN {$relations} ON {$wpdb->posts}.ID = {$relations}.object_id
		 INNER JOIN {$taxonomy} ON {$taxonomy}.term_taxonomy_id = {$relations}.term_taxonomy_id
		 INNER JOIN {$wpdb->terms} ON {$wpdb->terms}.term_id = {$taxonomy}.term_id";
	}

	return $join;
}

add_filter( 'posts_groupby', 'search_groupby' );
function search_groupby( $groupby ) {
	global $wpdb;
	$groupby_id = "{$wpdb->posts}.ID";

	if ( ! is_search() || strpos( $groupby, $groupby_id ) !== false ) {
		return $groupby;
	}

	if ( ! strlen( trim( $groupby ) ) ) {
		return $groupby_id;
	}

	return "{$groupby},{$groupby_id}";
}