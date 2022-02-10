<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Autumn Theme for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/inc/admin/tgmpa/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/inc/admin/tgmpa/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/inc/admin/tgmpa/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/inc/admin/tgmpa/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'gcod_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function gcod_add_register_required_plugins($args) {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(		

		// This is Envato code quality check code plugin from a GitHub repository.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		array(
			'name'      => __('Envato Theme Check', 'autumn-theme'),
			'slug'      => 'envato-theme-check',
			'source'    => 'https://github.com/envato/envato-theme-check/archive/refs/heads/master.zip',
		),

		// This is plugin for Page Builder.
		array(
			'name'      => __('Elementor Website Builder', 'autumn-theme'),
			'slug'      => 'elementor',
			'required'  => true,
		),		
		// This is plugin for Instant Insert Images from Unsflash, ...
		array(
			'name'      => __('Instant Images', 'autumn-theme'),
			'slug'      => 'instant-images',
			'required'  => false,
		),		

		// This is plugin for Breadcrumb Feature
		array(
			'name'      => __('Breadcrumb Navxt', 'autumn-theme'),
			'slug'      => 'breadcrumb-navxt',
			'required'  => true,
		),		

		// This is plugin for Reading Time and Progress Timeline
		array(
			'name'      => __('Reading Time', 'autumn-theme'),
			'slug'      => 'read-meter',
			'required'  => true,
		),		

		// This is plugin for Social Feed - Instagram - Facebook
		array(
			'name'      => __('Social Slider Feed', 'autumn-theme'),
			'slug'      => 'instagram-slider-widget',
			'required'  => true,
		),		

		// This is plugin for Newsletter
		array(
			'name'      => __('Mailchimp for WordPress', 'autumn-theme'),
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		),

		// This is plugin for Author Post
		array(
			'name'      => __('WP Post Author', 'autumn-theme'),
			'slug'      => 'wp-post-author',
			'required'  => true,
		),		

		// This is plugin for Mega Menu
		array(
			'name'      => __('WP Mega Menu', 'autumn-theme'),
			'slug'      => 'wp-megamenu',
			'required'  => true,
		),		

	);

	// Combine the two arrays.
	$args = array_merge( $args, $plugins );

	return $args;
}

add_filter( 'gcod_recommended_plugins', 'gcod_add_register_required_plugins' );