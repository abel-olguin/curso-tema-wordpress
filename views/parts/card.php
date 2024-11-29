<div class="w-full p-6 flex flex-col flex-grow flex-shrink">
    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
        <a href="<?php echo get_the_permalink() ?>" class="flex flex-wrap no-underline hover:no-underline ">
			<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'h-48 object-cover' ] ); ?>
            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
            <div class="w-full font-bold text-xl text-gray-900 px-6"><?php the_title( '<h2>', '</h2>' ) ?> </div>
            <p class="text-gray-800 font-serif text-base px-6 mb-5">
				<?php echo get_the_excerpt(); ?>
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