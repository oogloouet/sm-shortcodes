<?php
function sm_code_insert( $atts, $content = null )
{	
	$atts = (shortcode_atts(array(
			'type' => 'code',
			'content' => !empty($content) ? $content : 'Custom Heading',
		), $atts));
	
	extract($atts);
	/*
	* Code
	*/	
	if ( strtolower( $type ) == 'code')
	{
		$shape .= "<div class = 'sm_code'>$content</div>";
		return $shape;
	}	
}
add_shortcode('code', 'sm_code_insert');
?>