<?php
function sm_button_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'title' => 'Title Goes Here',
			'type' => 'round',
			'color' => 'red',
			'order' => '1',
                        'url' => 'http://www.ahmadawais.com',
			'text' => 'Click Here',
			'content' => !empty($content) ? $content : 'Content Goes Here'
		), $atts
	);
	
	extract($atts);	
	$shape = '';
        $text = wp_strip_all_tags($text);
        $content = wp_strip_all_tags($content);
	
	/*
	* Round Buttons Check
	*/

	if ( strtolower( $type ) == 'round' && strtolower( $color ) == 'red' )
	{
		$shape .= "<a class='sm_button_round sm_color1 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'round' && strtolower( $color ) == 'green' )
	{
		$shape .= "<a class='sm_button_round sm_color2 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'round' && strtolower( $color ) == 'purple' )
	{
		$shape .= "<a class='sm_button_round sm_color3 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'round' && strtolower( $color ) == 'blue' )
	{
		$shape .= "<a class='sm_button_round sm_color4 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'round' && strtolower( $color ) == 'yellow' )
	{
		$shape .= "<a class='sm_button_round sm_color5 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}



	/*
	* Sqaure Button Check
	*/
		

	if ( strtolower( $type ) == 'sharp' && strtolower( $color ) == 'red' )
	{
		$shape .= "<a class='sm_button_sharp sm_color1 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'sharp' && strtolower( $color ) == 'green' )
	{
		$shape .= "<a class='sm_button_sharp sm_color2 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'sharp' && strtolower( $color ) == 'purple' )
	{
		$shape .= "<a class='sm_button_sharp sm_color3 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'sharp' && strtolower( $color ) == 'blue' )
	{
		$shape .= "<a class='sm_button_sharp sm_color4 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
	if ( strtolower( $type ) == 'sharp' && strtolower( $color ) == 'yellow' )
	{
		$shape .= "<a class='sm_button_sharp sm_color5 sm_anchor' href='$url' target='_blank'> $content </a>";
		return $shape;
	}
		
	
}
add_shortcode('button', 'sm_button_insert');

?>