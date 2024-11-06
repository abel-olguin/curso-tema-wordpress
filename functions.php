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

function ejemplo($arg1, $arg2 = null) {
	die('hola');
}
add_action('abolch_save_settings','ejemplo', 10, 2);

remove_action('abolch_save_settings','ejemplo', 10, 2);
