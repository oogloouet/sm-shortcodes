<?php
function sm_prompt_insert( $atts )
{
	$atts = shortcode_atts(
			array(
			'id' => 'prompt',
			'title' => 'Title Goes Here',
			'message' => 'Prompt Message',
			'type' => 'left',
			'button_text' => 'Click Me',
            'url'=> 'http://www.ahmadawais.com'
		), $atts
	);
	
	extract($atts);	
	$shape = '';
	$title = wp_strip_all_tags($title);
        $message = wp_strip_all_tags($message);
	
	/*
	* Prompt Check
	*/
	
	if ( strtolower( $type ) == 'left' && strtolower( $id ) == 'prompt' )
	{
		$shape .= "<div class = 'sm_prompt_main_wrapper'>
					<div class='sm_prompt_content'>
						<h2>$title</h2>
						<p>$message</p>
					</div>
					<div class = 'sm_prompt_button'>
					<a href='$url' class = 'sm_prompt_button_text sm_anchor' target='_blank'>$button_text</a>
					</div>
				</div>";
		return $shape;
	}
	if ( strtolower( $type ) == 'right' && strtolower( $id ) == 'prompt' )
	{
		$shape .= "<div class = 'sm_prompt_main_wrapper'>
					<div class = 'sm_prompt_button'>
					<a href='$url' class='sm_prompt_button_text sm_anchor' target='_blank'>$button_text</a>
					</div>
					<div class='sm_prompt_content'>
						<h2>$title</h2>
						<p>$message</p>
					</div>
				</div>";
		return $shape;
	}
	
}
add_shortcode('prompt', 'sm_prompt_insert');

?>