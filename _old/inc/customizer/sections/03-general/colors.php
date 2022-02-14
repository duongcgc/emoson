<?php

/**
 * General colors customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'colors';
$priority = 0;

// Body Text Color
$setting_name = 'gcod_body_color';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'color',
        'settings'    => $setting_name,
        'label'       => __('Body Color', 'autumn-theme'),
        'description' => esc_html__('This is a color control - without alpha channel.', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'transport' => 'postMessage',
        'js_vars'   => [
            [
                'element'  => 'body, p',
                'function' => 'css',
                'property' => 'color',
            ],
        ]

    )
);