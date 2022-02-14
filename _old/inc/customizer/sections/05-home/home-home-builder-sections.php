<?php

/**
 * Home section settingscustomizer.
 * @section: gcod_home_section_settings
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout Home Sections
$section_id = 'gcod_home_section_settings';
$priority = 2;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Home Section Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_home',
   )
);

// Boxed Home Layout
$setting_name   = 'gcod_home_using_boxed_layout';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'     => $setting_name,
      'label'       => esc_html__('Home boxed layout', 'autumn-theme'),
      'description' => esc_html__('Using box layout for content home page - default fullwidth', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

/****************/

// Home Builder Sidebar Layout Selector
$setting_name   = 'gcod_sidebar_layout_home_builder';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Home Builder Sidebar Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Home Sections setting
// @setting: gcod_home_section_setting
$setting_name   = 'gcod_home_section_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'sortable',
      'settings'    => $setting_name,
      'label'       => esc_html__('Home Sections', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'active_callback' => [
         [
            'setting'  => 'gcod_home_content_sections',
            'operator' => '==',
            'value'    => true,
         ]
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_element_home_setting' => [
      //       'selector'        => '.site-content',
      //       'render_callback' => 'gcod_change_home_content_layout',
      //    ],
      // ]
   ]
);
