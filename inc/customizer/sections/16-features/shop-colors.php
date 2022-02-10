<?php

/**
 * Shop colors section customizer.
 *
 * Description.
 *
 * @since Version 3 digits
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_shop_settings';
$priority = 0;

// Shop colors
Kirki::add_section(
   $section_id,
   array(
      'title' => 'Shop Color',
      'priority'     => $priority++,
      'panel' => 'gcod_panel_features',
   )
);
