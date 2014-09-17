<?php
	function sm_tab( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'title'  => '',
                        'link'   => '' ,
                        'target' => ''
		), $atts));
		global $single_tab_array;
		$single_tab_array[] = array('title' => $title, 'link' => $link, 'content' => trim(do_shortcode($content)));
		return $single_tab_array;
	}
	add_shortcode('tab', 'sm_tab');

	function sm_tabs( $atts, $content = null ) {
		global $single_tab_array;
		$single_tab_array = array(); 
		
		$tabs_nav = '';
		$tabs_content = '';
		$tabs_output = '';
	 
		$tabs_nav = '<div class="sm_tab_wrapper">';
		$tabs_nav .= '<ul class="sm_tab_ul">';
	
		do_shortcode($content);
	
		foreach ($single_tab_array as $tab => $tab_attr_array) {
			
			$default = ( $tab == 0 ) ? ' class="active"' : '';
			
		  if($tab_attr_array['link'] != ""){
			$tabs_nav .= '<li'.$default.'><a class="sm_tab_link" href="' . $tab_attr_array["link"] . '" target="' . $tab_attr_array["target"] . '"><span>'.$tab_attr_array['title'].'</span></a></li>';
		  }else{
			$tabs_nav .= '<li'.$default.'><a href="javascript:void(0)" rel="tab'.$random_id.'"><span>'.$tab_attr_array['title'].'</span></a></li>';
			$tabs_content .= '<div class="sm_tab_content" id="tab' . $random_id . '" ' . ( $tab!=0 ? 'style="display:none"' : '') . '>'.$tab_attr_array['content'].'</div>';
		  }
		}
		$tabs_nav .= '</ul>';
		
		$tabs_output = $tabs_nav . '<div class="tab_content_wrapper">' . $tabs_content . '</div>';
		$tabs_output .= '</div>';

		return $tabs_output;
	}
	add_shortcode('tabs', 'sm_tabs');
?>