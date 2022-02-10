<?php

/**
 * Post layouts section customizer.
 * @section: gcod_post_layout
 * @since 1.0.0
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
// Layout post
$section_id = 'gcod_post_layout';
$priority = -1;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Single Post',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_post',
   )
);

// ==== Featured Sections  ============
$setting_name   = 'gcod_display_featured_slider_all_single_post_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'	  => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

/** 
 * All Single Post Featured Sections (priority 3)
*/

// Display Featured Sections on all single post?
$setting_name   = 'gcod_display_featured_slider_on_single_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Display Featured Slider on All Single Post', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_slider_on_single_post' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Show Featured categories on all single post?
$setting_name   = 'gcod_display_featured_categories_on_single_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Display Featured Categories on All Single Post', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_categories_on_single_post' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

// Show Featured posts on all single post?
$setting_name   = 'gcod_display_featured_posts_on_single_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Display Featured Posts on All Single Post', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page layouts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_display_featured_posts_on_single_post' => [
      //       'selector'        => '.featured-sections',
      //       'render_callback' => 'gcod_change_featured_sections_content',
      //    ],
      // ]
   )
);

/****************/

// ==== Post Layout  ============
$setting_name   = 'gcod_sidebar_layout_post_headline';
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



// Single Post Sidebar Layout selector
$setting_name   = 'gcod_sidebar_layout_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Single Post Sidebar Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Post Layout selector
$setting_name   = 'gcod_layout_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Single Post Layout', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'            => 'postMessage',
   )
);

// Related Posts Style selector
$setting_name   = 'gcod_section_single_related_posts_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Single Related Posts Style', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Related Posts Source selector
$setting_name   = 'gcod_section_single_related_posts_source';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Single Related Posts get by', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);

// Number Items
$setting_name   = 'gcod_section_single_related_posts_number';
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
    ]
);

// Get posts order
$setting_name   = 'gcod_section_single_related_posts_order';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'select',
        'settings'                => $setting_name,
        'label'                   => esc_html__('Posts order', 'autumn-theme'),
        'description'             => esc_html__('Order of posts when showing', 'autumn-theme'),
        'section'                 => $section_id,
        'default'                 => gcod_defaults($setting_name),
        'priority'                => $priority++,
        'choices'                 => gcod_choices($setting_name),
    ]
);

// ==== Page Header  ============
$setting_name   = 'gcod_display_pageheader_all_single_post_headline';
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

/** 
 * All Header Page Display on Post
*/

// Display Page Header Sections on all single post?
$setting_name   = 'gcod_display_pageheader_all_single_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Display Page Header on All Single Post', 'autumn-theme'),
      'description' => esc_html__('Default show by selected in General Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);


// Page Header Style selector
// @setting: gcod_post_pageheader_style
$setting_name   = 'gcod_post_pageheader_style';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Page Header Style for Post', 'autumn-theme'),
      'description' => 'Style for Page Header on All Post - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_single_post',
            'operator' => '!=',
            'value'    => 'hide',
         ],         
      ],
   )
);



// Page Header Style selector
// @setting: gcod_post_pageheader_style
$setting_name   = 'gcod_post_pageheader_background';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Page Header Background Style on Post', 'autumn-theme'),
      'description' => 'Background for Page Header - Default by General Page Header Setting',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_display_pageheader_all_single_post',
            'operator' => '!=',
            'value'    => 'hide',
         ],         
      ],
   )
);

// Common Post Header Background Color
$setting_name   = 'gcod_common_pageheader_bg_rgba_color';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'color',
      'settings'				=> $setting_name,
      'label'       => __('Select Common Color for Header Page Background on Post', 'autumn-theme'),
      'description' => esc_html__('Select a color apply Header Page Background (with alpha channel).', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'choices'     => [
         'alpha' => true,
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_post_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],         
      ],
   ]
);

// Common Post Header Background URL
$setting_name   = 'gcod_common_post_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'image',
      'settings'				=> $setting_name,
      'label'       => esc_html__('Common Post Header Background Image (URL)', 'autumn-theme'),
      'description' => esc_html__('Select image for general background of Page Header', 'autumn-theme'),
      'section'     => $section_id,
      'priority'     => $priority++,
      'default'     => gcod_defaults($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_post_pageheader_background',
            'operator' => '===',
            'value'    => 'common',
         ],         
      ],
   ]
);



// Page Header Get Image for invidual Sing Page selector
// @setting: gcod_invidual_post_pageheader_bg_image_url
$setting_name   = 'gcod_invidual_post_pageheader_bg_image_url';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'				=> $setting_name,
      'label'       => __('Select method get Background Page Header', 'autumn-theme'),
      'description' => 'Select method get background image for Invidual Page',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'active_callback'  => [
         [
            'setting'  => 'gcod_post_pageheader_background',
            'operator' => '===',
            'value'    => 'invidual',
         ],         
      ],
   )
);