<?php

/**
 * Register Widget Areas - Sidebars.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('gcod_widgets_init')) {

   function gcod_widgets_init() {
      register_sidebar(array(
         'name'          => esc_html__('Sidebar', 'autumn-theme'),
         'id'            => 'sidebar-main',
         'description'   => esc_html__('Add widgets here', 'autumn-theme'),
         'before_widget' => '<section id="%1$s" class="widget %2$s">',
         'after_widget'  => '</section>',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      ));
      register_sidebar(array(
         'name'          => esc_html__('Footer Sidebar', 'autumn-theme'),
         'id'            => 'sidebar-footer',
         'description'   => esc_html__('Add widgets here', 'autumn-theme'),
         'before_widget' => '<section id="%1$s" class="widget %2$s">',
         'after_widget'  => '</section>',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      ));
   }
   add_action('widgets_init', 'gcod_widgets_init');

   function widget_params($params) {
      if ('Main Sidebar' === $params[0]['name']) {
         // do something
      }
      return $params;
   }
   add_filter('dynamic_sidebar_params', 'widget_params');

   // support selective refresh widgets
   add_action('after_setup_theme', function () {
      add_theme_support('customize-selective-refresh-widgets');
   });
   
}