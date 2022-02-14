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
$priority = -1;

// General Typography
$section_id = 'gcod_general_typography';
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Typography',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_general',
   )
);

// ==== Typography ============
$setting_name   = 'gcod_set_typography_headline';
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

// Typography Set selector
$setting_name   = 'gcod_set_typography';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Typography Set', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
      // 'transport'            => 'postMessage',
      // 'partial_refresh'      => [
      //    'gcod_set_typography' => [
      //       'selector'        => '.header-wrapper',
      //       'render_callback' => 'gcod_set_typography_update',
      //    ],
      // ]
   )
);

// 1 - Body font
$setting_name   = 'gcod_body_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Body Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'color'          => '#333333',
      ],
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
$setting_name   = 'gcod_font_size_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Body Font size', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Line-height
$setting_name   = 'gcod_line_height_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Line height', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Line-width
$setting_name   = 'gcod_line_width_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'settings'    => $setting_name,
      'label'       => esc_html__('Line width', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// Paragraphy Spacing
$setting_name   = 'gcod_paragraph_space_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'slider',
      'settings'    => $setting_name,
      'label'       => esc_html__('Paragraph spacing', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'   => 'postMessage',
   )
);

// ==== Custom Typography ============
$setting_name   = 'gcod_custom_typography_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'    => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
   ]
);

// 2 - Heading and Post Title Font

$setting_name   = 'gcod_custom_heading_font_family1';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading or Post Title Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Playfair Display', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'text-transform' => 'none',
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.post-name,.post-name a,.site-main .entry-title,.site-main h3.title,h4.entry-title,h4.categoty-name,h1.entry-title',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// 3 - Heading Widget and Section Title Font
$setting_name   = 'gcod_custom_heading_widget_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Heading Sidebar or Section Title Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Playfair Display', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'text-transform' => 'none',
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.header__module h3.title, .widget-area h2, .widget-area h3.title, .footer-wrapper h3',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// 4 - Category and Subtitle
$setting_name   = 'gcod_custom_post_category_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Category or Subtitle Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Playfair Display', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'text-transform' => 'none',
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.post-cat, 
                           .post-cat a, 
                           .subtitle,                            
                           .featured-slider-content .content__module .posts__module .post-cat a,
                           #secondary .widget .posts__widget.style-1 .post-cat a, 
                           #secondary .widget .posts__widget.style-2 .post-cat a 
                           ',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// 5 - Meta Post and Small 
$setting_name   = 'gcod_custom_post_meta_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Meta Post Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Playfair Display', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'text-transform' => 'none',
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.post-meta, 
                           .post-meta a, 
                           .post-meta span,
                           .entry-header .entry-meta a, 
                           .entry-header .entry-meta',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// 6 - Menu Font
$setting_name   = 'gcod_custom_menu_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Menu Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Playfair Display', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'text-transform' => 'none',
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.main-navigation li a, .footer-menu li a',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);

// 7 - Button Font
$setting_name   = 'gcod_custom_button_font_family';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'typography',
      'settings'    => $setting_name,
      'label'       => esc_attr__('Button Font', 'autumn-theme'),
      'section'     => $section_id,
      'fonts' => [
         'google' => ['Poppins', 'Playfair Display', 'Montserrat', 'Lato', 'Noto Serif', 'Noto Sans'],
      ],
      'default'     => [
         'font-family'    => 'Poppins',
         'variant'        => 'regular',
         'text-transform' => 'none',
      ],
      'active_callback'  => [
         [
            'setting'  => 'gcod_set_typography',
            'operator' => '===',
            'value'    => 'typo-custom',
         ]
      ],
      'priority'     => $priority++,
      'transport'   => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.button, 
                           .button a, 
                           .button input, 
                           .btn, 
                           .post-button a,
                           .widget_gcowidgetnewsletters_widget .widget_posts .content__module div .button input',
            'function' => 'css',
            'property' => 'font-family',
         ]
      ]
   )
);
