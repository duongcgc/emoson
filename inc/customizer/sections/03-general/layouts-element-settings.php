<?php

/**
 * General layout element settings customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_general_layout_element_settings';
$priority = 1;

// General Layout Elements
Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Page Elements Settings',
      'priority'   =>  $priority++,
      'panel'        => 'gcod_panel_general',
   )
);

/**
 * ELEMENTS ARCHIVE PAGE
 */

// General Archive Posts Elements setting
// @setting: gcod_general_archive_element_setting
$setting_name = 'gcod_general_archive_element_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'multicheck',
      'settings'        => $setting_name,
      'label'       => esc_html__('Archive Post Elements setting', 'autumn-theme'),
      'description' => esc_html__('Move and toggle elements to control them display on every archive. (Note: check settings general media at 3. General > Media Settings', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'   =>  $priority++,      
   ]
);

$setting_name = 'gcod_general_archive_element_apply_home_sections';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'toggle',
        'settings'                => $setting_name,
        'label'                   => esc_html__('Apply settings into Home Sections', 'autumn-theme'),
        'description'             => 'Enable elements settings into Featured and Home Sections',
        'section'                 => $section_id,
        'default'                 => gcod_defaults($setting_name),
        'priority'                => $priority++,       
    ]
);

/**
 * ELEMENTS SINGLE PAGE
 */

// General Single Posts Elements setting
// @setting: gcod_general_single_element_setting
$setting_name = 'gcod_general_single_element_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'multicheck',
      'settings'        => $setting_name,
      'label'       => esc_html__('Single Post Elements setting', 'autumn-theme'),
      'description' => esc_html__('Check elements to control them display on every single post. (Note: check settings general media at 3. General > Media Settings', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'   =>  $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_general_single_element_setting' => [
            'selector'        => '.single-post article.post',
            'render_callback' => 'gcod_change_single_post_elements',
         ],
      ]
   ]
);

$setting_name = 'gcod_general_single_element_apply_related_posts';
Kirki::add_field(
    GCOD_CONFIG_ID,
    [
        'type'                    => 'toggle',
        'settings'                => $setting_name,
        'label'                   => esc_html__('Apply settings into Related Posts', 'autumn-theme'),
        'description'             => 'Enable elements settings into Related Posts',
        'section'                 => $section_id,
        'default'                 => gcod_defaults($setting_name),
        'priority'                => $priority++,       
    ]
);