<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action('gcod_page_header_before'); ?>

	<?php
	if (gcod_show_page_header() != true) :
	?>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

	<?php endif; ?>

	<?php do_action('gcod_page_header_after'); ?>
	
	<?php if (gcod_show_media_thumbnail()) : ?>
		<?php gcod_post_thumbnail(); ?>
	<?php endif; ?>

	<?php do_action('gcod_page_content_before'); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'autumn-theme'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php do_action('gcod_page_content_after'); ?>

	<?php if (get_edit_post_link()) : ?>

		<?php do_action('gcod_page_footer_before'); ?>

		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'autumn-theme'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);

			// Shared Page single

			if (gcod_get_theme_mod_multicheck('shared-single-page','gcod_shared_buttons_show_on') && is_page()) {
				echo apply_filters('gcod_the_content_shared', '');
			}

			?>
		</footer><!-- .entry-footer -->

		<?php do_action('gcod_page_footer_after'); ?>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->