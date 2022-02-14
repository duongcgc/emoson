<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */

get_header();

// Get postion of featured sections display
$featured_sections_position = gcod_get_theme_mod('gcod_show_featured_sections_postions');
$begin_site_content = '<div class="site-content">';
$end_site_content = '</div>';
$begin_primary = '<main id="primary" class="site-main">';
$end_primary = '</main>';

// Render featured sections at before main content
if ($featured_sections_position == 'above-main-content') {

	// static home sections
	if (gcod_get_theme_mod('gcod_featured_sections_setting')) {

		echo '<div class="featured-sections">';

		get_template_part('template-parts/home/content', 'featured');

		echo '</div>';
	}
}

printf($begin_site_content);
echo apply_filters('gcod_start_content_wrapper', '');

// Sidebar Left
if (gcod_current_page_layout() == 'left-sidebar') {
	get_sidebar();
}

// Main Wrapper
printf($begin_primary);

// 2. Render Home Page with Static Blog -->
// Render Featured Sections at begin main content
if ($featured_sections_position == 'begin-main-content') {

	// static home sections
	if (gcod_get_theme_mod('gcod_featured_sections_setting')) {

		echo '<div class="featured-sections">';

		get_template_part('template-parts/home/content', 'featured');

		echo '</div>';
	}
}

// Check style Home page buiding
if (gcod_get_theme_mod('gcod_home_content_sections')) :

	// 1. Render Home Page with building with Customizer Partials

	// Builder home sections
	// Home Content by Sections Layout - with Home Section Builder
	get_template_part('template-parts/home/content', 'template');

else : // End of content home using sections builder (1)

	// Home Blog Loop
	echo '<div class="archive-wrapper ';
	gcod_archive_page_classes();
	echo '">';

	get_template_part('template-parts/loop/post', 'excerpt');

	echo '</div>';

endif; // End of content home normal (2)

// Render Featured Sections at end main content		
if ($featured_sections_position == 'end-main-content') {

	// static home sections
	if (gcod_get_theme_mod('gcod_featured_sections_setting')) {

		echo '<div class="featured-sections">';

		get_template_part('template-parts/home/content', 'featured');

		echo '</div>';
	}
}

// End Main Wrapper
printf($end_primary);

// Sidebar Right
if (gcod_current_page_layout() == 'right-sidebar') {
	get_sidebar();
}

echo apply_filters('gcod_end_content_wrapper', '');
printf($end_site_content);

// Render featured sections at after main content
if ($featured_sections_position == 'below-main-content') {

	// static home sections
	if (gcod_get_theme_mod('gcod_featured_sections_setting')) {

		echo '<div class="featured-sections">';

		get_template_part('template-parts/home/content', 'featured');

		echo '</div>';
	}
}

get_footer();
