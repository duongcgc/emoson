<?php

/**
 * Post category (category) layouts section customizer.
 * @section: gcod_post_layout
 * @since 1.0.0
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout post category
$section_id = 'gcod_post_category_layout';
$priority = 2;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Archive Category',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_post',
   )
);

// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_slider_all_archive_page_headline';
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
 * Category Page Featured Sections (priority 4)
 */



// Display Featured Sections on all category page?
$setting_name   = 'gcod_display_featured_slider_all_category_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Slider on All Category Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in Category Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_all_category_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured categories on all category page?
$setting_name   = 'gcod_display_featured_categories_all_category_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Categories on All Category Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in Category Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_category_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured posts on all category page?
$setting_name   = 'gcod_display_featured_posts_all_category_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Posts on All Category Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in Category Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_posts_all_category_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Page Layout  ============
$setting_name   = 'gcod_sidebar_layout_archive_headline';
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

// Custom Category Post Layout
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'            => $setting_name,
      $setting_name   = 'gcod_post_category_same_archive',
      'label'       => esc_html__('Setting same archive page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => 6
   ]
);


// Category Sidebar Layout selector
$setting_name   = 'gcod_sidebar_layout_category';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Category Sidebar Layout', 'autumn-theme'),
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

// Post Category Layout selector
$setting_name   = 'gcod_layout_category_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Category Post Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'active_callback' => [
         [
            'setting'  => 'gcod_post_category_same_archive',
            'operator' => '===',
            'value'    => false,
         ]
      ],
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_post_layout' => [
      //       'selector'        => '.post-wrapper',
      //       'render_callback' => 'gcod_change_post_layout',
      //    ],
      // ]
   )
);

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_category_page_headline';
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
 * All Header Page Display on Category
 */


// Display Page Header Sections on all category page?
$setting_name   = 'gcod_display_pageheader_all_category_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Show Page Header on All Category Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_pageheader_all_category_page' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);



// Page Header Style selector
// @setting: gcod_category_pageheader_style
$setting_name   = 'gcod_category_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Category Page Header Layout', 'autumn-theme'),
      'description' => 'Style for Page Header on All Category - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_category_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_category_pageheader_style' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Page Header Style selector
// @setting: gcod_category_pageheader_style
$setting_name   = 'gcod_category_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Category Page Header Background', 'autumn-theme'),
      'description' => 'Background for Category Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_category_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_category_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Common Page Header Background Color
$setting_name   = 'gcod_common_category_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'            => $setting_name,
      'label'       => __('Select Common Color for Page Header Background on Category', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Category Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_category_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);

// Common Page Header Background URL
$setting_name   = 'gcod_common_category_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'            => $setting_name,
      'label'       => esc_html__('Common Category Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Category Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_category_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);

// Page Header Get Image for invidual Sing Page selector
// @setting: gcod_invidual_category_pageheader_bg_image_url
$setting_name   = 'gcod_invidual_category_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Select method get Background Category Page Header', 'autumn-theme'),
      'description' => 'Select method get background image for Invidual Category Page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_category_pageheader_background',
            'operator' => '===',
            'value'    => 'invidual',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_category_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);
