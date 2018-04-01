<?php
/**
 * Gen-Cell System Plugin
 * Author: Robert A Vaughan
 */


function gencell_enqueue() {

    //Styles
    wp_register_style('gencell_paradox', plugins_url('css/paradox.css', GENCELL_PLUGIN_URL));
    wp_register_style('gencell_style', plugins_url( 'css/style.css', GENCELL_PLUGIN_URL));

    wp_enqueue_style('gencell_paradox');
    wp_enqueue_style('gencell_style');

    //Scripts
    wp_register_script('gencell_main', plugins_url('js/main.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
	wp_register_script('gencell_paradox', plugins_url('js/paradox.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
	wp_register_script('gencell_waves', plugins_url('js/waves.js', GENCELL_PLUGIN_URL), array('jquery'), false, true);
    wp_register_script('gencell_tippy_script', 'https://unpkg.com/tippy.js@2.4.1/dist/tippy.all.min.js', array('jquery'), false, true);
    wp_register_script('gencell_font_awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array('jquery'), false, true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('gencell_main');
	wp_enqueue_script('gencell_paradox');
	wp_enqueue_script('gencell_waves');
    wp_enqueue_script('gencell_tippy_script');
    wp_enqueue_script('gencell_font_awesome');

    //This line creates a causfa_action_obj object that passes the ajax url to the front end scripts
    wp_localize_script('gencell_main', 'gencell_action_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));

}
