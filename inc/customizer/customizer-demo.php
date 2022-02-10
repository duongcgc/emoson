<?php

/**
 * Define customizer panels for Demo Mode.  
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Remove default sections
function gcod_remove_sections($wp_customize) {

    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('menus');
    $wp_customize->remove_panel('menus');
    $wp_customize->remove_panel('nav_menus');
    $wp_customize->remove_section('nav_menus');
    $wp_customize->remove_panel('widgets');
    $wp_customize->remove_section('custom_css');
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('title_tagline');
}
add_action('customize_register', 'gcod_remove_sections');

// Color panel *************************
$gcod_customizer_panel_id = 'gcod_panel_color';
Kirki::add_panel(
    $gcod_customizer_panel_id,
    array(
        'priority'    => 1,
        'title'       => __('Color', 'autumn-theme'),
        'description' => __('Color Settings', 'autumn-theme'),
    )
);

// Section Reading =======================
$gcod_customizer_section_id = 'gcod_reading_settings';
Kirki::add_section(
    $gcod_customizer_section_id,
    array(
        'title'          => esc_attr__('Reading Settings', 'autumn-theme'),
        'priority'       => 2,
        'type'           => 'expanded',
        'capability'     => 'edit_theme_options',
        'panel'          => $gcod_customizer_panel_id
    )
);

// Custom Darkmode color
// @setting: gcod_custom_darkmode
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'toggle',
        'settings'                => 'gcod_custom_darkmode',
        'label'                   => esc_html__('Custom Darkmode', 'autumn-theme'),
        'description'            => 'Color detail adjustment for darkmode - default color setting by predesign',
        'section'                 => $gcod_customizer_section_id,
        'default'                 => false,
        'priority'                => 10,
        'transport'               => 'postMessage',
        'partial_refresh'        => [
            'change_branding_area' => [
                'selector'        => '.site-branding',
                'render_callback' => function () {

                    $new_content = '<div class="header_banner"><img src="';
                    $new_content .= get_template_directory_uri() . '/assets/images/logo.png';
                    $new_content .= '" /></div>';
                    return $new_content;
                },
            ],
        ]
    ]
);

// Left to Right
// @setting: gcod_rtl
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'toggle',
        'settings'                => 'gcod_rtl',
        'label'                   => esc_html__('RTL', 'autumn-theme'),
        'description'            => 'RTL reading mode supports specific languages that need reading right-to-left',
        'section'                 => $gcod_customizer_section_id,
        'default'                 => false,
        'priority'                => 10,
        'transport'               => 'postMessage',
        'partial_refresh'        => [
            'change_branding_area' => [
                'selector'        => '.site-branding',
                'render_callback' => function () {

                    $new_content = '<div class="header_banner"><img src="';
                    $new_content .= get_template_directory_uri() . '/assets/images/logo.png';
                    $new_content .= '" /></div>';
                    return $new_content;
                },
            ],
        ]
    ]
);

// Section Colors =======================
$gcod_customizer_section_id = 'gcod_colors_settings';
Kirki::add_section(
    $gcod_customizer_section_id,
    array(
        'title'          => esc_attr__('Color Settings', 'autumn-theme'),
        'priority'       => 2,
        'type'           => 'expanded',
        'capability'     => 'edit_theme_options',
        'panel'          => $gcod_customizer_panel_id
    )
);

// Color Set selector
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'color-palette',
        'settings'    => 'color_preset_setting',
        'label'       => esc_html__('Color Presets', 'autumn-theme'),
        'description' => esc_html__('Select color set', 'autumn-theme'),
        'section'     => $gcod_customizer_section_id,
        'default'     => '#FF80AB',
        'choices'     => [
            'colors' => Kirki_Helper::get_material_design_colors('A100'),
            'size'   => 20,
            'style'  => 'round',
        ],
    ]
);

// Layout panel *************************
$gcod_customizer_panel_id = 'gcod_panel_layout';
Kirki::add_panel(
    $gcod_customizer_panel_id,
    array(
        'priority'    => 1,
        'title'       => __('Layout', 'autumn-theme'),
        'description' => __('Layout Settings', 'autumn-theme'),
    )
);

// Section Layout =======================
$gcod_customizer_section_id = 'gcod_layout_settings';
Kirki::add_section(
    $gcod_customizer_section_id,
    array(
        'title'          => esc_attr__('Layout Settings', 'autumn-theme'),
        'priority'       => 1,
        'type'           => 'expanded',
        'capability'     => 'edit_theme_options',
        'panel'          => $gcod_customizer_panel_id
    )
);

$gcod_general_page_layouts = array(
    'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
    'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
    'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
);

// Page Layout selector
// @setting: gcod_layout_general_page
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'    => 'gcod_layout_general_page',
        'label'       => __('Page Layout', 'autumn-theme'),
        'description' => 'Layout for every page on site',
        'section'     => $gcod_customizer_section_id,
        'default'     => 'no-sidebar',
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => $gcod_general_page_layouts,
        'transport'            => 'postMessage',
    )
);

// Typography panel *************************
$gcod_customizer_panel_id = 'gcod_panel_typography';
Kirki::add_panel(
    $gcod_customizer_panel_id,
    array(
        'priority'    => 0,
        'title'       => __('Tyopgraphy', 'autumn-theme'),
        'description' => __('Tyopgraphy Settings', 'autumn-theme'),
    )
);

// Section Typography =======================
$gcod_customizer_section_id = 'gcod_typography_settings';
Kirki::add_section(
    $gcod_customizer_section_id,
    array(
        'title'          => esc_attr__('Typography Settings', 'autumn-theme'),
        'priority'       => 1,
        'type'           => 'expanded',
        'capability'     => 'edit_theme_options',
        'panel'          => $gcod_customizer_panel_id
    )
);

// Typography Set selector
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'    => 'gcod_set_typography',
        'label'       => __('Typography Set', 'autumn-theme'),
        'section'     => $gcod_customizer_section_id,
        'default'     => 'typo-set-1',
        'priority'    => 1,
        'multiple'    => 1,
        'choices'     => array(
            'typo-set-1' => esc_attr__('Typo one', 'autumn-theme'),
            'typo-set-2' => esc_attr__('Typo two', 'autumn-theme'),
            'typo-set-3' => esc_attr__('Typo three', 'autumn-theme'),
            'typo-set-4' => esc_attr__('Typo four', 'autumn-theme'),
            'typo-set-5' => esc_attr__('Typo five', 'autumn-theme'),
            'typo-set-6' => esc_attr__('Typo six', 'autumn-theme'),
        ),
        'transport'            => 'postMessage',
        // 'partial_refresh'      => [
        //     'gcod_site_header_layout' => [
        //         'selector'        => '.header-wrapper',
        //         'render_callback' => 'gcod_change_color_set',
        //     ],
        // ]
    )
);

// Font size
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => 'gcod_font_size_setting',
        'label'       => esc_html__('Body Font size', 'autumn-theme'),
        'section'     => $gcod_customizer_section_id,
        'default'     => 16,
        'choices'     => [
            'min'  => 0,
            'max'  => 100,
            'step' => 1,
        ],
        'priority'    => 2,
        'transport'   => 'postMessage',
    )
);

// Line-height
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => 'gcod_line_height_setting',
        'label'       => esc_html__('Line height', 'autumn-theme'),
        'section'     => $gcod_customizer_section_id,
        'default'     => 16,
        'choices'     => [
            'min'  => 0,
            'max'  => 100,
            'step' => 1,
        ],
        'priority'    => 3,
        'transport'   => 'postMessage',
    )
);

// Line-width
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => 'gcod_line_width_setting',
        'label'       => esc_html__('Line width', 'autumn-theme'),
        'section'     => $gcod_customizer_section_id,
        'default'     => 640,
        'choices'     => [
            'min'  => 0,
            'max'  => 1920,
            'step' => 1,
        ],
        'priority'    => 4,
        'transport'   => 'postMessage',
    )
);

// Paragraphy Spacing
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => 'gcod_paragraph_space_setting',
        'label'       => esc_html__('Paragraph spacing', 'autumn-theme'),
        'section'     => $gcod_customizer_section_id,
        'default'     => 36,
        'choices'     => [
            'min'  => 0,
            'max'  => 100,
            'step' => 1,
        ],
        'priority'    => 5,
        'transport'   => 'postMessage',
    )
);
