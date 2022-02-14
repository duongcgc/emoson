<?php

/**
 * Media section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// General Media
$section_id = 'gcod_general_media';
$priority = 2;

Kirki::add_section(
   $section_id,
   array(
      'title'        => 'Page Media Settings',
      'description'  => 'Setting website media (image, video, audio)  components',
      'priority'     => $priority++,
      'panel'        => 'gcod_panel_general',
   )
);

// ==== Thumbnail ============
$setting_name   = 'gcod_media_thumbnail_headline';
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

// Don't show thumbnail all section have posts
$setting_name   = 'gcod_no_thumbnail_all_sections';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show image thumbnail on every section have posts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Just show on category 
$setting_name   = 'gcod_show_thumbnail_on_category';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'checkbox',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show image thumbnail on category', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'active_callback' => [
         [
            'setting'  => 'gcod_no_thumbnail_all_sections',
            'operator' => '===',
            'value'    => true,
         ]
      ],
   ]
);

// Just show on tag 
$setting_name   = 'gcod_show_thumbnail_on_tag';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'checkbox',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show image thumbnail on tag', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'active_callback' => [
         [
            'setting'  => 'gcod_no_thumbnail_all_sections',
            'operator' => '===',
            'value'    => true,
         ]
      ],
   ]
);

// Just show on author 
$setting_name   = 'gcod_show_thumbnail_on_author';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'checkbox',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show image thumbnail on author', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'active_callback' => [
         [
            'setting'  => 'gcod_no_thumbnail_all_sections',
            'operator' => '===',
            'value'    => true,
         ]
      ],
   ]
);

// Just show on list posts 
$setting_name   = 'gcod_show_thumbnail_on_list_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'checkbox',
      'settings'    => $setting_name,
      'label'       => esc_html__('Show image thumbnail on list posts', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'active_callback' => [
         [
            'setting'  => 'gcod_no_thumbnail_all_sections',
            'operator' => '===',
            'value'    => true,
         ]
      ],
   ]
);

// Just using on thumbnail size
$setting_name   = 'gcod_using_one_thumbnail_size';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Allow all thumbnails to use the same generated size', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Custom size for thumbnail
$setting_name   = 'custom_same_thumbnail_size';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'dimensions',
      'settings'    => $setting_name,
      'label'       => esc_html__('Size of thumbnail', 'autumn-theme'),
      'description' => esc_html__('Enter size of thumbnail for generated.', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'active_callback' => [
         [
            'setting'  => 'gcod_using_one_thumbnail_size',
            'operator' => '===',
            'value'    => true,
         ]
      ],
      'priority'     => $priority++,
   ]
);

// ==== Media Effect ============
$setting_name   = 'gcod_media_effect_headline';
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

// Enable Gif Thumbnail 
$setting_name   = 'gcod_enable_thumbnail_gif';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Enable GIF animation thumbnail', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Enable Preview Video Thumbnail 
$setting_name   = 'gcod_enable_thumbnail_preview_video';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'        => 'toggle',
      'settings'    => $setting_name,
      'label'       => esc_html__('Enable preview Video thumbnail', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
   ]
);

// Enable Hover Effect Thumnbail


// Page Navigation selector
$setting_name   = 'gcod_thumbnail_hover_effect';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'select',
      'settings'    => $setting_name,
      'label'       => __('Thumbnail Hover Effect', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'     => $priority++,
      'multiple'    => 1,
      'choices'     => gcod_choices($setting_name),
   )
);
