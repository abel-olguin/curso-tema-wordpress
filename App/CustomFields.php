<?php

namespace abolch\App;

class CustomFields {
	public function __construct() {
		add_action('add_meta_boxes_testimonial', [$this, 'addMetaBoxesTestimonial']);
		add_action('save_post_testimonial', [$this, 'savePostTestimonial'], 10, 1);
		add_action('publish_testimonial', [$this, 'savePostTestimonial'], 10, 1);
	}

	public function addMetaBoxesTestimonial() {
		add_meta_box('score', __('Score', 'abolch'), [$this, 'metaBoxTestimonialRender'], 'testimonial', 'side');
	}

	public function metaBoxTestimonialRender() {
		global $post;
		$score = get_post_meta($post->ID, 'score', true);
		echo "<select name='score' id='score'>
			<option value='1' ".($score == 1?'selected':'').">1</option>
			<option value='2' ".($score == 2?'selected':'').">2</option>
			<option value='3' ".($score == 3?'selected':'').">3</option>
			<option value='4' ".($score == 4?'selected':'').">4</option>
			<option value='5' ".($score == 5?'selected':'').">5</option>
			</select>";
	}

	public function savePostTestimonial($postId) {
		if(isset($_POST['save']) || isset($_POST['publish'])){
			$value = isset($_POST['score']) ? $_POST['score'] : 0;
			update_post_meta($postId, 'score', $value);
		}
	}
}