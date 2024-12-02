<?php
/**
 * @package abolch
 */

use Abolch\App\Helpers;
use abolch\App\Loop;

get_header();
$imageUrl = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
?>

<div class="p-80">
    <article class=" max-w-6xl mx-auto text-gray-800 bg-neutral-200 rounded p-5 shadow">
        <header>
            <figure>
                <img src="<?php echo $imageUrl ?>" alt="Sitio"
                     class="rounded-full h-44 w-44 border-gray-200 border-4 shadow mx-auto">
                <figcaption class="flex justify-between items-center py-8">
                    <h1 class="text-2xl font-bold"><?php echo get_the_title() ?></h1>
                    <time class="text-gray-600"><?php echo get_the_date() ?></time>
                </figcaption>
            </figure>
        </header>

        <div class="w-full text-xl md:text-2xl leading-normal"
             style="font-family:Georgia,serif;">

			<?php the_content() ?>

        </div>
    </article>
</div>

<!--   Scroll Top Button  -->
<button class="btn-toggle-round scroll-top js-scroll-top" type="button" title="Scroll to top">
    <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24" height="24"
         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
         stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <line x1="12" y1="5" x2="12" y2="19"/>
        <line x1="18" y1="11" x2="12" y2="5"/>
        <line x1="6" y1="11" x2="12" y2="5"/>
    </svg>
</button>
<div class="bg-gray-200">

    <div class="container w-full max-w-6xl mx-auto px-2 py-8">
        <div class="grid grid-cols-4 gap-5">
			<?php Loop::new( 'testimonial' )
			          ->call( fn() => Helpers::view( 'card-testimonial' ) ); ?>
        </div>
    </div>


</div>

<?php
get_footer();
?>
