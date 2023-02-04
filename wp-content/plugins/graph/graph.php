<?php
/*
Plugin Name: Graph
Plugin URI: ""
Description: Plot the chart of post tite against category length
Version: 1.0.0
Author: Oluwatobi Odekunle
Author URI: ""
 */

 // EXIT IF accessed directly
 if(!defined('ABSPATH')){
     exit();
 }


add_action( 'admin_enqueue_scripts', 'dw_scripts' );
function dw_scripts( $hook ) {
    $screen = get_current_screen();
    if ( 'dashboard' === $screen->id ) {
//        wp_enqueue_script( 'dw_script', plugin_dir_url( __FILE__ ) . 'js/App.jsx', array(  ), '1.0', true );

        wp_enqueue_script( 'dw_main', plugin_dir_url( __FILE__ ) . 'js/main.js', array(  ), '1.0', true );
        wp_enqueue_style( 'dw_style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), '1.0' );
    }
}

// Register Widget
 function register_youtubesubs(){
     wp_add_dashboard_widget(
         'graph_widget',
         'Graph Widget',
         'graph_callback'
     );
//     register_widget('graph_widget');
 }

 function graph_callback(){
     echo '<div id = "root"></div>';
 }


 // Hook in function

 add_action('wp_dashboard_setup', 'register_youtubesubs');
