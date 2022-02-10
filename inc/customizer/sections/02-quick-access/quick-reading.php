<?php

/**
 * Quick reading section customizer. *
 * @section: gcod_reading_settings
 * @since 1.0.0
 */

 // Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_reading_settings';
$priority = 1;
Kirki::add_section(
	$section_id,
	array(
		'title'          => esc_attr__('Reading', 'autumn-theme'),
		'priority'       => $priority++,
		'capability'     => 'edit_theme_options',
		'type'           => 'expanded',
		'panel'          => 'gcod_panel_quick'
	)
);

// Left to Right
// @setting: gcod_rtl
$setting_name = 'gcod_rtl';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'    			=> $setting_name,
		'label'       			=> esc_html__('RTL', 'autumn-theme'),
		'description'			=> 'RTL reading mode supports specific languages that need reading right-to-left',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'       		=> $priority++,
		'transport'   			=> 'postMessage',
		'partial_refresh'		=> [
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

// Using Darkmode Color
$setting_name = 'gcod_dark_mode_color';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'toggle',
        'settings'                => $setting_name,
        'label'                   => esc_html__('Using Darkmode', 'autumn-theme'),
        'description'             => 'Switch to Darkmode Color for Theme',
        'section'                 => $section_id,
        'default'                 => gcod_defaults($setting_name),
        'priority'                => $priority++,        
    ]
);

// Reading mode
// @setting: gcod_reading_mode_support
// $setting_name = 'gcod_reading_mode_support';
// Kirki::add_field(
// 	GCOD_CONFIG_ID,
// 	[
// 		'type'        => 'toggle',
// 		'settings'    => $setting_name,
// 		'label'       => esc_html__('Reading Mode support', 'autumn-theme'),
// 		'description' => esc_html__('Reading mode allows turning on and off isolating content, active guest to load post, personalizing fonts and font sizes to suit reading', 'autumn-theme'),
// 		'section'     => $section_id,
// 		'default'     => gcod_defaults($setting_name),
// 		'priority'    => $priority++,
// 		'transport'   => 'postMessage',
// 		'partial_refresh'		=> [
// 			'change_button_darkmode_area' => [
// 				'selector'        => '.dummy-element',
// 				'render_callback' => 'gcod_switch_darkmode_button',
// 			]
// 		]
// 	]
// );

// Quick Guide Settings
// $setting_name = 'gcod_show_quick_guide_setting';
// Kirki::add_field(
// 	GCOD_CONFIG_ID,
// 	[
// 		'type'        => 'toggle',
// 		'settings'    => $setting_name,
// 		'label'       => esc_html__('Show Quick Guide Setting', 'autumn-theme'),
// 		'description' => esc_html__('Indicates where the settings are applied (Useful for admins or developers)', 'autumn-theme'),
// 		'section'     => $section_id,
// 		'default'     => gcod_defaults($setting_name),
// 		'priority'    => $priority++,		
// 	]
// );