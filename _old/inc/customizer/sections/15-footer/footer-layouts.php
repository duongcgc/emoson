<?php

/**
 * Footer section customizer. *
 * Define setting's Field with https://kirki.org/docs/controls/
 * @section: gcod_setting_footer *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Setting footer
$section_id = 'gcod_footer_layout';
$priority = 0;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Footer Templates',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_footer',
   )
);

// Footer Layout selector
// @setting: gcod_layout_footer
$setting_name   = 'gcod_layout_footer';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Layout Footer', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_layout_footer' => [
            'selector'        => '.footer-wrapper',
            'render_callback' => 'gcod_change_footer_layout',
         ]
      ]
   )
);

// Footer Darkmode
// @setting: gcod_footer_darkmode
$setting_name   = 'gcod_footer_darkmode'; 
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Footer Darkmode', 'autumn-theme'),
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

// Link color
// @setting: gcod_copyright_text      
$setting_name   = 'gcod_footer_link_color';

Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'color',
      'settings'    => $setting_name, 
      'label'       => __('Footer Link Color', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => array(
         'alpha' => true,
      ),
      'transport' => 'postMessage',
      'js_vars'     => [
         [
            'element'   => '.site-footer a',
            'function'  => 'css',
            'property' => 'color',
         ]
      ],
      'partial_refresh' => [
         'gcod_footer_link_color' => [
            'selector'        => '.site-footer',
            'render_callback' => '__return_false',
         ],
      ]
   )
);


// Footer Elements setting
// @setting: gcod_footer_element_setting
$setting_name   = 'gcod_footer_element_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                  => 'sortable',
      'settings'              => $setting_name,
      'label'                 => esc_html__('Element setting', 'autumn-theme'),
      'section'               => $section_id,
      'default'               => gcod_defaults($setting_name),
      'choices'               => gcod_choices($setting_name),
      'priority'              => $priority++,
      'transport'             => 'postMessage',
      'partial_refresh'       => [
         'gcod_element_footer_setting' => [
            'selector'        => '.footer-wrapper',
            'render_callback' => 'gcod_change_footer_layout',
         ],
      ]
   ]
);
