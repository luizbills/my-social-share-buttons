<?php

function mssb_get_social_share_url ( $network, $options ) {
	$url = '';

	extract( $options );

	switch ( strtolower( $network ) ) {
		case 'facebook' :
			$url = "https://www.facebook.com/sharer.php?u=${url}";
			break;
		case 'twitter' :
			$url = "https://twitter.com/intent/tweet?url=${url}&text=${post_title}&via=${twitter_username}";
			break;
		case 'google_plus' :
			$url = "https://plus.google.com/share?url=${url}";
			break;
		case 'pinterest' :
			$url = "https://pinterest.com/pin/create/bookmarklet/?url=${url}&description=${post_title}&media=${post_image}";
			break;
		default :
			break;
	}

	return apply_filters( 'mssb_social_share_url', $url, $network, $options );
}

function mssb_get_social_networks () {
	$default_list = [
		'facebook',
		'twitter',
		'google_plus',
		'pinterest'
	];

	return apply_filters( 'mssb_social_networks', $default_list );
}

function mssb_get_network_image ( $network, $options ) {
	$src = MSSB_ASSETS_URL . "images/${network}.svg";
	$size = $options['icon_size'];
	
	return apply_filters( 'mssb_network_image', "<img src='$src' class='mssb-button-image' alt='$network icon' width='$size' height='$size'>" , $network );
}
