<?php
function sm_dropcap_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'id' => 'dropcap',
			'content' => !empty($content) ? $content : 'Content Goes Here',
		), $atts
	);

	extract($atts);
	$shape = '';
        $content = wp_strip_all_tags($content);

	/*
	* DropCap
	*/

	if ( strtolower( $id ) == 'dropcap' )
	{
		$shape .= "<div class = 'sm_dropcap'>$content</div>";
		return $shape;
	}
}
add_shortcode('dropcap', 'sm_dropcap_insert');

?>