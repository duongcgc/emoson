<?php

// Featured Slider Settings
$section_id = 'gcod_featured_slider';
$priority = -1;

Kirki::add_section(
    $section_id,
    array(
        'title' => 'Featured Slider',
        'priority'     => $priority++,
        'panel' => 'gcod_panel_featured',
    )
);

// Featured Slider Layout
$setting_name   = 'gcod_featured_slider_layout';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'                  => 'select',
        'settings'				=> $setting_name,
        'label'                 => __('Featured Slider Layout', 'autumn-theme'),
        'section'               => $section_id,
        'default'               => gcod_defaults($setting_name),
        'priority'              => $priority++,
        'choices'               => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_slider_style' => [
                'selector'        => '.featured-slider-wrapper',
                'render_callback' => 'gcod_change_featured_slider_style',
            ],
        ]
    )
);


// Featured Slider selector
$setting_name   = 'gcod_featured_slider_style';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'				=> $setting_name,
        'label'       => __('Featured Slider Style', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_slider_style' => [
                'selector'        => '.featured-slider-wrapper',
                'render_callback' => 'gcod_change_featured_slider_style',
            ],
        ]
    )
);

// Featured Slider Darkmode
// @setting: gcod_featured_slider_darkmode
$setting_name   = 'gcod_featured_slider_darkmode';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Featured Slider Darkmode', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'choices'     => gcod_choices($setting_name),
    //   'transport'            => 'postMessage',
    //   'partial_refresh'      => [
    //      'gcod_layout_featured_slider' => [
    //         'selector'        => '.featured_slider-wrapper',
    //         'render_callback' => 'gcod_change_featured_slider_layout',
    //      ]
    //   ]
   )
);

// Number Items
$setting_name   = 'gcod_featured_slider_number_items';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'number',
        'settings'	  => $setting_name,
        'label'       => esc_html__('Number of items to show', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
    ]
);

// Featured Slider Source
$setting_name   = 'gcod_featured_slider_source';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'				=> $setting_name,
        'label'       => esc_html__('Slider data source', 'autumn-theme'),
        'description' => esc_html__('Select source for slider get data - from custom slider custom post or list posts', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
    ]
);

/**
 * For select slider source
 */

// Get all sliders
$setting_name   = 'gcod_featured_slider_source_all';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'checkbox',
        'settings'	  => $setting_name,
        'label'       => esc_html__('Get all sliders', 'autumn-theme'),
        'description' => esc_html__('Get all slider for show - not check for select by category of slider', 'autumn-theme'),
        'section'     => $section_id,
        'priority'     => $priority++,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_slider_source',
                'operator' => '==',
                'value'    => 'gcod-slider',
            ]
        ],
        'default'     => gcod_defaults($setting_name),
    ]
);

// Select sliders from categories of slider
$setting_name   = 'gcod_featured_slider_source_categories_selected';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'				=> $setting_name,
        'label'       => esc_html__('Select slider categories for slider source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => Kirki_Helper::get_terms(array('taxonomy' => 'category')), //gcod_choices($setting_name),
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_slider_source_all',
                'operator' => '==',
                'value'    => false,
            ],
            [
                'setting'  => 'gcod_featured_slider_source',
                'operator' => '==',
                'value'    => 'gcod-slider',
            ]
        ],
    ]
);

/**
 * For select posts source
 */

$setting_name   = 'gcod_featured_slider_source_get_posts';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'	  => $setting_name,
        'label'       => esc_html__('Get posts from', 'autumn-theme'),
        'description' => esc_html__('Get all posts for slider from all posts or select by category of posts', 'autumn-theme'),
        'section'     => $section_id,
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_slider_source',
                'operator' => '==',
                'value'    => 'gcod-posts',
            ]
        ],
        'default'     => gcod_defaults($setting_name),
    ]
);

// Get from categories

// Select sliders from categories of post
$setting_name   = 'gcod_featured_slider_source_post_categories';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'	  => $setting_name,
        'label'       => esc_html__('Select post categories for slider source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => gcod_choices($setting_name),
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_slider_source_get_posts',
                'operator' => '==',
                'value'    => 'gcod-category',
            ]
        ],
    ]
);

// Get from tags

// Select sliders from tags of post
$setting_name   = 'gcod_featured_slider_source_tags';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'multicheck',
        'settings'	  => $setting_name,
        'label'       => esc_html__('Select post tags for slider source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_slider_source_get_posts',
                'operator' => '==',
                'value'    => 'gcod-tag',
            ]
        ],
    ]
);

// Get posts order
$setting_name   = 'gcod_featured_slider_source_posts_order';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'	  => $setting_name,
        'label'       => esc_html__('Posts order', 'autumn-theme'),
        'description' => esc_html__('Order of posts when showing', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => gcod_choices($setting_name),
    ]
);
