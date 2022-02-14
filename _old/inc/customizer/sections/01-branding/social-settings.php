<?php

/**
 * Social icons settings section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$priority = 19;

// Setting Header
$section_id = 'gcod_setting_social_icons';
Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Social Icons Settings',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_branding',
   )
);

// Social Icons setting
// @setting: gcod_social_icons_setting
$setting_name   = 'gcod_social_icons_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'sortable',
      'settings'    => $setting_name,
      'label'       => esc_html__('Display Icons Setting', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_social_icons_setting' => [
            'selector'        => '.gcod-social-icons',
            'render_callback' => 'gcod_update_header_social_elements',
         ],
      ]
   ]
);
