<?php

/**
 * Header Menu section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$priority = 29;

// Header main menu
$section_id = 'gcod_header_main_menu';
Kirki::add_section(
   $section_id,
   array(
      'title'        =>  'Header Menu',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_header',
   )
);

// Header Menu selector
$setting_name   = 'gcod_header_menu_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'	  => $setting_name,
      'label'       => __('Header Menu Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_header_menu_style' => [
            'selector'        => '.header-wrapper',
            'render_callback' => 'gcod_change_header_layout',
         ],
      ]
   )
);

// Menu Navigation selector
$setting_name   = 'gcod_side_menu_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'	  => $setting_name,
      'label'       => __('Side Menu Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_side_menu_style' => [
      //       'selector'        => '.menu-wrapper',
      //       'render_callback' => 'gcod_change_menu_navigation',
      //    ],
      // ]
   )
);