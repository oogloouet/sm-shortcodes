<?php
function sm_blockquotes_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'cite' => 'Citation',
			'type' => 'left',
			'content' => !empty($content) ? $content : 'Content Goes Here'
		), $atts
	);
	
	extract($atts);	
	$shape = '';
	$cite = wp_strip_all_tags($cite);
        $content = wp_strip_all_tags($content);
	
	/*
	* Blockquotes
	*/
	
	if ( strtolower( $type ) == 'left' )
	{
		$shape .= "<div class = 'sm_blockquote left_text'> $content ";
		$shape .= "<cite class = 'sm_blockquote_cite' >- $cite</cite></div>";
		return $shape;
	}
	if ( strtolower( $type ) == 'center' )
	{
		$shape .= "<div class = 'sm_blockquote center_text'> $content ";
		$shape .= "<cite class = 'sm_blockquote_cite' >- $cite</cite></div>";
		return $shape;
	}
	if ( strtolower( $type ) == 'right' )
	{
		$shape .= "<div class = 'sm_blockquote right_text'> $content ";
		$shape .= "<cite class = 'sm_blockquote_cite' >- $cite</cite></div>";
		return $shape;
	}
	
}
add_shortcode('blockquotes', 'sm_blockquotes_insert');

?>