<?php

/**
 * Customizer Settings for Unit Theme not actived core plugin.
 *
 * Description.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since Version
 */

defined('ABSPATH') || exit;

function gcod_add_checkbox($wp_customize) {

    //add setting
    $wp_customize->add_setting('gcod_dark_mode_color', array(
        'default' => '',
        'sanitize_callback'  => 'esc_attr',
    ));

    //add control
    $wp_customize->add_control('gcod_dark_mode_color_control', array(
        'label' => 'Using Darkmode',
        'type'  => 'checkbox', // this indicates the type of control
        'section' => 'colors',
        'settings' => 'gcod_dark_mode_color'
    ));
}

add_action('customize_register', 'gcod_add_checkbox');
