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

	<?php

	$archive_grid_style = gcod_archive_post_layout();

	// category thumbnail on top
	if ((is_home() || is_category()) && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_archive_element_setting')) :
	?>

		<?php if (gcod_show_media_thumbnail()) : ?>

			<a href="<?php echo get_the_permalink(); ?>">
				<?php
				if ($archive_grid_style == 'archive-style-3') {
					the_post_thumbnail('gcod_thumbnail_post_380');
				}

				?>
			</a>

		<?php endif; ?>

	<?php
	endif;
	?>


	<?php do_action('gcod_entry_header_before'); ?>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>

			<?php do_action('gcod_entry_meta_before'); ?>

			<div class="entry-meta">
				<?php
				gcod_entry_meta();
				?>
			</div><!-- .entry-meta -->

			<?php do_action('gcod_entry_meta_after'); ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="image">
		<?php
		// category thumbnail below title
		if ((is_home() || is_author()) && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_archive_element_setting')) :

		?>

			<?php if (gcod_show_media_thumbnail()) : ?>

				<a href="<?php echo get_the_permalink(); ?>">
					<?php

					if ($archive_grid_style == 'archive-style-4') {
						the_post_thumbnail('gcod_thumbnail_post');
					}

					if ($archive_grid_style == 'archive-style-5') {
						the_post_thumbnail('gcod_thumbnail_post');
					}

					if ($archive_grid_style == 'archive-style-7') {
						the_post_thumbnail('gcod_thumbnail_post_595');
					}

					?>
				</a>

			<?php endif; ?>

		<?php
		endif;
		?>
		<?php if ($archive_grid_style == 'archive-style-7') : ?>
			<div class="post-button is-style-outline">
				<a href="<?php echo get_the_permalink(); ?>" title="slider" class="btn wp-block-button__link">View post <i class="fal fa-arrow-right icon"></i></a>
			</div>
		<?php endif; ?>
	</div>

	<?php do_action('gcod_entry_header_after'); ?>

	<?php do_action('gcod_entry_content_before'); ?>

	<?php if (!is_author()) : ?>

		<div class="entry-content">
			<?php
			the_excerpt();
			?>

		</div><!-- .entry-content -->

	<?php endif; ?>

	<?php do_action('gcod_entry_content_after'); ?>

	<?php do_action('gcod_entry_footer_before'); ?>

	<footer class="entry-footer">

		<?php if ($archive_grid_style != 'archive-style-7') : ?>
			<div class="post-infor">
				<p><?php echo gcod_word_count(get_the_excerpt(), 30); ?></p>
			</div>
		<?php endif; ?>

		<?php if ($archive_grid_style == 'archive-style-4') : ?>
			<div class="post-button is-style-outline">
				<a href="<?php echo get_the_permalink(); ?>" title="slider" class="btn wp-block-button__link">View post <i class="fal fa-arrow-right icon"></i></a>
			</div>
		<?php endif; ?>
	</footer><!-- .entry-footer -->

	<?php do_action('gcod_entry_footer_after'); ?>

</article><!-- #post-<?php the_ID(); ?> -->