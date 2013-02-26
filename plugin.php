<?php

/**
 * Plugin Name: zM Plugin Boiler Plate
 * Plugin URI:
 * Description:
 * Version: 1
 * Author:
 * Author URI:
 * License: GPL V2 or Later
 */


/**
 * If this is a localhost we turn on error reporting
 */
if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == 'localhost' ){
    ini_set( 'display_errors', 'on' );
    error_reporting( E_ALL );
}


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
 * This file contains our core functions, such as, hooks, init, admin_init, wp_enqueue_scripts, etc.
 */
require_once 'functions.php';


/**
 * We separate functions that are designed to be used in our Themes into the template-tags.php file.
 */
require_once 'template-tags.php';


/**
 * When the user activates the plugin we add the version number to the
 * options table only if this is a newer version.
 */
$activate_fn = function() {

    global $my_unique_name;

    if ( get_option( $my_unique_name['version_key'] ) && get_option( $my_unique_name['version_key'] ) > $my_unique_name['version_value'] )
        return;

    update_option( $my_unique_name['version_key'], $my_unique_name['version_value'] );
};
register_activation_hook( __FILE__, $activate_fn );


/**
 * Delete our version number from the database when the plugin is activated.
 */
$deactivate_fn = function (){
    global $my_unique_name;
    delete_option( $my_unique_name['version_key'] );
};
register_deactivation_hook( __FILE__, $deactivate_fn );