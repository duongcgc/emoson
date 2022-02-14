<?php
/** 
 * Background Body Boxed
*/

// Boxed Layout
$section_id = 'background_image';
$priority = 0;

$setting_name = 'gcod_enabled_body_boxed';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
       'type'        => 'toggle',
       'settings'    => $setting_name,
       'label'       => esc_html__('Using boxed layout', 'autumn-theme'),
       'section'     => $section_id,
       'default'     => gcod_defaults($setting_name),
       'priority'    => $priority++,
    ]
 );

// Body Boxed Background Color
$setting_name = 'gcod_bgcolor_for_body_boxed';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'color',
        'settings'    => $setting_name,
        'label'       => __('Background Color for Body Boxed', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'transport' => 'postMessage',
    )
);

// Repeat background
$setting_name = 'gcod_background_body_boxed_repeat';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => __('Background Body Boxed Repeat', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
    )
);

// Attachment background
$setting_name = 'gcod_background_body_boxed_attachment';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => __('Background Body Boxed Attachment', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        // 'partial_refresh'      => [
        //     'gcod_site_header_layout' => [
        //         'selector'        => '.header-wrapper',
        //         'render_callback' => 'gcod_change_color_set',
        //     ],
        // ]
    )
);

// Boxed Size background
$setting_name = 'gcod_background_body_boxed_sized';
Kirki::add_field(
    GCOD_CONFIG_ID,
    array(
        'type'        => 'select',
        'settings'    => $setting_name,
        'label'       => __('Background Body Boxed Size', 'autumn-theme'),
        'section'     => $section_id,
        'default'     => gcod_defaults($setting_name),
        'priority'    => $priority++,
        'choices'     => gcod_choices($setting_name),
        'transport'            => 'postMessage',
        // 'partial_refresh'      => [
        //     'gcod_site_header_layout' => [
        //         'selector'        => '.header-wrapper',
        //         'render_callback' => 'gcod_change_color_set',
        //     ],
        // ]
    )
);