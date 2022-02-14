<?php

/**
 * Autumn Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Autumn Theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;


// Version for Theme
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

// Autumn Theme's includes & components directory.
$gcod_inc_dir = 'inc';
$gcod_components_dir = 'template-parts/components';

if (!defined('GCOD_COMPS_DIR')) {
	define('GCOD_COMPS_DIR', get_template_directory() . '/' . $gcod_components_dir);
}

if (!defined('GCOD_INC_DIR')) {
	define('GCOD_INC_DIR', get_template_directory() . '/' . $gcod_inc_dir);
}

if (!function_exists('gcod_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gcod_setup() {

		// Sets $content_width.		
		$GLOBALS['content_width'] = apply_filters('gcod_content_width', 735);

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Autumn Theme, use a find and replace
		 * to change 'autumn-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('autumn-theme', get_template_directory() . '/languages');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
       	 * @using: the_post_thumbnail() | get_the_post_thumbnail() for default thumbnail
		 */
		add_theme_support('post-thumbnails');

		/* Add image sizes 
		/* @link https://developer.wordpress.org/reference/functions/add_image_size/ 
		/* @using: the_post_thumbnail( 'gcod_thumbnail' ) | the_post_thumbnail( array(100,100) ) for other size
		*/
		add_image_size('gcod_thumbnail', 600, 640, true);                                // croped = true
		add_image_size('gcod_thumbnail_center', 600, 640, array('center', 'center'));   // croped with center center position
		add_image_size('gcod_thumbnail_full', 600, 640);
		add_image_size('gcod_thumbnail_category', 295, 295, true);
		add_image_size('gcod_thumbnail_post', 732, 472, true);
		add_image_size('gcod_thumbnail_post_595', 595, 595, true);
		add_image_size('gcod_thumbnail_post_380', 380, 320, true);
		add_image_size('gcod_thumbnail_post_300', 300, 250, true);
		add_image_size('gcod_thumbnail_sidebar', 410, 340, true);
		add_image_size('gcod_thumbnail_sidebar_4x6', 410, 600, true);
		add_image_size('gcod_thumbnail_sidebar_110', 110, 110, true);
		add_image_size('gcod_thumbnail_footer', 148, 148, true);
		add_image_size('gcod_thumbnail_pagenav', 82, 81, true);


		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Add excerpts on pages.
		add_post_type_support('page', 'excerpt');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		/*
		* Enable support for Customizer Selective Refresh.
		* See: https://make.wordpress.org/core/2016/02/16/selective-refresh-in-the-customizer/
		*/
		add_theme_support('customize-selective-refresh-widgets');

		/*
		* Enable support responsive embedded content
		* See: https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#responsive-embedded-content
		*/
		add_theme_support('responsive-embeds');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for experimental cover block spacing.
		add_theme_support('custom-spacing');

		// Add post formats.
		// add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'image' ) );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add support ifinite-scroll
		add_theme_support('infinite-scroll', array(
			'type' => 'scroll',
			'footer_widgets' => false,
			'container' => 'content',
			'wrapper' => true,
			'render' => false,
			'posts_per_page' => false,
		));

		// Add support for default block styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('assets/css/style-editor.css');
	}
endif;
add_action('after_setup_theme', 'gcod_setup');

if (!function_exists('gcod_menu_setup')) :
	/**
	 * Sets up theme defaults and registers support for menus WordPress features.
	 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gcod_menu_setup() {

		// This theme uses wp_nav_menu() in one location.  
		// @link https://developer.wordpress.org/reference/functions/wp_nav_menu/    
		register_nav_menus(
			array(
				'main-menu' => __('Primary', 'autumn-theme'),
				'footer-menu' => __('Footer', 'autumn-theme'),
			)
		);
	}
endif;
add_action('after_setup_theme', 'gcod_menu_setup');


// Change content width when template is full-width.php
if (!isset($content_width))
	$content_width = 780;

function gcod_adjust_content_width() {
	global $content_width;

	if (is_page_template('full-width.php'))
		$content_width = 780;
}
add_action('template_redirect', 'gcod_adjust_content_width');

/**
 * Sidebar - Widgets Init.
 */
require get_template_directory() . '/inc/sidebars.php';

/**
 * Assets.
 */
require get_template_directory() . '/inc/assets.php';

/**
 * Custom Background.
 */
require get_template_directory() . '/inc/custom-background.php';

/**
 * Editor Color Palette.
 */
require get_template_directory() . '/inc/editor-color-palette.php';

/**
 * Editor Fonts.
 */
require get_template_directory() . '/inc/editor-fonts.php';

/**
 * Editor Font-sizes.
 */
require get_template_directory() . '/inc/editor-font-sizes.php';

/**
 * Editor Starter Content.
 */
require get_template_directory() . '/inc/starter-content.php';

/**
 * Custom Comment.
 */
require get_template_directory() . '/inc/custom-comments.php';

// Default Customizer for Unit Theme
if (!class_exists('Kirki')) {
	require GCOD_INC_DIR . '/customizer/customizer-unit.php';        // Initialize theme default settings.
}

// Default customizer's setting
require GCOD_INC_DIR . '/customizer/actions/customizer-default.php';        // Initialize theme default settings.
require GCOD_INC_DIR . '/customizer/actions/customizer-choices.php';        // Initialize choices value for select settings.

/**
 * Actions and Filters. 
 * Using do_action || apply_filters on theme files
 * adding functions into actions and filters had postion on theme 
 * @see inc/template-functions.php, inc/template-tags.php, inc/template-render.php for callback
 */
require get_template_directory() . '/inc/template-hooks.php';

/**
 * Template Tags.
 * functions with echo something
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Template Render.
 * functions with echo something
 */
require get_template_directory() . '/inc/template-render.php';

/** 
 * Template Functions
 * functions with return some values using for theme
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Extra functions.
 */
require get_template_directory() . '/inc/template-extras.php';

/**
 * Admin Init.
 */
require get_template_directory() . '/inc/admin/init.php';

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load Customizer if Kirki exist
if (class_exists('Kirki')) {
	require get_template_directory() . '/inc/admin/customizer.php';						// Customizer additions.
	require get_template_directory() . '/inc/customizer/customizer-config.php';			// Customizer config
	require get_template_directory() . '/inc/customizer/customizer-search.php';			// Customizer search
} else {

	function is_plugin_installed($basename) {
		if (!function_exists('get_plugins')) {
			include_once ABSPATH . '/wp-admin/includes/plugin.php';
		}

		$installed_plugins = get_plugins();

		return isset($installed_plugins[$basename]);
	}

	add_action('admin_notices', 'core_not_loaded');
	function core_not_loaded() {
		if (!current_user_can('activate_plugins')) {
			return;
		}

		$gcod_core = 'gcod-core/gcod-core.php';

		if (is_plugin_installed($gcod_core)) {
			$activation_url = wp_nonce_url('plugins.php?action=activate&amp;plugin=' . $gcod_core . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $gcod_core);

			$message = sprintf(__('%1$sGCO Autumn Theme%2$s requires %1$sGCO Core%2$s plugin to be active. Please activate GCOD Core to continue.', 'autumn-theme'), "<strong>", "</strong>");

			$button_text = __('Activate GCO Core', 'autumn-theme');
		} else {
			$activation_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=gcod-core'), 'install-plugin_core');

			$message = sprintf(__('%1$sGCOD Autumn Theme%2$s requires %1$sGCO Core%2$s plugin to be installed and activated. Please install GCO Core to continue.', 'autumn-theme'), '<strong>', '</strong>');
			$button_text = __('Install Elementor', 'autumn-theme');
		}

		$button = '<p><a href="' . $activation_url . '" class="button-primary">' . $button_text . '</a></p>';

		printf('<div class="error"><p>%1$s</p>%2$s</div>', $message, $button);
	}
}

// Style from customizer settings
require_once get_template_directory() . '/inc/customizer/export/customizer-css.php';  		// CSS generation from settings	;

// Component Classes
require get_template_directory() . '/inc/classes/class-gcod-header.php';					// Header
require get_template_directory() . '/inc/classes/class-gcod-page-header.php';				// Page Header
require get_template_directory() . '/inc/classes/class-gcod-home.php';						// Home Content
require get_template_directory() . '/inc/classes/class-gcod-featured.php';					// Featured Content
require get_template_directory() . '/inc/classes/class-gcod-footer.php';					// Footer
require get_template_directory() . '/inc/classes/class-gcod-menu-walker.php';				// Menu Walker

/** 
 * Auto Login Demo User
 * Remove this and inc/auto-login-demo.php, inc/demo-login.php files when publish
 * Remove inc/customizer/customizer-demo.php folder 
 * => then edit in inc/customizer/customizer-config.php
 * create a user roles sucrible with name "demo"
 * create a page with slug "demo-login" then select Template: "Auto Login"
 * link to demo is https://domain.com/demo-login
 */

// require_once get_parent_theme_file_path('/inc/auto-login-demo.php');

add_action('wp_enqueue_scripts', function () {
	$js = 'wp.customize.selectiveRefresh.Partial.prototype.createEditShortcutForPlacement = function() {};';
	wp_add_inline_script('customize-selective-refresh', $js);
});