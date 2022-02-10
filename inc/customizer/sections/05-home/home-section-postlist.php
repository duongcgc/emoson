<?php

/**
 * Home PostList section customizer.
 * @section: gcod_home_section_post_list_settings
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Home section #1
$section_id = 'gcod_home_section_post_list_settings';
$priority = 4;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Home Post List Section Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_home',
   )
);

// Home post list section title
$setting_name   = 'gcod_section_home_post_list_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Post List Title', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_section_home_post_list_title' => [
            'selector'        => '.home-postlist-container',
            'render_callback' => 'gcod_change_home_postlist_style',
         ],
      ]
   ]
);

// Number Items
$setting_name   = 'gcod_section_home_post_list_number_items';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'number',
      'settings'      => $setting_name,
      'label'       => esc_html__('Number of items to show', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_section_home_post_list_number_items' => [
            'selector'        => '.home-postlist-container',
            'render_callback' => 'gcod_change_home_postlist_style',
         ],
      ]
   ]
);

// Home post list section style
$setting_name   = 'gcod_section_home_post_list_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Home Post List Section Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_section_home_post_list_style' => [
            'selector'        => '.home-postlist-container',
            'render_callback' => 'gcod_change_home_postlist_style',
         ],
      ]
   )
);
