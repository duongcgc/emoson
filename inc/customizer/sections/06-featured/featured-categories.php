<?php

// Featured Categories Settings
$section_id = 'gcod_featured_categories';
$priority = 24;

Kirki::add_section(
    $section_id,
    array(
        'title' => 'Featured Categories',
        'priority'     => $priority++,
        'panel' => 'gcod_panel_featured',
    )
);

// Featured Slider Layout
$setting_name   = 'gcod_featured_categories_layout';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => __('Featured Categories Layout', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_categories_layout' => [
                'selector'        => '.featured-categories-container',
                'render_callback' => 'gcod_change_featured_categories_style',
            ],
        ]
    )
);


// Featured Categories selector
$setting_name   = 'gcod_featured_categories_style';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => __('Featured Categories Style', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_categories_style' => [
                'selector'        => '.featured-categories-container',
                'render_callback' => 'gcod_change_featured_categories_style',
            ],
        ]
    )
);

// Featured Categories Title
$setting_name   = 'gcod_featured_categories_style_title';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'     => 'text',
        'settings' => $setting_name,
        'label'    => esc_html__('Featured Categories Title', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
    ]
);

// Featured Categories Background
$setting_name   = 'gcod_featured_categories_background_color';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'color',
        'settings' => $setting_name,
        'label'       => __('Background Color Featured Categories:', 'autumn-theme'),
        'description' => esc_html__('This is a color control - with alpha channel.', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => [
            'alpha' => true,
        ],
    ]
);

// Featured Categories Darkmode
// @setting: gcod_featured_categories_darkmode
$setting_name   = 'gcod_featured_categories_darkmode';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => __('Featured Categories Darkmode', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        // 'transport'            => 'postMessage',
        // 'partial_refresh'      => [
        //     'gcod_featured_categories_darkmode' => [
        //         'selector'        => '.featured-categories-container',
        //         'render_callback' => 'gcod_change_featured_categories_layout',
        //     ]
        // ]
    )
);

// Number Items
$setting_name   = 'gcod_featured_categories_number_items';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'number',
        'settings'    => $setting_name,
        'label'       => esc_html__('Number of items to show', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        'partial_refresh'      => [
            'gcod_featured_categories_number_items' => [
                'selector'        => '.featured-categories-container',
                'render_callback' => 'gcod_change_featured_categories_style',
            ],
        ]
    ]
);


// Featured Categories Source
$setting_name   = 'gcod_featured_categories_source';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'     => $setting_name,
        'label'       => esc_html__('Categories data source', 'autumn-theme'),
        'description' => esc_html__('Select source for categories get data - from custom slider custom post or list categories', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => gcod_choices($setting_name),
    ]
);

/**
 * For select slider source
 */

// Get all slider
$setting_name   = 'gcod_featured_categories_source_all';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'checkbox',
        'settings'                => $setting_name,
        'label'       => esc_html__('Get all slider', 'autumn-theme'),
        'description' => esc_html__('Get all slider for show - not check for select by category of slider', 'autumn-theme'),
        'section'     => $section_id,
        'priority'     => $priority++,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_categories_source',
                'operator' => '==',
                'value'    => 'gcod-slider',
            ]
        ],
        'default'     => gcod_defaults($setting_name),
    ]
);

// Select categoriess from categories of slider
$gcod_slider_categories = Kirki_Helper::get_terms(array('taxonomy' => 'category'));
$setting_name   = 'gcod_featured_categories_source_slider_selected';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => esc_html__('Select slider categories for categories source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
        'choices'     => $gcod_slider_categories,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_categories_source_all',
                'operator' => '==',
                'value'    => false,
            ],
            [
                'setting'  => 'gcod_featured_categories_source',
                'operator' => '==',
                'value'    => 'gcod-slider',
            ]
        ],
    ]
);

/**
 * For select categories source
 */


$setting_name   = 'gcod_featured_categories_source_get_posts';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'                => $setting_name,
        'label'       => esc_html__('Get categories from', 'autumn-theme'),
        'description' => esc_html__('Get all categories by all or select some categories', 'autumn-theme'),
        'section'     => $section_id,
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_categories_source',
                'operator' => '==',
                'value'    => 'gcod-cats-selected',
            ]
        ],
        'default'     => gcod_defaults($setting_name),
    ]
);

// Get from categories
$gcod_post_categories = Kirki_Helper::get_terms(array('taxonomy' => 'category'));

// Select categoriess from categories of post
$setting_name   = 'gcod_featured_categories_source_selected_cats';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => esc_html__('Select categories for featured categories source', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => $gcod_post_categories,
        'active_callback' => [
            [
                'setting'  => 'gcod_featured_categories_source_get_posts',
                'operator' => '==',
                'value'    => 'gcod-cats-selected',
            ]
        ],
    ]
);
