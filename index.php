<?php
/*
* Plugin Name: Antagonist Games Gen-Cell System
* Plugin URI: http://antagonistgames.com
* Description: The Official Antagonist Games, Inc. Gen-Cell System Plugin for a live rulebook and character sheet generator.
* Version: 0.01
* Author: Robert Vaughan
* Author URI: http://antagonistgames.com
* License: Not for Redistribution
*/


if( !function_exists( 'add_action')) {
    die();
}
if (!session_id()) {
    session_start();
}

//Setup
define( 'GENCELL_PLUGIN_URL', __FILE__);

//Includes
include('includes/activate.php');
include('enqueue/enqueue.php');
include('views/app-view.php');
include('includes/functions.php');
//include('process/filter-content.php');
//include('includes/groups.php');
include('includes/create_tables.php');
//include('process/surplus.php');
//include('process/transfer.php');
//include('includes/autocomplete.php');
//include('process/pending_action.php');
//include('process/new_custodian.php');
//include('process/generate_form.php');
//include('process/logger.php');
//include('includes/file_upload.php');
//include('process/set_session.php');
//include('process/DBSerialize.php');
//include('process/retrieveForms.php');


//Hooks
add_action( 'wp_enqueue_scripts', 'gencell_enqueue', 100);
//add_action( 'wp_login', 'causfa_logger_login', 100, 2);
register_activation_hook( __FILE__, 'gencell_activate_plugin' );
//add_filter( 'gencell_header', 'gencell_filter_header', 10, 1);


//Shortcode
add_shortcode( 'gencell', 'gencell_load_view'); //shortcode for the main page of the app
add_shortcode( 'gencell-test', 'gencell-load-test'); //shortcode for a dev space to test functionality


?>