<?php
/**
 * @package abolch
 */

get_header();
$imageUrl = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
?>

<!--Title-->
<div class="text-center pt-16 md:pt-32">
    <p class="text-sm md:text-base text-green-500 font-bold uppercase"><?php echo get_the_date( 'd F Y' ) ?> <span
                class="text-gray-900">/</span> GETTING
        STARTED</p>
    <h1 class="font-bold break-normal text-3xl md:text-5xl"><?php echo get_the_title() ?></h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
     style="background-image:url('<?php echo $imageUrl ?>'); height: 75vh;"></div>

<!--Container-->
<div class="container max-w-5xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
             style="font-family:Georgia,serif;">

			<?php the_content() ?>

        </div>


        <!--Subscribe-->
        <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
            <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
            <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts
                delivered right to your inbox</h3>
            <div class="w-full text-center pt-4">
                <form action="#">
                    <div class="max-w-sm mx-auto p-1 pr-0 flex flex-wrap items-center">
                        <input type="email" placeholder="youremail@example.com"
                               class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                        <button type="submit"
                                class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Subscribe-->


        <!--Author-->
        <div class="flex w-full items-center font-sans p-8 md:p-24">
            <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
            <div class="flex-1">
                <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
                <p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a
                            class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500"
                            href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
            </div>
            <div class="justify-end">

            </div>
            <!--/Author-->

        </div>


    </div>

</div>


<!--   Scroll Top Button  -->
<button class="btn-toggle-round scroll-top js-scroll-top" type="button" title="Scroll to top">
    <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24" height="24"
         viewBox="0 0 24 24" stroke-width="1.5" stroke="cuurentColor" fill="none" stroke-linecap="round"
         stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <line x1="12" y1="5" x2="12" y2="19"/>
        <line x1="18" y1="11" x2="12" y2="5"/>
        <line x1="6" y1="11" x2="12" y2="5"/>
    </svg>
</button>

<div class="bg-gray-200">

    <div class="container w-full max-w-6xl mx-auto px-2 py-8">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="#" class="no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/_AjqGGafofE/400x200"
                             class="h-48 w-full rounded-t shadow-lg">
                        <div class="p-6 h-auto md:h-48">
                            <p class="text-gray-600 text-xs md:text-sm">GETTING STARTED</p>
                            <div class="font-bold text-xl text-gray-900">Aperture Science</div>
                            <p class="text-gray-800 font-serif text-base mb-5">
                                I’ll be honest, we’re throwing science at the wall here to see what sticks. No idea what
                                it’ll do. Probably nothing. Best case scenario you might get some super powers. Worst
                                case, some tumors, which we’ll cut out.
                            </p>
                        </div>
                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                 alt="Avatar of Author">
                            <p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="#" class="no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow">
                        <div class="p-6 h-auto md:h-48">
                            <p class="text-gray-600 text-xs md:text-sm">UNDERWATER</p>
                            <div class="font-bold text-xl text-gray-900">Biolumini algae diatomeae ecology.</div>
                            <p class="text-gray-800 font-serif text-base mb-5">
                                Lorem ipsum dolor sit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                 alt="Avatar of Author">
                            <p class="text-gray-600 text-xs md:text-sm">4 MIN READ</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="#" class="no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/DEa8_vxKlEo/400x200" class="h-48 w-full rounded-t shadow">
                        <div class="p-6 h-auto md:h-48">
                            <p class="text-gray-600 text-xs md:text-sm">FOREST</p>
                            <div class="font-bold text-xl text-gray-900">What is life but a teardrop in the eye of
                                infinity?
                            </div>
                            <p class="text-gray-800 font-serif text-base mb-5">
                                Mollis pretium integer eros et dui orci, lectus nec elit sagittis neque. Dignissim ac
                                nullam semper aliquet volutpat, ut scelerisque.
                            </p>
                        </div>
                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                 alt="Avatar of Author">
                            <p class="text-gray-600 text-xs md:text-sm">7 MIN READ</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
get_footer();
?>
