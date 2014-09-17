<?php
function sm_highlight_insert( $atts, $content = null )
{	

	$atts = (shortcode_atts(array(
			'theme'  => 'light',
			'type' => 'highlight',
			'content' => !empty($content) ? $content : 'Content Goes Here'
		), $atts));
	
	extract($atts);
        $content = wp_strip_all_tags($content);
	/*
	* Custom Heading
	*/	
	if( strtolower( $type ) == 'highlight' && strtolower( $theme ) == 'light' )
	{
		$shape .= "<mark class = 'sm_highlight_light' >$content</mark	>";
		return $shape;
	}
	if( strtolower( $type ) == 'highlight' && strtolower( $theme ) == 'dark' )
	{
		$shape .= "<mark class = 'sm_highlight_dark' >$content</mark	>";
		return $shape;
	}
}
add_shortcode('highlight', 'sm_highlight_insert');
?>