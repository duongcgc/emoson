<?php

/**
 * Quote section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$priority = 3;

// General Quote
$section_id = 'gcod_general_quote';
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Quote Settings (Single)',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_general',
   )
);


// Quote Set selector
$setting_name   = 'gcod_set_quote';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Quote Set', 'autumn-theme'),
      'section'     => 'gcod_general_quote',
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      'transport'   => 'postMessage',
      // 'partial_refresh'      => [
      //     'gcod_site_header_layout' => [
      //         'selector'        => '.header-wrapper',
      //         'render_callback' => 'gcod_change_color_set',
      //     ],
      // ]
   )
);


// Custom Quote
// @setting: gcod_custom_quote
$setting_name   = 'gcod_custom_quote';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'                => $setting_name,
      'label'                   => esc_html__('Custom Quote', 'autumn-theme'),
      'description'             => esc_html__('Custom Quote properties for selected preset style', 'autumn-theme'),
      'section'                 => $section_id,
      'default'                 => gcod_defaults($setting_name),
      'priority'                => $priority++,
      'transport'               => 'postMessage',
      //  'partial_refresh'        => [
      //      'change_branding_area' => [
      //          'selector'        => '.site-branding',
      //          'render_callback' => function () {

      //              $new_content = '<div class="header_banner"><img src="';
      //              $new_content .= get_template_directory_uri() . '/assets/images/logo.png';
      //              $new_content .= '" /></div>';
      //              return $new_content;
      //          },
      //      ],
      //  ]
   ]
);

// Quote font
$setting_name   = 'gcod_quote_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Quote Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => [ 'Poppins','Montserrat', 'Lato', 'Noto Serif', 'Noto Sans' ],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => 'body',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Font size
$setting_name   = 'gcod_quote_font_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Quote Font size', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Quote line-height
$setting_name   = 'gcod_quote_line_height_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Quote line height', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Line-width
$setting_name   = 'gcod_quote_line_width_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Quote line width', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Author Spacing
$setting_name   = 'gcod_quote_author_space_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Author spacing', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Author font
$setting_name   = 'gcod_quote_author_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Author quote Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => [ 'Poppins','Montserrat', 'Lato', 'Noto Serif', 'Noto Sans' ],
      ],
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => 'body',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// Author Font size
$setting_name   = 'gcod_quote_author_font_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Quote Author Font size', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Author line-height
$setting_name   = 'gcod_quote_author_line_height_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Quote Author line height', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);