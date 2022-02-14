<?php

/**
 * Features section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit; 
$priority = 18;

// General Features
$section_id = 'gcod_general_ux';
Kirki::add_section(
   $section_id,
   array(
      'title' 			=> 'UX Settings',
	  'description'		=> 'Setting features to optimize site experience. Some UX featured you can find settings on: <a href="#">Typography</a>, <a href="#">UI Spacing</a>, <a href="#">Heading</a> or <a href="#">Quote Settings</a>',
      'priority'     	=> $priority++,
      'panel' 			=> 'gcod_panel_general',
   )
);


// Goto to top
// @setting: gcod_gototop
$setting_name   = 'gcod_gototop';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'				=> $setting_name,
		'label'       			=> esc_html__('GotoTop', 'autumn-theme'),
      	'description'        	=> 'Show button for quick goto top of site',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'     			=> $priority++,
		'transport'   			=> 'postMessage',
		'partial_refresh'		=> [
			'gcod_onoff_gototop_button' => [
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

// Sticky Sidebar
// @setting: gcod_sidebar_sticky
$setting_name   = 'gcod_sidebar_sticky';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'				=> $setting_name,
		'label'       			=> esc_html__('Sidebar Sticky', 'autumn-theme'),
      	'description'        	=> 'Allow sidebar to always appear when scrolling',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'     			=> $priority++,
	]
);

// Scroll load next
// @setting: gcod_scroll_load_next
$setting_name   = 'gcod_scroll_load_next';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'				=> $setting_name,
		'label'       			=> esc_html__('Scroll Load Next', 'autumn-theme'),
      	'description'        	=> 'Allow to automatically load the next post when scrolling all the way to the bottom of the page',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'     			=> $priority++,
	]
);

// Guest to navigation post
// @setting: gcod_guest_to_navigation
$setting_name   = 'gcod_guest_to_navigation';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'				=> $setting_name,
		'label'       			=> esc_html__('Guest to navigation', 'autumn-theme'),
      	'description'        	=> 'allow swiping the previous and next post',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'     			=> $priority++,
	]
);

// Enable reading time
$setting_name   = 'gcod_enable_reading_time';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'				=> $setting_name,
		'label'       			=> esc_html__('Enable reading time', 'autumn-theme'),
      	'description'        	=> 'allow show reading time on the posts / pages',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'     			=> $priority++,
		'transport'   			=> 'postMessage',
		'partial_refresh'		=> [
			'gcod_enable_reading_time' => [
				'selector'        => 'body.single #primary',
				'render_callback' => 'gcod_change_readingtime_status'
			],
		]
	]
);



// Enable progress bar
$setting_name   = 'gcod_enable_progress_bar';
Kirki::add_field(
	GCOD_CONFIG_ID,
	[
		'type'        			=> 'toggle',
		'settings'				=> $setting_name,
		'label'       			=> esc_html__('Enable progress reading bar', 'autumn-theme'),
      	'description'        	=> 'allow show reading progress reading bar posts / pages detail',
		'section'     			=> $section_id,
		'default'     			=> gcod_defaults($setting_name),
		'priority'     			=> $priority++,
		'transport'   			=> 'postMessage',
		'partial_refresh'		=> [
			'gcod_enable_progress_bar' => [
				'selector'        => 'body.single #primary',
				'render_callback' => 'gcod_change_progress_bar_status'
			],
		]
	]
);