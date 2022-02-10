<?php

/**
 * Darkmode detail settings
 * @section: gcod_darkmode_settings
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_darkmode_settings';
$priority = 10;
Kirki::add_section(
    $section_id,
    array(
        'title'          => esc_attr__('Darkmode Settings', 'autumn-theme'),
        'priority'       => $priority++,
        'capability'     => 'edit_theme_options',
        'panel'          => 'gcod_panel_quick'
    )
);

// Custom Darkmode color
// @setting: gcod_custom_darkmode
$setting_name = 'gcod_custom_darkmode';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'toggle',
        'settings'                => $setting_name,
        'label'                   => esc_html__('Custom Darkmode', 'autumn-theme'),
        'description'             => 'Color detail adjustment for darkmode - default color setting by predesign',
        'section'                 => $section_id,
        'default'                 => gcod_defaults($setting_name),
        'priority'                => $priority++,
        'transport'               => 'postMessage',
        'partial_refresh'         => [
            'change_branding_area'=> [
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

// Main text color on darkmode - default value is rotate 180deg
$setting_name = 'color_text_on_darkmode';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'color-palette',
        'settings'    => $setting_name,
        'label'       => esc_html__('Dark Mode text color', 'autumn-theme'),
        'description' => esc_html__('Select a color for text on darkmode', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'transport'   => 'postMessage',
        'choices'     => gcod_choices($setting_name),
        'active_callback' => [
            [
                'setting'  => 'gcod_custom_darkmode',
                'operator' => '===',
                'value'    => true,
            ]
        ],
    ]
);

// Main background color on darkmode - default value is rotate 180deg
$setting_name = 'color_background_on_darkmode';

Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'color-palette',
        'settings'    => $setting_name,
        'label'       => esc_html__('Dark Mode background color', 'autumn-theme'),
        'description' => esc_html__('Select a color for background on darkmode', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'transport'   => 'postMessage',
        'choices'     => gcod_choices($setting_name),
        'active_callback' => [
            [
                'setting'  => 'gcod_custom_darkmode',
                'operator' => '===',
                'value'    => true,
            ]
        ],
    ]
);

// Accent color on darkmode - default value is same light mode
$setting_name = 'color_accent_on_darkmode';

Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'color',
        'settings'    => $setting_name,
        'label'       => __('Dark Mode accent color', 'autumn-theme'),
        'description' => esc_html__('Select a color for accent on darkmode.', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'transport'   => 'postMessage',
        'active_callback' => [
            [
                'setting'  => 'gcod_custom_darkmode',
                'operator' => '===',
                'value'    => true,
            ]
        ],
    ]
);
