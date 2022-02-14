<?php

/**
 * Get the choices option for Autumn Theme Customizer settings.
 *
 * @package     Autumn Theme
 * @link        https://gcodesign.com/autumn
 * 
 * @param  string|string $name Option key name to get choices.
 * @return mixin
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// List of archive style
function gcod_get_archive_styles($type = 'list') {

	$list_array = array (		
		'archive-style-1' => esc_attr__('Archive Default Theme', 'autumn-theme'),
		'archive-style-2' => esc_attr__('Archive Home List', 'autumn-theme'),
		'archive-style-3' => esc_attr__('Archive Category Grid', 'autumn-theme'),
		'archive-style-4' => esc_attr__('Archive Large Center', 'autumn-theme'),
		'archive-style-5' => esc_attr__('Archive Masonry', 'autumn-theme'),
		'archive-style-6' => esc_attr__('Archive Search Result', 'autumn-theme'),
		'archive-style-7' => esc_attr__('Archive Author Portfolio', 'autumn-theme'),
	);

	$general_array = array (
		'general' => esc_attr__('General Settings', 'autumn-theme'),
	);

	$archive_array = array (
		'general' => esc_attr__('General Settings', 'autumn-theme'),
		'archive' => esc_attr__('Archive Settings', 'autumn-theme'),
	);

	// list
	$result = array_merge($archive_array, $list_array);

	if ($type == 'general') {
		$result = $list_array;
	} elseif ($type == 'archive') {
		$result = array_merge($general_array, $list_array);
	}

	return $result;
}

function gcod_choices($name) {
	static $choices;

	if (!$choices) {
		$choices = apply_filters(
			'gcod_choices',
			array(

				// Color Sets.
				'gcod_set_colors' => array(
					'color-set-1' => esc_attr__('Color Set 1', 'autumn-theme'),
					'color-set-2' => esc_attr__('Color Set 2', 'autumn-theme'),
					'color-set-3' => esc_attr__('Color Set 3', 'autumn-theme'),
				),

				// Color Text on Darkmode
				'color_text_on_darkmode' => [
					'colors' => ['#000000', '#222222', '#444444', '#666666', '#888888', '#aaaaaa', '#cccccc', '#eeeeee', '#ffffff'],
					'style'  => 'round',
				],

				// color_background_on_darkmode
				'color_background_on_darkmode' => [
					'colors' => ['#000000', '#222222', '#444444', '#666666', '#888888', '#aaaaaa', '#cccccc', '#eeeeee', '#ffffff'],
					'style'  => 'round',
				],

				// background body boxed repeat
				'gcod_background_body_boxed_repeat'     => array(
					'no-repeat' => esc_attr__('No Repeat', 'autumn-theme'),
					'repeat-x'    => esc_attr__('Repeat X', 'autumn-theme'),
					'repeat-y'    => esc_attr__('Repeat Y', 'autumn-theme'),
					'repeat-both'    => esc_attr__('Repeat Both', 'autumn-theme'),
				),

				// background body boxed attachment
				'gcod_background_body_boxed_attachment'     => array(
					'fixed' => esc_attr__('Fixed', 'autumn-theme'),
					'scroll'    => esc_attr__('Scroll', 'autumn-theme'),
					'local'    => esc_attr__('Local', 'autumn-theme'),
				),

				// background body boxed sized
				'gcod_background_body_boxed_sized'     => array(
					'cover' => esc_attr__('Cover', 'autumn-theme'),
					'auto'    => esc_attr__('Auto', 'autumn-theme'),
				),

				// Button Concepts
				'gcod_button_concept' => array(
					'button-square' => esc_html__('Square Button', 'autumn-theme'),
					'button-round' => esc_html__('Round Button', 'autumn-theme'),
				),

				// Button Styles
				'gcod_button_shared_style' => array(
					'outline' => esc_html__('Outline Round', 'autumn-theme'),					
					'square' => esc_html__('Square', 'autumn-theme'),
					'color' => esc_html__('Color', 'autumn-theme'),					
				),

				// Heading size 1 - 6
				'gcod_heading_1_size_setting' => [
					'min'  => 0,
					'max'  => 150,
					'step' => 1,
				],
				'gcod_heading_2_size_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],
				'gcod_heading_3_size_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],
				'gcod_heading_4_size_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],
				'gcod_heading_5_size_setting' => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
				'gcod_heading_6_size_setting' => [
					'min'  => 0,
					'max'  => 30,
					'step' => 1,
				],

				// General Social Icons Display
				'gcod_social_icons_setting' => array(
					'icon-facebook' => esc_html__('Facebook', 'autumn-theme'),
					'icon-instagram' => esc_html__('Instagram', 'autumn-theme'),
					'icon-linkedin' => esc_html__('Linkedin', 'autumn-theme'),
					'icon-twitter' => esc_html__('Twitter', 'autumn-theme'),
					'icon-youtube' => esc_html__('Youtube', 'autumn-theme'),
					'icon-dribbble' => esc_html__('Dribbble', 'autumn-theme'),
					'icon-behance' => esc_html__('Behance', 'autumn-theme'),
					'icon-flickr' => esc_html__('Flickr', 'autumn-theme'),
					'icon-pinterest' => esc_html__('Pinterest', 'autumn-theme'),
					'icon-github' => esc_html__('Github', 'autumn-theme'),					
				),

				// General Social Shared Display
				'gcod_social_shared_setting' => array(
					's-twitter' => esc_html__('Twitter', 'autumn-theme'),
					's-facebook' => esc_html__('Facebook', 'autumn-theme'),
					's-whatsapp' => esc_html__('Whatsapp', 'autumn-theme'),
					's-googleplus' => esc_html__('Google+', 'autumn-theme'),
					's-linkedin' => esc_html__('Linkedin', 'autumn-theme'),					
					's-pinterest' => esc_html__('Pinterest', 'autumn-theme'),									
				),

				// General Archive Posts Elements
				'gcod_general_archive_element_setting' => array(
					'element-post-categories' => esc_html__('Categories', 'autumn-theme'),
					'element-post-date' => esc_html__('Date', 'autumn-theme'),
					'element-post-author' => esc_html__('Author', 'autumn-theme'),
					'element-post-tags' => esc_html__('Tags', 'autumn-theme'),
					'element-post-thumnbail' => esc_html__('Post Thumbnail', 'autumn-theme'),
					'element-post-except' => esc_html__('Post Except', 'autumn-theme'),
					'element-post-share' => esc_html__('Post Share', 'autumn-theme'),
					'element-post-readmore' => esc_html__('Post Readmore', 'autumn-theme'),
					'element-post-readlate' => esc_html__('Post Readlate', 'autumn-theme'),
				),

				// General single post elements
				'gcod_general_single_element_setting' => array(
					'element-post-categories' => esc_html__('Categories', 'autumn-theme'),
					'element-post-date' => esc_html__('Date', 'autumn-theme'),
					'element-post-author' => esc_html__('Author', 'autumn-theme'),
					'element-post-tags' => esc_html__('Tags', 'autumn-theme'),
					'element-post-thumnbail' => esc_html__('Post Thumbnail', 'autumn-theme'),
					'element-post-except' => esc_html__('Post Except', 'autumn-theme'),
					'element-post-share' => esc_html__('Post Share', 'autumn-theme'),
					'element-post-related' => esc_html__('Related posts', 'autumn-theme'),
					'element-post-comment' => esc_html__('Post Comment', 'autumn-theme'),
				),

				// Shared buttons showing on Pages
				'gcod_shared_buttons_show_on' => array(
					'shared-single-post' => esc_html__('Single Post', 'autumn-theme'),
					'shared-single-page' => esc_html__('Single Page', 'autumn-theme'),
					'shared-sticky-post' => esc_html__('Sticky Post', 'autumn-theme'),					
				),

				// Position show featured sections
				'gcod_show_featured_sections_postions' => array(
					'above-main-content' => esc_html__('Above main content - below Header', 'autumn-theme'),
					'begin-main-content' => esc_html__('Begin main content  - Inside & top Main cotent', 'autumn-theme'),
					'end-main-content' => esc_html__('End main content  - Inside & bottom Main cotent', 'autumn-theme'),
					'below-main-content' => esc_html__('Below main content - above Footer', 'autumn-theme'),
				),

				// General Page Layout
				'gcod_layout_general_page' => array(
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Archive Posts Style
				'gcod_general_archive_style' => gcod_get_archive_styles('general'),

				// Search Posts Style
				'gcod_layout_search' => gcod_get_archive_styles(),

				// gcod_general_archive_number_posts
				'gcod_general_archive_number_posts' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],				

				// gcod_general_archive_grid_number_columns
				'gcod_general_archive_grid_number_columns' => [
					'1' => esc_html__('1', 'autumn-theme'),
					'2' => esc_html__('2', 'autumn-theme'),
					'3' => esc_html__('3', 'autumn-theme'),
					'4' => esc_html__('4', 'autumn-theme'),
					'5' => esc_html__('5', 'autumn-theme'),
					'6' => esc_html__('6', 'autumn-theme'),
					'7' => esc_html__('7', 'autumn-theme'),
					'8' => esc_html__('8', 'autumn-theme'),
					'9' => esc_html__('9', 'autumn-theme'),
					'10' => esc_html__('10', 'autumn-theme'),
				],

				// gcod_general_component_number_items
				'gcod_general_component_number_items' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_general_component_number_columns
				'gcod_general_component_number_columns' => [
					'1' => esc_html__('1', 'autumn-theme'),
					'2' => esc_html__('2', 'autumn-theme'),
					'3' => esc_html__('3', 'autumn-theme'),
					'4' => esc_html__('4', 'autumn-theme'),
					'5' => esc_html__('5', 'autumn-theme'),
					'6' => esc_html__('6', 'autumn-theme'),
					'7' => esc_html__('7', 'autumn-theme'),
					'8' => esc_html__('8', 'autumn-theme'),
					'9' => esc_html__('9', 'autumn-theme'),
					'10' => esc_html__('10', 'autumn-theme'),
				],

				// Thumbnail Hover Effect Style
				'gcod_thumbnail_hover_effect' => array(
					'hover-none' => esc_attr__('None', 'autumn-theme'),
					'hover-zoom' => esc_attr__('Zoom', 'autumn-theme'),
					'hover-dark' => esc_attr__('Dark', 'autumn-theme'),
					'hover-shadow' => esc_attr__('Shadow', 'autumn-theme'),
				),

				// Page Header General Style
				'gcod_general_pageheader_style' => array(
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Navigation Style
				'gcod_navigation_pagenav' => array(
					'number' => esc_attr__('Number', 'autumn-theme'),
					'border' => esc_attr__('Number Border', 'autumn-theme'),
					'standard' => esc_attr__('Next Previous', 'autumn-theme'),
					'ajax' => esc_attr__('Ajax Load Button', 'autumn-theme'),
					'infinity' => esc_attr__('Infinity Loading', 'autumn-theme'),
				),

				// Breadcrumb Style
				'gcod_breadcrumb_style' => array(
					'breadcrumb-1' => esc_attr__('Breadcrumb style 1', 'autumn-theme'),
				),

				// Title - Main Heading Style
				'gcod_page_title_style' => array(
					'page-title-1' => esc_attr__('Title - Main Heading style 1', 'autumn-theme'),
					'page-title-2' => esc_attr__('Title - Main Heading style 2', 'autumn-theme'),
					'page-title-3' => esc_attr__('Title - Main Heading style 3', 'autumn-theme'),
					'page-title-4' => esc_attr__('Title - Main Heading style 4', 'autumn-theme'),
				),

				// gcod_set_quote
				'gcod_set_quote' => array(
					'quote-set-1' => esc_attr__('Quote one', 'autumn-theme'),
					'quote-set-2' => esc_attr__('Quote two', 'autumn-theme'),
					'quote-set-3' => esc_attr__('Quote three', 'autumn-theme'),
					'quote-set-4' => esc_attr__('Quote four', 'autumn-theme'),
					'quote-set-5' => esc_attr__('Quote five', 'autumn-theme'),
					'quote-set-6' => esc_attr__('Quote six', 'autumn-theme'),
				),

				// gcod_quote_font_size_setting
				'gcod_quote_font_size_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_quote_line_height_setting
				'gcod_quote_line_height_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_quote_line_width_setting
				'gcod_quote_line_width_setting' => [
					'min'  => 0,
					'max'  => 1920,
					'step' => 1,
				],

				// gcod_quote_author_space_setting
				'gcod_quote_author_space_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_quote_author_font_size_setting
				'gcod_quote_author_font_size_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_quote_author_line_height_setting
				'gcod_quote_author_line_height_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_set_typography
				'gcod_set_typography' => array(
					'typo-default' => esc_attr__('Typoset Default', 'autumn-theme'),
					'typo-set-1' => esc_attr__('Typoset - Serif & Sans', 'autumn-theme'),
					'typo-set-2' => esc_attr__('Typoset - Sans & Serif', 'autumn-theme'),
					'typo-set-3' => esc_attr__('Typoset - Serif', 'autumn-theme'),
					// 'typo-set-5' => esc_attr__('Typoset - 5', 'autumn-theme'),
					// 'typo-set-6' => esc_attr__('Typoset - 6', 'autumn-theme'),
					// 'typo-set-7' => esc_attr__('Typoset - 7', 'autumn-theme'),
					// 'typo-set-8' => esc_attr__('Typoset - 8', 'autumn-theme'),
					// 'typo-set-9' => esc_attr__('Typoset - 9', 'autumn-theme'),
					// 'typo-set-10' => esc_attr__('Typoset - 10', 'autumn-theme'),
					// 'typo-set-11' => esc_attr__('Typoset - 11', 'autumn-theme'),
					// 'typo-set-12' => esc_attr__('Typoset - 12', 'autumn-theme'),
					// 'typo-set-13' => esc_attr__('Typoset - 13', 'autumn-theme'),
					// 'typo-set-14' => esc_attr__('Typoset - 14', 'autumn-theme'),
					// 'typo-set-15' => esc_attr__('Typoset - 15', 'autumn-theme'),
					// 'typo-set-16' => esc_attr__('Typoset - 16', 'autumn-theme'),
					// 'typo-set-17' => esc_attr__('Typoset - 17', 'autumn-theme'),
					// 'typo-set-18' => esc_attr__('Typoset - 18', 'autumn-theme'),
					// 'typo-set-19' => esc_attr__('Typoset - 19', 'autumn-theme'),
					// 'typo-set-20' => esc_attr__('Typoset - 20', 'autumn-theme'),
					// 'typo-set-21' => esc_attr__('Typoset - 21', 'autumn-theme'),
					// 'typo-set-22' => esc_attr__('Typoset - 22', 'autumn-theme'),					
					'typo-custom' => esc_attr__('Typoset Custom', 'autumn-theme'),
				),

				// gcod_font_size_setting
				'gcod_font_size_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_line_height_setting
				'gcod_line_height_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_line_width_setting
				'gcod_line_width_setting' => [
					'min'  => 0,
					'max'  => 1920,
					'step' => 1,
				],

				// gcod_paragraph_space_setting
				'gcod_paragraph_space_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],


				// gcod_spacing_page_setting
				'gcod_spacing_page_setting' => [
					'min'  => 0,
					'max'  => 160,
					'step' => 1,
				],

				// gcod_spacing_1_setting
				'gcod_spacing_1_setting' => [
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				],

				// gcod_spacing_2_setting
				'gcod_spacing_2_setting' => [
					'min'  => 0,
					'max'  => 160,
					'step' => 1,
				],

				// gcod_spacing_3_setting
				'gcod_spacing_3_setting' => [
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				],

				// gcod_spacing_4_setting
				'gcod_spacing_4_setting' => [
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				],

				// gcod_spacing_5_setting
				'gcod_spacing_5_setting' => [
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				],

				// gcod_spacing_6_setting
				'gcod_spacing_6_setting' => [
					'min'  => 0,
					'max'  => 40,
					'step' => 1,
				],

				// gcod_line_1_setting
				'gcod_line_1_setting' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 1,
				],

				// gcod_line_2_setting
				'gcod_line_2_setting' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 2,
				],

				// gcod_line_3_setting
				'gcod_line_3_setting' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 3,
				],

				// gcod_border_radius_1_setting
				'gcod_border_radius_1_setting' => [
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				],

				// gcod_border_radius_2_setting
				'gcod_border_radius_2_setting' => [
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				],

				// gcod_border_radius_3_setting
				'gcod_border_radius_3_setting' => [
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				],

				// Header Style List
				'gcod_layout_header' => array(
					'header-1' => esc_attr__('Header 1', 'autumn-theme'),
					'header-2' => esc_attr__('Header 2', 'autumn-theme'),
					'header-3' => esc_attr__('Header 3', 'autumn-theme'),
					'header-4' => esc_attr__('Header 4', 'autumn-theme'),
					'header-5' => esc_attr__('Header 5', 'autumn-theme'),
					'header-6' => esc_attr__('Header 6', 'autumn-theme'),
				),

				// Darkmode Header Choices
				'gcod_header_darkmode' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'lightmode' => esc_attr__('Light Mode', 'autumn-theme'),
					'darkmode' => esc_attr__('Dark Mode', 'autumn-theme'),
				),

				// Header Elements
				'gcod_header_element_setting' => array(
					'element-menu-icon' => esc_html__('Menu Icon', 'autumn-theme'),
					'element-header-logo' => esc_html__('Header Logo', 'autumn-theme'),
					'element-search-box' => esc_html__('Search Box', 'autumn-theme'),
					'element-header-menu' => esc_html__('Header Menu', 'autumn-theme'),
					'element-darkmode-icon' => esc_html__('Darkmode Icon', 'autumn-theme'),
					'element-social-icons' => esc_html__('Social Icons', 'autumn-theme'),
				),

				// Header Elements
				'gcod_header_element_setting' => array(
					'element-menu-icon' => esc_html__('Menu Icon', 'autumn-theme'),
					'element-header-logo' => esc_html__('Header Logo', 'autumn-theme'),
					'element-search-box' => esc_html__('Search Box', 'autumn-theme'),
					'element-header-menu' => esc_html__('Header Menu', 'autumn-theme'),
					'element-darkmode-icon' => esc_html__('Darkmode Icon', 'autumn-theme'),
					'element-social-icons' => esc_html__('Social Icons', 'autumn-theme'),
				),

				// Header Style List
				'gcod_header_menu_style' => array(
					'header-menu-1' => esc_attr__('Header Menu Style 1', 'autumn-theme'),
					'header-menu-2' => esc_attr__('Header Menu Style 2', 'autumn-theme'),
					'header-menu-3' => esc_attr__('Header Menu Style 3', 'autumn-theme'),					
				),

				// Menu Navigation Style
				'gcod_side_menu_style' => array(
					'menu-style-1' => esc_attr__('Side Menu Style 1', 'autumn-theme'),
					'menu-style-2' => esc_attr__('Side Menu Style 2', 'autumn-theme'),
					'menu-style-3' => esc_attr__('Side Menu Style 3', 'autumn-theme'),					
				),

				// Home Builder Sidebar List
				'gcod_sidebar_layout_home_builder' => array(
					'general' => esc_attr__('General Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Home Sections
				'gcod_home_section_setting' => array(
					'section-home-post-list'               => esc_html__('Home Post List', 'autumn-theme'),
					'section-home-featured-slider'         => esc_html__('Home Featured Slider', 'autumn-theme'),
					'section-home-featured-posts'          => esc_html__('Home Featured Posts', 'autumn-theme'),
					'section-home-featured-categories'     => esc_html__('Home Featured Categories', 'autumn-theme'),
					'section-home-newsletter'              => esc_html__('Home Newsletter', 'autumn-theme'),
					'section-home-instagram'               => esc_html__('Home Instagram', 'autumn-theme'),
					'section-home-lastest-posts'            => esc_html__('Home Lastest Posts', 'autumn-theme'),
				),

				// Home Layout List
				'gcod_layout_home_content' => array(
					'home-1' => esc_attr__('Home 1', 'autumn-theme'),
					'home-2' => esc_attr__('Home 2', 'autumn-theme'),
					'home-3' => esc_attr__('Home 3', 'autumn-theme'),					
				),

				// Home Section Post List
				'gcod_section_home_post_list_style' => array(
					'post-list-1' => esc_attr__('Post List Style 1', 'autumn-theme'),
					'post-list-2' => esc_attr__('Post List Style 2', 'autumn-theme'),
					'post-list-3' => esc_attr__('Post List Style 3', 'autumn-theme'),
					'post-list-4' => esc_attr__('Post List Style 4', 'autumn-theme'),					
					'post-list-5' => esc_attr__('Post List Style 5', 'autumn-theme'),					
				),

				// Home Section Lastest Posts
				'gcod_section_home_lastest_posts_style' => array(
					'lastest-posts-1' => esc_attr__('Lastest Posts Style 1', 'autumn-theme'),
					'lastest-posts-2' => esc_attr__('Lastest Posts Style 2', 'autumn-theme'),
					'lastest-posts-3' => esc_attr__('Lastest Posts Style 3', 'autumn-theme'),				
					'lastest-posts-4' => esc_attr__('Lastest Posts Style 4', 'autumn-theme'),				
				),

				// Single Section Related Posts
				'gcod_section_single_related_posts_style' => array(
					'related-posts-1' => esc_attr__('Related Posts Style 1', 'autumn-theme'),					
				),

				// Single Section Related Posts Order
				'gcod_section_single_related_posts_order' => array(
					'none' => esc_attr__('Auto', 'autumn-theme'),					
					'date' => esc_attr__('by Date', 'autumn-theme'),					
					'ID' => esc_attr__('by ID', 'autumn-theme'),					
					'author' => esc_attr__('by Author', 'autumn-theme'),					
					'title' => esc_attr__('by Title', 'autumn-theme'),					
					'name' => esc_attr__('by Slug', 'autumn-theme'),					
					'modified' => esc_attr__('by Updated', 'autumn-theme'),					
					'comment_count' => esc_attr__('by Comments', 'autumn-theme'),					
					'comment_count' => esc_attr__('by Comments', 'autumn-theme'),					
				),

				// Single Section Related Posts Source
				'gcod_section_single_related_posts_source' => array(
					'related-posts-by-tag' => esc_attr__('By Tag', 'autumn-theme'),					
					'related-posts-by-category' => esc_attr__('By Category', 'autumn-theme'),					
				),

				// Home Section Newsletter
				'gcod_section_home_newsletter_style' => array(
					'newsletter-1' => esc_attr__('Newsletter Style 1', 'autumn-theme'),
					'newsletter-2' => esc_attr__('Newsletter Style 2', 'autumn-theme'),					
					'newsletter-3' => esc_attr__('Newsletter Style 3', 'autumn-theme'),					
				),

				// Home Section Instagram
				'gcod_section_home_instagram_style' => array(
					'instagram-1' => esc_attr__('Instagram Style 1', 'autumn-theme'),
					'instagram-2' => esc_attr__('Instagram Style 2', 'autumn-theme'),
				),

				// Home Blog List
				'gcod_layout_home_blog_list' => array(
					'home-bloglist-1' => esc_attr__('Home Blog List 1', 'autumn-theme'),
					'home-bloglist-2' => esc_attr__('Home Blog List 2', 'autumn-theme'),
					'home-bloglist-3' => esc_attr__('Home Blog List 3', 'autumn-theme'),
					'home-bloglist-4' => esc_attr__('Home Blog List 4', 'autumn-theme'),
					'home-bloglist-5' => esc_attr__('Home Blog List 5', 'autumn-theme'),
					'home-bloglist-6' => esc_attr__('Home Blog List 6', 'autumn-theme'),
				),

				// Home Blog List Sections
				'gcod_featured_sections_setting' => array(
					'section-home-featured-slider'         => esc_html__('Home Featured Slider', 'autumn-theme'),
					'section-home-featured-posts'          => esc_html__('Home Featured Posts', 'autumn-theme'),
					'section-home-featured-categories'     => esc_html__('Home Featured Categories', 'autumn-theme'),
				),

				// Categories Layouts for cagegories
				'gcod_featured_categories_layout' => array(
					'categories-boxed' => esc_attr__('Featured Categories Boxed', 'autumn-theme'),
					'categories-fullwidth' => esc_attr__('Featured Categories Fullwidth', 'autumn-theme'),
				),

				// Categories Style List for categories
				'gcod_featured_categories_style' => array(
					'featured-categories-1' => esc_attr__('Featured categories 1', 'autumn-theme'),
					'featured-categories-2' => esc_attr__('Featured categories 2', 'autumn-theme'),
				),

				// Darkmode Featured Categories Choices
				'gcod_featured_categories_darkmode' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'lightmode' => esc_attr__('Light Mode', 'autumn-theme'),
					'darkmode' => esc_attr__('Dark Mode', 'autumn-theme'),
				),

				// gcod_featured_categories_number_items for categories
				'gcod_featured_categories_number_items' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 1,
				],

				// Categories Style List for categories
				'gcod_featured_categories_source' => array(
					'gcod-slider'   => esc_attr__('Data from Slider CPT', 'autumn-theme'),
					'gcod-cats-selected'    => esc_attr__('Data from Category', 'autumn-theme'),
				),

				// Get categories from for categories?
				'gcod_featured_categories_source_get_posts' => array(
					'gcod-all'              => esc_attr__('Get all category', 'autumn-theme'),
					'gcod-selected'         => esc_attr__('Get categories from selected', 'autumn-theme'),
				),

				// Posts Layouts for posts
				'gcod_featured_posts_layout' => array(
					'posts-boxed' => esc_attr__('Featured Posts Boxed', 'autumn-theme'),
					'posts-fullwidth' => esc_attr__('Featured Posts Fullwidth', 'autumn-theme'),
				),


				// Post Style List for posts
				'gcod_featured_posts_style' => array(
					'featured-posts-1' => esc_attr__('Featured Posts style 1', 'autumn-theme'),
					'featured-posts-2' => esc_attr__('Featured Posts style 2', 'autumn-theme'),
					'featured-posts-3' => esc_attr__('Featured Posts style 3', 'autumn-theme'),
					'featured-posts-4' => esc_attr__('Featured Posts style 4', 'autumn-theme'),
					'featured-posts-5' => esc_attr__('Featured Posts style 5', 'autumn-theme'),
					'featured-posts-6' => esc_attr__('Featured Posts style 6', 'autumn-theme'),
				),

				// Darkmode Featured Posts Choices
				'gcod_featured_posts_darkmode' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'lightmode' => esc_attr__('Light Mode', 'autumn-theme'),
					'darkmode' => esc_attr__('Dark Mode', 'autumn-theme'),
				),

				// gcod_featured_post_number_items for post
				'gcod_featured_post_number_items' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 1,
				],

				// Post Style List for posts
				'gcod_featured_post_source' => array(
					'gcod-slider'   => esc_attr__('Data from Slider CPT', 'autumn-theme'),
					'gcod-posts'    => esc_attr__('Data from Posts', 'autumn-theme'),
				),

				// Get posts from for posts?
				'gcod_featured_post_source_get_posts' => array(
					'gcod-all'              => esc_attr__('Get all posts', 'autumn-theme'),
					'gcod-category'         => esc_attr__('Get posts from categories', 'autumn-theme'),
					'gcod-tag'              => esc_attr__('Get posts from tags', 'autumn-theme'),
				),

				// Get post order for posts
				'gcod_featured_post_source_posts_order' => array(
					'gcod-lastest'   => esc_attr__('Lastest Posts (New)', 'autumn-theme'),
					'gcod-popular'    => esc_attr__('Popular Posts (View)', 'autumn-theme'),
				),

				// Slider Layouts for slider
				'gcod_featured_slider_layout' => array(
					'slider-boxed' => esc_attr__('Featured Slider Boxed', 'autumn-theme'),
					'slider-fullwidth' => esc_attr__('Featured Slider Fullwidth', 'autumn-theme'),
				),

				// Slider Style List for slider
				'gcod_featured_slider_style' => array(
					'featured-slider-1' => esc_attr__('Featured Slider 1', 'autumn-theme'),
					'featured-slider-2' => esc_attr__('Featured Slider 2', 'autumn-theme'),
				),

				// Darkmode Featured Slider Choices
				'gcod_featured_slider_darkmode' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'lightmode' => esc_attr__('Light Mode', 'autumn-theme'),
					'darkmode' => esc_attr__('Dark Mode ', 'autumn-theme'),
				),

				// gcod_featured_slider_number_items for slider
				'gcod_featured_slider_number_items' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 1,
				],

				// Source Slider 
				'gcod_featured_slider_source' => array(
					'gcod-slider'   => esc_attr__('Data from Slider CPT', 'autumn-theme'),
					'gcod-posts'    => esc_attr__('Data from Posts', 'autumn-theme'),
				),

				// Get posts from for slider?
				'gcod_featured_slider_source_get_posts' => array(
					'gcod-all'              => esc_attr__('Get all posts', 'autumn-theme'),
					'gcod-category'         => esc_attr__('Get posts from categories', 'autumn-theme'),
					'gcod-tag'              => esc_attr__('Get posts from tags', 'autumn-theme'),
				),

				// Get list of Categories
				'gcod_featured_slider_source_categories_selected' => Kirki_Helper::get_terms(array('taxonomy' => 'slider-cat')),
				'gcod_featured_slider_source_post_categories' => Kirki_Helper::get_terms(array('taxonomy' => 'category')),
				'gcod_featured_slider_source_tags' => Kirki_Helper::get_terms(array('taxonomy' => 'post_tag')),

				// Posts Order for slider
				'gcod_featured_slider_source_posts_order' => array(
					'gcod-lastest'   => esc_attr__('Lastest Posts (New)', 'autumn-theme'),
					'gcod-popular'    => esc_attr__('Popular Posts (View)', 'autumn-theme'),
				),

				// Display Featured Section Choices
				'gcod_display_featured_slider_all_404_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Choices
				'gcod_display_featured_slider_all_404_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Choices
				'gcod_display_featured_posts_all_404_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Page Header Section Choices
				'gcod_display_pageheader_all_404_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Page Header for 404 Page Style
				'gcod_page_404_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),


				// Page Header Background for 404 Page
				'gcod_page_404_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Page', 'autumn-theme'),
				),

				// 404 Style List
				'gcod_layout_page404' => array(
					'page404-1' => esc_attr__('404 one', 'autumn-theme'),
					'page404-2' => esc_attr__('404 two', 'autumn-theme'),
					'page404-3' => esc_attr__('404 three', 'autumn-theme'),
					'page404-4' => esc_attr__('404 four', 'autumn-theme'),
					'page404-5' => esc_attr__('404 five', 'autumn-theme'),
					'page404-6' => esc_attr__('404 six', 'autumn-theme'),
				),

				// Display Featured Section Choices
				'gcod_display_featured_slider_all_single_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Section
				'gcod_display_featured_categories_all_single_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Dispaly Featured Post
				'gcod_display_featured_posts_all_single_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Page Sidebar List
				'gcod_sidebar_layout_page' => array(
					'general' => esc_attr__('General Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Page Style List
				'gcod_layout_page' => array(
					'page-1' => esc_attr__('Page one', 'autumn-theme'),
					'page-2' => esc_attr__('Page two', 'autumn-theme'),
					'page-3' => esc_attr__('Page three', 'autumn-theme'),
					'page-4' => esc_attr__('Page four', 'autumn-theme'),
					'page-5' => esc_attr__('Page five', 'autumn-theme'),
					'page-6' => esc_attr__('Page six', 'autumn-theme'),
				),

				// Page Header for Single Page Style
				'gcod_page_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Header Background for Single Page
				'gcod_page_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Page', 'autumn-theme'),
					'invidual' => esc_attr__('Select each"s page background', 'autumn-theme'),
				),

				// Page Header Get Image for invidual Single Page
				'gcod_invidual_page_pageheader_bg_image_url' => array(
					'thumbnail' => esc_attr__('Select Invidual Thumbnail', 'autumn-theme'),
					'page-option' => esc_attr__('Select Invidual Page Option', 'autumn-theme'),
					'first-image' => esc_attr__('Select First Image', 'autumn-theme'),
				),

				// Display Featured Section Choices
				'gcod_display_featured_slider_all_search_result' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Page Header Section Choices
				'gcod_display_pageheader_all_search_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Page Header for Search Page Style
				'gcod_page_search_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Header Background for Search Page
				'gcod_page_search_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Page', 'autumn-theme'),
				),

				// Display Featured Section Choices
				'gcod_display_featured_slider_all_archive_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Section Choices
				'gcod_display_featured_categories_all_archive_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				'gcod_display_featured_posts_all_archive_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Archive Sidebar List
				'gcod_sidebar_layout_archive' => array(
					'general' => esc_attr__('General Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Post Archive Style List
				'gcod_layout_archive_post' => gcod_get_archive_styles('archive'),

				// Display Page Header Section Choices
				'gcod_display_pageheader_all_archive_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Page Header for Archive Page Style
				'gcod_archive_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Header Background for Archive Page
				'gcod_archive_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Archive', 'autumn-theme'),
					'invidual' => esc_attr__('Select each"s page background', 'autumn-theme'),
				),

				// Page Header Get Image for invidual Archive Page
				'gcod_invidual_archive_pageheader_bg_image_url' => array(
					'thumbnail' => esc_attr__('Select Invidual Thumbnail', 'autumn-theme'),
					'page-option' => esc_attr__('Select Invidual Page Option', 'autumn-theme'),
					'first-image' => esc_attr__('Select First Image', 'autumn-theme'),
				),




				// Display Featured Section Choices
				'gcod_display_featured_slider_all_author_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Author Sidebar List
				'gcod_sidebar_author_layout' => array(
					'archive' => esc_attr__('General Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),


				// Post Author Style List
				'gcod_layout_author_post' => gcod_get_archive_styles(),

				// Display Page Header Section Choices
				'gcod_display_pageheader_all_author_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Page Header for Author Page Style
				'gcod_author_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Header Background for Author Page
				'gcod_author_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Author', 'autumn-theme'),
					'invidual' => esc_attr__('Select each"s page background', 'autumn-theme'),
				),

				// Page Header Get Image for invidual Author Page
				'gcod_invidual_author_pageheader_bg_image_url' => array(
					'thumbnail' => esc_attr__('Select Invidual Thumbnail', 'autumn-theme'),
					'page-option' => esc_attr__('Select Invidual Page Option', 'autumn-theme'),
					'first-image' => esc_attr__('Select First Image', 'autumn-theme'),
				),

				// Display Featured Slider Section Choices
				'gcod_display_featured_slider_all_category_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Section Choices
				'gcod_display_featured_categories_all_category_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Section Choices
				'gcod_display_featured_posts_all_category_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Section Choices Tags
				'gcod_display_featured_categories_all_tag_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Section Choices Tags
				'gcod_display_featured_posts_all_tag_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Section Choices Author
				'gcod_display_featured_categories_all_author_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Section Choices Author
				'gcod_display_featured_posts_all_author_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Section Choices Search
				'gcod_display_featured_categories_all_search_result' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Section Choices Search
				'gcod_display_featured_posts_all_search_result' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Section Choices 404
				'gcod_display_featured_categories_all_404_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Section Choices 404
				'gcod_display_featured_posts_all_404_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Category Sidebar List
				'gcod_sidebar_layout_category' => array(
					'archive' => esc_attr__('Archive Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),


				// Post Category Style List
				'gcod_layout_category_post' => gcod_get_archive_styles(),


				// Display Page Header Section Choices
				'gcod_display_pageheader_all_category_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Page Header for Category Page Style
				'gcod_category_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Header Background for Category Page
				'gcod_category_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Category', 'autumn-theme'),
					'invidual' => esc_attr__('Select each"s page background', 'autumn-theme'),
				),

				// Page Header Get Image for invidual Category Page
				'gcod_invidual_category_pageheader_bg_image_url' => array(
					'thumbnail' => esc_attr__('Select Invidual Thumbnail', 'autumn-theme'),
					'page-option' => esc_attr__('Select Invidual Page Option', 'autumn-theme'),
					'first-image' => esc_attr__('Select First Image', 'autumn-theme'),
				),

				// Display Featured Slider Choices
				'gcod_display_featured_slider_on_single_post' => array(
					'general' => esc_attr__('Page Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Categories Choices
				'gcod_display_featured_categories_on_single_post' => array(
					'general' => esc_attr__('Page Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Display Featured Posts Choices
				'gcod_display_featured_posts_on_single_post' => array(
					'general' => esc_attr__('Page Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),

				// Single Sidebar List
				'gcod_sidebar_layout_post' => array(
					'general' => esc_attr__('General Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Post Style List
				'gcod_layout_post' => array(
					'post-1' => esc_attr__('Post 1', 'autumn-theme'),
					'post-2' => esc_attr__('Post 2', 'autumn-theme'),
					'post-3' => esc_attr__('Post 3', 'autumn-theme'),					
				),

				// Display Page Header Section Choices
				'gcod_display_pageheader_all_single_post' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),


				// Page Header for Single Post Style
				'gcod_post_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),


				// Page Header Background for Single Post
				'gcod_post_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Post', 'autumn-theme'),
					'invidual' => esc_attr__('Select each"s post background', 'autumn-theme'),
				),

				// Page Header Get Image for invidual Single Post
				'gcod_invidual_post_pageheader_bg_image_url' => array(
					'thumbnail' => esc_attr__('Select Invidual Thumbnail', 'autumn-theme'),
					'page-option' => esc_attr__('Select Invidual Page Option', 'autumn-theme'),
					'first-image' => esc_attr__('Select First Image', 'autumn-theme'),
				),

				// Display Featured Section Choices
				'gcod_display_featured_slider_all_tag_page' => array(
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),


				// Tag Sidebar List
				'gcod_sidebar_layout_tag' => array(
					'archive' => esc_attr__('General Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Post Tag Style List
				'gcod_layout_tag_post' => gcod_get_archive_styles(),


				// Tag Sidebar List
				'gcod_sidebar_layout_tag' => array(
					'archive' => esc_attr__('Archive Layout', 'autumn-theme'),
					'no-sidebar' => esc_attr__('No Sidebar', 'autumn-theme'),
					'left-sidebar' => esc_attr__('Left Sidebar', 'autumn-theme'),
					'right-sidebar' => esc_attr__('Right Sidebar', 'autumn-theme'),
				),

				// Post Tag Style List
				'gcod_layout_tag_post' => array(
					'tag-layout-1' => esc_attr__('Tag layout one', 'autumn-theme'),
					'tag-layout-2' => esc_attr__('Tag layout two', 'autumn-theme'),
					'tag-layout-3' => esc_attr__('Tag layout three', 'autumn-theme'),
					'tag-layout-4' => esc_attr__('Tag layout four', 'autumn-theme'),
					'tag-layout-5' => esc_attr__('Tag layout five', 'autumn-theme'),
					'tag-layout-6' => esc_attr__('Tag layout six', 'autumn-theme'),
				),

				// Display Page Header Section Choices
				'gcod_display_pageheader_all_tag_page' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'hide' => esc_attr__('Hide', 'autumn-theme'),
					'show' => esc_attr__('Show', 'autumn-theme'),
				),


				// Page Header for Tag Page Style
				'gcod_tag_pageheader_style' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'archive' => esc_attr__('Archive Setting', 'autumn-theme'),
					'page-header-1' => esc_attr__('Page Header 1', 'autumn-theme'),
					'page-header-2' => esc_attr__('Page Header 2', 'autumn-theme'),
					'page-header-3' => esc_attr__('Page Header 3', 'autumn-theme'),
				),

				// Page Header Background for Tag Page
				'gcod_tag_pageheader_background' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'common' => esc_attr__('Select Common Background for All Tag', 'autumn-theme'),
					'invidual' => esc_attr__('Select each"s page background', 'autumn-theme'),
				),

				// Page Header Get Image for invidual Tag Page
				'gcod_invidual_tag_pageheader_bg_image_url' => array(
					'thumbnail' => esc_attr__('Select Invidual Thumbnail', 'autumn-theme'),
					'page-option' => esc_attr__('Select Invidual Page Option', 'autumn-theme'),
					'first-image' => esc_attr__('Select First Image', 'autumn-theme'),
				),

				// Default footer elements
				'gcod_footer_elements_setting' => [
					'element-footer-photo',
					'element-footer-logo',
					'element-site-info',
					'element-footer-social-icons',
					'element-footer-category',
					'element-footer-tags',
					'element-footer-lastposts',
					'element-footer-widgets',
					'element-footer-menu',
					'element-copyright-text',
					'element-topbutton',
				],

				// Last post number
				'gcod_footer_element_lastest_posts_number' => [
					'min'  => 0,
					'max'  => 10,
					'step' => 1,
				],

				// Footer Social Elements
				'gcod_footer_social_elements_setting' => array(
					'element-social-facebook-icon' => esc_html__('Social Facebook', 'autumn-theme'),
					'element-social-instagram-icon' => esc_html__('Social Instagram', 'autumn-theme'),
					'element-social-linkedin-icon' => esc_html__('Social Linkedin', 'autumn-theme'),
					'element-social-twitter-icon' => esc_html__('Social Twitter', 'autumn-theme'),
					'element-social-youtube-icon' => esc_html__('Social Youtube', 'autumn-theme'),
					'element-social-dribbble-icon' => esc_html__('Social Dribbble', 'autumn-theme'),
					'element-social-behance-icon' => esc_html__('Social Behance', 'autumn-theme'),
					'element-social-flicker-icon' => esc_html__('Social Flicker', 'autumn-theme'),
					'element-social-pinterest-icon' => esc_html__('Social Pinterest', 'autumn-theme'),
					'element-social-github-icon' => esc_html__('Social Github', 'autumn-theme')
				),				

				// Footer styles
				'gcod_layout_footer' => array(
					'footer-1' => esc_attr__('Footer 1', 'autumn-theme'),
					'footer-2' => esc_attr__('Footer 2', 'autumn-theme'),
					'footer-3' => esc_attr__('Footer 3', 'autumn-theme'),
					'footer-4' => esc_attr__('Footer 4', 'autumn-theme')
				),

				// Darkmode Footer Choices
				'gcod_footer_darkmode' => array(
					'general' => esc_attr__('General Setting', 'autumn-theme'),
					'lightmode' => esc_attr__('Light Mode', 'autumn-theme'),
					'darkmode' => esc_attr__('Dark Mode', 'autumn-theme'),
				),

				// List all footer elements
				'gcod_footer_element_setting' => [
					'element-footer-photo'           => esc_html__('Footer Photo', 'autumn-theme'),
					'element-footer-logo'            => esc_html__('Footer Logo', 'autumn-theme'),
					'element-site-info'              => esc_html__('Site Information', 'autumn-theme'),
					'element-footer-social-icons'    => esc_html__('Social Icons', 'autumn-theme'),
					'element-footer-widgets'         => esc_html__('Footer Widgets', 'autumn-theme'),
					'element-footer-category'        => esc_html__('Footer Category', 'autumn-theme'),
					'element-footer-tags'            => esc_html__('Footer Tags', 'autumn-theme'),
					'element-footer-lastposts'       => esc_html__('Footer Lastest Posts', 'autumn-theme'),
					'element-footer-menu'            => esc_html__('Footer Menu', 'autumn-theme'),
					'element-facebook-fanpage'       => esc_html__('Facebook Fanpage', 'autumn-theme'),
					'element-copyright-text'         => esc_html__('Copyright Text', 'autumn-theme'),
					'element-topbutton'         	 => esc_html__('GotoTop Button', 'autumn-theme'),
				],

			)
		);
	}

	return isset($choices[$name]) ? $choices[$name] : null;
}
