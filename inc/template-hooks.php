<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Autumn Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Adds custom classes to the array of body classes.
add_filter('body_class', 'gcod_body_classes');
add_filter('body_class', 'gcod_body_classes_full');
add_filter('body_class', 'gcod_browser_body_classes');

// Adds pingback
add_action('wp_head', 'gcod_pingback_header');

/** 
 * Hooks for Template 
 * 
 **/

// Adds classes to 
add_filter('gcod_container_class', 'gcod_add_container_classes');

// Header logo
add_action('gcod_heder_logo', 'gcod_default_header_logo');

// Site Title
add_action('gcod_site_title', 'gcod_default_site_title');

// Site Desciption
add_action('gcod_site_description', 'gcod_default_site_description');

// Header Menu
add_action('gcod_header_menu', 'gcod_default_header_menu');

// Adds classes to header
add_filter('gcod_header_class', 'gcod_add_header_classes');

// Change status Header
add_action('gcod_header_note', 'gcod_current_header_note');

add_filter('gcod_footer_class', 'gcod_add_footer_classes');

// Footer Menu
add_action('gcod_footer_menu', 'gcod_default_footer_menu');

// Change status footer
add_action('gcod_footer_note', 'gcod_current_footer_note');

// Loading darkmode
add_action('gcod_enqueue_scripts', 'gcod_load_script_darkmode');

// Adds classes to home content
add_filter('gcod_home_content_class', 'gcod_add_home_content_classes');

// Adds classes to featured slider
add_filter('gcod_featured_slider_class', 'gcod_add_featured_slider_classes');

// Adds classes to featured categories
add_filter('gcod_featured_categories_class', 'gcod_add_featured_categories_classes');

// Adds classes to featured posts
add_filter('gcod_featured_posts_class', 'gcod_add_featured_posts_classes');

// Adds classes to related post
add_filter('gcod_single_related_posts_class', 'gcod_add_single_related_posts_classes');

// Adds classes to lastest post
add_filter('gcod_home_lastest_posts_class', 'gcod_add_home_lastest_posts_classes');

// Adds classes to instagram
add_filter('gcod_home_instagram_class', 'gcod_add_home_instagram_classes');

// Adds classes to newsletter
add_filter('gcod_home_newsletter_class', 'gcod_add_home_newsletter_classes');

// Adds classes to post list
add_filter('gcod_home_post_list_class', 'gcod_add_home_post_list_classes');

// Post
add_action( 'gcod_post_content_after', 'gcod_post_pagination', 10 );

// Enable the_content if you want to automatically show social buttons below your post.
add_filter( 'gcod_the_content_shared', 'gcod_social_buttons');

// Page
add_action( 'gcod_page_content_after', 'gcod_post_pagination', 10 );

// Guide Setting
add_filter('gcod_quick_guide_setting', 'gcod_add_quick_guide_setting');

// Ajax loading more
add_action('wp_ajax_loadmore', 'gcod_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'gcod_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
add_action('wp_enqueue_scripts', 'gcod_ajax_load_more_scripts');