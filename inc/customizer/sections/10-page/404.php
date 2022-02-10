<?php

/**
 * 404 layouts section customizer.
 * @section: gcod_page404_layout
 * @since 1.0.0
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

// Layout page404
$section_id = 'gcod_page404_layout';
$priority = 3;

Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Page 404',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_page',
   )
);

// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_section_all_404_page_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'         => 'custom',
      'settings'		=> $setting_name,
      'section'      => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

/** 
 * Display Featured Sections on 404 Page (priority 2.2)
*/



// Display Featured Sections on all 404 page?
$setting_name   = 'gcod_display_featured_slider_all_404_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Display Featured Slider on All 404 Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in Page layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_all_404_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured categories on all 404 page?
$setting_name   = 'gcod_display_featured_categories_all_404_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'	  => $setting_name,
      'label'       => esc_html__('Display Featured Categories on All 404 Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in Page layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_all_404_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Display Featured posts on all 404 page?
$setting_name   = 'gcod_display_featured_posts_all_404_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Display Featured Posts on All 404 Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in Page layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_posts_all_404_page' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Page Layout  ============
$setting_name   = 'gcod_sidebar_layout_404_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'				=> $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);



// 404 Layout selector
$setting_name   = 'gcod_layout_page404';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Select 404 Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'active_callback' => [
         [
            'setting'  => 'gcod_404_using_page',
            'operator' => '===',
            'value'    => false,
         ]
      ],
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_site_page404_layout' => [
      //       'selector'        => '.page404-wrapper',
      //       'render_callback' => 'gcod_change_page404_layout',
      //    ],
      // ]
   )
);

// Custom 404 Page
$setting_name   = 'gcod_404_using_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Using a page make 404', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,      
   ]
);

// Page Selector for 404
$setting_name   = 'dropdown_pages_make_404';
Kirki::add_field( 
   GCOD_CONFIG_ID, 
   [
	'type'        => 'dropdown-pages',
   'settings'				=> $setting_name,
	'label'       => esc_html__( 'Select page for 404', 'autumn-theme' ),
	'section'     => $section_id,
	'default'     => gcod_defaults($setting_name),
	'priority'     => $priority++,
   'active_callback' => [
      [
         'setting'  => 'gcod_404_using_page',
         'operator' => '===',
         'value'    => true,
      ]
   ],
] );

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_404_page_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

/** 
 * All Header Page Display on 404 Page
*/

// Display Page Header Sections on all 404 page?
$setting_name   = 'gcod_display_pageheader_all_404_page';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Show Page Header on All 404 Page', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_pageheader_all_404_page' => [
      //       'selector'        => '.pageheader-sections',
      //       'render_callback' => 'gcod_change_pageheader_sections_content',
      //    ],
      // ]
   )
);

// Page Header Style selector
// @setting: gcod_page_pageheader_style
$setting_name   = 'gcod_page_404_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'	  => $setting_name,
      'label'       => __('Page Header 404 Style', 'autumn-theme'),
      'description' => 'Style for Page Header on All 404 - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_404_page',
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
$setting_name   = 'gcod_page_404_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Page Header Background 404', 'autumn-theme'),
      'description' => 'Background for Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_404_page',
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

// Common 404 Page Header Background Color
$setting_name   = 'gcod_common_404_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'				=> $setting_name,
      'label'       => __('Select Common Color for Header Page Background on 404 Page', 'autumn-theme'),
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

// Common 404 Page Header Background URL
$setting_name   = 'gcod_common_404_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Common 404 Page Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_page_404_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],         
      ],
   ]
);