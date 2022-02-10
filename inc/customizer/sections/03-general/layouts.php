<?php

/**
 * General layout section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_general_layout';
$priority = 0;

// General Layout
Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Page Layout Settings',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_general',
   )
);

// ==== Featured Sections ============
$setting_name   = 'gcod_featured_sections_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'    => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Show Featured Sections inside main content #primary
$setting_name   = 'gcod_show_featured_sections_postions';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Featured Sections at', 'autumn-theme'),
      'description' => 'Postion of featured sections on page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'   => 'auto'
   )
);

/** 
 * General All Page Featured Sections (priority 1)
 */

// Show Featured Slider on all page?
$setting_name   = 'gcod_general_show_featured_slider_all_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Featured Slider on All Page', 'autumn-theme'),
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

// Show Featured categories on all page?
$setting_name   = 'gcod_general_show_featured_categories_all_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Featured Categories on All Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_categories_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);

// Show Featured posts on all page?
$setting_name   = 'gcod_general_show_featured_posts_all_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Featured Posts on All Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_show_featured_posts_all_page' => [
            'selector'        => '.featured-sections',
            'render_callback' => 'gcod_change_featured_sections_content',
         ],
      ]
   ]
);


// ==== GENERAL LAYOUT ============
$setting_name   = 'gcod_general_layouts_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'section'     => $section_id,
      'settings'    => $setting_name,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Page Layout selector
// @setting: gcod_layout_general_page
$setting_name   = 'gcod_layout_general_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Layout', 'autumn-theme'),
      'description' => 'Layout for every page on site (home, page, post, archive,...)',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'auto'
   )
);

// ==== General Archive  ============
$setting_name   = 'gcod_general_archive_layout_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'    => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Remove Archive Title
$setting_name   = 'gcod_remove_archive_title';
Kirki::add_field( 
   GCOD_CONFIG_ID, 
   [
	'type'        => 'toggle',
   'settings'    => $setting_name,
	'label'       => esc_html__( 'Remove Archive Title', 'autumn-theme' ),
   'section'     => $section_id,
   'default'     => gcod_defaults($setting_name),
   'priority'     => $priority++,
] );

// Archive Layout selector
// @setting: gcod_general_archive_style
$setting_name   = 'gcod_general_archive_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Archive Layout', 'autumn-theme'),
      'description' => 'Layout style for archive page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_page_layout' => [
            'selector'        => '.archive-wrapper',
            'render_callback' => 'gcod_change_archive_layout',
         ],
      ]
   )
);

/** 
 * List - Grid Posts Sizing (spacing, number items) 
 **/

// Number of posts on archive
// @setting: gcod_general_archive_number_posts
$setting_name   = 'gcod_general_archive_number_posts';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'number',
      'settings'    => $setting_name,
      'label'       => esc_html__('Number posts archive', 'autumn-theme'),
      'description' => esc_html__('Number posts per page on archive', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',

   ]
);

// Number column of archive grid
// @setting: gcod_general_archive_grid_number_columns
$setting_name   = 'gcod_general_archive_grid_number_columns';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Number columns in grid', 'autumn-theme'),
      'description' => esc_html__('Number columns in grid archive page (if style not list)', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'placeholder' => esc_html__('Select an option...', 'autumn-theme'),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',

   ]
);