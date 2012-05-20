<?php

// Add custom menu support
add_action( 'init', 'register_my_menu' );

// Register custom menu area
function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

// Register sidebar
if ( function_exists('register_sidebar') )
	register_sidebar();
