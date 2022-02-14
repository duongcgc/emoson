<?php

/**
 * Shop settings section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_shop_setting';
$priority = 0;

// Shop settings
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Shop Settings',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_features',
   )
);
