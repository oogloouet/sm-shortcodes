<?php
function sm_line_insert( $atts )
{	

	$atts = (shortcode_atts(array(
			'id' => 'line',
		), $atts));
	
	extract($atts);
	/*
	* Custom Heading
	*/	
	if( strtolower( $id ) == 'line' )
	{
		$shape .= "<hr class = 'sm_line' />";
		return $shape;
	}
}
add_shortcode('line', 'sm_line_insert');
?>