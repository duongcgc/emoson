<?php

/**
 * Header layouts section customizer.
 * @section: gcod_header_layout
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$priority = 0;

// Layout header
$section_id = 'gcod_header_layout';

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Header Templates',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_header',
   )
);


// Header Layout selector
// @setting: gcod_layout_header
$setting_name   = 'gcod_layout_header';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Layout Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_layout_header' => [
      //       'selector'        => '.header-wrapper',
      //       'render_callback' => 'gcod_change_header_layout',
      //    ]
      // ]
   )
);

// Sticky Header
// @setting: gcod_header_sticky
$setting_name   = 'gcod_header_sticky';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                 => 'toggle',
      'settings'              => $setting_name,
      'label'                => esc_html__('Header Sticky', 'autumn-theme'),
      'description'          => 'Allow header to always appear when scrolling',
      'section'              => $section_id,
      'default'              => gcod_defaults($setting_name),
      'priority'             => $priority++,
   ]
);

// Header Overlay
// @setting: gcod_header_overlay
$setting_name   = 'gcod_header_overlay';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                 => 'toggle',
      'settings'              => $setting_name,
      'label'                => esc_html__('Header Overlay', 'autumn-theme'),
      'description'          => 'Allow header to always ontop other elements',
      'section'              => $section_id,
      'default'              => gcod_defaults($setting_name),
      'priority'             => $priority++,
   ]
);

// Header Darkmode
// @setting: gcod_header_darkmode
$setting_name   = 'gcod_header_darkmode';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Header Darkmode', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_layout_header' => [
            'selector'        => '.header-wrapper',
            'render_callback' => 'gcod_change_header_layout',
         ]
      ]
   )
);

// Header Background Color
$setting_name   = 'gcod_header_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'     => $setting_name,
      'label'       => __('Select Color for Header Background ', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
   ]
);

// Header Background URL
$setting_name   = 'gcod_header_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'     => $setting_name,
      'label'       => esc_html__('Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for background of Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
   ]
);
