<?php
/**
 * @package abolch
 */

use Abolch\App\Helpers;

$sliders = get_option( 'abolch_sliders' );
get_header();
?>
    <div class="w-full m-0 p-0 bg-cover bg-bottom
         style=" background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-white font-extrabold text-3xl md:text-5xl">
            👻 Ghostwind CSS
        </p>
        <p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
    </div>
    </div>

    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <!--Nav-->
        <nav class="mt-0 w-full">
            <div class="container mx-auto flex items-center">
				<?php wp_nav_menu( [ 'menu' => 'primary' ] ) ?>

                <div class="flex w-1/2 justify-end content-center">
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
                        </svg>
                    </a>
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </nav>

        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

            <!--Lead Card-->
            <div>
                <div x-data='sliderData(<?php echo json_encode( $sliders ) ?>)' class="relative w-full overflow-hidden">

                    <!-- previous button -->
                    <button type="button"
                            class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
                            aria-label="previous slide" x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                             stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                            class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
                            aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                             stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    </button>

                    <!-- slides -->
                    <!-- Change aspect-[3/1] to match your images aspect ratio -->
                    <div class="relative aspect-[3/1] w-full">
                        <template x-for="(slide, index) in slides">
                            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                                 x-transition.opacity.duration.700ms>
                                <!-- Title and description -->
                                <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-neutral-950/85 to-transparent px-16 py-12 text-center">
                                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                        x-text="slide.title"
                                        x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                    <p class="lg:w-1/2 w-full text-pretty text-sm text-neutral-300"
                                       x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                                    <button type="button" x-cloak x-show="slide.cta_url !== null"
                                            class="mt-2 cursor-pointer whitespace-nowrap rounded-md border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm"
                                            x-text="slide.cta_text"></button>
                                </div>

                                <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300"
                                     x-bind:src="slide.img_src" x-bind:alt="slide.img_alt"/>

                            </div>
                        </template>
                    </div>
                    <!-- Pause/Play Button -->
                    <button type="button"
                            class="absolute bottom-5 right-5 z-20 rounded-full text-neutral-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0"
                            aria-label="pause carousel"
                            x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)"
                            x-bind:aria-pressed="isPaused">
                        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true" class="size-7">
                            <path fill-rule="evenodd"
                                  d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z"
                                  clip-rule="evenodd">
                        </svg>
                        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true" class="size-7">
                            <path fill-rule="evenodd"
                                  d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z"
                                  clip-rule="evenodd">
                        </svg>
                    </button>

                    <!-- indicators -->
                    <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-white/75 px-1.5 py-1 md:px-2 dark:bg-neutral-950/75"
                         role="group" aria-label="slides">
                        <template x-for="(slide, index) in slides">
                            <button class="size-2 cursor-pointer rounded-full transition bg-neutral-600 dark:bg-neutral-300"
                                    x-on:click="currentSlideIndex = index + 1"
                                    x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-600 dark:bg-neutral-300' : 'bg-neutral-600/50 dark:bg-neutral-300/50']"
                                    x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
                <!--/Lead Card-->


                <!--Posts Container-->
                <div class="flex flex-wrap justify-between pt-12 -mx-6">
					<?php if ( have_posts() ): ?>
						<?php while ( have_posts() ): the_post(); ?>
							<?php Helpers::view( 'card' ); ?>
						<?php endwhile; ?>
					<?php endif; ?>

                    <!--1/2 col -->
                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/3657445/800x600"
                                     class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name"
                                     src="http://i.pravatar.cc/300" alt="Avatar of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <!--1/2 col -->
                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/764827/800x600"
                                     class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name"
                                     src="http://i.pravatar.cc/300" alt="Avatar of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>


                    <!--2/3 col -->
                    <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/325867/800x600"
                                     class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name"
                                     src="http://i.pravatar.cc/300" alt="Avatar of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/1118905/800x600"
                                     class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name"
                                     src="http://i.pravatar.cc/300" alt="Avatar of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/ Post Content-->

            </div>


            <!--Subscribe-->
            <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
                <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
                <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts
                    delivered right to your inbox</h3>
                <div class="w-full text-center pt-4">
                    <form action="#">
                        <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
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
                    <a href="post.html"
                       class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read
                        More</a>
                </div>
            </div>
            <!--/Author-->

        </div>


    </div>
<?php
get_footer();