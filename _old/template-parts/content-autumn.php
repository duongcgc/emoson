<?php

/**
 * Template part for displaying posts with autumn styled
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */

$post_list_style = gcod_get_theme_mod('gcod_section_home_post_list_style');

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (gcod_show_media_thumbnail()) : ?>
		<?php if ((!is_sticky()) && ($post_list_style != 'post-list-5')) : ?>
			<div class="image">
				<a href="<?php the_permalink(); ?>">
					<?php

					// thumbnail 732 with not sticky and style 3
					if ($post_list_style == 'post-list-3') :
						the_post_thumbnail('gcod_thumbnail_post');

					// thumbnail 300 with not sticky and style 2&4
					elseif (($post_list_style == 'post-list-2') || ($post_list_style == 'post-list-4')) :

						the_post_thumbnail('gcod_thumbnail_post_300');
					else :

						if (is_single() && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_single_element_setting')) {
							gcod_post_thumbnail();
						}

						if ((is_archive() || is_home()) && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_archive_element_setting')) {
							gcod_post_thumbnail();
						}

					endif;

					?>
				</a>
			</div>
		<?php endif; ?>
	<?php endif; ?>


	<div class="content">

		<?php if (gcod_display_post_element_on_section('element-post-categories')) : ?>

			<div class="post-cat">
				<?php
				$category = get_the_category();
				$cat_name = $category[0]->cat_name;
				$cat_link = get_category_link($category[0]);
				?>
				<a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($cat_name); ?></a>
			</div>

		<?php endif; ?>

		<?php do_action('gcod_post_header_before'); ?>

		<header class="entry-header post-name">
			<?php
			if (is_singular()) :
				the_title('<h4 class="entry-title">', '</h4>');
			else :
				the_title('<h4 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>');
			endif;
			?>
		</header><!-- .entry-header -->
		<?php
		if ('post' === get_post_type()) :
		?>

			<?php do_action('gcod_post_meta_before'); ?>

			<div class="entry-meta post-meta">
				<?php

				if (gcod_get_theme_mod_multicheck('element-post-author', 'gcod_general_archive_element_setting')) {
					gcod_posted_by();
				}

				if (gcod_get_theme_mod_multicheck('element-post-date', 'gcod_general_archive_element_setting')) {
					gcod_posted_on();
				}

				?>
			</div><!-- .entry-meta -->

			<?php if (($post_list_style != 'post-list-4') && (!is_sticky())) : ?>
				<div class="post-infor">
					<p><?php echo gcod_word_count(get_the_excerpt(), 20); ?></p>
				</div>
			<?php endif; ?>

			<?php do_action('gcod_post_meta_after'); ?>

		<?php endif; ?>


		<?php do_action('gcod_post_header_after'); ?>
		<?php do_action('gcod_post_content_before'); ?>


		<?php if ((is_sticky()) || ($post_list_style == 'post-list-5')) : ?>

			<?php if (gcod_show_media_thumbnail()) : ?>

				<div class="image">
					<a href="<?php the_permalink(); ?>">
						<?php

						// Sticky 3 & 4 size 732x472
						if (($post_list_style == 'post-list-2') || ($post_list_style == 'post-list-3') || ($post_list_style == 'post-list-4')) :
							the_post_thumbnail('gcod_thumbnail_post');
						else :

							if (is_single() && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_single_element_setting')) {
								gcod_post_thumbnail();
							}

							if ((is_archive() || is_home()) && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_archive_element_setting')) {
								gcod_post_thumbnail();
							}

						endif;

						?>
					</a>
				</div>

			<?php endif; ?>

			<div class="entry-content content">
				<div class="post-infor">
					<p><?php the_excerpt(); ?></p>
				</div>

				<?php if ($post_list_style != 'post-list-5') : ?>
					<div class="post-button is-style-outline">

						<?php if (!gcod_display_post_element_on_section('element-post-readmore')) : ?>
							<a href="<?php echo get_the_permalink(); ?>" title="slider" class="btn wp-block-button__link">View post <i class="fal fa-arrow-right icon"></i></a>
						<?php endif; ?>

						<?php
						if (($post_list_style != 'post-list-3') && ($post_list_style != 'post-list-4') && ($post_list_style != 'post-list-5')) :

							if (gcod_get_theme_mod_multicheck('shared-sticky-post', 'gcod_shared_buttons_show_on')) {
								echo apply_filters('gcod_the_content_shared', '');
							}

						endif; ?>
					</div>
				<?php endif; ?>
			</div><!-- .entry-content -->
		<?php endif; ?>


		<?php do_action('gcod_post_content_after'); ?>

		<?php do_action('gcod_post_footer_before'); ?>

		<?php do_action('gcod_post_footer_after'); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->