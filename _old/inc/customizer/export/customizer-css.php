<?php

/**
 * Enqueues default front-end CSS for Customizer options..
 * @package     Autumn Theme
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Get CSS fromt setting's 
function gcod_settings_css() {

	// GET SETTING VALUES ================

	// Header 
	$gcod_header_sticky     	= gcod_get_theme_mod('gcod_header_sticky');
	$gcod_header_overlay     	= gcod_get_theme_mod('gcod_header_overlay');
	$gcod_header_bg_color     	= gcod_get_theme_mod('gcod_header_bg_rgba_color');
	$gcod_header_bg_url     	= gcod_get_theme_mod('gcod_header_bg_image_url');


	// Page Header
	$page_header_color     	= gcod_get_theme_mod('gcod_general_pageheader_bg_rgba_color');
	$page_header_color     	= gcod_get_theme_mod('gcod_general_pageheader_bg_rgba_color');
	$page_header_url     	= gcod_page_header_background_url();

	if ($page_header_color == '') {
		$page_header_color     	= gcod_get_theme_mod('gcod_header_bg_rgba_color');
	}

	if ($page_header_color == '') {
		$page_header_color     	= 'transparent';
	}

	// Instagram
	$instagram_color     	= gcod_get_theme_mod('gcod_general_instagram_bg_rgba_color');
	$instagram_url     	 	= gcod_instagram_background_url();

	// Lastest Posts
	$lastest_posts_color    = gcod_get_theme_mod('gcod_general_lastest_posts_bg_rgba_color');
	$lastest_posts_url     	= gcod_lastest_posts_background_url();
	$lastest_posts_number 	= gcod_get_theme_mod('gcod_section_home_lastest_posts_number_items');

	// News Letter
	$news_letter_color     	= gcod_get_theme_mod('gcod_general_newsletter_bg_rgba_color');
	$news_letter_url     	= gcod_newsletter_background_url();

	// Include array for typography sets
	$typoset_array_file = get_template_directory() . '/inc/customizer/export/customizer-typoset.php';

	if (!file_exists($typoset_array_file)) {
		exit;
	};

	include($typoset_array_file);

	// Custom
	$gcod_body_font_family	= gcod_get_theme_mod('gcod_body_font_family');
	$gcod_custom_heading_font_family	= gcod_get_theme_mod('gcod_custom_main_heading_font_family1');
	$gcod_custom_heading_widget_font_family	= gcod_get_theme_mod('gcod_custom_heading_widget_font_family');
	$gcod_custom_post_category_font_family	= gcod_get_theme_mod('gcod_custom_post_category_font_family');
	$gcod_custom_post_meta_font_family	= gcod_get_theme_mod('gcod_custom_post_meta_font_family');
	$gcod_custom_menu_font_family	= gcod_get_theme_mod('gcod_custom_menu_font_family');
	$gcod_custom_button_font_family	= gcod_get_theme_mod('gcod_custom_button_font_family');

	// 1 - body
	$typography_custom_css = $typo_selectors['body'] . '{';
	if (isset($gcod_body_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_body_font_family['font-family'] . '";';
	}
	if (isset($gcod_body_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_body_font_family['variant'] . ';';
	}	
	$typography_custom_css .= '}';

	// 2 - Heading / Name
	$typography_custom_css .= $typo_selectors['name'] . '{';
	if (isset($gcod_custom_heading_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_custom_heading_font_family['font-family'] . '";';
	}
	if (isset($gcod_custom_heading_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_custom_heading_font_family['variant'] . ';';
	}
	$typography_custom_css .= '}';

	// 3 - Module
	$typography_custom_css .= $typo_selectors['module'] . '{';
	if (isset($gcod_custom_heading_widget_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_custom_heading_widget_font_family['font-family'] . '";';
	}
	if (isset($gcod_custom_heading_widget_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_custom_heading_widget_font_family['variant'] . ';';
	}
	$typography_custom_css .= '}';

	// 4 - Subtitle
	$typography_custom_css .= $typo_selectors['subtitle'] . '{';
	if (isset($gcod_custom_post_category_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_custom_post_category_font_family['font-family'] . '";';
	}
	if (isset($gcod_custom_post_category_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_custom_post_category_font_family['variant'] . ';';
	}
	$typography_custom_css .= '}';

	// 5 - Meta
	$typography_custom_css .= $typo_selectors['meta'] . '{';
	if (isset($gcod_custom_post_meta_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_custom_post_meta_font_family['font-family'] . '";';
	}
	if (isset($gcod_custom_post_meta_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_custom_post_meta_font_family['variant'] . ';';
	}
	$typography_custom_css .= '}';

	// 6 - Menu
	$typography_custom_css = $typo_selectors['nav'] . '{';
	if (isset($gcod_custom_menu_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_custom_menu_font_family['font-family'] . '";';
	}
	if (isset($gcod_custom_menu_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_custom_menu_font_family['variant'] . ';';
	}
	$typography_custom_css .= '}';

	// 7 - Button
	$typography_custom_css .= $typo_selectors['button'] . '{';
	if (isset($gcod_custom_button_font_family['font-family'])) {
		$typography_custom_css .= 'font-family: "' . $gcod_custom_button_font_family['font-family'] . '";';
	}
	if (isset($gcod_custom_button_font_family['variant'])) {
		$typography_custom_css .= 'font-variant: ' . $gcod_custom_button_font_family['variant'] . ';';
	}
	$typography_custom_css .= '}';

	// get typoset settings
	$gcod_set_typography	= gcod_get_theme_mod('gcod_set_typography');

	// render typography css
	$typography_render_css = '';
	if ($gcod_set_typography == 'typo-custom') {
		$typography_render_css = $typography_custom_css;
	}elseif ($gcod_set_typography != 'typo-default') {
		$typography_render_css = gcod_get_typoset_css($gcod_set_typography, $typo_selectors, $typo_set_values);
	}

	// Body custom font
	$gcod_font_size_setting	= gcod_get_theme_mod('gcod_font_size_setting');
	$gcod_line_height_setting	= gcod_get_theme_mod('gcod_line_height_setting');
	$gcod_line_width_setting	= gcod_get_theme_mod('gcod_line_width_setting');
	$gcod_paragraph_space_setting	= gcod_get_theme_mod('gcod_paragraph_space_setting');

	$body_custom_typography = 'body{';
	$body_custom_typography .= 'font-size:' . $gcod_font_size_setting . 'px;';
	$body_custom_typography .= 'line-height:' . $gcod_line_height_setting . 'px;';	
	$body_custom_typography .= '}';

	$body_custom_typography .= '.entry-content p{';
	$body_custom_typography .= 'margin-bottom:' . $gcod_paragraph_space_setting . 'px;';
	$body_custom_typography .= '}';

	$body_custom_typography .= 'body.single #primary{';
	$body_custom_typography .= 'max-width:' . $gcod_line_width_setting . 'px;';
	$body_custom_typography .= '}';


	// Heading Entry Content CSS

	$gcod_heading_1_size_setting	= gcod_get_theme_mod('gcod_heading_1_size_setting');
	$gcod_heading_2_size_setting	= gcod_get_theme_mod('gcod_heading_2_size_setting');
	$gcod_heading_3_size_setting	= gcod_get_theme_mod('gcod_heading_3_size_setting');
	$gcod_heading_4_size_setting	= gcod_get_theme_mod('gcod_heading_4_size_setting');
	$gcod_heading_5_size_setting	= gcod_get_theme_mod('gcod_heading_5_size_setting');
	$gcod_heading_6_size_setting	= gcod_get_theme_mod('gcod_heading_6_size_setting');

	$gcod_heading_1_font_family		= gcod_get_theme_mod('gcod_heading_1_font_family');
	$gcod_heading_2_font_family		= gcod_get_theme_mod('gcod_heading_2_font_family');
	$gcod_heading_3_font_family		= gcod_get_theme_mod('gcod_heading_3_font_family');
	$gcod_heading_4_font_family		= gcod_get_theme_mod('gcod_heading_4_font_family');
	$gcod_heading_5_font_family		= gcod_get_theme_mod('gcod_heading_5_font_family');
	$gcod_heading_6_font_family		= gcod_get_theme_mod('gcod_heading_6_font_family');


	$entry_content_render_css = '.entry-content h1{';
	$entry_content_render_css .= 'font-size:' . $gcod_heading_1_size_setting . 'px;';
	if ($gcod_heading_1_font_family['font-family']) {
		$entry_content_render_css .= 'font-family:' . $gcod_heading_1_font_family['font-family'] . ';';
	}	
	if ($gcod_heading_1_font_family['letter-spacing']) {
		$entry_content_render_css .= 'letter-spacing:' . $gcod_heading_1_font_family['letter-spacing'] . 'px;';
	}
	if ($gcod_heading_1_font_family['text-transform']) {
		$entry_content_render_css .= 'text-transform:' . $gcod_heading_1_font_family['text-transform'] . ';';
	}
	if ($gcod_heading_1_font_family['color']) {
		$entry_content_render_css .= 'color:' . $gcod_heading_1_font_family['color'] . ';';
	}
	$entry_content_render_css .= '}';

	$entry_content_render_css .= '.entry-content h2{';
	$entry_content_render_css .= 'font-size:' . $gcod_heading_2_size_setting . 'px;';
	if ($gcod_heading_2_font_family['font-family']) {
		$entry_content_render_css .= 'font-family:' . $gcod_heading_2_font_family['font-family'] . ';';
	}	
	if ($gcod_heading_2_font_family['letter-spacing']) {
		$entry_content_render_css .= 'letter-spacing:' . $gcod_heading_2_font_family['letter-spacing'] . 'px;';
	}
	if ($gcod_heading_2_font_family['text-transform']) {
		$entry_content_render_css .= 'text-transform:' . $gcod_heading_2_font_family['text-transform'] . ';';
	}
	if ($gcod_heading_2_font_family['color']) {
		$entry_content_render_css .= 'color:' . $gcod_heading_2_font_family['color'] . ';';
	}
	$entry_content_render_css .= '}';

	$entry_content_render_css .= '.entry-content h3{';
	$entry_content_render_css .= 'font-size:' . $gcod_heading_3_size_setting . 'px;';
	if ($gcod_heading_3_font_family['font-family']) {
		$entry_content_render_css .= 'font-family:' . $gcod_heading_3_font_family['font-family'] . ';';
	}	
	if ($gcod_heading_3_font_family['letter-spacing']) {
		$entry_content_render_css .= 'letter-spacing:' . $gcod_heading_3_font_family['letter-spacing'] . 'px;';
	}
	if ($gcod_heading_3_font_family['text-transform']) {
		$entry_content_render_css .= 'text-transform:' . $gcod_heading_3_font_family['text-transform'] . ';';
	}
	if ($gcod_heading_3_font_family['color']) {
		$entry_content_render_css .= 'color:' . $gcod_heading_3_font_family['color'] . ';';
	}
	$entry_content_render_css .= '}';

	$entry_content_render_css .= '.entry-content h4{';
	$entry_content_render_css .= 'font-size:' . $gcod_heading_4_size_setting . 'px;';
	if ($gcod_heading_4_font_family['font-family']) {
		$entry_content_render_css .= 'font-family:' . $gcod_heading_4_font_family['font-family'] . ';';
	}	
	if ($gcod_heading_4_font_family['letter-spacing']) {
		$entry_content_render_css .= 'letter-spacing:' . $gcod_heading_4_font_family['letter-spacing'] . 'px;';
	}
	if ($gcod_heading_4_font_family['text-transform']) {
		$entry_content_render_css .= 'text-transform:' . $gcod_heading_4_font_family['text-transform'] . ';';
	}
	if ($gcod_heading_4_font_family['color']) {
		$entry_content_render_css .= 'color:' . $gcod_heading_4_font_family['color'] . ';';
	}
	$entry_content_render_css .= '}';

	$entry_content_render_css .= '.entry-content h5{';
	$entry_content_render_css .= 'font-size:' . $gcod_heading_5_size_setting . 'px;';
	if ($gcod_heading_5_font_family['font-family']) {
		$entry_content_render_css .= 'font-family:' . $gcod_heading_5_font_family['font-family'] . ';';
	}	
	if ($gcod_heading_5_font_family['letter-spacing']) {
		$entry_content_render_css .= 'letter-spacing:' . $gcod_heading_5_font_family['letter-spacing'] . 'px;';
	}
	if ($gcod_heading_5_font_family['text-transform']) {
		$entry_content_render_css .= 'text-transform:' . $gcod_heading_5_font_family['text-transform'] . ';';
	}
	if ($gcod_heading_5_font_family['color']) {
		$entry_content_render_css .= 'color:' . $gcod_heading_5_font_family['color'] . ';';
	}
	$entry_content_render_css .= '}';

	$entry_content_render_css .= '.entry-content h6{';
	$entry_content_render_css .= 'font-size:' . $gcod_heading_6_size_setting . 'px;';
	if ($gcod_heading_6_font_family['font-family']) {
		$entry_content_render_css .= 'font-family:' . $gcod_heading_6_font_family['font-family'] . ';';
	}	
	if ($gcod_heading_6_font_family['letter-spacing']) {
		$entry_content_render_css .= 'letter-spacing:' . $gcod_heading_6_font_family['letter-spacing'] . 'px;';
	}
	if ($gcod_heading_6_font_family['text-transform']) {
		$entry_content_render_css .= 'text-transform:' . $gcod_heading_6_font_family['text-transform'] . ';';
	}
	if ($gcod_heading_6_font_family['color']) {
		$entry_content_render_css .= 'color:' . $gcod_heading_6_font_family['color'] . ';';
	}
	$entry_content_render_css .= '}';

	
	// APPLYING INTO CSS ======================================

	$css = '';

	$css .= $typography_render_css;
	$css .= $body_custom_typography;
	$css .= $entry_content_render_css;


	// apply into page header 
	$css .=
		'
	.container-header{
		background-size: cover;		
		background-color:' . esc_attr($page_header_color)  . ';
		background-image:url( ' . esc_attr($page_header_url) .  ');		
	}

	';

	// Apply Overlay into Main Header
	if ($gcod_header_overlay) {
		$css .=
			'
		.header-wrapper {		
			position: absolute;
			width: 100%;
			z-index: 999;
		}

		.header-wrapper + div {
			padding-top: 250px;
		}
	
		';
	}

	// Apply Background Color into Main Header
	if ($gcod_header_bg_color) {
		$css .=
			'
		.header-wrapper {		
			background-color:' . esc_attr($gcod_header_bg_color)  . ';
		}
	
		';
	}

	// Apply Background Image into Main Header
	if ($gcod_header_bg_url) {
		$css .=
			'
		.header-wrapper {	
			background-size: cover;	
			background-image:url( ' . esc_attr($gcod_header_bg_url) .  ');
		}
	
		';
	}

	// apply into page instagram
	$css .=
		'
	.instagram-wrapper{
		background-size: cover;
		background-color:' . esc_attr($instagram_color)  . ';
		background-image:url( ' . esc_attr($instagram_url) .  ');
	}

	';

	// apply into page newsletter
	$css .=
		'
	.newsletter-wrapper{
		background-color:' . esc_attr($news_letter_color)  . ';
		background-image:url( ' . esc_attr($news_letter_url) .  ');
	}

	';

	// apply into page lastest posts
	$css .=
		'
	.container-lastest-posts{
		background-color:' . esc_attr($lastest_posts_color)  . ';
		background-image:url( ' . esc_attr($lastest_posts_url) .  ');
	}

	#page .inner-lastest-posts .lastest-posts-content .posts__module.style-2 .item, 
	#page .lastest-posts-wrapper .lastest-posts-content .posts__module.style-2 .item {
		width: calc(100% / '.  esc_attr($lastest_posts_number) .');
	}

	';




	// Minify.
	if (function_exists('gcod_minify_css')) {
		$css = gcod_minify_css($css);
	}

	return wp_strip_all_tags($css);
}

function gcod_settings_styles() {
	wp_register_style('gcod-inline-styles', false);
	wp_enqueue_style('gcod-inline-styles');
	wp_add_inline_style('gcod-inline-styles', gcod_settings_css());
}
add_action('wp_enqueue_scripts', 'gcod_settings_styles', 100);
