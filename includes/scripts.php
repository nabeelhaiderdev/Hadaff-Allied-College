<?php
/**
 * Setup function for the project
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */


/**
 * Theme assets
 *
 * Define variable to store asset directory folder in it.
 *
 * That can be used afterward to call stylesheet / scripts etc
 */

// Time format for the_time()
DEFINE( 'project_dtformat', 'F j, Y' );

// Define assets folder
DEFINE( 'assetDir', get_template_directory_uri() . '/assets' );

// Define bundle version
DEFINE( 'ASSET_VERSION_JS', filemtime( get_template_directory() . '/assets/js/bundle.js' ) );
DEFINE( 'ASSET_VERSION_CSS', filemtime( get_template_directory() . '/assets/css/main.css' ) );

/**
 * Theme assets
 *
 * Enqueue and Dequeue required files
 */
function glide_assets() {

	// Enqueue theme styles
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' , false, null );
	wp_enqueue_style( 'glide-theme-stylesheet', assetDir . '/css/main.css?v=' . ASSET_VERSION_CSS, false, null );

	// Eliminate the emoji script
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Enqueue comments reply script on single post pages
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( ! is_admin() && ! is_user_logged_in() ) {

		// Deregister dashicons on frontend
		wp_deregister_style( 'dashicons' );
	}
	wp_dequeue_script( 'jquery');
	wp_deregister_script( 'jquery'); 
	
	wp_enqueue_script( 'jquery' );

	// Register project scripts
	wp_register_script( 'glide-jquery', assetDir . '/js/jquery.js?v=' . ASSET_VERSION_JS, array(  ), null, false );
	wp_register_script( 'glide-main', assetDir . '/js/jquery.main.js?v=' . ASSET_VERSION_JS, array( 'glide-jquery' ), null, false );



	// Localize
	wp_localize_script(
		'glide-theme-scripts',
		'localVars',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
		)
	);

	// Enqueue project scripts
	wp_enqueue_script( 'glide-jquery' );
	wp_enqueue_script( 'glide-main' );

}

add_action( 'wp_enqueue_scripts', 'glide_assets' );


add_action( 'wp_enqueue_scripts', 'glide_assets' );

function wpdocs_enqueue_custom_admin_style() {
	wp_enqueue_style( 'sample-editor-styles', get_template_directory_uri() . '/assets/css/editor-style.min.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );
