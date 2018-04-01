<?php
/**
 * Gen-Cell System Plugins
 * Author: Robert A Vaughan
 */


/**
 * This function runs when the plugin is first activated
 */
function gencell_activate_plugin() {
    // Checks if the version of WordPress is 4.5 or higher
    if( version_compare( get_bloginfo('version'), '4.5', '<' )) {
        wp_die(__('You must update WordPress to use this plugin', 'CAUS Fixed Assets Application'));
    }
    $upload = wp_upload_dir();
    $upload_dir = $upload['basedir'];
    $upload_dir = $upload_dir.'/GenCell';
    if(! is_dir($upload_dir)) {
        mkdir($upload_dir, 0755);
    }
    $upload_dir_images = $upload_dir.'/images';
    if(! is_dir($upload_dir_images)) {
        mkdir($upload_dir_images, 0755);
    }
    $upload_dir_forms = $upload_dir.'/sheets';
    if(! is_dir($upload_dir_forms)) {
        mkdir($upload_dir_forms);
    }
    $upload_dir_forms_home = $upload_dir_forms.'/logs';
    if(! is_dir($upload_dir_forms_home)) {
        mkdir($upload_dir_forms_home);
    }
    
    //Checks to make sure that the groups plugin is active and if it is then it makes sure the required groups are available
    if( is_plugin_active('groups/groups.php')) {
        $gencell-host = Groups_Group::read_by_name('Host');
        if ($business_manager == null) {
            $map = array('name' => 'Host', 'description' => 'Game Host');
            Groups_Group::create($map);
        }
        $gencell-rules-coordinator = Groups_Group::read_by_name('Rules Coordinator');
        if ($FAL == null) {
            $map = array('name' => 'Rules Coordinator', 'description' => 'Rules Coordinator Position');
            Groups_Group::create($map);
        }
        $gencell-player = Groups_Group::read_by_name('Player');
        if ($FAC == null) {
            $map = array('name' => 'Player', 'description' => 'Player Group');
            Groups_Group::create($map);
        }
    } else {
        wp_die(__('You must install the groups plugin to use this plugin', 'Official Gen-Cell System Application'));
    }
    //This function creates the tables required by the plugin
    create_tables();
}