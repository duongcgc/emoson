<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action('gcod_entry_header_before'); ?>

	<header class="entry-header">
		<?php
		if (is_singular()) :
			if (gcod_show_page_header() != true) :
				the_title('<h1 class="entry-title">', '</h1>');
			endif;
		else :
			if (gcod_show_page_header() != true) :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;
		endif;

		if ('post' === get_post_type()) :
		?>

			<?php do_action('gcod_entry_meta_before'); ?>

			<?php 
			if (is_singular()) :
				if (gcod_show_page_header() != true) :
			?>
				<div class="entry-meta">
					<?php
					gcod_entry_meta();
					?>
				</div><!-- .entry-meta -->
			<?php 
				endif;
			endif;
			?>

			<?php do_action('gcod_entry_meta_after'); ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php do_action('gcod_entry_header_after'); ?>

	<?php

	if (is_single() && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_single_element_setting')) {
        if (gcod_show_media_thumbnail()) {
            gcod_post_thumbnail();
        }
	}

	if ((is_archive() || is_home()) && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_archive_element_setting')) {
        if (gcod_show_media_thumbnail()) {
            gcod_post_thumbnail();
        }
	}

	?>

	<?php do_action('gcod_entry_content_before'); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'autumn-theme'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'autumn-theme'),
				'after'  => '</div>',
			)
		);

		// Shared Post Single
		if (gcod_get_theme_mod_multicheck('shared-single-post','gcod_shared_buttons_show_on') && is_single()) {
			echo apply_filters('gcod_the_content_shared', '');
		}	

		?>
	</div><!-- .entry-content -->

	<?php do_action('gcod_entry_content_after'); ?>

	<?php do_action('gcod_entry_footer_before'); ?>

	<footer class="entry-footer">
		<?php gcod_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php do_action('gcod_entry_footer_after'); ?>

</article><!-- #post-<?php the_ID(); ?> -->