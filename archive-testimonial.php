<?php
/**
 * @package abolch
 */


use Abolch\App\Helpers;

get_header();
?>
    <div class="container p-4 md:px-0 max-w-6xl mx-auto">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
			<?php echo post_type_archive_title( '', false ) ?>
        </h2>

		<?php if ( have_posts() ): ?>
            <div class="grid grid-cols-2 mb-8 ">
				<?php while ( have_posts() ): the_post(); ?>
					<?php Helpers::view( 'card-testimonial' ); ?>
				<?php endwhile; ?>
            </div>

            <div class="nav-previous alignleft">
				<?php previous_posts_link( __( 'Older posts', 'abolch' ) ); ?>
            </div>
            <div class="nav-next alignright">
				<?php next_posts_link( __( 'Newer posts', 'abolch' ) ); ?>
            </div>

		<?php else: ?>
            <p><?php __( 'No posts found', 'abolch' ); ?></p>
		<?php endif; ?>

    </div>
<?php
get_footer();