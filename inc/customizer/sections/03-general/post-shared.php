<?php

/**
 * General Shared customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'post_shared';
$priority = 10;

// Setting Header
$section_id = 'gcod_setting_social_shared';
Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Social Shared Settings',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_general',
   )
);

// Select button concept for site
$setting_name   = 'gcod_button_shared_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Button Style:', 'autumn-theme'),
      'description' => 'Button shared style on over site',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'   => 'auto'
   )
);

// Social Shared setting
// @setting: gcod_social_shared_setting
$setting_name   = 'gcod_social_shared_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'sortable',
      'settings'    => $setting_name,
      'label'       => esc_html__('Display Shared Setting', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_social_shared_setting' => [
      //       'selector'        => '.post-share .social-btn',
      //       'render_callback' => 'gcod_update_social_shared_elements',
      //    ],
      // ]
   ]
);


/**
 * SHARED BUTTONS SHOW ON
 */

// @setting: gcod_shared_buttons_show_on
$setting_name = 'gcod_shared_buttons_show_on';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'multicheck',
      'settings'    => $setting_name,
      'label'       => esc_html__('Shared buttons show on', 'autumn-theme'),
      'description' => esc_html__('Check pages to control them display shared buttons.', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'   =>  $priority++,      
   ]
);