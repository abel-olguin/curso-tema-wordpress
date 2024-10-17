<?php

use Abolch\App\Abolch;
use Abolch\App\Scripts;
use Abolch\App\PostTypes;

require_once(__DIR__ . '/App/Abolch.php');
require_once(__DIR__ . '/App/Scripts.php');
require_once(__DIR__ . '/App/Helpers.php');
require_once(__DIR__ . '/App/PostTypes.php');

new Abolch();
new Scripts();
new PostTypes();