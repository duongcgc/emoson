<?php

/**
 * Page Header Section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Page Header
$section_id = 'gcod_pageheader_settings';
$priority = 1;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Page Header',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_general',
   )
);

/** 
 * General Enabled Page Header 
 */

// Enable Page Header on Sing Page
$setting_name   = 'gcod_general_show_pageheader_all_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Enable Page Header on All Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_general_show_pageheader_all_page' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   ]
);

// Enable Page Header on Single Post?
$setting_name   = 'gcod_general_show_pageheader_all_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Enable Page Header on All Post', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_general_show_pageheader_all_post' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   ]
);

// Enable Page Header on Archive Page?
$setting_name   = 'gcod_general_show_pageheader_all_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Enable Page Header on Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_general_show_pageheader_all_archive' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   ]
);

// Page Header Style selector
// @setting: gcod_general_pageheader_style
$setting_name   = 'gcod_general_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Header Layout', 'autumn-theme'),
      'description' => 'Style for General Page Header',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_page_layout' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Page Header Background Color
$setting_name   = 'gcod_general_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'    => $setting_name,
      'label'       => __('Select Color for Header Page Background ', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
   ]
);

// Page Header Background URL
$setting_name   = 'gcod_general_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_html__('Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
   ]
);