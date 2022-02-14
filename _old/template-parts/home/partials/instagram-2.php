<?php 
// Instagram 2

if (!defined('ABSPATH')) exit; // Exit if accessed directly 
$instagram_title = gcod_get_theme_mod('gcod_section_home_instagram_title');
$instagram_shortcode = gcod_get_theme_mod('gcod_section_home_instagram_shortcode');
echo do_shortcode($instagram_shortcode);