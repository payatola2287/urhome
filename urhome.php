<?php
/** 
 * Plugin Name: URHome custom codes
 * Description: Custom code that need to be properly integrated with Wordpress are in here. DO NOT DEACTIVATE THIS PLUGIN.
 * Author: Paolo Gallardo
 * Author URI: https://github.com/payatola2287
 * Version: 1.0 
 ***/

 require_once('inc/_/plugin-update-checker/plugin-update-checker.php');
 $updateChecker = Puc_v4_Factory::buildUpdateChecker(
     'https://github.com/payatola2287/urhome',
     __FILE__,
     'urhome'
 );
 $updateChecker->setBranch( 'production' );

 function add_css(){
     wp_enqueue_style( 
         'bootstrap',
         plugin_dir_url( __FILE__ ) . 'inc/_/bootstrap/bootstrap.css'
     );
 }
 add_action( 'wp_enqueue_scripts','add_css' );