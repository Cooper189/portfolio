<?php
/**
*Get script and style
**/
function load_style_script () {
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
	wp_enqueue_style ('style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script('script', get_template_directory_uri() . '/js/popup-script.js' );
}
/**
*Instal script and style
**/
add_action('wp_enqueue_scripts();', 'load_style_script' );

/**
*Thumbnails for posts
**/
add_theme_support('post_thumbnails' );
?>