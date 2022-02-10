<?php

/**
 * Template part for displaying posts with excerpt
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action('gcod_post_header_before'); ?>

	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>

			<?php do_action('gcod_post_meta_before'); ?>

			<div class="entry-meta">
				<?php
				gcod_entry_meta();
				?>
			</div><!-- .entry-meta -->

			<?php do_action('gcod_post_meta_after'); ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php do_action('gcod_post_header_after'); ?>

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

	<?php do_action('gcod_post_content_before'); ?>

	<div class="entry-content">
		<?php

		gco_the_excerpt();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'autumn-theme'),
				'after'  => '</div>',
			)
		);

		?>
	</div><!-- .entry-content -->

	<?php do_action('gcod_post_content_after'); ?>

	<?php do_action('gcod_post_footer_before'); ?>

	<footer class="entry-footer">
		<?php gcod_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php do_action('gcod_post_footer_after'); ?>

</article><!-- #post-<?php the_ID(); ?> -->