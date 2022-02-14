<?php

// Featured Post Settings
$section_id = 'gcod_featured_posts';
$priority = 9;

Kirki::add_section(
    $section_id,
    array(
        'title' => 'Featured Posts',
        'priority'     => $priority++,
        'panel' => 'gcod_panel_featured',
    )
);

// Featured Posts Layout
$setting_name   = 'gcod_featured_posts_layout';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => __('Featured Posts Layout', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_posts_layout' => [
                'selector'        => '.featured-posts-container',
                'render_callback' => 'gcod_change_featured_posts_style',
            ],
        ]
    )
);

// Featured Post selector
$setting_name   = 'gcod_featured_posts_style';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => __('Featured Post Style', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_posts_style' => [
                'selector'        => '.featured-posts-container',
                'render_callback' => 'gcod_change_featured_posts_style',
            ],
        ]
    )
);

// Featured Posts Title
$setting_name   = 'gcod_featured_posts_style_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Featured Posts Title', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Featured Posts Background
$setting_name   = 'gcod_featured_posts_background_color';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'color',
        'settings' => $setting_name,
        'label'       => __('Background Color Featured Posts:', 'autumn-theme'),
        'description' => esc_html__('This is a color control - with alpha channel.', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => [
            'alpha' => true,
        ],
    ]
);

// Featured Posts Darkmode
// @setting: gcod_featured_posts_darkmode
$setting_name   = 'gcod_featured_posts_darkmode';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Featured posts Darkmode', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
    //   'transport'            => 'postMessage',
    //   'partial_refresh'      => [
    //      'gcod_featured_posts_darkmode' => [
    //         'selector'        => '.featured-posts-container',
    //         'render_callback' => 'gcod_change_featured_posts_layout',
    //      ]
    //   ]
   )
);

// Number Items
$setting_name   = 'gcod_featured_post_number_items';
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



// Featured Post Source
$setting_name   = 'gcod_featured_post_source';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => esc_html__('Post data source', 'autumn-theme'),
        'description' => esc_html__('Select source for post get data - from slider custom post or list posts', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name)
    ]
);

/**
 * For select post source
 */

// Get all posts
$setting_name   = 'gcod_featured_post_source_all';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'checkbox',
        'settings'                => $setting_name,
        'label'       => esc_html__('Get all posts', 'autumn-theme'),
        'description' => esc_html__('Get all post for show - not check for select by category of post', 'autumn-theme'),
        'section'     => $section_id,
        'priority'     => $priority++,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_post_source',
                'operator' => '==',
                'value'    => 'gcod-slider',
            ]
        ],
        'default'     => gcod_defaults($setting_name),
    ]
);

// Select posts from categories of post
$gcod_post_categories = Kirki_Helper::get_terms(array('taxonomy' => 'category'));
$setting_name   = 'gcod_featured_post_source_categories_selected';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => esc_html__('Select post categories for post source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => $gcod_post_categories,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_post_source_all',
                'operator' => '==',
                'value'    => false,
            ],
            [
                'setting'  => 'gcod_featured_post_source',
                'operator' => '==',
                'value'    => 'gcod-slider',
            ]
        ],
    ]
);

/**
 * For select posts source
 */


$setting_name   = 'gcod_featured_post_source_get_posts';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => esc_html__('Get posts from', 'autumn-theme'),
        'description' => esc_html__('Get all posts for post from all posts or select by category of posts', 'autumn-theme'),
        'section'     => $section_id,
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_post_source',
                'operator' => '==',
                'value'    => 'gcod-posts',
            ]
        ],
        'default'     => gcod_defaults($setting_name),
    ]
);

// Get from categories
$gcod_post_categories = Kirki_Helper::get_terms(array('taxonomy' => 'category'));

// Select posts from categories of post
$setting_name   = 'gcod_featured_post_source_post_categories';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => esc_html__('Select post categories for post source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => $gcod_post_categories,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_post_source_get_posts',
                'operator' => '==',
                'value'    => 'gcod-category',
            ]
        ],
    ]
);

// Get from tags
$gcod_post_tags = Kirki_Helper::get_terms(array('taxonomy' => 'post_tag'));

// Select posts from tags of post
$setting_name   = 'gcod_featured_post_source_tags';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'multicheck',
        'settings'                => $setting_name,
        'label'       => esc_html__('Select post tags for post source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => $gcod_post_tags,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_post_source_get_posts',
                'operator' => '==',
                'value'    => 'gcod-tag',
            ]
        ],
    ]
);

// Get posts order
$setting_name   = 'gcod_featured_post_source_posts_order';
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