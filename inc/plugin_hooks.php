<?php

add_filter( 'the_content', 'mssb_add_social_share_buttons', 20 );

add_shortcode( 'my_social_share_buttons', 'mssb_render_buttons_shortcode' );
