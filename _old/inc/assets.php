<?php

/**
 * Enqueue scripts and styles.
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
 * Enqueues all theme assets.
 * scripts and styles for theme
 */
if (!function_exists('gcod_enqueue_scripts')) {
   function gcod_enqueue_scripts() {

      // Enqueue Comment Reply script.
      if (is_single() && comments_open() && get_option('thread_comments')) {
         wp_enqueue_script('comment-reply');
      }

      // Register vendor scripts.
      // - Register sticky sidebar scripts
      wp_register_script('gcod-sticky-sidebar-scripts', get_template_directory_uri() . '/assets/js/vendors/jquery.sticky-sidebar.js', array('jquery'), _S_VERSION, true);

      // Register theme scripts.
      wp_register_script('gcod-scripts', get_template_directory_uri() . '/assets/js/custom.js', array(
         'jquery',
         'gcod-slick-scripts',
         'gcod-sticky-sidebar-scripts'
      ), _S_VERSION, true);


      // Register menu scripts
      wp_register_script('gcod-menu-scripts', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), _S_VERSION, true);

      // Register masonry
      wp_register_script('gcod-masonry-scripts', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), _S_VERSION, true);

      // Enqueue jQuery.
      wp_enqueue_script('jquery');

      // Enqueue theme scripts.
      wp_enqueue_script('gcod-menu-scripts');
      wp_enqueue_script('gcod-masonry-scripts');
      wp_enqueue_script('gcod-scripts');

      // Enqueue vendor styles

      // Enqueue theme styles   
      wp_enqueue_style('gcod-styles', get_stylesheet_uri(), false, _S_VERSION);

      // Add RTL support.
      wp_style_add_data('gcod-styles', 'rtl', 'replace');
   }
}
add_action('wp_enqueue_scripts', 'gcod_enqueue_scripts');


// Search Overlay Assets

if (!function_exists('gcod_overlay_search_scripts')) {

   function gcod_overlay_search_scripts() {
      if (!is_admin()) {

         // Register the custom made javascript file
         wp_register_script('search-js-scripts', get_stylesheet_directory_uri() . '/assets/js/search.js', array('jquery'), _S_VERSION, true);

         // Enqueue the JavaScript File
         wp_enqueue_script('search-js-scripts');
         $wnm_custom = array('stylesheet_directory_uri' => get_stylesheet_directory_uri());

         // Now include the localized data on every page
         wp_localize_script('search-js-scripts', 'directory_uri', $wnm_custom);
         
      }
   }

   // Add Search Form To Footer
   add_action('wp_footer', 'gcod_overlay_search_scripts');
}

/**
 * Registers an editor stylesheet for the theme.
 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
 */
if (!function_exists('gcod_theme_add_editor_styles')) {
   function gcod_theme_add_editor_styles() {

      add_editor_style(
         trailingslashit(
            get_template_directory_uri()
         ) . 'assets/css/style-editor.css'
      );
   }
}
add_action('admin_init', 'gcod_theme_add_editor_styles');

/**
 * Registers an blocks stylesheet for both editor and frontend.
 * @link https://jasonyingling.me/enqueueing-scripts-and-styles-for-gutenberg-blocks/ 
 */

if (!function_exists('gcod_theme_add_block_styles')) {
   function gcod_theme_add_block_styles() {

      wp_enqueue_style(
         'gcod-blocks',
         get_stylesheet_directory_uri() . '/assets/css/style-blocks.css'
      );
   }
}
add_action('enqueue_block_assets', 'gcod_theme_add_block_styles');
add_action('enqueue_block_assets', 'gcod_link_google_fonts');

/**
 * Load Google Fonts from CDN.
 */
if (!function_exists('gcod_link_google_fonts')) {

   function gcod_link_google_fonts() {

      // Enter the URL of your Google Fonts generated from https://fonts.google.com/ here.      
      $google_fonts_url = 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';

      printf('<link rel="preload" as="style" href="%s" />', $google_fonts_url);
      printf('<link rel="stylesheet" href="%s" media="print" onload="this.media=\'all\'" />', $google_fonts_url);
      printf(
         '<noscript>
            <link rel="stylesheet" href="%s" />
         </noscript>',
         $google_fonts_url
      );
   }
}
add_action('wp_head', 'gcod_link_google_fonts');

// Enqueue Darkmode script
if (get_theme_mod('gcod_dark_mode_support')) {
   function gcod_add_darkmode_script() {
      wp_enqueue_script('darkmode-script', get_template_directory_uri() . '/assets/js/vendors/darkmode-js.min.js', array(), _S_VERSION, true);
   }
   add_action('wp_enqueue_scripts', 'gcod_add_darkmode_script');
}
