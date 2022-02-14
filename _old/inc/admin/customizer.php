<?php

/**
 * Autumn Theme Customizer
 * @package Autumn Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!class_exists('Kirki')) {
	echo esc_attr__('Please active "gcocore" plugin, theme need module GCO Design Core. ', 'autumn-theme');	
} else {

	// Configuration
	$config_id = 'gcod_customizer_config';
	$args	= array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	);

	if (!defined('GCOD_CONFIG_ID')) {
		define('GCOD_CONFIG_ID', $config_id);
	}

	Kirki::add_config($config_id, $args);

	/**
	 * Customizer Preview.
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously. * 
	 */
	function gcod_customize_preview_js() {
		wp_enqueue_script(
			'gcod-customizer',
			get_template_directory_uri() . '/assets/admin/js/customizer.js',
			array('customize-preview'),
			_S_VERSION,
			true
		);
	}
	add_action('customize_preview_init', 'gcod_customize_preview_js');

	/**
	 * Enqueue the stylesheet.
	 */
	function gcod_enqueue_customizer_stylesheet() {

		wp_register_style(
			'gcod-customizer-css',
			get_template_directory_uri() . '/assets/admin/css/customizer.css',
			NULL,
			NULL,
			'all'
		);
		wp_enqueue_style('gcod-customizer-css');
	}
	add_action('customize_controls_print_styles', 'gcod_enqueue_customizer_stylesheet');

	// Default system's sections and Live update
	require_once GCOD_INC_DIR . '/customizer/actions/customizer-register.php';

	// Update live functions
	require_once GCOD_INC_DIR . '/customizer/actions/customizer-render-callback.php';

}