<?php
function sm_progress_bar_insert( $atts )
{
	$atts = shortcode_atts(
			array(
			'id' => 'progress_bar',
			'heading' => 'Title Goes Here',
			'percentage' => '50%',
			'style' => 'background-color:#ff2a13',
		), $atts
	);

	extract($atts);
	$shape = '';
        $heading = wp_strip_all_tags($heading);


	/*
	* Progress Bar
	*/

	if ( strtolower( $id ) == 'progress_bar' )
	{
		$shape .= "<div class = 'sm_progress_heading'>$heading</div>
					<div class = 'sm_progress_main_wrapper'>
						<div class='sm_progress_bar' style='width:$percentage;$style;'>	
							<div class = 'sm_progress_percent'>
							$percentage
							</div>
						</div>
					</div>";
		return $shape;
	}
}
add_shortcode('progress_bar', 'sm_progress_bar_insert');

?>