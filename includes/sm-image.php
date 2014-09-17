<?php
function sm_img_insert( $atts )
{
	$atts = shortcode_atts(
			array(
			'id' => '1',
			'title' => 'Title Goes Here',
			'type' => 'round',
                        'width' => '100px',
                        'height' => '100px',
			'alt' => 'Alt text for image',
			'src' => !empty ($src) ? $src : 'https://www.google.com.pk/search?q=google+images&rlz=1C1CHMO_en-GBPK593PK602&espv=2&source=lnms&tbm=isch&sa=X&ei=3dj0U6XCIsLXyQOCxYCwDg&ved=0CAYQ_AUoAQ&biw=1366&bih=643#q=wordpress&tbm=isch&facrc=_&imgdii=_&imgrc=3KtV-Txa48FXyM%253A%3B8cNLBLi84VHiKM%3Bhttp%253A%252F%252Fcloudproxy.sucuri.net%252Fimages%252Fwordpress.jpg%3Bhttp%253A%252F%252Fcloudproxy.sucuri.net%252Fwordpress%3B1800%3B600',
		), $atts
	);
	
	extract($atts);	
	$shape = '';
	
	
	/*
	* Alerts Check
	*/
	
	if ( strtolower( $type ) == 'round' && strtolower( $id ) == '1' )
	{
		$shape .= "<div class='sm_img_round'>
        <img src='$src' style='height:$height; width:$width; border-radius:1rem; margin:5rem auto;' alt = '$alt' title='$title' />
        </div>";
		return $shape;
	}
	if ( strtolower( $type ) == 'circle' && strtolower( $id ) == '1' )
	{
		$shape .= "<div class='sm_img_circle'>
        <img src='$src' alt = '$alt' style='height:$height; width:$width; border-radius:500rem; margin:5rem auto;' title='$title' />
        </div>";
		return $shape;
	}
	if ( strtolower( $type ) == 'thumbnail' && strtolower( $id ) == '1' )
	{
		$shape .= "<div class='sm_img_thumbnail'>
        <img src='$src' style='height:$height; width:$width; border-radius:0.2rem; margin:5rem auto;' alt = '$alt' title='$title' />
        </div>";
		return $shape;
	}
	
}
add_shortcode('image', 'sm_img_insert');

?>