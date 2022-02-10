<?php

/**
 * Home Newsletter section customizer.
 * @section: gcod_home_section_newletter
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Home section #3
$section_id = 'gcod_home_section_newsletter_settings';
$priority = 24;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Home Newsletter Section Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_home',
   )
);

// Home newsletter section style
$setting_name   = 'gcod_section_home_newsletter_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Home Newsletter Section Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_home_section' => [
      //       'selector'        => '.home-wrapper',
      //       'render_callback' => 'gcod_change_home_section',
      //    ],
      // ]
   )
);


// Show newsletter Below Main Content
$setting_name   = 'gcod_section_home_newsletter_below_main';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show newsletter Below Main Content', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_slider_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Show newsletter On Archive Page
$setting_name   = 'gcod_section_home_newsletter_on_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Newsletter On Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_slider_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Show newsletter On Single Post
$setting_name   = 'gcod_section_home_newsletter_on_single';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Newsletter On Single Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_slider_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Home newsletter section title
$setting_name   = 'gcod_section_home_newsletter_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Newsletter Title', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Home newsletter section shortcode
$setting_name   = 'gcod_section_home_newsletter_shortcode';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Newsletter Form Shortcode', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Newsletter Background Color
$setting_name   = 'gcod_general_newsletter_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'    => $setting_name,
      'label'       => __('Select Color for Newsletter Background ', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Newsletter Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
   ]
);

// Newsletter Background URL
$setting_name   = 'gcod_general_newsletter_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_html__('Newsletter Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Newsletter', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
   ]
);