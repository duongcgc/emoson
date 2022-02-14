<?php

/**
 * Header settings section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$priority = 19;

// Setting Header
$section_id = 'gcod_setting_header';
Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Header Elements Settings',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_header',
   )
);

// Header Elements setting
// @setting: gcod_header_element_setting
$setting_name   = 'gcod_header_element_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'sortable',
      'settings'            => $setting_name,
      'label'       => esc_html__('Element setting', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_element_header_setting' => [
            'selector'        => '.header-wrapper',
            'render_callback' => 'gcod_change_header_layout',
         ],
      ]
   ]
);