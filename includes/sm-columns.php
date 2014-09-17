<?php
function sm_column_insert( $atts, $content = null )
{	

	$atts = (shortcode_atts(array(
			'type'  => 'fullwidth',
			'id' => 'column',
			'last' => 'false',
			'title' => 'heading',
			'content' => !empty($content) ? $content : 'Content Goes Here'
		), $atts));
	
	extract($atts);
	$title = wp_strip_all_tags($title);
        $content = wp_strip_all_tags($content);
        /*
	* Columns
	*/	
	if ( $last == 'true' )
	{
		$last_class = 'sm_last';
	}
	else
	{
		$last_class = '';
	}
	if( strtolower( $type ) == 'fullwidth' && strtolower( $id ) == 'column' )
	{
		$shape .= "<div class = 'sm_full_width'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( strtolower( $type ) == 'one_half' && strtolower( $id ) == 'column' )
	{
		$shape .= "<div class = 'sm_one_half $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( strtolower( $type ) == 'one_third' && strtolower( $id ) == 'column' )
	{
		$shape .= "<div class = 'sm_one_third $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( strtolower( $type ) == 'one_fourth' && strtolower( $id ) == 'column' )
	{
		$shape .= "<div class = 'sm_one_fourth $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( strtolower( $type ) == 'one_fifth' && strtolower( $id ) == 'column' )
	{
		$shape .= "<div class = 'sm_one_fifth $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( strtolower( $type ) == 'two_third' && strtolower( $id ) == 'column' )
	{
		$shape .= "<div class = '";
		 
		if( $type == 'two_third'){
			$class = 'sm_two_third';
		}
		else{
			$class = 'sm_one_third';
		}
			
		$shape .= "$class $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( ( strtolower( $type ) == 'three_fourth' ) || ( strtolower( $type ) == 'one_fourth' ) && (strtolower($id) == 'column' ))
	{
		$shape .= "<div class = '";
			
		if( $type == 'three_fourth'){
			$class = 'sm_three_fourth';
		}
		else{
			$class = 'sm_one_fourth';
		}	
		$shape .= "$class $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( ( strtolower( $type ) == 'two_fifth' ) || ( strtolower( $type ) == 'three_fifth' )  && (strtolower( $id ) == 'column' ))
	{
		$shape .= "<div class = '";
			
		if( $type == 'two_fifth'){
			$class = 'sm_two_fifth';
		}
		else{
			$class = 'sm_three_fifth';
		}
			
		$shape .= "$class $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
	if( ( strtolower( $type ) == 'four_fifth' ) || ( strtolower( $type ) == 'one_fifth' )  && (strtolower( $id ) == 'column' ))
	{
		$shape .= "<div class = '";
			
		if( $type == 'four_fifth'){
			$class = 'sm_four_fifth';
		}
		else{
			$class = 'sm_one_fifth';
		}
			
		$shape .= "$class $last_class'>
						<h2>$title</h2>
						<p>$content</p>
					</div>";
		return $shape;
	}
}
add_shortcode('column', 'sm_column_insert');
?>