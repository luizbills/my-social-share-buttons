<?php

function mssb_render_buttons ( $options = [] ) {
	global $post;

	$options = shortcode_atts( [
		'ID' => $post->ID
	], $options );

	$options['text_before'] = __( 'Share:', 'mssb' );
	$options['post_title'] = get_the_title( $options['ID'] );
	$options['url'] = get_the_permalink( $options['ID'] );
	$options['twitter_username'] = '';
	$options['post_image'] = get_the_post_thumbnail_url( $options['ID'] );

	$options = apply_filters( 'mssb_options', $options );

	$networks = mssb_get_social_networks();
	?>

	<div class="mssb-container">

		<h3><?php echo $options['text_before']; ?></h3>
		<div class="mssb-button-list">
			<?php foreach ( $networks as $network ) : ?>

			<a href="<?php echo mssb_get_social_share_url( $network, $options ); ?>" target="_blank" class="mssb_button" rel="nofollow noopener noreferrer" >
				<?php echo mssb_get_network_image( $network ) ?>
			</a>

			<?php endforeach; ?>
		</div>
	</div>

	<?php
}

function mssb_render_buttons_shortcode ( $atts ) {
	ob_start();
	mssb_render_buttons( $atts );
	return ob_get_clean();
}

function mssb_add_social_share_buttons ( $content ) {
	$condition = apply_filters( 'mssb_conditional_output', is_single() && get_post_type() === 'post' );

	if ( $condition ) {
		$content .= do_shortcode( '[my_social_share_buttons]' );
	}

	return $content;
}