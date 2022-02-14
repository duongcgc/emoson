<?php
/**
 * Define customizer panels. 
 * Kirki customizer methods
 * Define setting's Field with https://kirki.org/docs/controls/
 * Update setting's by JS with https://kirki.org/docs/modules/postmessage/
 * - Update with JS https://kirki.org/docs/arguments/js_vars/     
 *    => instance not refresh
 *    => (function ($) { 	
 *	         wp.customize("gcod_font_size_setting", function (value) {
 *		         value.bind(function (to) {
 *			         $("body").css("fontSize", to + "px");
 *		         });
 *	         });
 *       })(jQuery); 
 * - Update with PHP | Shortcut to setting's with https://kirki.org/docs/arguments/partial_refresh/ 
 *    => instance refresh only element
 *    => 'transport'   			=> 'postMessage',
 *       'partial_refresh'		=> [
 *           'partical_custom_id' => [
 *              'selector'        => '.selector',
 *              'render_callback' => function() { *
 *                 $new_content = 'something'; *                 			
 *                 return $new_content; *
 *              },
 *          ],
 *        ]
 *    => Or creat callback funcion at actions/customizer-render-func.php
 * Update setting's CSS with https://kirki.org/docs/modules/css/  => not instance and all page 
 * @since 1.0.0
*/ 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Branding
Kirki::add_panel('gcod_panel_branding', array(
   'priority'    => 1,
   'title'       => __('Branding', 'autumn-theme'),
   'description' => __('Branding Settings', 'autumn-theme'),
));

// Quick Access
Kirki::add_panel('gcod_panel_quick', array(
   'priority'    => 10,
   'title'       => __('Quick Access', 'autumn-theme'),
   'description' => __('Quick Access Settings', 'autumn-theme'),
));

// General
Kirki::add_panel('gcod_panel_general', array(
   'priority'    => 20,
   'title'       => __('General', 'autumn-theme'),
   'description' => __('General Settings', 'autumn-theme'),
));

// Header
Kirki::add_panel('gcod_panel_header', array(
   'priority'    => 40,
   'title'       => __('Header', 'autumn-theme'),
   'description' => __('Header Settings', 'autumn-theme'),
));

// Navigation
Kirki::add_panel('gcod_panel_navigation', array(
   'priority'    => 50,
   'title'       => __('Special Nav - Menu', 'autumn-theme'),
   'description' => __('Nav & Menu Settings', 'autumn-theme'),
));

// Home Page
Kirki::add_panel('gcod_panel_home', array(
   'priority'    => 60,
   'title'       => __('Home Page', 'autumn-theme'),
   'description' => __('Home Page Settings', 'autumn-theme'),
));


// Featured Slider
Kirki::add_panel('gcod_panel_featured', array(
   'priority'    => 70,
   'title'       => __('Featured', 'autumn-theme'),
   'description' => __('Featured Sections', 'autumn-theme'),
));

// Featured Video Background
Kirki::add_panel('gcod_panel_video_bg', array(
   'priority'    => 80,
   'title'       => __('Featured Video Background', 'autumn-theme'),
   'description' => __('Featured Video Background Settings', 'autumn-theme'),
));

// Pages
Kirki::add_panel('gcod_panel_page', array(
   'priority'    => 90,
   'title'       => __('Page', 'autumn-theme'),
   'description' => __('Page Settings', 'autumn-theme'),
));

// Posts
Kirki::add_panel('gcod_panel_post', array(
   'priority'    => 100,
   'title'       => __('Blog', 'autumn-theme'),
   'description' => __('Blog Settings', 'autumn-theme'),
));

// Footer
Kirki::add_panel('gcod_panel_footer', array(
   'priority'    => 110,
   'title'       => __('Footer', 'autumn-theme'),
   'description' => __('Footer Setting', 'autumn-theme'),
));

// Features
Kirki::add_panel('gcod_panel_features', array(
   'priority'    => 170,
   'title'       => __('Extras', 'autumn-theme'),
   'description' => __('Feature Settings', 'autumn-theme'),
));