<?php
function sm_alert_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'title' => 'Title Goes Here',
			'type' => 'round',
			'color' => 'red',
			'order' => '1',
			'text' => 'Click Here',
			'content' => !empty($content) ? $content : 'Content Goes Here'
		), $atts
	);
	
	extract($atts);	
	$shape = '';
	$content = wp_strip_all_tags($content);
	
	/*
	* Alerts Check
	*/
	
	if ( strtolower( $type ) == 'alerts' && strtolower( $color ) == 'red' )
	{
		$shape .= "<p class='sm_alerts sm_color1'> $content </p>";
		return $shape;
	}
	if ( strtolower( $type ) == 'alerts' && strtolower( $color ) == 'green' )
	{
		$shape .= "<p class='sm_alerts sm_color2'> $content </p>";
		return $shape;
	}
	if ( strtolower( $type ) == 'alerts' && strtolower( $color ) == 'purple' )
	{
		$shape .= "<p class='sm_alerts sm_color3'> $content </p>";
		return $shape;
	}
	if ( strtolower( $type ) == 'alerts' && strtolower( $color ) == 'blue' )
	{
		$shape .= "<p class='sm_alerts sm_color4'> $content </p>";
		return $shape;
	}
	if ( strtolower( $type ) == 'alerts' && strtolower( $color ) == 'yellow' )
	{
		$shape .= "<p class='sm_alerts sm_color5'> $content </p>";
		return $shape;
	}
	
}
add_shortcode('alert', 'sm_alert_insert');

?>