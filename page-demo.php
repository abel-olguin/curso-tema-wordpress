<?php
/**
 * @package abolch
 */

use Abolch\App\Helpers;

get_header();
?>
	<div class="py-8">
		<?php sendEmail() ?>
	</div>
<?php
get_footer();