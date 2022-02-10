<?php

/**
 * Footer Element section customizer. *
 * Define setting's Field with https://kirki.org/docs/controls/
 * @section: gcod_footer_element_settings *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Setting footer elements
$section_id = 'gcod_footer_element_settings';
$priority = 4;

Kirki::add_section(
   $section_id,
   array(
      'title' => 'Footer Element Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_footer',
   )
);

// ==== Footer Category ============
$setting_name   = 'gcod_footer_categories_headline';
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

// ON-OFF title
// @setting: gcod_footer_element_category_title_show
$setting_name   = 'gcod_footer_element_category_title_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Footer Category Title Show', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   ]
);

// Footer Category Title
// @setting: gcod_footer_element_category_title
$setting_name   = 'gcod_footer_element_category_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => esc_html__('Footer Category Title', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'               => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.footer-category > h3',
            'function' => 'html',
         ],
      ]
   ]
);

// ==== Footer Tags ============
$setting_name   = 'gcod_footer_tags_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'    => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
   ]
);

// ON-OFF title
// @setting: gcod_footer_element_tags_title_show
$setting_name   = 'gcod_footer_element_tags_title_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Footer Tags Title Show', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   ]
);

// Footer Tag Title
// @setting: gcod_footer_element_tags_title
$setting_name   = 'gcod_footer_element_tags_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'         => 'text',
      'settings'     => $setting_name,
      'label'        => esc_html__('Footer Category Title', 'autumn-theme'),
      'section'      => $section_id,
      'default'      => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'js_vars'      => [
         [
            'element'  => '.footer-tags > h3',
            'function' => 'html',
         ],
      ]
   ]
);

// ==== Footer Subcrible ============
$setting_name   = 'gcod_footer_social_icons_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'    => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
   ]
);

// ON-OFF title
// @setting: gcod_footer_element_social_icons_title_show
$setting_name   = 'gcod_footer_element_social_icons_title_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'            => 'toggle',
      'settings'        => $setting_name,
      'label'           => esc_html__('Footer Category Title Show', 'autumn-theme'),
      'description'     => esc_html__('Config link of social accounts please goto 1. Branding > Social Accounts', 'autumn-theme'),
      'section'         => $section_id,
      'default'         => gcod_defaults($setting_name),
      'priority'        => $priority++,
      'transport'       => 'postMessage',
   ]
);

// Footer Subscrible Title
// @setting: gcod_footer_element_social_icons_title
$setting_name   = 'gcod_footer_element_social_icons_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                     => 'text',
      'settings'            => $setting_name,
      'label'                    => esc_html__('Footer Subscrible Title', 'autumn-theme'),
      'section'                  => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.footer-social-icons > h3',
            'function' => 'html',
         ],
      ]
   ]
);


// Social Elements setting
// @setting: gcod_footer_social_elements_setting
$setting_name   = 'gcod_footer_social_elements_setting';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'sortable',
      'settings'            => $setting_name,
      'label'       => esc_html__('Social elements setting', 'autumn-theme'),
      'section'     => $section_id,
      'choices'     => gcod_choices($setting_name),
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'            => 'postMessage',
      'partial_refresh'      => [
         'gcod_footer_social_elements_setting' => [
            'selector'        => '.social-icon-list',
            'render_callback' => 'gcod_update_footer_social_elements',
         ],
      ]
   ]
);

// ==== Footer Lastest Posts ============
$setting_name   = 'gcod_footer_lastest_posts_headline';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'custom',
      'settings'            => $setting_name,
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// ON-OFF title
// @setting: gcod_footer_element_lastest_posts_title_show
$setting_name   = 'gcod_footer_element_lastest_posts_title_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'            => $setting_name,
      'label'                   => esc_html__('Footer Lastest Posts Title Show', 'autumn-theme'),
      'section'                 => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
   ]
);

// Footer Lastest Posts Title
// @setting: gcod_footer_element_lastest_posts_title
$setting_name   = 'gcod_footer_element_lastest_posts_title';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                     => 'text',
      'settings'            => $setting_name,
      'label'                    => esc_html__('Footer Lastest Posts Title', 'autumn-theme'),
      'section'                  => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'js_vars'   => [
         [
            'element'  => '.footer-lastest-posts > h3',
            'function' => 'html',
         ],
      ]
   ]
);

// Footer Lastest Posts number show
// @setting: gcod_footer_element_lastest_posts_number
$setting_name   = 'gcod_footer_element_lastest_posts_number';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                     => 'number',
      'settings'            => $setting_name,
      'label'                    => esc_html__('Footer Lastest Posts Number Show', 'autumn-theme'),
      'section'                  => $section_id,
      'default'     => gcod_defaults($setting_name),
      'choices'     => gcod_choices($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'partial_refresh'      => [
         'gcod_footer_element_lastest_posts_number' => [
            'selector'        => '.footer-posts-list',
            'render_callback' => 'gcod_update_footer_lastest_posts',
         ],
      ]
   ]
);

// ON-OFF Thumbnail
// @setting: gcod_footer_element_lastest_posts_thumbnail_show
$setting_name   = 'gcod_footer_element_lastest_posts_thumbnail_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'            => $setting_name,
      'label'                   => esc_html__('Footer Lastest Posts Thumbnail Show', 'autumn-theme'),
      'section'                 => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'partial_refresh'      => [
         'gcod_footer_element_lastest_posts_thumbnail_show' => [
            'selector'        => '.footer-posts-list',
            'render_callback' => 'gcod_update_footer_lastest_posts',
         ],
      ]
   ]
);

// ON-OFF Category
// @setting: gcod_footer_element_lastest_posts_category_show
$setting_name   = 'gcod_footer_element_lastest_posts_category_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'            => $setting_name,
      'label'                   => esc_html__('Footer Lastest Posts Category Meta Show', 'autumn-theme'),
      'section'                 => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'partial_refresh'      => [
         'gcod_footer_element_lastest_posts_category_show' => [
            'selector'        => '.footer-posts-list',
            'render_callback' => 'gcod_update_footer_lastest_posts',
         ],
      ]
   ]
);

// ON-OFF Date
// @setting: gcod_footer_element_lastest_posts_date_show
$setting_name   = 'gcod_footer_element_lastest_posts_date_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'            => $setting_name,
      'label'                   => esc_html__('Footer Lastest Posts Date Meta Show', 'autumn-theme'),
      'section'                 => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'partial_refresh'      => [
         'gcod_footer_element_lastest_posts_date_show' => [
            'selector'        => '.footer-posts-list',
            'render_callback' => 'gcod_update_footer_lastest_posts',
         ],
      ]
   ]
);

// ON-OFF Author
// @setting: gcod_footer_element_lastest_posts_author_show
$setting_name   = 'gcod_footer_element_lastest_posts_author_show';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'                    => 'toggle',
      'settings'            => $setting_name,
      'label'                   => esc_html__('Footer Lastest Posts Author Meta Show', 'autumn-theme'),
      'section'                 => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'transport'               => 'postMessage',
      'partial_refresh'      => [
         'gcod_footer_element_lastest_posts_author_show' => [
            'selector'        => '.footer-posts-list',
            'render_callback' => 'gcod_update_footer_lastest_posts',
         ],
      ]
   ]
);

// Footer Shortcode
$setting_name   = 'gcod_footer_social_shortcode';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'text',
      'settings' => $setting_name,
      'label'    => esc_html__('Social Shortcode', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);