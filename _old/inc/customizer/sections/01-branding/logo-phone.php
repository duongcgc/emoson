<?php

/**
 * Logo and Hotline Settings section customizer. *
 * @section: gcod_logo_phone_settings
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_logo_phone_settings';
$priority = 1;
Kirki::add_section(
   $section_id,
   array(
      'title'          => esc_attr__('Site Information', 'autumn-theme'),
      'priority'       => $priority++,
      'capability'     => 'edit_theme_options',
      'panel'          => 'gcod_panel_branding'
   )
);

// Logo Dark
// @setting: gcod_custom_logo_dark
$setting_name = 'gcod_custom_logo_dark';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Logo on Darkmode', 'autumn-theme'),
      'description' => esc_attr__('If not set Logo Default apply into Darkmode', 'autumn-theme'),
      'section'     => 'title_tagline',
      'default'     => gcod_defaults($setting_name),
      'transport'            => 'postMessage',    
      'priority'     => 8,
   )
);

// Logo Mobile
// @setting: gcod_logo_mobile
$setting_name = 'gcod_logo_mobile';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Logo Mobile', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'partial_refresh' => [
         'custom_logo' => [
            'selector'        => '.custom-logo',
            'render_callback' => '__return_false',
         ],
      ],
      'priority'     => $priority++,
   )
);

// Hotline
// @setting: gcod_hotline
$setting_name = 'gcod_hotline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Hotline', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Email
// @setting: gcod_email
$setting_name = 'gcod_email';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Email', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);
