<?php

use Abolch\App\Abolch;
use abolch\App\CustomFields;
use Abolch\App\Scripts;
use Abolch\App\PostTypes;
use Abolch\App\DemoData;

require_once(__DIR__ . '/admin-functions.php');
require_once(__DIR__ . '/App/Abolch.php');
require_once(__DIR__ . '/App/Loop.php');
require_once(__DIR__ . '/App/Scripts.php');
require_once(__DIR__ . '/App/Helpers.php');
require_once(__DIR__ . '/App/PostTypes.php');
require_once(__DIR__ . '/App/CustomFields.php');
require_once(__DIR__ . '/App/DemoData.php');

new Abolch();
new Scripts();
new PostTypes();
new CustomFields();
new DemoData();



/*
 \abolch\App\Loop::new()
	->postType('testimonial')
	->call(fn() => \Abolch\App\Helpers::view('card'));
*/


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
