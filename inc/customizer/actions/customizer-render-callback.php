<?php

/**
 * Function for render partial above 
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Render the site title for the selective refresh partial.
function gcod_customize_partial_blogname() {
	bloginfo('name');
}

// Render the site tagline for the selective refresh partial. 
function gcod_customize_partial_blogdescription() {
	bloginfo('description');
}

// Render new content for selective
function gcod_customizer_render_content() {
	get_theme_mod('gcod_copyright_text');
}


// Render layout header
function gcod_change_header_layout() {
	$gcod_layout_header = get_theme_mod('gcod_layout_header', 'header-1');
	if ($gcod_layout_header) {
		get_template_part('template-parts/components/headers/header', 'template');
	}
}

// Render layout footer
function gcod_change_footer_layout() {

	$gcod_layout_footer = get_theme_mod('gcod_layout_footer', 'footer-1');
	if ($gcod_layout_footer) {
		get_template_part('template-parts/components/footers/footer', 'template');
	}
}

// Render Darkmode Button
function gcod_switch_darkmode_button() {

	// Enqueue Darkmode vendor script
	if (get_theme_mod('gcod_dark_mode_support')) {

		// get script for show darkmode
		get_template_part('template-parts/components/darkmode/element-darkmode-button');
	}
}

// Render layout featured slider
function gcod_change_featured_slider_style() {
	$gcod_featured_slider_style = get_theme_mod('gcod_featured_slider_style', 'featured-slider-1');
	if ($gcod_featured_slider_style) {
		get_template_part('template-parts/content/partials/' . $gcod_featured_slider_style);
	}
}

// Render layout featured categories
function gcod_change_featured_categories_style() {
	$gcod_featured_categories_style = get_theme_mod('gcod_featured_categories_style', 'featured-categories-1');
	if ($gcod_featured_categories_style) {
		get_template_part('template-parts/content/partials/' . $gcod_featured_categories_style);
	}
}

// Render layout featured posts
function gcod_change_featured_posts_style() {
	$gcod_featured_posts_style = get_theme_mod('gcod_featured_posts_style', 'featured-posts-1');
	if ($gcod_featured_posts_style) {
		get_template_part('template-parts/content/partials/' . $gcod_featured_posts_style);
	}
}

// Render layout home postlist 
function gcod_change_home_postlist_style() {
	$gcod_layout_home_postlist_style = get_theme_mod('gcod_section_home_post_list_style', 'post-list-2');
	if ($gcod_layout_home_postlist_style) {
		get_template_part('template-parts/home/partials/' . $gcod_layout_home_postlist_style);
	}
}

// Render layout home lastest posts 
function gcod_change_home_section_lastest_posts_style() {
	$gcod_layout_home_lastest_posts_style = get_theme_mod('gcod_section_home_lastest_posts_style', 'lastest-posts-2');
	if ($gcod_layout_home_lastest_posts_style) {
		get_template_part('template-parts/home/partials/' . $gcod_layout_home_lastest_posts_style);
	}
}



// Render layout home bloglist 
function gcod_change_home_main_bloglist_layout() {
	$gcod_layout_home_blog_list = get_theme_mod('gcod_layout_home_blog_list', 'home-bloglist-1');
	if ($gcod_layout_home_blog_list) {
		get_template_part('template-parts/home/content-blog-loop');
	}
}

// Render layout featured list
function gcod_change_featured_sections_content() {

	$gcod_featured_sections_setting = get_theme_mod(
		'gcod_featured_sections_setting',
		gcod_defaults('gcod_featured_sections_setting')
	);

	if ($gcod_featured_sections_setting) {
		get_template_part('template-parts/home/content', 'featured');
	}
}

// Render Header Main Logo
function gcod_customize_partial_header_logo() {

	// Get Logo URL with ID form custom_logo
	// Dispaly Custom Logo and Link to Home
	$click_link = get_home_url();
	$logo_link = gcod_get_logo_url();

	// sync default into customizer setting
	gcod_set_theme_mod('custom_logo', $logo_link);

	$html_logo  = '<a href="';
	$html_logo  .= $click_link;
	$html_logo  .= '"><img src="';
	$html_logo  .= $logo_link;
	$html_logo  .= '" alt=""/></a>';


	// Update into WP Megamenu if using	
	$wpmm_classic_theme_id = gcod_get_page_id_by_title('classic-themes');
	$post = get_post($wpmm_classic_theme_id); // classic-themes

	$wpmm_classic_theme_content = $post->post_content;

	$new_content = gcod_set_value_in_serialize($wpmm_classic_theme_content, 'brand_logo', $logo_link);

	// Update logo classic-themes
	$post->post_content = $new_content;
	wp_update_post( $post );

	// print logo
	printf($html_logo);

}

// Render header social icons
function gcod_update_header_social_elements() {
	
	// Get display and order icons
	$gcod_social_icons_display = gcod_get_theme_mod('gcod_social_icons_setting');

    foreach ($gcod_social_icons_display as $gcod_social_icon) :
        $icon_name = str_replace("icon-", "", $gcod_social_icon);
        $social_url = gcod_get_theme_mod('gcod_' . $icon_name . '_uri');
    ?>
        <a href="<?php echo esc_url($social_url); ?>" aria-label="<?php echo esc_attr($icon_name); ?>"></a>

    <?php
    endforeach; 
}

// Render footer social icons
function gcod_update_footer_social_elements() {

	// List Social Icons
	$list_footer_social_icons = gcod_get_theme_mod('gcod_footer_social_elements_setting');

	foreach ($list_footer_social_icons as $element) {
		$html = '<a href="">';
		$html .= get_social_icon_image($element);
		$html .= '</a>';
		printf($html);
	}
}

// Render footer lastest posts
function gcod_update_footer_lastest_posts() {

	// List Lasts Posts 

	// Define our WP Query Parameters
	$the_query = new WP_Query('posts_per_page=' . get_theme_mod('gcod_footer_element_lastest_posts_number')); ?>

	<?php
	// Start our WP Query
	while ($the_query->have_posts()) : $the_query->the_post();
		// Display the Post Title with Hyperlink
	?>

		<li>
			<?php if (get_theme_mod('gcod_footer_element_lastest_posts_thumbnail_show')) : ?>

				<div class="thumbnail">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('gcod_thumbnail_footer'); ?></a>
				</div>

			<?php endif; ?>

			<div class="content">
				<?php
				$categories = get_the_category();
				$cat_name = $categories[0]->cat_name;
				$cat_link = get_category_link($categories[0]);

				?>

				<?php if (get_theme_mod('gcod_footer_element_lastest_posts_category_show')) : ?>
					<span class="category"><a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($cat_name); ?></a></span>
				<?php endif; ?>

				<?php if (get_theme_mod('gcod_footer_element_lastest_posts_number')) : ?>
					<h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
				<?php endif; ?>

				<?php
				if (get_theme_mod('gcod_footer_element_lastest_posts_date_show')) {
					gcod_posted_on();
					if (get_theme_mod('gcod_footer_element_lastest_posts_author_show')) {
						echo '<span class="seperator"> / </span>';						
					}
				};

				if (get_theme_mod('gcod_footer_element_lastest_posts_author_show')) {
					gcod_posted_by();
				};

				?>
			</div>
		</li>

	<?php
	// Repeat the process and reset once it hits the limit
	endwhile;
	wp_reset_postdata();
}

// Render Single Post Layout
if (!function_exists('gcod_change_single_post_elements')) {
	function gcod_change_single_post_elements() {

		do_action('gcod_entry_header_before'); ?>

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

		<?php do_action('gcod_entry_header_after'); ?>

		<?php

		if (is_single() && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_single_element_setting')) {
			gcod_post_thumbnail();
		}

		if ((is_archive() || is_home()) && gcod_get_theme_mod_multicheck('element-post-thumnbail', 'gcod_general_archive_element_setting')) {
			gcod_post_thumbnail();
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
			?>
		</div><!-- .entry-content -->

		<?php do_action('gcod_entry_content_after'); ?>

		<?php do_action('gcod_entry_footer_before'); ?>

		<footer class="entry-footer">
			<?php gcod_entry_footer(); ?>
		</footer><!-- .entry-footer -->

<?php do_action('gcod_entry_footer_after');
	}
}

// Change Archive Layout
if (!function_exists('gcod_change_archive_layout')) {
	function gcod_change_archive_layout() {
		get_template_part('template-parts/loop/archive', 'blog');
	}
}

// Change readingtime status
if (!function_exists('gcod_change_readingtime_status')) {
	function gcod_change_readingtime_status() {
		$gcod_enable_reading_time = gcod_get_theme_mod('gcod_enable_reading_time');	
		
		if ($gcod_enable_reading_time) {
			$on_readtime_option = array('bsf_rt_single_page');
		} else {
			$on_readtime_option = array();
		}

		gcod_update_option_value('bsf_rt_read_time_settings','bsf_rt_show_read_time',$on_readtime_option);

		// Render Post again
		get_template_part('template-parts/loop/post', 'single');

		
	}
}

// Change reading progressbar status
if (!function_exists('gcod_change_progress_bar_status')) {
	function gcod_change_progress_bar_status() {
		$gcod_enable_read_progress_bar = gcod_get_theme_mod('bsf_rt_progress_bar_settings');	
		
		if ($gcod_enable_read_progress_bar) {
			$on_progress_position_option = 'top_of_the_page';
		} else {
			$on_progress_position_option = 'none';
		}

		gcod_update_option_value('bsf_rt_progress_bar_settings','bsf_rt_position_of_progress_bar',$on_progress_position_option);

		// Render Post again
		get_template_part('template-parts/loop/post', 'single');
		
	}
}

// Change typoset then update custom setting

// include(get_template_directory() . '/inc/customizer/export/customizer-typoset.php' );

// if (!function_exists('gcod_set_typography_update')) {
// 	function gcod_set_typography_update() {

// 		$select_typo_set = gcod_get_theme_mod('gcod_set_typography');
// 		// gcod_set_custom_typography($select_typo_set, $typo_set_values);
// 	}
// }