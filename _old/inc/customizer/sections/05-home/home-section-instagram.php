<?php

/**
 * Home Instagram section customizer.
 * @section: gcod_home_section_instagram
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Home section #4
$section_id = 'gcod_home_section_instagram_settings';
$priority = 34;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Home Instagram Section Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_home',
   )
);

// Home post list section style
$setting_name   = 'gcod_section_home_instagram_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Home Instagram Section Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Home instagram section title
$setting_name   = 'gcod_section_home_instagram_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Instagram Title', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);
// Home instagram section shortcode
$setting_name   = 'gcod_section_home_instagram_shortcode';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Instagram Shortcode', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Show Instagram Below Main Content
$setting_name   = 'gcod_section_home_instagram_below_main';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Instagram Below Main Content', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Show Instagram On Archive Page
$setting_name   = 'gcod_section_home_instagram_on_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Instagram On Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Show Instagram On Single Post
$setting_name   = 'gcod_section_home_instagram_on_single';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Instagram On Single Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Instagram Background Color
$setting_name   = 'gcod_general_instagram_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'    => $setting_name,
      'label'       => __('Select Color for Instagram Background ', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Instagram Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
   ]
);

// Instagram Background URL
$setting_name   = 'gcod_general_instagram_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_html__('Instagram Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Instagram', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
   ]
);