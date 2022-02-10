<?php

/**
 * Page layouts section customizer.
 * @section: gcod_page_layout
 * @since 1.0.0
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout page
$section_id = 'gcod_page_layout';
$priority = 1;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Page Layout',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_page',
   )
);

// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_section_all_single_page_headline';
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

/** 
 * All Single Page Featured Sections (priority 2.1)
*/



// Display Featured Sections on all single page?
$setting_name   = 'gcod_display_featured_slider_all_single_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Featured Slider on All Single Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_all_single_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured categories on all single page?
$setting_name   = 'gcod_display_featured_categories_all_single_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Featured Categories on All Single Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_single_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured posts on all single page?
$setting_name   = 'gcod_display_featured_posts_all_single_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show Featured Posts on All Single Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_single_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Page Layout  ============
$setting_name   = 'gcod_sidebar_layout_page_headline';
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

// Page Sidebar Layout selector
$setting_name   = 'gcod_sidebar_layout_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Sidebar Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Page Layout selector
$setting_name   = 'gcod_layout_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Layout Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_page_layout' => [
      //       'selector'        => '.page-wrapper',
      //       'render_callback' => 'gcod_change_page_layout',
      //    ],
      // ]
   )
);

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_single_page_headline';
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

/** 
 * All Header Page Display on Page
*/

// Display Page Header Section Choices
$gcod_display_pageheader_section_choices = array (
   'general' => esc_attr__('General Setting', 'autumn-theme'),
   'hide' => esc_attr__('Hide', 'autumn-theme'),
   'show' => esc_attr__('Show', 'autumn-theme'),   
);

// Display Page Header Sections on all single page?
$setting_name   = 'gcod_display_pageheader_all_single_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Display Page Header on All Single Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => $gcod_display_pageheader_section_choices,
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_pageheader_section_choices' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);



// Page Header Style selector
// @setting: gcod_page_pageheader_style
$setting_name   = 'gcod_page_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Page Header Style', 'autumn-theme'),
      'description' => 'Style for Page Header on All Page - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_single_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],         
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_page_pageheader_style' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Page Header Style selector
// @setting: gcod_page_pageheader_style
$setting_name   = 'gcod_page_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Using Page Header Background', 'autumn-theme'),
      'description' => 'Background for Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_single_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],         
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_page_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Common Page Header Background Color
$setting_name   = 'gcod_common_page_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'    => $setting_name,
      'label'       => __('Select Common Color for Header Page Background on Page', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_page_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],         
      ],
   ]
);

// Common Page Header Background URL
$setting_name   = 'gcod_common_page_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'    => $setting_name,
      'label'       => esc_html__('Common Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_page_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],         
      ],
   ]
);

// Page Header Get Image for invidual Sing Page selector
// @setting: gcod_invidual_page_pageheader_bg_image_url
$setting_name   = 'gcod_invidual_page_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Select method get Background Page Header', 'autumn-theme'),
      'description' => 'Select method get background image for Invidual Page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_page_pageheader_background',
            'operator' => '===',
            'value'    => 'invidual',
         ],         
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_page_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);