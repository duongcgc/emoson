<?php

/**
 * Load admin functionalities
 *
 * CorePress: v1.0.0
 *
 * @package     Autumn Theme Admin
 * @link        https://gco.com/
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
 * Define variables.
 */
if (!defined('GCOD_ADMIN_DIR')) :
	define('GCOD_ADMIN_DIR', '/inc/admin/');
endif;

// /**
//  * Initiate.
//  */
// if ( ! function_exists( 'gcod_admin_init' ) ) :
// 	/**
// 	 * Initiate the theme's admin.
// 	 *
// 	 * Add the following in your child theme to disable the admin features:
// 	 *
// 	 * function gcod_admin_init() {}
// 	 *
// 	 * Note that this does not disable the theme updater or the inline docs.
// 	 *
// 	 * @link https://gist.github.com/richtabor/7a7da34f9db5b1eddae9976445e29ca3
// 	 */
// 	function gcod_admin_init() {
// 		add_action( 'update_footer', 'gcod_dashboard_footer_version', 12 );
// 	}
// endif;
// add_action( 'init', 'gcod_admin_init' );

/**
 * TGMPA.
 */
if (file_exists(get_parent_theme_file_path(GCOD_ADMIN_DIR . 'required-plugins.php'))) {

// 	// The theme's required plugins.
	require get_parent_theme_file_path(GCOD_ADMIN_DIR . 'required-plugins.php');

// 	// Load TGMPA.
	require get_parent_theme_file_path(GCOD_ADMIN_DIR . 'tgmpa/class-tgm-plugin-activation.php');

// 	// Load recommended plugins.
// 	require get_parent_theme_file_path(GCOD_ADMIN_DIR . 'recommended-plugins.php');
}


/** 
 * OCID
 */

function ocdi_import_files() {

	$server_link = 'https://gcodesign.com/gcod-plugins/autumn/';

	return [
		[
			'import_file_name'             => 'Demo Mountain',
			'categories'                   => ['Autumn Theme'],
			'local_import_file'            => trailingslashit(get_template_directory()) . '/inc/demo/autumn-mountain/content.xml',
			'local_import_widget_file'     => trailingslashit(get_template_directory()) . '/inc/demo/autumn-mountain/widgets.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/incdemo/autumn-mountain/customizer.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/inc/demo/autumn-mountain/preview.jpg',
			'preview_url'                  => 'http://gcodesign.com/autumn-mountain',
		],
		[
			'import_file_name'             => 'Demo Festival',
			'categories'                   => ['Autumn Theme'],
			'local_import_file'            => trailingslashit(get_template_directory()) . '/inc/demo/autumn-festival/content.xml',
			'local_import_widget_file'     => trailingslashit(get_template_directory()) . '/inc/demo/autumn-festival/widgets.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/incdemo/autumn-festival/customizer.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/inc/demo/autumn-festival/preview.jpg',
			'preview_url'                  => 'http://gcodesign.com/autumn-festival',
		],
	];
}
add_filter('ocdi/import_files', 'ocdi_import_files');

/**
 * Plugins
 */

function ocdi_register_plugins($plugins) {
	$theme_plugins = [

		// Theme Check
		[
			'name'      => __('Envato Theme Check', 'autumn-theme'),
			'slug'      => 'envato-theme-check',
			'source'    => 'https://github.com/envato/envato-theme-check/archive/refs/heads/master.zip',
		],

		// This is plugin for Page Builder.
		[
			'name'      => __('Elementor Website Builder', 'autumn-theme'),
			'slug'      => 'elementor',
			'required'  => true,
		],
		// This is plugin for Instant Insert Images from Unsflash, ...
		[
			'name'      => __('Instant Images', 'autumn-theme'),
			'slug'      => 'instant-images',
			'required'  => false,
		],

		// This is plugin for Breadcrumb Feature
		[
			'name'      => __('Breadcrumb Navxt', 'autumn-theme'),
			'slug'      => 'breadcrumb-navxt',
			'required'  => true,
		],

		// This is plugin for tools as Lazy load images, Related posts, AMP, Contact form
		[
			'name'      => __('Instagram Slider', 'autumn-theme'),
			'slug'      => 'instagram-slider-widget',
			'required'  => true,
		],

		// This is plugin for Mega Menu
		[
			'name'      => __('Mega Menu', 'autumn-theme'),
			'slug'      => 'wp-megamenu',
			'required'  => true,
		],

		// This is plugin for Mailchimp
		[
			'name'      => __('Mailchimp for WordPress', 'autumn-theme'),
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		],

		// Core Plugin
		[
			'name'               => __('GCO Theme Core Plugin', 'autumn-theme'), // The plugin name.
			'slug'               => 'gcod-core', // The plugin slug (typically the folder name).
			'source'             => 'https://github.com/duongcgc/gcod-core/archive/refs/tags/gcod-core.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		],

		// This is plugin container elementor widgets for this theme.
		[
			'name'               => __('GCO Elementor Widgets Plugin', 'autumn-theme'), // The plugin name.
			'slug'               => 'gcod-autumn-elementors', // The plugin slug (typically the folder name).
			'source'             => 'https://github.com/duongcgc/gcod-autumn-elementors/archive/refs/tags/gcod-autumn-elementors.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.         
		],

		// This is plugin container widgets for this theme.
		[
			'name'               => __('GCO Theme Widgets Plugin', 'autumn-theme'), // The plugin name.
			'slug'               => 'gcod-autumn-widgets', // The plugin slug (typically the folder name).
			'source'             => 'https://github.com/duongcgc/gcod-autumn-widgets/archive/refs/tags/gcod-autumn-widgets.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		],
	];

	return array_merge($plugins, $theme_plugins);
}
add_filter('ocdi/register_plugins', 'ocdi_register_plugins');

/**
 * Merlin WP.
 */

if (!function_exists('gcod_merlin')) :
	/**
	 * Initiate Merlin WP.
	 *
	 * Add the following in your child theme to disable Merlin WP:
	 *
	 * function gcod_merlin() {}
	 */
	function gcod_merlin() {
		require_once get_parent_theme_file_path(GCOD_ADMIN_DIR . 'merlin/vendor/autoload.php');
		require_once get_parent_theme_file_path(GCOD_ADMIN_DIR . 'merlin/class-merlin.php');
		require_once get_parent_theme_file_path(GCOD_ADMIN_DIR . 'merlin-config.php');
	}
endif;

add_action( 'after_setup_theme', 'gcod_merlin' );

/**
 * This theme only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
	require get_parent_theme_file_path(GCOD_ADMIN_DIR . '/back-compat.php');
}

/**
 * Admin functions.
 */
require get_parent_theme_file_path(GCOD_ADMIN_DIR . '/admin-functions.php');
