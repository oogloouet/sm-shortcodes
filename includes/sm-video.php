<?php
function sm_video_insert( $atts )
{
	$atts = shortcode_atts(
			array(
			'id' => 'private',
			'type' => 'youtube',
                        'width' => '500px',
                        'height' => '500px'
		), $atts
	);

	extract($atts);
	$shape = '';
        
        /*
	* Video
	*/

	if ( strtolower( $type ) == 'youtube' )
        {
            $shape .= "<div class = 'sm_video_main_wrapper'>
                            <iframe src='http://www.youtube.com/embed/$id' frameborder='0' style='border:0; width:$width;height:$height;'></iframe>
                        </div>";
            return $shape;
        }
        if ( strtolower( $type ) == 'vimeo' )
        {
            $shape .= "<div class = 'sm_video_main_wrapper'>
                            <iframe src='//player.vimeo.com/video/$id' frameborder='0' style='border:0; width:$width;height:$height;'></iframe>
                        </div>";
            return $shape;
        }                    
}
add_shortcode('video', 'sm_video_insert');

?>