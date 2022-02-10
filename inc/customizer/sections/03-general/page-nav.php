<?php

/**
 * Page navigation section customizer.
 * @section: gcod_pagenav_navigation
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit; 

// Navigation pagenav
$section_id = 'gcod_pagenav_navigation';
$priority = 2;

Kirki::add_section(
   $section_id,
   array(
      'title'        => 'PageNavi Settings',
      'description'  => 'Setting website navigation components',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_general',
   )
);

// Page Navigation selector
$setting_name   = 'gcod_navigation_pagenav';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Navigation', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Breadcrumb selector
$setting_name   = 'gcod_breadcrumb_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Breadcrumb', 'autumn-theme'),
      'description' => __('Select style for path links component', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
   )
);