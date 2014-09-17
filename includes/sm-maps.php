<?php
function sm_map_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'id' => 'map',
			'src' => 'https://www.google.com/maps/place/Worwox+Group+of+Agencies/@31.4627701,74.38875,15z/data=!4m2!3m1!1s0x39190613a72bbbef:0x5a3c493dfd222380'
		), $atts
	);

	extract($atts);
	$shape = '';


	/*
	* Maps
	*/

	if ( strtolower( $id ) == 'map' )
	{
		$shape .= "<div class = 'sm_map_main_wrapper'>
                            <iframe src='$src' width='600' height='450' frameborder='0' style='border:0'></iframe>
                          </div>";
		return $shape;
	}
}
add_shortcode('map', 'sm_map_insert');

?>