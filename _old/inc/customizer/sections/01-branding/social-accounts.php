<?php

/**
 * Social accounts section customizer. *
 * @since 1.0.0
 * @section: gcod_social_accounts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Site social accounts
$section_id = 'gcod_social_accounts';
$priority = 1;
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Social Accounts',
      'priority' => $priority++,
      'panel' => 'gcod_panel_branding',
   )
);

// Facebook Fanpage
$setting_name = 'gcod_facebook_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Facebook', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Instagram 
$setting_name = 'gcod_instagram_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Instagram', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Linkedin 
$setting_name = 'gcod_linkedin_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Linkedin', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Twitter 
$setting_name = 'gcod_twitter_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Twitter', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Youtube 
$setting_name = 'gcod_youtube_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Youtube', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Dribbble 
$setting_name = 'gcod_dribbble_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Dribbble', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Behance 
$setting_name = 'gcod_behance_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Behance', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Flicker 
$setting_name = 'gcod_flickr_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Flickr', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Pinterest 
$setting_name = 'gcod_pinterest_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Pinterest', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);

// Github 
$setting_name = 'gcod_github_uri';
Kirki::add_field(
   GCOD_CONFIG_ID,
   [
      'type'     => 'link',
      'settings' => $setting_name,
      'label'    => __('Github', 'autumn-theme'),
      'section'  => $section_id,
      'default'  => gcod_defaults($setting_name),
      'priority' => $priority++,
   ]
);