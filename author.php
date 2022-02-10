<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */

get_header();

// Get postion of featured sections
$featured_sections_position = gcod_get_theme_mod('gcod_show_featured_sections_postions');

// Render featured sections at before main content
if ($featured_sections_position == 'above-main-content') {

	if (gcod_get_theme_mod('gcod_featured_sections_setting')) {

		echo '<div class="featured-sections">';

		get_template_part('template-parts/home/content', 'featured');

		echo '</div>';
	}
}

echo apply_filters('gcod_start_content_wrapper', '<div class="site-content">');

if (gcod_current_page_layout() == 'left-sidebar') {
	get_sidebar();
}

?>

<main id="primary" class="site-main <?php gcod_archive_page_classes(); ?>">

	<?php

	// Render Featured Sections at begin main content
	if ($featured_sections_position == 'begin-main-content') {

		if (get_theme_mod('gcod_featured_sections_setting', gcod_defaults('gcod_featured_sections_setting'))) {

			echo '<div class="featured-sections">';

			get_template_part('template-parts/home/content', 'featured');

			echo '</div>';
		}
	}

	// Archive Blog Loop
	echo '<div class="archive-wrapper ';
	gcod_archive_page_classes();
	echo '">';

	get_template_part('template-parts/loop/archive', 'author');

	echo '</div>';

	// Render Featured Sections at end main content		
	if ($featured_sections_position == 'end-main-content') {

		if (gcod_get_theme_mod('gcod_featured_sections_setting')) {

			echo '<div class="featured-sections">';

			get_template_part('template-parts/home/content', 'featured');

			echo '</div>';
		}
	}

	?>

</main><!-- #main -->

<?php

if (gcod_current_page_layout() == 'right-sidebar') {
	get_sidebar();
}

echo apply_filters('gcod_end_content_wrapper', '</div>');

// Render featured sections at after main content
if ($featured_sections_position == 'below-main-content') {

	if (get_theme_mod('gcod_featured_sections_setting', gcod_defaults('gcod_featured_sections_setting'))) {

		echo '<div class="featured-sections">';

		get_template_part('template-parts/home/content', 'featured');

		echo '</div>';
	}
}

get_footer();