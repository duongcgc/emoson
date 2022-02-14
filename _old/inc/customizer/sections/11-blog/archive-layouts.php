<?php

/**
 * Post archive (category, tags, authors) layouts section customizer.
 * @section: gcod_post_layout
 * @since 1.0.0
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout post archive
$section_id = 'gcod_post_archive_layout';
$priority = 0;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Archive Page',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_post',
   )
);

// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_all_archive_page_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'            => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

/** 
 * General Archive Page Featured Sections (priority 4)
 */



// Display Featured Slider on all archive page?
$setting_name   = 'gcod_display_featured_slider_all_archive_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Slider on All Archive Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in General Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_all_archive_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured categories on all archive page?
$setting_name   = 'gcod_display_featured_categories_all_archive_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Categories on All Archive Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in General Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_archive_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured posts on all archive page?
$setting_name   = 'gcod_display_featured_posts_all_archive_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Posts on All Archive Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in General Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_posts_all_archive_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Archive Layout ============
$setting_name   = 'gcod_sidebar_layout_archive_headline_blog';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'            => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);



// Archive Sidebar Layout selector
$setting_name   = 'gcod_sidebar_layout_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Archive Sidebar Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_page_layout' => [
      //       'selector'        => '.page-wrapper',
      //       'render_callback' => 'gcod_change_page_layout',
      //    ],
      // ]
   )
);

// Post Archive Layout selector
$setting_name   = 'gcod_layout_archive_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Archive Post Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_post_layout' => [
      //       'selector'        => '.post-wrapper',
      //       'render_callback' => 'gcod_change_post_layout',
      //    ],
      // ]
   )
);

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_archive_page_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'     => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

/** 
 * All Header Page Display on Archive
 */


// Display Page Header Sections on all archive page?
$setting_name   = 'gcod_display_pageheader_all_archive_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Page Header on All Archive Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_pageheader_all_archive_page' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);



// Page Header Style selector
// @setting: gcod_archive_pageheader_style
$setting_name   = 'gcod_archive_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Archive Page Header Layout', 'autumn-theme'),
      'description' => 'Style for Page Header on All Archive - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_archive_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_archive_pageheader_style' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);



// Page Header Style selector
// @setting: gcod_archive_pageheader_style
$setting_name   = 'gcod_archive_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Archive Page Header Background', 'autumn-theme'),
      'description' => 'Background for Archive Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_archive_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_archive_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Common Page Header Background Color
$setting_name   = 'gcod_common_archive_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'            => $setting_name,
      'label'       => __('Select Common Color for Page Header Background on Archive', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Archive Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_archive_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);

// Common Page Header Background URL
$setting_name   = 'gcod_common_archive_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'            => $setting_name,
      'label'       => esc_html__('Common Archive Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Archive Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_archive_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);



// Page Header Get Image for invidual Sing Page selector
// @setting: gcod_invidual_archive_pageheader_bg_image_url
$setting_name   = 'gcod_invidual_archive_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Select method get Background Archive Page Header', 'autumn-theme'),
      'description' => 'Select method get background image for Invidual Archive Page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_archive_pageheader_background',
            'operator' => '===',
            'value'    => 'invidual',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_archive_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);
