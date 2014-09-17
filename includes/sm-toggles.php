<?php
	function sm_toggles_main($atts, $content = null) {
	return ('<div id="sm_toggle_tabs">'.do_shortcode($content).'</div>');
	}
	add_shortcode ("toggles", "sm_toggles_main");

	function sm_toggle_inner($atts, $content = null) {
		extract(shortcode_atts(array(
			'title'      => ''
		), $atts));
		
		return ('<h3>' .$title. '</h3><div><div class="sm_toggle_content">' .$content. '</div></div>');
	}
	add_shortcode ("toggle", "sm_toggle_inner");


?>