<?php

/**
 * Template Render Functions.
 *
 * Description.
 *
 * @link URL
 *
 * @package Autumn Theme
 * @subpackage Template Render
 * @since 1.0.0
 */

defined('ABSPATH') || exit;

if (!function_exists('gcod_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function gcod_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x('%s', 'post date', 'autumn-theme'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }
endif;

if (!function_exists('gcod_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function gcod_posted_by() {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('%s', 'post author', 'autumn-theme'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }
endif;


if (!function_exists('gcod_entry_meta')) :

    /**
     * Prints HTML with meta information for the date, author.
     */

    function gcod_entry_meta() {

        if (is_single()) {
            if (gcod_get_theme_mod_multicheck('element-post-date', 'gcod_general_single_element_setting')) {
                gcod_posted_on();
            }

            if (gcod_get_theme_mod_multicheck('element-post-author', 'gcod_general_single_element_setting')) {
                gcod_posted_by();
            }
        }

        if (is_archive() || is_home()) {
            if (gcod_get_theme_mod_multicheck('element-post-date', 'gcod_general_archive_element_setting')) {
                gcod_posted_on();
            }

            if (gcod_get_theme_mod_multicheck('element-post-author', 'gcod_general_archive_element_setting')) {
                gcod_posted_by();
            }
        }
    }

endif;

if (!function_exists('gcod_entry_footer')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function gcod_entry_footer() {

        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {

            if (is_single()) {

                if (gcod_get_theme_mod_multicheck('element-post-categories', 'gcod_general_single_element_setting')) {
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list(esc_html__(', ', 'autumn-theme'));
                    if ($categories_list) {
                        /* translators: 1: list of categories. */
                        printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'autumn-theme') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    }
                }

                if (gcod_get_theme_mod_multicheck('element-post-tags', 'gcod_general_single_element_setting')) {

                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'autumn-theme'));
                    if ($tags_list) {
                        /* translators: 1: list of tags. */
                        printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'autumn-theme') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    }
                }
            }

            if (is_archive() || is_home()) {

                if (gcod_get_theme_mod_multicheck('element-post-categories', 'gcod_general_archive_element_setting')) {
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list(esc_html__(', ', 'autumn-theme'));
                    if ($categories_list) {
                        /* translators: 1: list of categories. */
                        printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'autumn-theme') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    }
                }

                if (gcod_get_theme_mod_multicheck('element-post-tags', 'gcod_general_archive_element_setting')) {

                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'autumn-theme'));
                    if ($tags_list) {
                        /* translators: 1: list of tags. */
                        printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'autumn-theme') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    }
                }
            }
        }

        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            if (gcod_get_theme_mod_multicheck('element-post-comment', 'gcod_general_single_element_setting')) {
                echo '<span class="comments-link">';
                comments_popup_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: post title */
                            __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'autumn-theme'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post(get_the_title())
                    )
                );
                echo '</span>';
            }
        }

        // Related posts ===================
        if (gcod_get_theme_mod_multicheck('element-post-related', 'gcod_general_single_element_setting')) {
            get_template_part('template-parts/home/sections/section', 'related-posts');
        }

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
    }
endif;

if (!function_exists('gcod_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function gcod_post_thumbnail() {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'post-thumbnail',
                    array(
                        'alt' => the_title_attribute(
                            array(
                                'echo' => false,
                            )
                        ),
                    )
                );
                ?>
            </a>

            <?php
        endif; // End is_singular().
    }
endif;

/** 
 * Render template layout elements (ex: headers, footers)
 * Setting on customizer 
 * 
 * @setting_of_elements	=> settings header elements from customizer (string)
 * @layout_of_elements	=> elements on layout position settings (array)
 * @deault_of_elements 	=> default elements on header layout for first (array) 
 * @template_path		=> template to folder all template elements (ex: 'components/headers/partials/')
 *  
 */

if (!function_exists('gcod_render_layout_elements')) :

    function gcod_render_layout_elements($setting_of_elements, $template_path, $layout_of_elements, $default_of_elements) {

        // get settings header elements from customizer
        $gcod_template_element_setting = get_theme_mod($setting_of_elements, $default_of_elements);

        // rendering template parts with settings and config above
        foreach ($layout_of_elements as $layout_positon) {

            // each layout postion - component area ************
            // if have wrapper then create open html 
            if ($layout_positon['open_tag'] != 'none') {

                $html = $layout_positon['open_tag'];
                printf($html);
            }

            $element_order = 0;
            $element_total = count($layout_positon['elements']);

            // scan though all element
            foreach ($gcod_template_element_setting as $template_part) {

                // render element if in postion
                if (in_array($template_part, $layout_positon['elements'])) {

                    $element_order++;

                    // render element template                    
                    get_template_part($template_path . $template_part);

                    // render seperator just in range of wrapper                    
                    if (($element_order > 1) && ($element_order < $element_total) && $layout_positon['seperator']) {
                        printf($layout_positon['seperator']);
                    }
                }
            }

            // if have wrapper then create close html 
            if ($layout_positon['open_tag'] != 'none') {
                $html = $layout_positon['close_tag'];
                printf($html);
            }
        }
    }

endif;

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function gcod_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

/**
 * Functions
 * Require all PHP files in the /$dir/ directory
 * If want excludes 
 */
function gcod_require_all($dir, $exclude = '') {

    $files_dir = array();
    if ($exclude == '') {
        $files_dir = glob($dir . "/*.php");
        foreach ($files_dir as $function) {
            $function = basename($function);
            require $dir . '/' . $function;
        }
    } else {
        $files_dir = getDirContents($dir, 'field-templates');
        foreach ($files_dir as $function) {
            if (strpos($function, '.php') !== false) {
                require $function;
            }
        }
    }
}

// Header Menu
if (!function_exists('gcod_default_header_menu')) {
    function gcod_default_header_menu() {

        // Dispaly Custom Logo and Link to Home
        $mobile_logo = gcod_get_theme_mod('gcod_logo_mobile');
        $click_link = get_home_url();
        $logo_link  = wp_get_attachment_url(gcod_get_theme_mod('custom_logo'));

        if (!$mobile_logo || ($mobile_logo == '')) {
            $mobile_logo = $logo_link;
        }

        $html_logo  = '<div class="gcod-logo-mobile"><a href="';
        $html_logo  .= $click_link;
        $html_logo  .= '"><img src="';
        $html_logo  .= $mobile_logo;
        $html_logo  .= '" alt=""/></a></div>';

        // printf($html_logo);


        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'primary-menu',
            )
        );
    }
}

// Container Classes
if (!function_exists('gcod_container_class')) {
    function gcod_container_class() {
        echo apply_filters('gcod_container_class', 'header-1');
    }
}

// Header classes
if (!function_exists('gcod_header_class')) {
    function gcod_header_class() {
        echo apply_filters('gcod_header_class', 'header-1');
    }
}

// Footer classes
if (!function_exists('gcod_footer_class')) {
    function gcod_footer_class() {
        echo apply_filters('gcod_footer_class', 'footer-1');
    }
}

// Change content footer by layout
function gcod_current_footer_note() {
    $current_footer = get_theme_mod('gcod_layout_footer', 'footer-1');
    echo '<span>' . $current_footer . '</span>';
}

// Home Content classes
if (!function_exists('gcod_home_content_class')) {
    function gcod_home_content_class() {
        echo apply_filters('gcod_home_content_class', 'home-1');
    }
}

// Featured Slider classes
if (!function_exists('gcod_featured_slider_class')) {
    function gcod_featured_slider_class() {
        $gcod_featured_slider_style = gcod_featured_section_style('slider');
        echo apply_filters('gcod_featured_slider_class', $gcod_featured_slider_style);
    }
}

// Featured Categories classes
if (!function_exists('gcod_featured_categories_class')) {
    function gcod_featured_categories_class() {
        $gcod_featured_categories_style = gcod_featured_section_style('categories');
        echo apply_filters('gcod_featured_categories_class', $gcod_featured_categories_style);
    }
}

// Featured Posts classes
if (!function_exists('gcod_featured_posts_class')) {
    function gcod_featured_posts_class() {
        $gcod_featured_posts_style = gcod_featured_section_style('posts');
        echo apply_filters('gcod_featured_posts_class', $gcod_featured_posts_style);
    }
}

// Single Related Posts classes
if (!function_exists('gcod_single_related_posts_classes')) {
    function gcod_single_related_posts_classes() {
        echo apply_filters('gcod_single_related_posts_class', '');
    }
}

// Home Lastest Posts classes
if (!function_exists('gcod_home_lastest_posts_class')) {
    function gcod_home_lastest_posts_class() {
        echo apply_filters('gcod_home_lastest_posts_class', '');
    }
}

// Home Post List classes
if (!function_exists('gcod_home_post_list_class')) {
    function gcod_home_post_list_class() {
        echo apply_filters('gcod_home_post_list_class', '');
    }
}

// Home Instagram classes
if (!function_exists('gcod_home_instagram_class')) {
    function gcod_home_instagram_class() {
        echo apply_filters('gcod_home_instagram_class', '');
    }
}

// Home Newsletter classes
if (!function_exists('gcod_home_newsletter_class')) {
    function gcod_home_newsletter_class() {
        echo apply_filters('gcod_home_newsletter_class', '');
    }
}

// Display home instagram 
if (!function_exists('gcod_display_home_instagram')) {
    function gcod_display_home_instagram() {

        if (gcod_get_theme_mod('gcod_section_home_instagram_below_main')) :

            $section_name = 'section-home-instagram';
            $list_home_elements = gcod_get_theme_mod('gcod_home_section_setting');
            $gcod_instagram_style = gcod_get_theme_mod('gcod_section_home_instagram_style');
            $display_this_section = in_array($section_name, $list_home_elements);

            // if section instagram is display on list element settings
            if ($display_this_section) :
            ?>

                <div class="instagram-wrapper <?php gcod_home_instagram_class(); ?>">
                    <div class="inner-instagram">
                        <?php

                        if ($gcod_instagram_style) {
                            get_template_part('template-parts/home/partials/' . $gcod_instagram_style);
                        }
                        ?>
                    </div>
                </div>
            <?php

            endif;

        endif;
    }
}

// Display home newsletter 
if (!function_exists('gcod_display_home_newsletter')) {
    function gcod_display_home_newsletter() {

        if (gcod_get_theme_mod('gcod_section_home_newsletter_below_main')) :

            $section_name = 'section-home-newsletter';
            $list_home_elements = gcod_get_theme_mod('gcod_home_section_setting');
            $gcod_newsletter_style = gcod_get_theme_mod('gcod_section_home_newsletter_style');
            $display_this_section = in_array($section_name, $list_home_elements);

            // if section newsletter is display on list element settings
            if ($display_this_section) :
            ?>

                <div class="newsletter-wrapper <?php gcod_home_newsletter_class(); ?>">
                    <div class="inner-newsletter">
                        <?php

                        if ($gcod_newsletter_style) {
                            get_template_part('template-parts/home/partials/' . $gcod_newsletter_style);
                        }
                        ?>
                    </div>
                </div>
            <?php

            endif;

        endif;
    }
}

// Display home lastest posts 
if (!function_exists('gcod_display_home_lastest_posts')) {
    function gcod_display_home_lastest_posts() {

        if (gcod_get_theme_mod('gcod_section_home_lastest_posts_below_main')) :

            $section_name = 'section-home-lastest-posts';
            $list_home_elements = gcod_get_theme_mod('gcod_home_section_setting');
            $gcod_lastest_posts_style = gcod_get_theme_mod('gcod_section_home_lastest_posts_style');
            $display_this_section = in_array($section_name, $list_home_elements);

            // if section lastest_posts is display on list element settings
            if ($display_this_section) :
            ?>

                <div class="lastest-posts-wrapper <?php gcod_home_lastest_posts_class(); ?>">
                    <div class="inner-lastest-posts">
                        <?php

                        if ($gcod_lastest_posts_style) {
                            get_template_part('template-parts/home/partials/' . $gcod_lastest_posts_style);
                        }
                        ?>
                    </div>
                </div>
        <?php

            endif;

        endif;
    }
}

// Search Overlay
if (!function_exists('gcod_overlay_search')) {
    function gcod_overlay_search() {
        ?>
        <div id="gcod-searchbox">
            <button type="button" class="close">×</button>
            <form role="search" class="form-search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                <input type="text" value="" name="s" placeholder="Enter text here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
<?php
    }
}

// Show current page name for header
function gcod_current_page_name_header() {
    if (is_category()) {

        echo single_cat_title();

    } elseif (is_tag()) {

        echo single_tag_title();

    } elseif (is_category()) {

        echo single_cat_title();

    } elseif (is_author()) {

        the_post();

        $author_name = get_the_author();

        rewind_posts();

        echo esc_html($author_name);

    } elseif (is_404()) {

        echo '404';

    } elseif (is_search()) {

        printf(esc_html__('Search Results for: %s', 'autumn-theme'), '<span>' . get_search_query() . '</span>');

    } else {

        echo get_the_title();

    }
}


// Next Previos Page Navigation
if (!function_exists('gcod_posts_nav_link')) {
    function gcod_posts_nav_link() {
        if (get_next_posts_link()) {

            echo '<div class="nav-previous">';
            next_posts_link(__('<span class="meta-nav"></span> Older posts', 'autumn-theme'));
            echo '</div>';
        }

        if (get_previous_posts_link()) {
            echo '<div class="nav-next">';
            previous_posts_link(__('Newer posts <span class="meta-nav"></span>', 'autumn-theme'));            
            echo '</div>';
        }
    }
}