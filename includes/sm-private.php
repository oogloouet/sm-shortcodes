<?php
function sm_private_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'id' => 'private',
			'content' => !empty($content) ? $content : 'Private Text Goes Here',
		), $atts
	);

	extract($atts);
	$shape = '';
        $content = wp_strip_all_tags($content);


	/*
	* Private
	*/

	if ( strtolower( $id ) == 'private' )
	
            if (is_user_logged_in())
            {
                $shape .= "<div class = 'sm_private'>$content</div>";
                return $shape;
            }
            else
            {
                $shape = '';
                return $shape;   
            }
                    
}
add_shortcode('private', 'sm_private_insert');

?>