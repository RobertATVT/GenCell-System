<?php
/*
* Plugin Name: Antagonist Games Gen-CelL System
* Plugin URI: http://antagonistgames.com
* Description: The OFficial Antagonist Games, Inc. Gen_CelL System Plugin for a live rulebook and character sheet generator.
* Version: 0.01
* Author: Robert Vaughan
* Author URI: http://antagonistgames.com
* License: Not for Redistribution
*/

function gencell_load_view (){
	if (isset($_SESSION['gencell_view'])) {
        switch ($view){
            case "home":
                return gencell_load_home();
                break;
            case "player":
                return gencell_load_player();
                break;
            case "characters":
                return gencell_load_characters();
                break;
            case "games":
                return gencell_load_games();
                break;
            case "settings":
                return gencell_load_settings();
                break;
        }
	} else {
        return gencell_load_app();
    }
}

/**
 * @return string - the html to be rendered in the browser
 *
 * This function is linked to the [causfa] shortcode. This function loads an individuals asset view
 * and connects the javascript functions for modal and toggle functionality
 */
function gencell_load_app() {
	global $wpdb;
	$current_user = wp_get_current_user();
	$_SESSION['user'] = $current_user->user_nicename;
	$current_prefix = $wpdb->base_prefix;
	$result_user = $wpdb->get_row('SELECT * FROM '.$current_prefix.'users WHERE Email = "'.$current_user->user_email.'";');

	$output = (file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'assets/templates/gencell-index.html', true ));
	$output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'assets/templates/gencell-modal.html', true));
	return $output;
}

function gencell_load_player() {
    global $wpdb;
    $current_user = wp_get_current_user();
    $_SESSION['user'] = $current_user->user_nicename;
	$current_prefix = $wpdb->base_prefix;
    $result_user = $wpdb->get_row('SELECT * FROM '.$current_prefix.'users WHERE Email = "'.$current_user->user_email.'";');
    $output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'assets/templates/gencell-player.html', true ));
    return $output;
}