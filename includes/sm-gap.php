<?php
function sm_gap_insert( $atts )
{	

	$atts = (shortcode_atts(array(
			'size'  => '100px',
			'type' => 'gap' 
		), $atts));
	
	extract($atts);
	/*
	* Custom Heading
	*/	
	if( strtolower( $type ) == 'gap' )
	{
		$shape .= "<div style='margin: $size 0 0 0;' ></div>";
		
		return $shape;
	}
}
add_shortcode('gap', 'sm_gap_insert');
?>