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
$section_id = 'gcod_setting_footer';
$priority = 1;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Footer Template Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_footer',
   )
);

// Footer Photo
// @setting: gcod_footer_photo_url
// Default get from main photo      
$setting_name   = 'gcod_footer_photo_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'				=> $setting_name,
      'settings'    => $setting_name,
      'label'       => esc_html__('Footer Photo (URL)', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'transport' => 'postMessage',
      'partial_refresh' => [
         'gcod_footer_photo_url' => [
            'selector'        => '.footer-photo',
            'render_callback' => '__return_false',
         ],
      ]
   ]
);

// Footer Logo
// @setting: gcod_footer_logo_url
// Default get from main logo
$setting_name   = 'gcod_footer_logo_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'				=> $setting_name,
      'settings'    => $setting_name,
      'label'       => esc_html__('Footer Logo (URL)', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'transport' => 'postMessage',      
   ]
);

// Footer Logo Dark
// @setting: gcod_footer_logo_url_dark
// Default get from footer logo
$setting_name   = 'gcod_footer_logo_url_dark';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'	  => $setting_name,
      'settings'    => $setting_name,
      'label'       => esc_html__('Footer Logo (URL) - Darkmode', 'autumn-theme'),
      'description'       => esc_html__('If not select darkmode logo using footer logo', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'transport' => 'postMessage',
   ]
);

// Footer Information
// @setting: gcod_site_information_text
$setting_name   = 'gcod_site_information_text';

Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'      => 'editor',
      'settings'    => $setting_name,
      'label'     => esc_html__('Site Information', 'autumn-theme'),
      'section'   => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport' => 'postMessage',
      'js_vars'   => [
         [
            'element'   => '.footer-infor',
            'function'  => 'html',
         ]
      ],
      'partial_refresh' => [
         'gcod_copyright_text' => [
            'selector'        => '.footer-infor',
            'render_callback' => '__return_false',
         ],
      ]
   )
);

// Copyright text
// @setting: gcod_copyright_text      
$setting_name   = 'gcod_copyright_text';

Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'      => 'text',
      'settings'    => $setting_name,
      'label'     => esc_html__('Copyright Text', 'autumn-theme'),
      'section'   => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport' => 'postMessage',
      'js_vars'   => [
         [
            'element'   => '.copyright-text',
            'function'  => 'html',
         ]
      ],
      'partial_refresh' => [
         'gcod_copyright_text' => [
            'selector'        => '.copyright-text',
            'render_callback' => '__return_false',
         ],
      ]
   )
);

