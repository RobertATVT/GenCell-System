<?php
/**
 * Gen-Cell System Plugin
 * Author: Robert A Vaughan
 */


function gencell_enqueue() {

    //Styles
    wp_register_style('gencell_paradox', plugins_url('Paradox-Grid/paradox.css', GENCELL_PLUGIN_URL));
    wp_register_style('gencell_style', plugins_url('assets/css/style.css', GENCELL_PLUGIN_URL));
	wp_register_style('gencell_jq_modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');

    wp_enqueue_style('gencell_paradox');
    wp_enqueue_style('gencell_style');
	wp_enqueue_style('gencell_jq_modal');

    //Scripts
	wp_register_script('gencell_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', array('jquery'), false, true);
	wp_register_script('gencell_jquery_modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', array('jquery'), false, true);
	wp_register_script('gencell_font_awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array('jquery'), false, true);
	
    wp_register_script('gencell_main', plugins_url('assets/js/main.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
	wp_register_script('gencell_dialog', plugins_url('assets/js/dialog.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
	wp_register_script('gencell_paradox', plugins_url('Paradox-Grid/paradox.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
	wp_register_script('gencell_waves', plugins_url('Paradox-Grid/waves.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
    
	wp_enqueue_script('gencell_jquery');
	wp_enqueue_script('gencell_jquery_modal');
	wp_enqueue_script('gencell_font_awesome');
	
	wp_enqueue_script('gencell_main');
	wp_enqueue_script('gencell_dialog');
	wp_enqueue_script('gencell_paradox');
	wp_enqueue_script('gencell_waves');

    //This line creates a causfa_action_obj object that passes the ajax url to the front end scripts
    wp_localize_script('gencell_main', 'gencell_action_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));

}
