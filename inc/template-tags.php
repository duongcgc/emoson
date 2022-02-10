<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Autumn Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action('wp_body_open');
	}
endif;

// Header Logo
if (!function_exists('gcod_default_header_logo')) {
	function gcod_default_header_logo() {
		the_custom_logo();
	};
}

// Default site title
if (!function_exists('gcod_default_site_title')) {
	function gcod_default_site_title() {
		if (is_front_page() && is_home()) {
			echo sprintf(
				'<div class="site-title"><a href="%s" rel="home">%s</a></div>',
				esc_url(home_url('/'), 'autumn-theme'),
				esc_url(bloginfo('name'), 'autumn-theme')
			);
		} else {
			echo sprintf(
				'<p class="site-title"><a href="%s" rel="home">%s</a></p>',
				esc_url(home_url('/'), 'autumn-theme'),
				esc_url(bloginfo('name'), 'autumn-theme')
			);
		}
	};
}

// Site Description
if (!function_exists('gcod_default_site_description')) {
	function gcod_default_site_description() {
		$gcod_description = get_bloginfo('description', 'display');
		if ($gcod_description || is_customize_preview()) {
			echo '<p class="site-description">';
			echo esc_html__('%', $gcod_description, 'autumn-theme');
			echo '</p>';
		}
	};
}

// Change content header by layout
function gcod_current_header_note() {
	$current_header = get_theme_mod('gcod_layout_header', 'header-1');
	echo '<span>' . $current_header . '</span>';
}

// Footer Menu
if (!function_exists('gcod_default_footer_menu')) {
	function gcod_default_footer_menu() {
		wp_nav_menu(
			array(
				'theme_location' => 'footer-menu',
				'menu_id'        => 'footer-menu',
			)
		);
	}
}

// Current Page Name
if (!function_exists('gcod_show_name_current_page')) {
	function gcod_show_name_current_page() {
		if (is_front_page() && is_home()) {
			echo  'Default homepage.';
		} elseif (is_front_page()) {
			echo 'Static homepage.';
		} elseif (is_home()) {
			echo 'Blog page.';
		} else {
			echo 'Everyting else.';
		}

		if (is_archive()) {
			echo 'Archived Page.';
		}
		if (is_category()) {
			echo 'Category Page.';
		}
		if (is_tag()) {
			echo 'Tag Page.';
		}
		if (is_author()) {
			echo 'Author Page.';
		}
		if (is_singular()) {
			echo 'Singular Page.';
		}
		if (is_page()) {
			echo 'Page.';
		}
		if (is_single()) {
			echo 'Post.';
		}
		if (is_search()) {
			echo 'Search Page.';
		}
		if (is_404()) {
			echo '404 Page.';
		}
	}
}

// Render The Post Summary
if (!function_exists('gco_the_excerpt')) {
	function gco_the_excerpt() {

		if (is_single() && gcod_get_theme_mod_multicheck('element-post-except', 'gcod_general_single_element_setting')) {
			the_excerpt();
		}

		if ((is_archive() || is_home()) && gcod_get_theme_mod_multicheck('element-post-except', 'gcod_general_archive_element_setting')) {
			the_excerpt();
		}
	}
}

// Archive Page Navigation
if (!function_exists('gcod_post_pagination')) :
	/**
	 * Post Pagination
	 */
	function gcod_post_pagination() {
		wp_link_pages(
			array(
				'before'           => '<div class="navigation pagination"><div class="nav-links">',
				'after'            => '</div></div>',
				'link_before'      => '<span class="page-number">',
				'link_after'       => '</span>',
				'next_or_number'   => 'next_and_number',
				'separator'        => ' ',
				'nextpagelink'     => esc_html__('Next page', 'autumn-theme'),
				'previouspagelink' => esc_html__('Previous page', 'autumn-theme'),
			)
		);
	}
endif;

// Archive Page Classes 
if (!function_exists('gcod_archive_page_classes')) {
	function gcod_archive_page_classes() {
		echo gcod_archive_post_layout();
	}
}

// Add first quick guide settings
if (!function_exists('gcod_add_quick_guide_setting')) {
	function gcod_add_quick_guide_setting($guide) {
		$guiders[] = $guide;
		$guiders[] = '<h5 class="quick-guide-title">Settings Guider</h5>';

		// Design Concept

		$guiders[] = '<p>Design Concept: ';
		$guiders[] = gcod_current_design_concept();
		$guiders[] = '</p>';

		// Archive Post Layout
		$guiders[] = '<p>Archive Layout: ';
		$guiders[] = gcod_archive_post_layout();
		$guiders[] = '</div>';



		$guide = implode(" ", $guiders);

		return $guide;
	}
}