<?php

use Abolch\App\Abolch;
use abolch\App\CustomFields;
use Abolch\App\DemoData;
use Abolch\App\Helpers;
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


#plugin
function sendEmail() {
	$message = apply_filters( 'abolch_email_message', 'has invited you to join the team ', 'Alicia' );
	$subject = apply_filters( 'abolch_email_subject', 'Welcome to abolch', );
	Helpers::view( 'email', compact( 'subject', 'message' ) );
}

/*

#archivo dentro de un plugin
function hola1($social, $token){
	echo 1;
}

function hola2($social, $token){
	echo 2;
}

add_action('abolch_save_settings', 'hola1', 10, 2);
add_action('abolch_save_settings','hola2', 10, 2);

#fuera del plugin
remove_action('abolch_save_settings', 'hola1', 10, 2);
*/


#function
add_filter( 'abolch_email_subject', function ( $subject ) {
	return " Hola1";
} );

add_filter( 'abolch_email_message', function ( $message, $name ) {
	return $message . "<h1 class='text-white'>" . $name . "</h1>";
}, 10, 2 );
