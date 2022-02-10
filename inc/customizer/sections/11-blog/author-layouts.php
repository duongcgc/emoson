<?php

/**
 * Post author (authors) layouts section customizer.
 * @section: gcod_post_layout
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout post author
$section_id = 'gcod_post_author_layout';
$priority = 4;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Archive Author',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_post',
   )
);

// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_slider_all_author_page_headline';
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
 * Author Page Featured Sections (priority 4)
 */


// Display Featured Sections on all author page?
$setting_name   = 'gcod_display_featured_slider_all_author_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Slider on All Author Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_all_author_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);


// Display Featured categories on all author page?
$setting_name   = 'gcod_display_featured_categories_all_author_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Categories on All Author Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_author_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured posts on all author page?
$setting_name   = 'gcod_display_featured_posts_all_author_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Posts on All Author Page', 'autumn-theme'),
      'description' => esc_html__('Default display by selected in Archive Page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_posts_all_author_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Page Layout  ============
$setting_name   = 'gcod_sidebar_layout_author_headline';
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

// Custom Author Post Layout
$setting_name   = 'gcod_post_author_same_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'            => $setting_name,
      'label'       => esc_html__('Setting same archive page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => 5
   ]
);


// Author Sidebar Layout selector
$setting_name   = 'gcod_sidebar_author_layout';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Author Sidebar Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback' => [
         [
            'setting'  => 'gcod_post_author_same_archive',
            'operator' => '===',
            'value'    => false,
         ]
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_page_layout' => [
      //       'selector'        => '.page-wrapper',
      //       'render_callback' => 'gcod_change_page_layout',
      //    ],
      // ]
   )
);

// Post Author Layout selector
$setting_name   = 'gcod_layout_author_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Author Post Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'active_callback' => [
         [
            'setting'  => 'gcod_post_author_same_archive',
            'operator' => '===',
            'value'    => false,
         ]
      ],
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

// Remove Author Title
$setting_name   = 'gcod_remove_author_title';
Kirki::add_field( 
   GCOD_CONFIG_ID, 
   [
	'type'        => 'toggle',
   'settings'    => $setting_name,
	'label'       => esc_html__( 'Remove Author Title', 'autumn-theme' ),
   'section'     => $section_id,
   'default'     => gcod_defaults($setting_name),
   'priority'     => $priority++,
] );

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_author_page_headline';
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
 * All Header Page Display on Author
 */



// Display Page Header Sections on all category page?
$setting_name   = 'gcod_display_pageheader_all_author_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Show Page Header on All Author Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_pageheader_all_author_page' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);



// Page Header Style selector
// @setting: gcod_author_pageheader_style
$setting_name   = 'gcod_author_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Author Page Header Layout', 'autumn-theme'),
      'description' => 'Style for Page Header on All Author - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_author_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_author_pageheader_style' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Page Header Style selector
// @setting: gcod_author_pageheader_style
$setting_name   = 'gcod_author_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Author Page Header Layout', 'autumn-theme'),
      'description' => 'Background for Author Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_author_page',
            'operator' => '!=',
            'value'    => 'hide',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_author_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Common Page Header Background Color
$setting_name   = 'gcod_common_author_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'            => $setting_name,
      'label'       => __('Select Common Color for Page Header Background on Author', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Author Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_author_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);

// Common Page Header Background URL
$setting_name   = 'gcod_common_author_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'            => $setting_name,
      'label'       => esc_html__('Common Author Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Author Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_author_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);



// Page Header Get Image for invidual Sing Page selector
// @setting: gcod_invidual_author_pageheader_bg_image_url
$setting_name   = 'gcod_invidual_author_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Select method get Background Author Page Header', 'autumn-theme'),
      'description' => 'Select method get background image for Invidual Author Page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_author_pageheader_background',
            'operator' => '===',
            'value'    => 'invidual',
         ],
      ],
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_author_pageheader_background' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);
