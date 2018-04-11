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
	if (isset($_SESSION['gencell_view']) {
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
function gencell_load_app($page) {
    global $wpdb;
    $current_user = wp_get_current_user();
    $_SESSION['user'] = $current_user->user_nicename;
	$current_prefix = $wpdb->base_prefix;
    $result_user = $wpdb->get_row('SELECT * FROM '.$current_prefix.'users WHERE Email = "'.$current_user->user_email.'";');
//    if ($result_user == null) {
//        return causfa_new_custodian_dialog();
//    } else {
//    $output = apply_filters('gencell_header', $result_user);
    $output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'templates\gencell-index.html', true ));
//    $results_assets = $wpdb->get_results('SELECT * FROM causfa_banner WHERE FZVFORG_CUSTODIAN = "'.$result_user->Name.'";');
//    $value_total = 0.00;
//        $missing_total = 0.00;
//        $asset_index = 0;
//        $assets = '';
//        $total_number = 0;
//        $missing_number = 0;
//        for ($i =0; $i < count($results_assets); $i++) {
//            $result_asset = $results_assets[$i];
//            $value_total += $result_asset->FZVFORG_AMOUNT;
//            $total_number++;
//            $return_value = apply_filters('causfa_asset_info', $result_asset, $asset_index);
//            $assets = $assets.$return_value[0];
//            if ($return_value[1]) {
//                $missing_total += $result_asset->FZVFORG_AMOUNT;
//                $missing_number++;
//            }
//           $asset_index++;
//       }
//        $output = $output.(apply_filters('gencell_body', $value_total, $total_number, $missing_total, $missing_number));
//        $output = $output.$assets;
//		$output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'/templates/gencell-body.html', true));
//		$output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'/templates/gencell-footer.html', true));
        
        //Gets the html for the modals and puts it at the bottom of the page.
//        $modals = (file_get_contents(plugin_dir_path(CAUSFA_PLUGIN_URL).'/assets/html/modal.html', true ));
//        $modals = str_replace('[PID]', "'".$result_user->PID."'", $modals);
//        $output = $output.$modals;
        return $output;
//    }
}

function gencell_load_player($page) {
    global $wpdb;
    $current_user = wp_get_current_user();
    $_SESSION['user'] = $current_user->user_nicename;
	$current_prefix = $wpdb->base_prefix;
    $result_user = $wpdb->get_row('SELECT * FROM '.$current_prefix.'users WHERE Email = "'.$current_user->user_email.'";');
//    if ($result_user == null) {
//        return causfa_new_custodian_dialog();
//    } else {
//    $output = apply_filters('gencell_header', $result_user);
    $output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'templates\gencell-player.html', true ));
//    $results_assets = $wpdb->get_results('SELECT * FROM causfa_banner WHERE FZVFORG_CUSTODIAN = "'.$result_user->Name.'";');
//    $value_total = 0.00;
//        $missing_total = 0.00;
//        $asset_index = 0;
//        $assets = '';
//        $total_number = 0;
//        $missing_number = 0;
//        for ($i =0; $i < count($results_assets); $i++) {
//            $result_asset = $results_assets[$i];
//            $value_total += $result_asset->FZVFORG_AMOUNT;
//            $total_number++;
//            $return_value = apply_filters('causfa_asset_info', $result_asset, $asset_index);
//            $assets = $assets.$return_value[0];
//            if ($return_value[1]) {
//                $missing_total += $result_asset->FZVFORG_AMOUNT;
//                $missing_number++;
//            }
//           $asset_index++;
//       }
//        $output = $output.(apply_filters('gencell_body', $value_total, $total_number, $missing_total, $missing_number));
//        $output = $output.$assets;
//		$output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'/templates/gencell-body.html', true));
//		$output = $output.(file_get_contents(plugin_dir_path(GENCELL_PLUGIN_URL).'/templates/gencell-footer.html', true));
        
        //Gets the html for the modals and puts it at the bottom of the page.
//        $modals = (file_get_contents(plugin_dir_path(CAUSFA_PLUGIN_URL).'/assets/html/modal.html', true ));
//        $modals = str_replace('[PID]', "'".$result_user->PID."'", $modals);
//        $output = $output.$modals;
        return $output;
//    }
}