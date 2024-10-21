<?php

use Abolch\App\Abolch;
use Abolch\App\Scripts;
use Abolch\App\PostTypes;
use Abolch\App\DemoData;

require_once(__DIR__ . '/App/Abolch.php');
require_once(__DIR__ . '/App/Scripts.php');
require_once(__DIR__ . '/App/Helpers.php');
require_once(__DIR__ . '/App/PostTypes.php');
require_once(__DIR__ . '/App/DemoData.php');

new Abolch();
new Scripts();
new PostTypes();
new DemoData();
