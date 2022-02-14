<?php

/**
 * Customizer settings.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


// Customizer Demo setting's panels - remove when publish.
// require_once GCOD_INC_DIR . '/customizer/customizer-demo.php';


// Customizer setting's panels - disable on demo site.
require_once GCOD_INC_DIR . '/customizer/customizer-panels.php';

// Load all customizer section's settings
gcod_require_all(GCOD_INC_DIR . '/customizer/sections', '_');   