<?php

/**
 * Rename or Remove default sections. *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function gcod_customize_register($wp_customize) {

   /* 
      Some default section can remove: $wp_customize->remove_section('name')
      or rename by $wp_customize->add_section('name', $args)
      Color: 					colors
      Background Image: 	background_image
      Header Image: 			header_image
      Homepage Settings: 	static_front_page
      Tagline: 				blogdescription
      Site Title: 			blogname
      Display Site Title and Tagline: display_header_text

      Refine existing section	

      Branding (logo, tagline, site title,...)
   */

   // Custom CSS
   $wp_customize->get_section('custom_css')->title = __('Custom CSS', 'autumn-theme');

   // $wp_customize->get_panel('nav_menus')->priority = 200;
   // $wp_customize->get_panel('widgets')->priority = 150;

   // Site Profile
   $wp_customize->add_section(
      'title_tagline',
      array(
         'title'    => esc_html__('Site Profile', 'autumn-theme'),
         'priority' => 1,
         'panel'    => 'gcod_panel_branding'
      )
   );

   // Header Image
   $wp_customize->add_section(
      'header_image',
      array(
         'title'    => esc_html__('Header Background', 'autumn-theme'),
         'priority' => 2,
         'panel'    => 'gcod_panel_header'
      )
   );

   // Background Image
   $wp_customize->add_section(
      'background_image',
      array(
         'title'    => esc_html__('Page Background', 'autumn-theme'),
         'priority' => 3,
         'panel'    => 'gcod_panel_general'
      )
   );

   // Homepage Settings

   // Check status home mode
   $home_builder = get_theme_mod('gcod_home_content_sections', false);
   $status_mark = ' (selected)';
   if ($home_builder) {
      $status_mark = '';
   }

   $wp_customize->add_section(
      'static_front_page',
      array(
         'title'    => esc_html__('Using Static Page' . $status_mark, 'autumn-theme'),
         'priority' => 4,
         'panel'    => 'gcod_panel_home'
      )
   );

   // Color Settings
   $wp_customize->add_section(
      'colors',
      array(
         'title'    => esc_html__('Color', 'autumn-theme'),
         'priority' => 5,
         'panel'    => 'gcod_panel_general'
      )
   );

   // Settings with live update
   $wp_customize->get_setting('blogname')->transport         = 'postMessage';
   $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
   $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
   $wp_customize->get_setting('custom_logo')->transport      = 'postMessage';


   // Settings selective for render live
   // Functions callback update at customizer-render.php 
   if (isset($wp_customize->selective_refresh)) {

      $wp_customize->selective_refresh->add_partial(
         'blogname',
         array(
            'selector'        => '.site-title a',
            'render_callback' => 'gcod_customize_partial_blogname'
         )
      );

      $wp_customize->selective_refresh->add_partial(
         'blogdescription',
         array(
            'selector'        => '.site-description',
            'render_callback' => 'gcod_customize_partial_blogdescription'
         )
      );

      $wp_customize->selective_refresh->add_partial(
         'custom_logo',
         array(
            'selector'        => '.wpmm_brand_logo_wrap',
            'render_callback' => 'gcod_customize_partial_header_logo'
         )
      );
   }

}

add_action('customize_register', 'gcod_customize_register');

// Change priority for vendor featured
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
	$progress_panel = $wp_customize->get_panel('progress');
	$time_panel = $wp_customize->get_panel('time');

	if ($progress_panel) {
		$progress_panel->priority = 500;
	}
	if ($time_panel) {
		$time_panel->priority = 600;
	}
}, 12);