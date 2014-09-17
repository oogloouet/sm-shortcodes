<?php
function sm_heading_insert( $atts, $content = null )
{	

	$atts = (shortcode_atts(array(
			'align'  => 'left',
			'type' => 'heading',
			'content' => !empty($content) ? $content : 'Custom Heading',
		), $atts));
	
	extract($atts);
        $content = wp_strip_all_tags($content);
	/*
	* Custom Heading
	*/	
	if( strtolower( $align ) == 'left' && strtolower( $type ) == 'heading' )
	{
		$shape .= "<div class='sm_custom_heading'>
						<div class='sm_custom_heading_content' sm_custom_heading_left'> $content 
						</div>
					</div>";
		
		return $shape;
	}
	if( strtolower( $align ) == 'right' && strtolower( $type ) == 'heading' )
	{
		$shape .= "<div class='sm_custom_heading'>
						<div class='sm_custom_heading_content sm_custom_heading_right'> $content 
						</div>
					</div>";
		
		return $shape;
	}
	if( strtolower( $align ) == 'center' && strtolower( $type ) == 'heading' )
	{
		$shape .= "<div class='sm_custom_heading'>
						<div class='sm_custom_heading_content sm_custom_heading_center'> $content 
						</div>
					</div>";
		
		return $shape;
	}
}
add_shortcode('heading', 'sm_heading_insert');
?>