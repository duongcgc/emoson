<?php

/**
 * Home Static Front Paage section customizer.
 * @section: static_front_page
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout Home Blog List
$section_id = 'static_front_page';
$priority = 9;

// Home Blog List Layout selector
$setting_name   = 'gcod_layout_home_blog_list';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Home Blog List Layout', 'autumn-theme'),
      'label'       => __('Select layout style for Blog list on Home Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
      'active_callback' => [
         [
            'setting'  => 'gcod_home_content_sections',
            'operator' => '==',
            'value'    => false,
         ]
      ],
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_layout_home_blog_list' => [
            'selector'        => '.site-main',
            'render_callback' => 'gcod_change_home_main_bloglist_layout',
         ],
      ]
   )
);

// Home Featured Sections setting
// @setting: gcod_featured_sections_setting
$setting_name   = 'gcod_featured_sections_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'sortable',
      'settings'            => $setting_name,
      'label'       => esc_html__('Home Sections', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,     
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_featured_sections_setting' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);
