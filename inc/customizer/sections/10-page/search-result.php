<?php

/**
 * Search result search result section customizer.
 * @section: gcod_search_layout
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
// Layout search
$section_id = 'gcod_setting_search_result';
$priority = 2;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Page Search Result',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_page',
   )
);


// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_section_all_search_page_headline';
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
 * Display Featured Sections on Search Result (priority 2.2)
 */



// Display Featured Sections on all search result page?
$setting_name   = 'gcod_display_featured_slider_all_search_result';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Slider on All Search Result', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in Archive layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_all_search_result' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured categories on all search result page?
$setting_name   = 'gcod_display_featured_categories_all_search_result';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Categories on All Search Result', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in Archive layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_search_result' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured posts on all search result page?
$setting_name   = 'gcod_display_featured_posts_all_search_result';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Display Featured Posts on All Search Result', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in Archive layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_posts_all_search_result' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Page Layout  ============
$setting_name   = 'gcod_sidebar_layout_search_headline';
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

// Custom Search Result Layout
$setting_name   = 'gcod_search_result_same_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'            => $setting_name,
      'label'       => esc_html__('Setting same archive page', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);


// Search Sidebar List
$gcod_search_sidebar_styles = array(
   'general' => esc_attr__('General Layout', 'autumn-theme'),
   'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
   'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
   'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
);

// Search Sidebar Layout selector
$setting_name   = 'gcod_sidebar_layout_search';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Search Sidebar Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => $gcod_search_sidebar_styles,
      'active_callback' => [
         [
            'setting'  => 'gcod_search_result_same_archive',
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

// Search result Layout selector
$setting_name   = 'gcod_layout_search';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'     => $setting_name,
      'label'       => __('Search Result Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'active_callback' => [
         [
            'setting'  => 'gcod_search_result_same_archive',
            'operator' => '===',
            'value'    => false,
         ]
      ],
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_search_layout' => [
      //       'selector'        => '.search-wrapper',
      //       'render_callback' => 'gcod_change_search_layout',
      //    ],
      // ]
   )
);

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_search_page_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'     => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
   ]
);

/** 
 * All Header Page Display on Search Page
 */

// Display Page Header Sections on all Search page?
$setting_name   = 'gcod_display_pageheader_all_search_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => esc_html__('Show Page Header on All Search Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_pageheader_all_search_page' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Page Header Style selector
// @setting: gcod_page_pageheader_style
$setting_name   = 'gcod_page_search_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Page Header Style', 'autumn-theme'),
      'description' => 'Style for Page Header on All Page - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_search_page',
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
$setting_name   = 'gcod_page_search_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'            => $setting_name,
      'label'       => __('Page Header Background on Search Result', 'autumn-theme'),
      'description' => 'Background for Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_search_page',
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

// Common Search Page Header Background Color
$setting_name   = 'gcod_common_search_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'            => $setting_name,
      'label'       => __('Select Common Color for Header Page Background on search Page', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_page_404_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);

// Common Search Page Header Background URL
$setting_name   = 'gcod_common_search_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'            => $setting_name,
      'label'       => esc_html__('Common Search Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_page_search_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],
      ],
   ]
);
