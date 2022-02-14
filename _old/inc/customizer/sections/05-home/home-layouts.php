<?php

/**
 * Home layouts section customizer.
 * @section: gcod_home_layout
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Check status home mode
$home_builder = get_theme_mod('gcod_home_content_sections', false);
$priority = 2;

$status_mark = ' (selected)';
if (!$home_builder) {
   $status_mark = '';
}

// Layout header
$section_id = 'gcod_home_layout';
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Home Section Builder' . $status_mark,
      'priority'     => $priority++,
      'panel' => 'gcod_panel_home',
   )
);


// Using sections for build home page
// @setting: gcod_home_content_sections
$setting_name   = 'gcod_home_content_sections';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'            => $setting_name,
      'label'                   => esc_html__('Home Builder', 'autumn-theme'),
      'description'             => 'Build home page with sections',
      'section'                 => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Home Layout selector
$setting_name   = 'gcod_layout_home_content';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Home Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
      'active_callback' => [
         [
            'setting'  => 'gcod_home_content_sections',
            'operator' => '==',
            'value'    => true,
         ]
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_home_layout' => [
      //       'selector'        => '.inner-home-content',
      //       'render_callback' => 'gcod_change_home_content_layout',
      //    ],
      // ]
   )
);
