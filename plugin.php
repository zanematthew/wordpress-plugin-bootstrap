<?php

/**
 * Plugin Name: zM Plugin Boiler Plate
 * Plugin URI:
 * Description:
 * Version: 0.1-beta
 * Author:
 * Author URI:
 * License: GPL V2 or Later
 */


/***********************************************
 * YOU SHOULD NOT HAVE TO EDIT BELOW THIS LINE *
 ***********************************************/


/**
 * From the WordPress plugin headers above we derive the version number, and plugin name
 */
$plugin_headers = get_file_data( __FILE__, array( 'Version' => 'Version', 'Name' => 'Plugin Name' ) );


/**
 * We store our plugin data in the following global array.
 * $my_unique_name with your unique name
 */
global $my_unique_name;
$my_unique_name = array();
$my_unique_name['version_key'] = strtolower( str_replace( ' ', '_', $plugin_headers['Name'] ) ) . '_version';
$my_unique_name['version_value'] = $plugin_headers['Version'];


/**
 * When the user activates the plugin we add the version number to the
 * options table as "my_plugin_name_version" only if this is a newer version.
 */
$activate_fn = function(){

    global $my_unique_name;

    if ( get_option( $my_unique_name['version_key'] ) && get_option( $my_unique_name['version_key'] ) > $my_unique_name['version_value'] )
        return;

    update_option( $my_unique_name['version_key'], $my_unique_name['version_value'] );
};
register_activation_hook( __FILE__, $activate_fn );


/**
 * Shared functions between admin and theme
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . 'functions.php' ) )
    require_once plugin_dir_path( __FILE__ ) . 'functions.php';


/**
 * Admin only functions
 */
if ( is_admin() && file_exists( plugin_dir_path( __FILE__ ) . 'admin-tags.php' ) )
    require_once plugin_dir_path( __FILE__ ) . 'admin-tags.php';


/**
 * Theme only functions
 */
if ( ! is_admin() && file_exists( plugin_dir_path( __FILE__ ) . 'template-tags.php' ) )
    require_once plugin_dir_path( __FILE__ ) . 'template-tags.php';