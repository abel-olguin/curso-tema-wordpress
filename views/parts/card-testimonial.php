<figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r ">
    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 ">
		<?php echo apply_filters( 'the_content', get_the_content() ); ?>
    </blockquote>
    <figcaption class="flex justify-center items-center space-x-3">
		<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'w-9 h-9 object-cover rounded-full' ] ); ?>
        <div class="space-y-0.5 font-medium text-left">
            <div><?php echo get_the_title() ?></div>
            <div class="text-sm font-light text-gray-500"></div>
        </div>
    </figcaption>
</figure>
