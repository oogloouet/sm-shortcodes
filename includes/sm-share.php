<?php
function sm_share_insert( $atts, $content = null )
{
	$atts = shortcode_atts(
			array(
			'title' => 'Share This Post',
			'facebook' => 'http://www.facebook.com',
			'twitter' => 'http://www.twitter.com',
			'linkedin' => 'http://www.linkedin.com',
			'fbcheck'=> 'true',
			'twittercheck'=> 'true',
			'incheck'=> 'true'
		), $atts
	);
	
	extract($atts);	
	$shape = '';
	
	
	/*
	* Share Check
	*/
	
	if ( strtolower( $fbcheck ) == 'true' && strtolower( $twittercheck ) == 'true' && strtolower( $incheck ) == 'true' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div class='sm_social_wrapper'>
                            <div class='sm_social'>
                                <a href='$facebook'><i class='fa fa-facebook sm_fonts_awesome'></i></a>
                            </div>
                            <div class='sm_social'>
                                <a href='$twitter'><i class='fa fa-twitter sm_fonts_awesome'></i></a>
                            </div>
                            <div class='sm_social'>
                                <a href='$linkedin'><i class='fa fa-linkedin sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
	if ( strtolower( $fbcheck ) == 'true' && strtolower( $twittercheck ) == 'true' && strtolower( $incheck ) == 'false' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div class='sm_social_wrapper'>
                            <div class='sm_social'>
                                <a href='$facebook'><i class='fa fa-facebook sm_fonts_awesome'></i></a>
                            </div>
                            <div class='sm_social'>
                                <a href='$twitter'><i class='fa fa-twitter sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
	if ( strtolower( $fbcheck ) == 'true' && strtolower( $twittercheck ) == 'false' && strtolower( $incheck ) == 'true' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div class='sm_social_wrapper'>
                            <div class='sm_social'>
                                <a href='$facebook'><i class='fa fa-facebook sm_fonts_awesome'></i></a>
                            </div>
                            <div class='sm_social'>
                                <a href='$linkedin'><i class='fa fa-linkedin sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
	if ( strtolower( $fbcheck ) == 'false' && strtolower( $twittercheck ) == 'true' && strtolower( $incheck ) == 'true' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div>
                            <div class='sm_social'>
                                <a href='$twitter'><i class='fa fa-twitter sm_fonts_awesome'></i></a>
                            </div>
                            <div class='sm_social'>
                                <a href='$linkedin'><i class='fa fa-linkedin sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
	if ( strtolower( $fbcheck ) == 'true' && strtolower( $twittercheck ) == 'false' && strtolower( $incheck ) == 'false' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div>
                            <div class='sm_social'>
                                <a href='$facebook'><i class='fa fa-facebook sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
	if ( strtolower( $fbcheck ) == 'false' && strtolower( $twittercheck ) == 'true' && strtolower( $incheck ) == 'false' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div>
                            <div class='sm_social'>
                                <a href='$twitter'><i class='fa fa-twitter sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
	if ( strtolower( $fbcheck ) == 'false' && strtolower( $twittercheck ) == 'false' && strtolower( $incheck ) == 'true' )
	{
		$shape .= "<div id='sm_main_share'>
                        <p>$title</p>
                        <div>
                            <div class='sm_social'>
                                <a href='$linkedin'><i class='fa fa-linkedin sm_fonts_awesome'></i></a>
                            </div>
                        </div>
                    </div>";
		return $shape;
	}
		if ( strtolower( $fbcheck ) == 'false' && strtolower( $twittercheck ) == 'false' && strtolower( $incheck ) == 'false' )
	{
		$shape .= " ";
		return $shape;
	}
	
}
add_shortcode('share', 'sm_share_insert');

?>