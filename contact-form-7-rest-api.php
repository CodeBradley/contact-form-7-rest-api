<?php

/**
 * Plugin Name: Contact Form 7 REST API Endpoints
 * Description: Contact Form 7 endpoints for the WP REST API v2
 * Version: 0.1
 * Author: Bradley Tollett
 * Plugin URI: https://github.com/CodeBradley/contact-form-7-rest-api
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( "You can't do anything by accessing this file directly." );
}

if ( !function_exists( 'is_plugin_active' ) ) {
	require_once(ABSPATH . '/wp-admin/includes/plugin.php');
}

/* Adds our callback function to the rest_api_init hook if Contact Form 7 is active so that it's loaded with the REST API */
if ( is_plugin_active('contact-form-7/wp-contact-form-7.php') ) {
	add_action('rest_api_init', 'register_rest_routes');
}

/* Our callback loads and registers the custom endpoint class */
function register_rest_routes() {

	if(!class_exists('WP_REST_Contact_Form_7_Controller')) {
		require_once plugin_dir_path(__FILE__).'/lib/endpoints/class-wp-rest-contact-form-7-controller.php';
	}

	$controller = new WP_REST_Contact_Form_7_Controller();
	$controller->register_routes();

}
