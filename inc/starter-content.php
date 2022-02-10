<?php

/**
 * Array of starter content.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('gcod_starter_content_theme_support')) {

   function gcod_starter_content_theme_support() {
      /*
      * Define starter content for the theme.
      * See: https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
      */
      $starter_content = array(
         'options'     => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
         ),

         'attachments' => array(
            'image-logo' => array(
               'post_title' => _x('Logo', 'Theme starter content', 'autumn-theme'),
               'file'       => 'inc/customizer/images/logo.png',
            ),
         ),

         'theme_mods'  => array(
            'show_on_front'         => 'page',
            'blogdescription'       => _x('Autumn Theme, A beautiful portfolio WordPress theme by ThemeBeans', 'Theme starter content', 'autumn-theme'),
            'custom_logo_max_width' => gcod_defaults('custom_logo_max_width'),
         ),

         'widgets'     => array(
            'sidebar-1' => array(
               'text_about',
            ),
         ),

         'posts'       => array(
            'home'  => array(
               'post_title' => _x('Portfolio', 'Theme starter content', 'autumn-theme'),
            ),
            'about' => array(
               'post_title' => _x('About Me', 'Theme starter content', 'autumn-theme'),
            ),
            'blog'  => array(),
         ),

         'nav_menus'   => array(

            'primary' => array(
               'name'  => esc_html__('Primary', 'autumn-theme'),
               'items' => array(
                  'page_home',
                  'page_about',
               ),
            ),

            'footer'  => array(
               'name'  => esc_html__('Footer', 'autumn-theme'),
               'items' => array(
                  'page_home',
                  'page_about',
                  'page_contact',
               ),
            ),

            'social'  => array(
               'name'  => esc_html__('Social Menu', 'autumn-theme'),
               'items' => array(
                  'link_twitter',
                  'link_instagram',
                  'link_facebook',
               ),
            ),
         ),
      );

      /**
       * Filters Autumn Theme array of starter content.
       *
       * @since Autumn Theme 1.0
       *
       * @param array $starter_content Array of starter content.
       */
      $starter_content = apply_filters('gcod_starter_content', $starter_content);

      add_theme_support('starter-content', $starter_content);
   }

   // add_action('after_setup_theme', 'gcod_starter_content_theme_support');
}
