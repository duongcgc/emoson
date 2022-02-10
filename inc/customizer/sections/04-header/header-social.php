<?php

/**
 * Header socials section customizer.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$priority = 3;

// Social header
Kirki::add_section('gcod_header_social_header', array(
   'title'        => 'Social',
   'priority'     => $priority++,
   'panel'        => 'gcod_panel_header',
));