<?php
/**
 * @package abolch
 */

?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

<?php if (!is_home() && !is_front_page()): ?>
    <nav class="bg-gray-900 p-4 mt-0 w-full">
        <div class="container mx-auto flex items-center">
            <div class="flex text-white font-extrabold">
                <a class="flex text-white text-base no-underline hover:text-white hover:no-underline" href="#">
                    👻 <span class="hidden w-0 md:w-auto md:block pl-1">Ghostwind CSS</span>
                </a>
            </div>
            <div class="flex pl-4 text-sm">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="mr-2">
                        <a class="inline-block py-2 px-2 text-white no-underline" href="index.html">HOME</a>
                    </li>
                    <li class="mr-2">
                        <a class="inline-block text-indigo-200 no-underline hover:text-gray-100 hover:text-underline py-2 px-2"
                           href="#">LINK</a>
                    </li>
                    <li class="mr-2">
                        <a class="inline-block text-indigo-200 no-underline hover:text-indigo-100 hover:text-underline py-2 px-2"
                           href="#">LINK</a>
                    </li>
                    <li class="mr-2">
                        <a class="inline-block text-indigo-200 no-underline hover:text-indigo-100 hover:text-underline py-2 px-2"
                           href="#">LINK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php endif; ?>
<main id="content" class="site bg-red-100">


