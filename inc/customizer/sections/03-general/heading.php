<?php

/**
 * Heading section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// General Heading
$section_id = 'gcod_general_headings';
$priority = 13;
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Heading Settings (Single)',
      'priority' => $priority++,
      'panel' => 'gcod_panel_general',
   )
);

// Title - Main Heading selector
$setting_name   = 'gcod_page_title_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Title - Main Heading', 'autumn-theme'),
      'description' => __('Select style for heading (pages, sections, components)', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_pagenav_navigation' => [
      //       'selector'        => '.pagenav-wrapper',
      //       'render_callback' => 'gcod_change_pagenav_navigation',
      //    ],
      // ]
   )
);

// Heading level 1
$setting_name = 'gcod_heading_1_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading 1', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Roboto', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.entry-content h1',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Heading 1 size
$setting_name = 'gcod_heading_1_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Font size', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);

// Heading level 2
$setting_name = 'gcod_heading_2_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading 2', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'    => 'postMessage',
      'js_vars'      => [
         [
            'element'  => '.entry-content h2',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Heading 2 size
$setting_name = 'gcod_heading_2_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Font size 2', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);

// Heading level 3
$setting_name = 'gcod_heading_3_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading 3', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Roboto', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.entry-content h3',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Heading 3 size
$setting_name = 'gcod_heading_3_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Font size 3', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);

// Heading level 4
$setting_name = 'gcod_heading_4_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading 4', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.entry-content h4',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Heading 4 size
$setting_name = 'gcod_heading_4_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Font size 4', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);

// Heading level 5
$setting_name = 'gcod_heading_5_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading 5', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Roboto', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.entry-content h5',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Heading 5 size
$setting_name = 'gcod_heading_5_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Font size 5', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);

// Heading level 6
$setting_name = 'gcod_heading_6_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading 6', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.entry-content h6',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Heading 6 size
$setting_name = 'gcod_heading_6_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Font size', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);
