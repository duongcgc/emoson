<?php

/**
 * Home PostList section customizer.
 * @section: gcod_home_section_lastest_posts_settings
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Home section #2
$section_id = 'gcod_home_section_lastest_posts_settings';
$priority = 14;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Home Lastest Post Section Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_home',
   )
);

// Home lastest posts section title
$setting_name   = 'gcod_section_home_lastest_posts_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Lastest Posts Title', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_section_home_lastest_posts_title' => [
            'selector'        => '.home-lastest-posts-container',
            'render_callback' => 'gcod_change_home_section_lastest_posts_style',
         ],
      ]
   ]
);

// Number Items
$setting_name   = 'gcod_section_home_lastest_posts_number_items';
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
         'gcod_section_home_lastest_posts_number_items' => [
            'selector'        => '.home-lastest-posts-container',
            'render_callback' => 'gcod_change_home_section_lastest_posts_style',
         ],
      ]
   ]
);

// Home lastest posts section style
$setting_name   = 'gcod_section_home_lastest_posts_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Home Lastest Posts Section Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_section_home_lastest_posts_style' => [
            'selector'        => '.home-lastest-posts-container',
            'render_callback' => 'gcod_change_home_section_lastest_posts_style',
         ],
      ]
   )
);


// Show lastest_posts Below Main Content
$setting_name   = 'gcod_section_home_lastest_posts_below_main';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Lastest Posts Below Main Content', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_slider_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Show lastest_posts On Archive Page
$setting_name   = 'gcod_section_home_lastest_posts_on_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Lastest Posts On Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_slider_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Show lastest_posts On Single Post
$setting_name   = 'gcod_section_home_lastest_posts_on_single';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Lastest Posts On Single Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_slider_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Lastest Posts Background Color
$setting_name   = 'gcod_general_lastest_posts_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'    => $setting_name,
      'label'       => __('Select Color for Lastest Posts Background ', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Lastest Posts Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
   ]
);

// Lastest Posts Background URL
$setting_name   = 'gcod_general_lastest_posts_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_html__('Lastest Posts Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Lastest Posts', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
   ]
);
