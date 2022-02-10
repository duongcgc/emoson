<?php

/**
 * Typography section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// General UI Concepts
$section_id = 'gcod_general_ui_concepts';
$priority = 17;

Kirki::add_section(
    $section_id,
    array(
        'title' => 'UI Concepts',
        'priority'     => $priority++,
        'panel' => 'gcod_panel_general',
    )
);

// ==== Button ============
$setting_name   = 'gcod_button_headline';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'custom',
        'settings'    => $setting_name,
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
    ]
);

// Select button concept for site
$setting_name   = 'gcod_button_concept';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => esc_html__('Button concepts:', 'autumn-theme'),
      'description' => 'Button concept on over site',
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'   => 'auto'
   )
);

// ==== Spacing ============
$setting_name   = 'gcod_spacing_headline';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'custom',
        'settings'    => $setting_name,
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
    ]
);

// Page spacing
$setting_name   = 'gcod_spacing_page_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Page gutter', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 1 spacing
$setting_name   = 'gcod_spacing_1_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Section Spacing', 'autumn-theme'),
        'description' => esc_html__('Spacing level 1', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 2 spacing
$setting_name   = 'gcod_spacing_2_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Component Spacing', 'autumn-theme'),
        'description' => esc_html__('Spacing level 2', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 3 spacing
$setting_name   = 'gcod_spacing_3_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Element Spacing', 'autumn-theme'),
        'description' => esc_html__('Spacing level 3', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 4 spacing
$setting_name   = 'gcod_spacing_4_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Item Spacing', 'autumn-theme'),
        'description' => esc_html__('Spacing level 4', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 5 spacing
$setting_name   = 'gcod_spacing_5_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Small Spacing', 'autumn-theme'),
        'description' => esc_html__('Spacing level 5', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 6 spacing
$setting_name   = 'gcod_spacing_6_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Tiny Spacing', 'autumn-theme'),
        'description' => esc_html__('Spacing level 6', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

//  ====== Line ==========
$setting_name   = 'gcod_line_headline';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'custom',
        'settings'    => $setting_name,
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
    ]
);

// Level 1 line
$setting_name   = 'gcod_line_1_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Line level 1', 'autumn-theme'),
        'description' => esc_html__('Apply for lines | borders level 1', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 2 line
$setting_name   = 'gcod_line_2_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Line level 2', 'autumn-theme'),
        'description' => esc_html__('Apply for lines | borders level 2', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Level 3 line
$setting_name   = 'gcod_line_3_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Line level 3', 'autumn-theme'),
        'description' => esc_html__('Apply for lines | borders level 3', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);


// ======== Border Radius ===========
$setting_name   = 'gcod_radius_headline';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'        => 'custom',
        'settings'    => $setting_name,
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'     => $priority++,
    ]
);

// Style 1 border-radius
$setting_name   = 'gcod_border_radius_1_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Border radius style 1', 'autumn-theme'),
        'description' => esc_html__('Apply for buttons | boxes | sections', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Style 2 border-radius
$setting_name   = 'gcod_border_radius_2_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Border radius style 2', 'autumn-theme'),
        'description' => esc_html__('Apply for buttons | boxes | sections', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);

// Style 3 border-radius
$setting_name   = 'gcod_border_radius_3_setting';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'slider',
        'settings'    => $setting_name,
        'label'       => esc_html__('Border radius style 3', 'autumn-theme'),
        'description' => esc_html__('Apply for buttons | boxes | sections', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'choices'     => gcod_choices($setting_name),
        'priority'     => $priority++,
        'transport'   => 'postMessage',
    )
);
