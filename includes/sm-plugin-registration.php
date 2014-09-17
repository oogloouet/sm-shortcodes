<?php
 add_action('admin_head', 'sm_shortcode_buttons');
 
 
 function sm_shortcode_buttons(){
	
	global $typenow;
	
	if( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ))
	{
		return;
	}
	
	if ( !in_array( $typenow, array( 'post', 'page' )))
	{
		return;
	}
	
	if( get_user_option('rich_editing') == 'true' )
	{
		add_filter('mce_external_plugins', 'sm_add_plugin');
		add_filter('mce_buttons', 'sm_register_button');
		
	}
	
 }
 
function sm_add_plugin($plugin_array)
{
	$plugin_array['sm_button'] = plugin_dir_url(__FILE__) . '../js/sm-custom.js';
	return $plugin_array;
}

function sm_register_button($buttons)
{
	array_push($buttons, 'sm_button');
	return $buttons;
}
?>