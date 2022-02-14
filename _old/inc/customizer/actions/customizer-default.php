<?php

/**
 * Get the default option for Autumn Theme Customizer settings.
 *
 * @package     Autumn Theme
 * @link        https://gcodesign.com/autumn
 * 
 * @param  string|string $name Option key name to get.
 * @return mixin
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Function create section sperator in customizer
function render_section_sperator($tag = 'h3', $title = 'SECTION') {

	$html = '<' . $tag . ' ';
	$html .= 'style="padding:15px 10px; background:#0073aa; margin:10px -10px 10px -10px ; color: #fff">';
	$html .= $title;
	$html .= '</' . $tag . '>';

	return $html;
}

function gcod_defaults($name) {
	static $defaults;
	$cdn_dir = 'https://gcodesign.com/cdn/';

	if (!$defaults) {
		$defaults = apply_filters(
			'gcod_defaults',
			array(

				// Identity.
				'custom_logo_max_width'           		=> '90',
				'custom_logo_mobile_max_width'    		=> '90',

				// Logo Mobile
				'gcod_logo_mobile'				  		=> $cdn_dir . 'autumn/logo-autumn-legancy.png',
				'gcod_hotline'					  		=> esc_html__('0988626138', 'autumn-theme'),
				'gcod_email'					  		=> esc_html__('duongnth@gco.vn', 'autumn-theme'),

				// Social Info
				'gcod_facebook_uri'				  		=> 'https://www.facebook.com/gcodesign/',
				'gcod_instagram_uri'				  	=> 'https://www.instagram.com/gcodesign/',
				'gcod_linkedin_uri'				  		=> 'https://www.linkedin.com/gcodesign/',
				'gcod_twitter_uri'				  		=> 'https://www.twitter.com/gcodesign/',
				'gcod_youtube_uri'				  		=> 'https://www.youtube.com/gcodesign/',
				'gcod_dribbble_uri'				  		=> 'https://www.dribbble.com/gcodesign/',
				'gcod_behance_uri'				  		=> 'https://www.behance.com/gcodesign/',
				'gcod_flickr_uri'				  		=> 'https://www.flickr.com/gcodesign/',
				'gcod_pinterest_uri'			  		=> 'https://www.pinterest.com/gcodesign/',
				'gcod_github_uri'				  		=> 'https://www.github.com/gcodesign/',

				// Darkmode
				'gcod_dark_mode_support'		 		=> true,
				'gcod_dark_mode_color'		 			=> false,
				'gcod_custom_darkmode'			  		=> false,
				'color_text_on_darkmode'		  		=> '#888888',
				'color_background_on_darkmode'	  		=> '#888888',
				'color_accent_on_darkmode'		  		=> '#0088CC',

				// Quick Reading
				'gcod_rtl'						 		=> false,				
				'gcod_reading_mode_support'		 		=> true,
				'gcod_show_quick_guide_setting'			=> false,

				// Translation
				'gcod_translation_readmore'		 		=> esc_html__('Readmore', 'autumn-theme'),
				'gcod_translation_views'		 		=> esc_html__('views', 'autumn-theme'),
				'gcod_translation_published'	 		=> esc_html__('Published:', 'autumn-theme'),
				'gcod_translation_last_updated'	 		=> esc_html__('Last Updated on', 'autumn-theme'),
				'gcod_translation_comment'		 		=> esc_html__('comment', 'autumn-theme'),
				'gcod_translation_comments'		 		=> esc_html__('comments', 'autumn-theme'),
				'gcod_translation_reply'		 		=> esc_html__('Reply', 'autumn-theme'),
				'gcod_translation_edit'		     		=> esc_html__('Edit', 'autumn-theme'),
				'gcod_translation_wait_approval' 		=> esc_html__('Your comment is awaiting approval.', 'autumn-theme'),
				'gcod_translation_save_my_name' 		=> esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'autumn-theme'),
				'gcod_translation_by'		 	 		=> esc_html__('by', 'autumn-theme'),
				'gcod_translation_home'		 	 		=> esc_html__('Home', 'autumn-theme'),
				'gcod_translation_newer_posts'	 		=> esc_html__('Newer Posts', 'autumn-theme'),
				'gcod_translation_older_posts'	 		=> esc_html__('Older Posts', 'autumn-theme'),
				'gcod_translation_load_more_posts'		=> esc_html__('Load More Posts', 'autumn-theme'),
				'gcod_translation_no_more_posts'		=> esc_html__('Sorry, No more posts', 'autumn-theme'),
				'gcod_translation_all'		 	 		=> esc_html__('All', 'autumn-theme'),
				'gcod_translation_back_to_top'	 		=> esc_html__('Back To Top', 'autumn-theme'),
				'gcod_translation_written_by'	 		=> esc_html__('written by', 'autumn-theme'),
				'gcod_translation_previous_post' 		=> esc_html__('previous post', 'autumn-theme'),
				'gcod_translation_next_post'	 		=> esc_html__('next post', 'autumn-theme'),
				'gcod_translation_name'		 	 		=> esc_html__('Name*', 'autumn-theme'),
				'gcod_translation_email'		 		=> esc_html__('Email*', 'autumn-theme'),
				'gcod_translation_website'		 		=> esc_html__('Website', 'autumn-theme'),
				'gcod_translation_your_comment'	 		=> esc_html__('Your Comment', 'autumn-theme'),
				'gcod_translation_leave_comment' 		=> esc_html__('Leave a Comment', 'autumn-theme'),
				'gcod_translation_cancel_reply'	 		=> esc_html__('Cancel Reply', 'autumn-theme'),
				'gcod_translation_submit'		 		=> esc_html__('Submit', 'autumn-theme'),
				'gcod_translation_category'		 		=> esc_html__('Category:', 'autumn-theme'),
				'gcod_translation_continue_reading'		=> esc_html__('Continue Reading', 'autumn-theme'),
				'gcod_translation_read_more'		 	=> esc_html__('Readmore', 'autumn-theme'),
				'gcod_translation_viewall'		 		=> esc_html__('View All', 'autumn-theme'),
				'gcod_translation_tag'		 			=> esc_html__('Tag:', 'autumn-theme'),
				'gcod_translation_tags'		 			=> esc_html__('Posts tagged with', 'autumn-theme'),
				'gcod_translation_post_tag_width'		 => esc_html__('Author', 'autumn-theme'),
				'gcod_translation_daily_archives'		 => esc_html__('Daily Archives', 'autumn-theme'),
				'gcod_translation_monthly_archive'		 => esc_html__('Monthly Archives', 'autumn-theme'),
				'gcod_translation_yearly_archives'		 => esc_html__('Yearly Archives', 'autumn-theme'),
				'gcod_translation_search'		 		 => esc_html__('Search', 'autumn-theme'),
				'gcod_translation_search_results'		 => esc_html__('Search results for', 'autumn-theme'),
				'gcod_translation_share'		 		 => esc_html__('Share', 'autumn-theme'),
				'gcod_translation_comment_closed'		 => esc_html__('Comments are closed.', 'autumn-theme'),
				'gcod_translation_sorry_but'		 	 => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'autumn-theme'),
				'gcod_translation_back_to_home'		 	 => esc_html__('Back to Home Page', 'autumn-theme'),


				// Background
				'gcod_enabled_body_boxed'				=> false,
				'gcod_bgcolor_for_body_boxed'			=> '#7A7A7A',
				'gcod_background_body_boxed_repeat'		=> 'no-repeat',
				'gcod_background_body_boxed_attachment'	=> 'fixed',
				'gcod_background_body_boxed_sized'		=> 'cover',

				// Colors.
				'gcod_set_colors'				  => 'color-set-1',
				'gcod_body_color'				  => '#7A7A7A',


				// Typography Heading
				'gcod_heading_1_size_setting'	  => 42,
				'gcod_heading_1_font_family'	  => [
					'font-family'    => 'Playfair Display',
					'variant'        => 'bold',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'color'          => '#333333',
				],
				'gcod_heading_2_size_setting'	  => 32,
				'gcod_heading_2_font_family'	  => [
					'font-family'    => 'Playfair Display',
					'variant'        => 'bold',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'color'          => '#333333',
				],
				'gcod_heading_3_size_setting'	  => 25,
				'gcod_heading_3_font_family'	  => [
					'font-family'    => 'Playfair Display',
					'variant'        => 'bold',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'color'          => '#333333',
				],
				'gcod_heading_4_size_setting'	  => 20,
				'gcod_heading_4_font_family'	  => [
					'font-family'    => 'Playfair Display',
					'variant'        => 'bold',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'color'          => '#333333',
				],
				'gcod_heading_5_size_setting'	  => 16,
				'gcod_heading_5_font_family'	  => [
					'font-family'    => 'Playfair Display',
					'variant'        => 'bold',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'color'          => '#333333',
				],
				'gcod_heading_6_size_setting'	  => 12,
				'gcod_heading_6_font_family'	  => [
					'font-family'    => 'Playfair Display',
					'variant'        => 'bold',
					'letter-spacing' => 'normal',
					'text-transform' => 'none',
					'color'          => '#333333',
				],

				// Typography.
				'gcod_set_typography_headline'		=> render_section_sperator('h3', 'PRESET TYPOGRAPHY'),
				'gcod_custom_typography_headline'	=> render_section_sperator('h3', 'CUSTOM TYPOGRAPHY'),
				'gcod_set_typography'				=> 'typo-default',
				'gcod_body_font_family'        		=> 'Default',
				'gcod_font_size_setting'       		=> '16',
				'body_letter_spacing'             	=> '0',
				'body_word_spacing'               	=> '0',
				'pagetitle_font_family'           	=> 'Default',
				'gcod_line_width_setting'		 	=> $GLOBALS['content_width'],
				'gcod_line_height_setting'			=> '24',
				'gcod_paragraph_space_setting'		=> 20,

				// Default Social Icons Display
				'gcod_social_icons_setting' => array(
					'icon-facebook',
					'icon-instagram',
					'icon-linkedin',
					'icon-twitter',
					'icon-youtube',
				),

				// Default Social Shared Display
				'gcod_social_shared_setting' => array(
					's-twitter',
					's-facebook',
					's-linkedin',
				),

				'gcod_button_shared_style' => 'outline',				

				// Shared buttons showing on Pages
				'gcod_shared_buttons_show_on' => array(),

				// General Layout
				'gcod_featured_sections_headline' 					=> render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_show_featured_sections_postions' 				=> 'above-main-content',
				'gcod_general_show_featured_slider_all_page' 		=> true,
				'gcod_general_show_featured_categories_all_page' 	=> true,
				'gcod_general_show_featured_posts_all_page' 		=> true,
				'gcod_general_layouts_headline' 					=> render_section_sperator('h3', 'GENERAL LAYOUT'),
				'gcod_layout_general_page' 							=> 'right-sidebar',
				'gcod_general_archive_layout_headline' 				=> render_section_sperator('h3', 'GENERAL ARCHIVE'),
				'gcod_remove_archive_title' 						=> true,
				// Default general Layout Archive Page 
				'gcod_general_archive_style' 						=> 'archive-style-1',
				'gcod_general_archive_number_posts' 				=> 10,
				'gcod_general_archive_grid_number_columns' 			=> 2,
				'gcod_general_component_number_items' 				=> 10,
				'gcod_general_component_number_columns' 			=> 2,

				// General Media
				'gcod_media_thumbnail_headline'						=> render_section_sperator('h3', 'THUMBNAIL'),
				'gcod_no_thumbnail_all_sections'					=> true,
				'gcod_show_thumbnail_on_category'					=> true,
				'gcod_show_thumbnail_on_tag'						=> true,
				'gcod_show_thumbnail_on_author'						=> true,
				'gcod_show_thumbnail_on_list_post'					=> true,
				'gcod_using_one_thumbnail_size'						=> false,
				'custom_same_thumbnail_size'						=> [
					'width'  => '100px',
					'height' => '100px',
				],
				'gcod_media_effect_headline'						=> render_section_sperator('h3', 'EFFECT'),
				'gcod_enable_thumbnail_gif'							=> false,
				'gcod_enable_thumbnail_preview_video'				=> false,
				'gcod_thumbnail_hover_effect'						=> 'hover-zoom',

				// Header
				'custom_logo'		 			=> $cdn_dir . 'autumn/logo-autumn.png',
				'gcod_custom_logo_dark'		 	=> $cdn_dir . 'autumn/logo-autumn-white.png',
				'gcod_layout_header'		 	=> 'header-1',
				'gcod_header_bg_rgba_color'		=> '',
				'gcod_header_bg_image_url'		=> '',
				'gcod_header_element_setting'	=> array(
					'element-header-menu',
					'element-header-logo',
					'element-search-box',
					'element-darkmode-icon',
					'element-social-icons',
				),
				'gcod_header_sticky'			=> false,
				'gcod_header_overlay'			=> false,
				'gcod_header_darkmode'			=> 'lightmode',
				'gcod_header_menu_style'	=> 'header-menu-1',
				'gcod_side_menu_style'		=> 'side-menu-1',

				// Page Header
				'gcod_general_show_pageheader_all_page'			=> false,
				'gcod_general_show_pageheader_all_post'			=> false,
				'gcod_general_show_pageheader_all_archive'		=> false,
				'gcod_general_pageheader_style'					=> 'page-header-1',
				'gcod_general_pageheader_bg_rgba_color'			=> '',
				'gcod_general_pageheader_bg_image_url'			=> '',

				// Page Header level 2
				'gcod_display_pageheader_all_single_page'		=> 'general',
				'gcod_display_pageheader_all_single_post'		=> 'general',
				'gcod_display_pageheader_all_search_page'		=> 'general',
				'gcod_display_pageheader_all_404_page'			=> 'general',
				'gcod_display_pageheader_all_archive_page'		=> 'general',
				'gcod_display_pageheader_all_category_page'		=> 'general',
				'gcod_display_pageheader_all_tag_page'			=> 'general',
				'gcod_display_pageheader_all_author_page'		=> 'general',
				'gcod_page_pageheader_style'					=> 'general',
				'gcod_post_pageheader_style'					=> 'general',
				'gcod_archive_pageheader_style'					=> 'general',
				'gcod_category_pageheader_style'				=> 'archive',
				'gcod_tag_pageheader_style'						=> 'archive',
				'gcod_author_pageheader_style'					=> 'archive',
				'gcod_page_search_pageheader_style'				=> 'general',
				'gcod_page_404_pageheader_style'				=> 'general',
				'gcod_page_pageheader_background'				=> 'general',
				'gcod_common_page_pageheader_bg_image_url'		=> '',
				'gcod_post_pageheader_background'				=> 'general',
				'gcod_common_post_pageheader_bg_image_url'		=> '',
				'gcod_archive_pageheader_background'			=> 'general',
				'gcod_common_archive_pageheader_bg_image_url'	=> '',
				'gcod_category_pageheader_background'			=> 'general',
				'gcod_common_category_pageheader_bg_image_url'	=> '',
				'gcod_tag_pageheader_background'				=> 'general',
				'gcod_common_tag_pageheader_bg_image_url'		=> '',
				'gcod_page_search_pageheader_background'		=> 'general',
				'gcod_common_search_pageheader_bg_image_url'	=> '',
				'gcod_page_404_pageheader_background'			=> 'general',
				'gcod_common_404_pageheader_bg_image_url'		=> '',

				// Page Nav - Breadcrumb - Title - Button
				'gcod_navigation_pagenav'						=> 'number',
				'gcod_breadcrumb_style'							=> 'breadcrumb-1',
				'gcod_page_title_style'							=> 'page-title-1',
				'gcod_button_concept'							=> 'button-square',

				// Quote 
				'gcod_set_quote'								=> 'quote-set-1',
				'gcod_custom_quote'								=> false,
				'gcod_quote_font_family'						=> [
					'font-family'    => 'Poppins',
					'variant'        => 'regular',
					'color'          => '#333333',
				],
				'gcod_quote_font_size_setting'					=> 16,
				'gcod_quote_line_height_setting'				=> 16,
				'gcod_quote_line_width_setting'					=> 640,
				'gcod_quote_author_space_setting'				=> 36,
				'gcod_quote_author_font_family'					=> [
					'font-family'    => 'Poppins',
					'variant'        => 'regular',
					'color'          => '#333333',
				],
				'gcod_quote_author_font_size_setting'			=> 16,
				'gcod_quote_author_line_height_setting'			=> 16,

				// UI Concepts Spacing - Line - Border
				'gcod_spacing_headline'								=> render_section_sperator('h3', 'SPACINGS'),
				'gcod_spacing_page_setting'							=> 30,
				'gcod_spacing_1_setting'							=> 100,
				'gcod_spacing_2_setting'							=> 160,
				'gcod_spacing_3_setting'							=> 40,
				'gcod_spacing_4_setting'							=> 30,
				'gcod_spacing_5_setting'							=> 15,
				'gcod_spacing_6_setting'							=> 4,
				'gcod_line_headline'								=> render_section_sperator('h3', 'LINE'),
				'gcod_line_1_setting'								=> 0,
				'gcod_line_2_setting'								=> 0,
				'gcod_line_3_setting'								=> 0,
				'gcod_radius_headline'								=> render_section_sperator('h3', 'BORDER RADIUS'),
				'gcod_border_radius_1_setting'						=> 0,
				'gcod_border_radius_2_setting'						=> 0,
				'gcod_border_radius_3_setting'						=> 0,

				// UX Settings
				'gcod_gototop'										=> true,
				'gcod_sidebar_sticky'								=> false,
				'gcod_scroll_load_next'								=> false,
				'gcod_guest_to_navigation'							=> false,
				'gcod_enable_reading_time'							=> false, //in_array('bsf_rt_single_page', gcod_get_option_value('bsf_rt_read_time_settings','bsf_rt_show_read_time')),
				'gcod_enable_progress_bar'							=> false, //gcod_get_option_value('bsf_rt_progress_bar_settings','bsf_rt_position_of_progress_bar') == 'none'? false : true,

				// Home Page
				'gcod_layout_home_content'							=> 'home-1',
				'gcod_home_section_setting'							=> array(
					'section-home-post-list',
					'section-home-featured-slider',
					'section-home-featured-posts',
					'section-home-featured-categories',
					'section-home-title',
					'section-home-description',
					'section-home-lastest-posts',
				),
				'gcod_section_home_1'								=> 'paritial-style-1',
				'gcod_layout_home_blog_list'						=> 'home-bloglist-1',

				// Featured Slider
				'gcod_featured_slider_layout'						=> 'slider-fullwidth',
				'gcod_featured_slider_style'						=> 'featured-slider-1',
				'gcod_featured_slider_darkmode'						=> 'lightmode',				
				'gcod_featured_slider_number_items'					=> 5,
				'gcod_featured_slider_source'						=> 'gcod-slider',
				'gcod_featured_slider_source_all'					=> true,				

				// Featured Categories
				'gcod_featured_categories_layout'					=> 'categories-boxed',
				'gcod_featured_categories_style'					=> 'featured-categories-1',
				'gcod_featured_categories_style_title'				=> 'Trending Topics',
				'gcod_featured_categories_background_color'			=> '',
				'gcod_featured_categories_number_items'				=> 4,
				'gcod_featured_categories_darkmode'					=> 'lightmode',
				'gcod_featured_categories_source'					=> 'gcod-cats-selected',
				'gcod_featured_categories_source_all'				=> 1,
				'gcod_featured_categories_source_slider_selected'	=> 1,
				'gcod_featured_categories_source_get_posts'			=> 'gcod-all',
				'gcod_featured_categories_source_selected_cats'		=> 1,

				// Featured Posts
				'gcod_featured_posts_layout'						=> 'posts-boxed',
				'gcod_featured_posts_style'							=> 'featured-posts-1',
				'gcod_featured_posts_style_title'					=> 'Top Stories',
				'gcod_featured_posts_background_color'				=> '',
				'gcod_featured_posts_darkmode'						=> 'lightmode',
				'gcod_featured_post_number_items'					=> 6,
				'gcod_featured_post_source'							=> 'gcod-posts',
				'gcod_featured_post_source_all'						=> true,
				'gcod_featured_post_source_categories_selected'		=> 'cat-1',
				'gcod_featured_post_source_get_posts'				=> 'gcod-all',
				'gcod_featured_post_source_post_categories'			=> array('cat-1'),
				'gcod_featured_post_source_tags'					=> array('tag-1'),
				'gcod_featured_post_source_posts_order'				=> 'gcod-lastest',

				//$gcod_slider_categories = Kirki_Helper::get_terms(array('taxonomy' => 'category'));
				'gcod_featured_slider_source_categories_selected'	=> array('cat-1'),
				'gcod_featured_slider_source_get_posts'				=> 'gcod-all',

				// $gcod_post_categories = Kirki_Helper::get_terms(array('taxonomy' => 'category'));
				'gcod_featured_slider_source_post_categories'		=> array('cat-1'),

				// $gcod_post_tags = Kirki_Helper::get_terms(array('taxonomy' => 'post_tag'));
				'gcod_featured_slider_source_tags'					=> array('tag-1'),
				'gcod_featured_slider_source_posts_order'			=> 'gcod-lastest',

				// Page Settings
				'gcod_display_featured_section_all_404_page_headline'	=> render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_404_page'				=> 'hide',
				'gcod_display_featured_categories_all_404_page'			=> 'hide',
				'gcod_display_featured_posts_all_404_page'				=> 'hide',
				'gcod_sidebar_layout_404_headline'						=> render_section_sperator('h3', '404 SIDEBAR LAYOUT'),
				'gcod_404_using_page'									=> 0,
				'dropdown_pages_make_404'								=> 0,
				'gcod_display_pageheader_all_404_page_headline'			=> render_section_sperator('h3', 'PAGE HEADER'),
				'gcod_common_404_pageheader_bg_rgba_color'				=> '',

				'gcod_display_featured_section_all_single_page_headline' => render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_single_page'			=> 'general',
				'gcod_display_featured_categories_all_single_page'		=> 'general',
				'gcod_display_featured_posts_all_single_page'			=> 'general',
				'gcod_sidebar_layout_page_headline'						=> render_section_sperator('h3', 'PAGE SIDEBAR LAYOUT'),
				'gcod_display_pageheader_all_single_page_headline'		=> render_section_sperator('h3', 'PAGE HEADER'),
				'gcod_common_page_pageheader_bg_rgba_color'				=> '',
				'gcod_invidual_page_pageheader_bg_image_url'			=> 'general',

				'gcod_display_featured_section_all_search_page_headline' => render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_search_result'		=> 'hide',
				'gcod_display_featured_categories_all_search_result'	=> 'hide',
				'gcod_display_featured_posts_all_search_result'			=> 'hide',
				'gcod_sidebar_layout_search_headline'					=> render_section_sperator('h3', 'SEARCH SIDEBAR LAYOUT'),
				'gcod_search_result_same_archive'						=> 1,
				// Default list style for Search Page
				'gcod_layout_search'									=> 'archive-style-1',
				'gcod_display_pageheader_all_search_page_headline'		=> render_section_sperator('h3', 'PAGE HEADER'),
				'gcod_common_search_pageheader_bg_rgba_color'			=> '',

				// Post Settings
				'gcod_display_featured_all_archive_page_headline'	=> render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_archive_page'		=> 'hide',
				'gcod_display_featured_categories_all_archive_page'	=> 'hide',
				'gcod_display_featured_posts_all_archive_page'		=> 'hide',
				'gcod_sidebar_layout_archive_headline_blog'			=> render_section_sperator('h3', 'ARCHIVE LAYOUT'),
				'gcod_layout_archive_post'							=> 'general',
				'gcod_display_pageheader_all_archive_page_headline'	=> render_section_sperator('h3', 'PAGE HEADER'),
				'gcod_common_archive_pageheader_bg_rgba_color'		=> '',
				'gcod_invidual_archive_pageheader_bg_image_url'		=> 'general',

				// Post Author Settings
				'gcod_display_featured_slider_all_author_page_headline'	=> render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_author_page'			=> 'archive',
				'gcod_display_featured_categories_all_author_page'		=> 'archive',
				'gcod_display_featured_posts_all_author_page'			=> 'archive',
				'gcod_sidebar_layout_author_headline'					=> render_section_sperator('h3', 'AUTHOR SIDEBAR LAYOUT'),
				'gcod_post_author_same_archive'							=> true,
				'gcod_remove_author_title'								=> true,
				// Default List Style for Author Page
				'gcod_layout_author_post'								=> 'archive-style-1',
				'gcod_display_pageheader_all_author_page_headline'		=> render_section_sperator('h3', 'PAGE HEADER'),
				'gcod_author_pageheader_background'						=> 'general',
				'gcod_common_author_pageheader_bg_rgba_color'			=> '',
				'gcod_common_author_pageheader_bg_image_url'			=> '',
				'gcod_invidual_author_pageheader_bg_image_url'			=> 'general',

				// Post Category Settings
				'gcod_display_featured_slider_all_archive_page_headline' => render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_category_page'		=> 'archive',
				'gcod_display_featured_categories_all_category_page'	=> 'archive',
				'gcod_display_featured_posts_all_category_page'			=> 'archive',
				'gcod_sidebar_layout_archive_headline'					=> render_section_sperator('h3', 'PAGE SIDEBAR LAYOUT'),
				'gcod_post_category_same_archive'						=> true,

				// Default List Style for Category Page
				'gcod_layout_category_post'								=> 'archive-style-1',
				'gcod_display_pageheader_all_category_page_headline'	=> render_section_sperator('h3', 'PAGE HEADER'),
				'gcod_display_pageheader_all_category_page'				=> 'general',
				'gcod_common_category_pageheader_bg_rgba_color'			=> '',
				'gcod_invidual_category_pageheader_bg_image_url'		=> 'general',

				// Post Settings
				'gcod_display_featured_slider_all_single_post_headline'	=> render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_on_single_post'			=> 'hide',
				'gcod_display_featured_categories_on_single_post'		=> 'hide',
				'gcod_display_featured_posts_on_single_post'			=> 'hide',
				'gcod_sidebar_layout_post_headline'						=> render_section_sperator('h3', 'POST SIDEBAR LAYOUT'),
				'gcod_layout_post'										=> 'post-1',
				'gcod_display_pageheader_all_single_post_headline'		=> render_section_sperator('h3', 'POST HEADER'),
				'gcod_common_pageheader_bg_rgba_color'					=> '',
				'gcod_invidual_post_pageheader_bg_image_url'			=> 'general',
				
				// Post Tags Settings
				'gcod_display_featured_sections_all_tag_page_headline'	=> render_section_sperator('h3', 'FEATURED SECTIONS'),
				'gcod_display_featured_slider_all_tag_page'				=> 'archive',
				'gcod_display_featured_categories_all_tag_page'			=> 'archive',
				'gcod_display_featured_posts_all_tag_page'				=> 'archive',
				'gcod_sidebar_layout_tag_headline'						=> render_section_sperator('h3', 'TAG SIDEBAR LAYOUT'),
				'gcod_post_tag_same_archive'							=> true,
				'gcod_sidebar_layout_tag'								=> 'archive',

				// Default List Layout for Tag Page
				'gcod_layout_tag_post'									=> 'archive-style-1',
				'gcod_display_pageheader_all_tag_page_headline'			=> render_section_sperator('h3', 'TAG PAGE HEADER'),
				'gcod_common_tag_pageheader_bg_rgba_color'				=> '',
				'gcod_invidual_tag_pageheader_bg_image_url'				=> 'general',

				// Page Layouts
				'gcod_sidebar_layout_home_builder'	=> 'general',
				'gcod_home_using_boxed_layout'	=> false,
				'gcod_sidebar_layout_page'		=> 'general',
				'gcod_sidebar_layout_post'		=> 'general',
				'gcod_layout_page404'			=> 'general',
				'gcod_sidebar_layout_search'	=> 'general',
				'gcod_sidebar_layout_archive'	=> 'general',
				'gcod_sidebar_author_layout'	=> 'archive',
				'gcod_sidebar_layout_category'	=> 'archive',
				'gcod_sidebar_layout_tag'		=> 'archive',


				// Layout Elements
				'gcod_home_content_sections'	 		=> false,
				'gcod_show_featured_sections_postions' 	=> 'above-main-content',
				'gcod_featured_sections_setting'		=> array(),

				// Home Sections - Post List
				'gcod_section_home_post_list_title'				=> '',
				'gcod_section_home_post_list_number_items'		=> 5,
				'gcod_section_home_post_list_style'				=> 'post-list-2',

				// Home Lastest Posts
				'gcod_section_home_lastest_posts_title'			=> 'Recent Posts',
				'gcod_section_home_lastest_posts_number_items'	=> 3,
				'gcod_section_home_lastest_posts_style'			=> 'lastest-posts-1',
				'gcod_section_home_lastest_posts_below_main'	=> false,
				'gcod_section_home_lastest_posts_on_archive'	=> false,
				'gcod_section_home_lastest_posts_on_single'		=> true,
				'gcod_general_lastest_posts_bg_rgba_color'		=> '',
				'gcod_general_lastest_posts_bg_image_url'		=> '',

				// Single Related Posts
				'gcod_section_single_related_posts_style'		=> 'related-posts-1',
				'gcod_section_single_related_posts_source'		=> 'related-posts-by-tag',
				'gcod_section_single_related_posts_number'				=> 3,
				'gcod_section_single_related_posts_order'				=> 'date',
				
				// Home Newsletter
				'gcod_section_home_newsletter_title'			=> 'Our Newsletter',
				'gcod_section_home_newsletter_shortcode'		=> '',
				'gcod_section_home_newsletter_style'			=> 'newsletter-1',
				'gcod_section_home_newsletter_below_main'		=> true,
				'gcod_section_home_newsletter_on_archive'		=> true,
				'gcod_section_home_newsletter_on_single'		=> true,
				'gcod_general_newsletter_bg_image_url'			=> '',
				'gcod_general_newsletter_bg_rgba_color'			=> '',

				// Home Instagram
				'gcod_section_home_instagram_title'				=> 'Instagram',
				'gcod_section_home_instagram_shortcode'			=> '',
				'gcod_section_home_instagram_style'				=> 'instagram-1',
				'gcod_section_home_instagram_account'			=> '',
				'gcod_section_home_instagram_below_main'		=> true,
				'gcod_section_home_instagram_on_archive'		=> true,
				'gcod_section_home_instagram_on_single'			=> true,

				// General Archive Elements
				'gcod_general_archive_element_setting'	=> array(
					'element-post-thumnbail',
					'element-post-except',
					'element-post-categories',
					'element-post-tags',
					'element-post-date',
					'element-post-author',
					'element-post-readmore',
				),

				'gcod_general_archive_element_apply_home_sections' => true,
				'gcod_general_single_element_apply_related_posts' => true,

				// General Single Element
				'gcod_general_single_element_setting'	=> array(
					'element-post-categories',
					'element-post-tags',
					'element-post-date',
					'element-post-author',
					'element-post-comment',
				),

				// Footer
				'gcod_layout_footer'		 					=> 'footer-1',
				'gcod_footer_darkmode'		 					=> 'lightmode',
				'gcod_footer_logo_url'							=> $cdn_dir . 'autumn/logo-autumn.png',
				'gcod_footer_logo_url_dark'						=> $cdn_dir . 'autumn/logo-autumn-white.png',
				'gcod_footer_photo_url'							=> $cdn_dir . 'autumn/footer-photo.png',
				'gcod_site_information_text'					=> 'Lifestyle Blog & Magazine WordPress Theme',
				'gcod_footer_link_color'						=> '',
				'gcod_footer_element_category_title_show'		=> true,
				'gcod_footer_element_category_title'			=> 'Categories',
				'gcod_footer_element_social_icons_title_show'	=> true,
				'gcod_footer_element_social_icons_title'		=> 'Subscrible',

				'gcod_footer_social_elements_setting'			=> array(
					'element-social-facebook-icon',
					'element-social-instagram-icon',
					'element-social-linkedin-icon',
					'element-social-twitter-icon',
				),

				'gcod_footer_element_lastest_posts_title_show'	=> true,
				'gcod_footer_element_lastest_posts_title'		=> 'Lastest Posts',
				'gcod_footer_element_lastest_posts_thumbnail_show'		=> true,
				'gcod_footer_element_lastest_posts_category_show'		=> true,
				'gcod_footer_element_lastest_posts_number'		=> 3,
				'gcod_footer_element_lastest_posts_date_show'	=> true,
				'gcod_footer_element_lastest_posts_author_show'	=> true,

				'gcod_footer_element_tags_title_show'			=> true,
				'gcod_footer_element_tags_title'				=> 'Tags',
				'gcod_copyright_text'							=> 'Autumn Theme WordPress © 2021 by GCO Design Team. All Rights Reserved.',				
				'gcod_footer_element_setting' => [
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
				'gcod_footer_social_shortcode'					=> ''
			)
		);
	}

	return isset($defaults[$name]) ? $defaults[$name] : null;
}