<?php
/**
 * @package abolch
 */

?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-white font-extrabold text-3xl md:text-5xl">
            👻 Ghostwind CSS
        </p>
        <p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
    </div>
</div>

<main id="content" class="site">

