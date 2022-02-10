<?php

/**
 * Template Functions.
 *
 * All functions here always return value || something.
 *
 * @link URL
 *
 * @package Autumn Theme
 * @subpackage Template Functions
 * @since 1.0.0
 */

/**
 * Adds custom classes to the array of body classes.
 * custom classes can sidebar, page header, photo slider types...
 * 
 * @param array $classes Classes for the body element.
 * @return array
 */
function gcod_body_classes($classes) {

    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-main')) {
        $classes[] = 'no-sidebar';
    }

    // Adds style menu navigation into body classes
    if (gcod_get_theme_mod('gcod_header_menu_style')) {
        $classes[] = gcod_get_theme_mod('gcod_header_menu_style');
    }

    // Add Darkmode into body
    if (gcod_get_theme_mod('gcod_dark_mode_color')) {
        $classes[] = 'darkmode';
    }

    // Add Title - Heading concept
    if (gcod_get_theme_mod('gcod_page_title_style')) {
        $classes[] = gcod_get_theme_mod('gcod_page_title_style');
    }

    // Add Button - Shape concept
    if (gcod_get_theme_mod('gcod_button_concept')) {
        $classes[] = gcod_get_theme_mod('gcod_button_concept');
    }

    // Adds Typography into body classes
    if (gcod_get_theme_mod('gcod_set_typography')) {
        $classes[] = gcod_get_theme_mod('gcod_set_typography');
    }

    // Adds Media Hover into body classes
    if (gcod_get_theme_mod('gcod_thumbnail_hover_effect')) {
        $classes[] = gcod_get_theme_mod('gcod_thumbnail_hover_effect');
    }

    // Adds status of header into body classes
    if (gcod_get_theme_mod('gcod_header_overlay')) {
        $classes[] = 'header-overlay';
    }

    // Adds status of header sticky into body classes
    if (gcod_get_theme_mod('gcod_header_sticky')) {
        $classes[] = 'header-sticky';
    }

    // Adds status of sidebar sticky into body classes
    if (gcod_get_theme_mod('gcod_sidebar_sticky')) {
        $classes[] = 'sidebar-sticky';
    }

    return $classes;
}

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function gcod_body_classes_full($classes) {
    global $post;

    global $wp_version;

    // Adds a class if we're in the Customizer.
    if (is_customize_preview()) {
        $classes[] = 'is-customize-preview';
    }

    // Adds a class if we're in the Customizer.
    if (is_customize_preview()) {
        $classes[] = 'is-customize-preview';
    }

    // Adds a class is a site border is specified in the Customizer.
    if (gcod_get_theme_mod('site_border')) {
        $classes[] = 'has-site-border';
    }

    // Adds a class is a site border is specified in the Customizer.
    if (is_singular('post') && has_post_thumbnail()) {
        $classes[] = 'has-featured-img';
    }

    // Override the variable based on the URL parameter.
    if (isset($_GET['header-position'])) {
        $classes[] = $_GET['header-position'];
    }

    // Adds a class if a page has an absolute positioned header, via the page meta settings.
    if (is_page() && ('absolute' === get_post_meta($post->ID, '_gcod_header_style', true))) {
        $classes[] = 'site-header--absolute';
    }

    // Adds a class if a page has an absolute positioned header, via the page meta settings.
    if (is_page() && ('fixed' === get_post_meta($post->ID, '_gcod_header_style', true))) {
        $classes[] = 'site-header--fixed';
    }

    // Adds a class if a page has an alternate header color scheme, via the page meta settings.
    if (is_page() && ('light' === get_post_meta($post->ID, '_gcod_header_scheme', true))) {
        $classes[] = 'site-header--light';
    }

    // Adds a class if a page has an absolute positioned header, via the page meta settings.
    if (is_singular('portfolio') && ('absolute' === get_post_meta($post->ID, '_gcod_header_style', true))) {
        $classes[] = 'site-header--absolute';
    }

    // Adds a class if a page has an absolute positioned header, via the page meta settings.
    if (is_singular('portfolio') && ('fixed' === get_post_meta($post->ID, '_gcod_header_style', true))) {
        $classes[] = 'site-header--fixed';
    }

    // Adds a class if a page has an alternate header color scheme, via the page meta settings.
    if (is_singular('portfolio') && ('light' === get_post_meta($post->ID, '_gcod_header_scheme', true))) {
        $classes[] = 'site-header--light';
    }

    // Add a class to the WooCommerce cart page if the WooCommerce cart is empty.
    if (gcod_is_woocommerce_activated()) {
        if (is_cart() && count(WC()->cart->get_cart()) === 0) {
            $classes[] = 'woocommerce--empty-cart';
        }
    }

    // Add a class set home is builder or static
    if (is_home() || is_front_page()) {

        if (gcod_get_theme_mod('gcod_home_using_boxed_layout')) {
            $classes[] = 'gcod-home-boxed';
        } else {
            $classes[] = 'gcod-home-fluid';
        }
    }


    // Adds a class of current layout 
    $classes[] = gcod_current_page_layout();

    return $classes;
}

if (!function_exists('gcod_browser_body_classes')) :
    /**
     * Adds custom classes to the array of body classes.
     *
     * @param array $classes Classes for the body element.
     * @return array (Maybe) filtered body classes.
     */
    function gcod_browser_body_classes($classes) {
        global $is_lynx, $is_gecko, $is_ie, $is_opera, $is_ns4, $is_safari, $is_chrome, $is_iphone, $wp;

        // $_SERVER['HTTP_USER_AGENT']
        $url = home_url(add_query_arg(array(), $wp->request));

        if ($is_lynx) {
            $classes[] = 'lynx';
        } elseif ($is_gecko) {
            $classes[] = 'gecko';
        } elseif ($is_opera) {
            $classes[] = 'opera';
        } elseif ($is_ns4) {
            $classes[] = 'ns4';
        } elseif ($is_safari) {
            $classes[] = 'safari';
        } elseif ($is_chrome) {
            $classes[] = 'chrome';
        } elseif ($is_ie) {
            $classes[] = 'ie';
            if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $url, $browser_version)) {
                $classes[] = 'ie' . $browser_version[1];
            }
        } else {
            $classes[] = 'unknown';
        }

        if ($is_iphone) {
            $classes[] = 'iphone';
        }

        return $classes;
    }
endif;

/** 
 * Get all directories
 */
function getDirContents($path, $exclude) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
    $files = array();
    foreach ($rii as $file)
        if (!$file->isDir()) {
            if (strpos($file->getPathname(), $exclude) === false) {
                $files[] = $file->getPathname();
            }
        }
    return $files;
}

/**
 * Query whether WooCommerce is activated.
 */
function gcod_is_woocommerce_activated() {
    if (class_exists('woocommerce')) {
        return true;
    } else {
        return false;
    }
}

/**
 * Convert HEX to RGB.
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 * HEX code, empty array otherwise.
 */
function gcod_hex2rgb($color) {
    $color = trim($color, '#');

    if (strlen($color) === 3) {
        $r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
        $g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
        $b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
    } elseif (strlen($color) === 6) {
        $r = hexdec(substr($color, 0, 2));
        $g = hexdec(substr($color, 2, 2));
        $b = hexdec(substr($color, 4, 2));
    } else {
        return array();
    }

    return array(
        'red'   => $r,
        'green' => $g,
        'blue'  => $b,
    );
}

// Get Template Icon from setting value
function get_social_icon_image($element) {

    $result = '';

    if (strpos($element, 'facebook') !== false) {
        $result = '<img width="28" height="auto" src="';
        $result .= get_template_directory_uri();
        $result .= '/assets/images/facebook-icon-big.svg';
        $result .= '"/>';
    }

    if (strpos($element, 'twitter') !== false) {
        $result = '<img width="28" height="auto" src="';
        $result .= get_template_directory_uri();
        $result .= '/assets/images/twitter-icon-big.svg';
        $result .= '"/>';
    }

    if (strpos($element, 'youtube') !== false) {
        $result = '<img width="28" height="auto" src="';
        $result .= get_template_directory_uri();
        $result .= '/assets/images/youtube-icon-big.svg';
        $result .= '"/>';
    }

    if (strpos($element, 'pinterest') !== false) {
        $result = '<img width="28" height="auto" src="';
        $result .= get_template_directory_uri();
        $result .= '/assets/images/pinterest-icon-big.svg';
        $result .= '"/>';
    }

    if (strpos($element, 'instagram') !== false) {
        $result = '<img width="28" height="auto" src="';
        $result .= get_template_directory_uri();
        $result .= '/assets/images/instagram-icon-big.svg';
        $result .= '"/>';
    }

    if (strpos($element, 'linkedin') !== false) {
        $result = '<img width="28" height="auto" src="';
        $result .= get_template_directory_uri();
        $result .= '/assets/images/linkedin-icon-big.svg';
        $result .= '"/>';
    }

    return $result;
}


// Change class each case in container
function gcod_add_container_classes($classes) {
    $classes = get_theme_mod('gcod_layout_header', 'header-1');
    return $classes;
}

// Change class with eath header layout
function gcod_add_header_classes($classes) {
    $classes = get_theme_mod('gcod_layout_header', gcod_get_theme_mod('gcod_layout_header'));
    $classes .= ' ' . get_theme_mod('gcod_header_mainmenu_style', 'mainmenu-1');

    // get featured header darkmode
    $classes .= ' ' . gcod_get_section_darkmode('header');

    return $classes;
}

// Change class with eath footer layout
function gcod_add_footer_classes($classes) {
    $classes = get_theme_mod('gcod_layout_footer', gcod_get_theme_mod('gcod_layout_footer'));

    // get featured footer darkmode
    $classes .=  ' ' . gcod_get_section_darkmode('footer');

    return $classes;
}

// Change class with eath featured categories style
function gcod_add_featured_categories_classes($classes) {
    $classes .= ' ' . gcod_get_theme_mod('gcod_featured_categories_layout');

    // get featured categories darkmode    
    $classes .=  ' ' . gcod_get_section_darkmode('featured_categories');

    return $classes;
}

// Change class with eath featured posts style
function gcod_add_featured_posts_classes($classes) {
    $classes .= ' ' . gcod_get_theme_mod('gcod_featured_posts_layout');

    // get featured posts darkmode
    $classes .= ' ' . gcod_get_section_darkmode('featured_posts');

    return $classes;
}

// Change class with eath lastest posts style
function gcod_add_home_lastest_posts_classes($classes) {
    $classes = gcod_get_theme_mod('gcod_section_home_lastest_posts_style');
    $classes .= ' ' . gcod_get_theme_mod('gcod_section_home_lastest_posts_style');

    return $classes;
}

// Change class with eath related posts style
function gcod_add_single_related_posts_classes($classes) {
    $classes = gcod_get_theme_mod('gcod_section_single_related_posts_style');
    $classes .= ' ' . gcod_get_theme_mod('gcod_section_single_related_posts_style');

    return $classes;
}

// Change class with eath posts list style
function gcod_add_home_post_list_classes($classes) {
    $classes = gcod_get_theme_mod('gcod_section_home_post_list_style');
    $classes .= ' ' . gcod_get_theme_mod('gcod_section_home_post_list_style');

    return $classes;
}

// Change class with eath newsletter style
function gcod_add_home_newsletter_classes($classes) {
    $classes = gcod_get_theme_mod('gcod_section_home_newsletter_style');
    $classes .= ' ' . gcod_get_theme_mod('gcod_section_home_newsletter_style');

    return $classes;
}

// Change class with eath instagram style
function gcod_add_home_instagram_classes($classes) {
    $classes = gcod_get_theme_mod('gcod_section_home_instagram_style');
    $classes .= ' ' . gcod_get_theme_mod('gcod_section_home_instagram_style');

    return $classes;
}

// Get current concept design
function gcod_current_design_concept() {

    // default get from customizer 
    $design_concept = gcod_get_theme_mod('gcod_design_concept');

    // if not global then invidual get 
    if (is_page() || is_single()) {
        $invidual_concept_style = gcod_get_page_option('gcod_pop_design_concept');
        if ($invidual_concept_style != 'global') {
            $design_concept = $invidual_concept_style;
            return $design_concept;
        }
    }

    if (is_category()) {
        $invidual_concept_style = gcod_get_cat_option('gcod_cop_design_concept');
        if ($invidual_concept_style != 'global') {
            $design_concept = $invidual_concept_style;
            return $design_concept;
        }
    }

    return $design_concept;
}

// Get settings concept and return some values for context options - page and category
function get_settings_design_concept() {

    // get current concept
    $current_design_concept = gcod_current_design_concept();
    $ouput_page_options = array();

    // 


}

/** Archive Post Layout */
/** */
function gcod_archive_post_layout() {

    // default is get general page header setting
    $archive_post_layout = false;

    // invidual show page header
    $invidual_archive_post_layout = gcod_get_cat_option('gcod_cop_archive_post_layout');

    // if not using global
    if ($invidual_archive_post_layout != 'global') {
        $archive_post_layout = $invidual_archive_post_layout;
        return $archive_post_layout;
    }

    // page
    if (is_page() || is_home() || is_front_page()) {

        $general = gcod_get_theme_mod('gcod_general_archive_style');

        if (gcod_get_theme_mod('gcod_general_archive_style') == 'general') {
            $archive_post_layout = $general;
        } else {
            $archive_post_layout = gcod_get_theme_mod('gcod_layout_archive_post');
        }
    }

    // archive
    if (is_archive()) {

        $general = gcod_get_theme_mod('gcod_general_archive_style');

        if (gcod_get_theme_mod('gcod_general_archive_style') == 'general') {
            $archive_post_layout = $general;
        } else {
            $archive_post_layout = gcod_get_theme_mod('gcod_layout_archive_post');
        }
    }

    // category
    if (is_category()) {

        $general = gcod_get_theme_mod('gcod_general_archive_style');
        $archive = gcod_get_theme_mod('gcod_layout_archive_post');

        if (gcod_get_theme_mod('gcod_layout_category_post') == 'general') {
            $archive_post_layout = $general;
        } elseif (gcod_get_theme_mod('gcod_layout_category_post') == 'archive') {
            $archive_post_layout = $archive;
            if ($archive == 'general') {
                $archive_post_layout = $general;
            }
        } else {
            $archive_post_layout = gcod_get_theme_mod('gcod_layout_category_post');
        }
    }


    // tag
    if (is_tag()) {

        $general = gcod_get_theme_mod('gcod_general_archive_style');
        $archive = gcod_get_theme_mod('gcod_layout_archive_post');

        if (gcod_get_theme_mod('gcod_layout_tag_post') == 'general') {
            $archive_post_layout = $general;
        } elseif (gcod_get_theme_mod('gcod_layout_tag_post') == 'archive') {
            $archive_post_layout = $archive;
            if ($archive == 'general') {
                $archive_post_layout = $general;
            }
        } else {
            $archive_post_layout = gcod_get_theme_mod('gcod_layout_tag_post');
        }
    }

    // author
    if (is_author()) {

        $general = gcod_get_theme_mod('gcod_general_archive_style');
        $archive = gcod_get_theme_mod('gcod_layout_archive_post');

        if (gcod_get_theme_mod('gcod_layout_author_post') == 'general') {
            $archive_post_layout = $general;
        } elseif (gcod_get_theme_mod('gcod_layout_author_post') == 'archive') {
            $archive_post_layout = $archive;
            if ($archive == 'general') {
                $archive_post_layout = $general;
            }
        } else {
            $archive_post_layout = gcod_get_theme_mod('gcod_layout_author_post');
        }
    }

    // search
    if (is_search()) {

        $general = gcod_get_theme_mod('gcod_general_archive_style');
        $archive = gcod_get_theme_mod('gcod_layout_archive_post');

        if (gcod_get_theme_mod('gcod_layout_search') == 'general') {
            $archive_post_layout = $general;
        } elseif (gcod_get_theme_mod('gcod_layout_search') == 'archive') {
            $archive_post_layout = $archive;
            if ($archive == 'general') {
                $archive_post_layout = $general;
            }
        } else {
            $archive_post_layout = gcod_get_theme_mod('gcod_layout_search');
        }
    }


    return $archive_post_layout;
}


// Instagram
function gcod_instagram_background_url() {
    $instagram_background_url = '';

    $instagram_background_url = gcod_get_theme_mod('gcod_general_instagram_bg_image_url');

    return $instagram_background_url;
}

// Lastest Posts
function gcod_lastest_posts_background_url() {
    $lastest_posts_background_url = '';

    $lastest_posts_background_url = gcod_get_theme_mod('gcod_general_lastest_posts_bg_image_url');

    return $lastest_posts_background_url;
}

// Newsletter
function gcod_newsletter_background_url() {
    $newsletter_background_url = '';

    $newsletter_background_url = gcod_get_theme_mod('gcod_general_newsletter_bg_image_url');

    return $newsletter_background_url;
}

/** 
 * Get current final page header background
 * @principle: @general setting => @template customizer => @invidual page option
 * value = @invidual page option
 * if value not by invidual   => value = @common template customizer 
 * if value not by common     => value = @general setting 
 * */

function gcod_page_header_background_url() {

    // default is get general page header setting
    $page_header_background_url = '';

    // invidual page header style and url
    $invidual_page_header_url = gcod_get_page_option('gcod_pop_page_header_background_imgae');
    $invidual_page_header_style = gcod_get_page_option('gcod_pop_page_header_style');

    // not show on home page
    if (is_home() || is_front_page()) {
        return $page_header_background_url;
    }

    // if current page not enabled page header
    if (gcod_show_page_header()) {

        // check not global using background and invidual url
        if (($invidual_page_header_url != '') && ($invidual_page_header_url != 'global')) {
            $page_header_background_url = $invidual_page_header_url;
            return $page_header_background_url;
        }

        // var_dump($page_header_background_url);

        // page
        if (is_page()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_page_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } elseif (gcod_get_theme_mod('gcod_page_pageheader_background') == 'common') {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_page_pageheader_bg_image_url');
            } else {
                // invidual
            }
        }

        // post
        if (is_single()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_post_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } elseif (gcod_get_theme_mod('gcod_post_pageheader_background') == 'common') {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_post_pageheader_bg_image_url');
            } else {
                // invidual
            }
        }

        // archive
        if (is_archive()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_archive_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } elseif (gcod_get_theme_mod('gcod_archive_pageheader_background') == 'common') {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_archive_pageheader_bg_image_url');
            } else {
                // invidual
            }
        }

        // category
        if (is_category()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_category_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } elseif (gcod_get_theme_mod('gcod_category_pageheader_background') == 'common') {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_category_pageheader_bg_image_url');
            } else {
                // invidual
            }
        }


        // tag
        if (is_tag()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_tag_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } elseif (gcod_get_theme_mod('gcod_tag_pageheader_background') == 'common') {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_tag_pageheader_bg_image_url');
            } else {
                // invidual
            }
        }

        // author
        if (is_author()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_author_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } elseif (gcod_get_theme_mod('gcod_author_pageheader_background') == 'common') {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_author_pageheader_bg_image_url');
            } else {
                // invidual
            }
        }

        // search
        if (is_search()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_page_search_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } else {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_search_pageheader_bg_image_url');
            }
        }

        // 404
        if (is_404()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_bg_image_url');

            if (gcod_get_theme_mod('gcod_page_404_pageheader_background') == 'general') {
                $page_header_background_url = $general;
            } else {
                $page_header_background_url = gcod_get_theme_mod('gcod_common_404_pageheader_bg_image_url');
            }
        }
    }

    return $page_header_background_url;
}

/** 
 * Get current final page header style
 * @principle: @general setting => @template customizer => @invidual page option
 * value = @invidual page option
 * if value not by invidual   => value = @common template customizer 
 * if value not by common     => value = @general setting 
 * */

function gcod_page_header_style() {

    // default is get general page header setting
    $page_header_style = false;

    // invidual show page header
    $invidual_page_header_style = gcod_get_page_option('gcod_pop_page_header_style');

    // not show on home page
    if (is_home() || is_front_page()) {
        return $page_header_style;
    }

    // if current page not enabled page header
    if (gcod_show_page_header()) {

        // if not using global
        if ($invidual_page_header_style != 'global') {
            $page_header_style = $invidual_page_header_style;
            return $page_header_style;
        }

        // page
        if (is_page()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');

            if (gcod_get_theme_mod('gcod_page_pageheader_style') == 'general') {
                $page_header_style = $general;
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_page_pageheader_style');
            }
        }

        // post
        if (is_single()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');

            if (gcod_get_theme_mod('gcod_post_pageheader_style') == 'general') {
                $page_header_style = $general;
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_post_pageheader_style');
            }
        }

        // archive
        if (is_archive()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');

            if (gcod_get_theme_mod('gcod_archive_pageheader_style') == 'general') {
                $page_header_style = $general;
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_archive_pageheader_style');
            }
        }

        // category
        if (is_category()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');
            $archive = gcod_get_theme_mod('gcod_archive_pageheader_style');

            if (gcod_get_theme_mod('gcod_category_pageheader_style') == 'general') {
                $page_header_style = $general;
            } elseif (gcod_get_theme_mod('gcod_category_pageheader_style') == 'archive') {
                $page_header_style = $archive;
                if ($archive == 'general') {
                    $page_header_style = $general;
                }
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_category_pageheader_style');
            }
        }


        // tag
        if (is_tag()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');
            $archive = gcod_get_theme_mod('gcod_archive_pageheader_style');

            if (gcod_get_theme_mod('gcod_tag_pageheader_style') == 'general') {
                $page_header_style = $general;
            } elseif (gcod_get_theme_mod('gcod_tag_pageheader_style') == 'archive') {
                $page_header_style = $archive;
                if ($archive == 'general') {
                    $page_header_style = $general;
                }
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_tag_pageheader_style');
            }
        }

        // author
        if (is_author()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');
            $archive = gcod_get_theme_mod('gcod_archive_pageheader_style');

            if (gcod_get_theme_mod('gcod_author_pageheader_style') == 'general') {
                $page_header_style = $general;
            } elseif (gcod_get_theme_mod('gcod_author_pageheader_style') == 'archive') {
                $page_header_style = $archive;
                if ($archive == 'general') {
                    $page_header_style = $general;
                }
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_author_pageheader_style');
            }
        }

        // search
        if (is_search()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');
            $archive = gcod_get_theme_mod('gcod_archive_pageheader_style');

            if (gcod_get_theme_mod('gcod_page_search_pageheader_style') == 'general') {
                $page_header_style = $general;
            } elseif (gcod_get_theme_mod('gcod_page_search_pageheader_style') == 'archive') {
                $page_header_style = $archive;
                if ($archive == 'general') {
                    $page_header_style = $general;
                }
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_page_search_pageheader_style');
            }
        }

        // 404
        if (is_404()) {

            $general = gcod_get_theme_mod('gcod_general_pageheader_style');

            if (gcod_get_theme_mod('gcod_page_404_pageheader_style') == 'general') {
                $page_header_style = $general;
            } else {
                $page_header_style = gcod_get_theme_mod('gcod_page_404_pageheader_style');
            }
        }
    }

    return $page_header_style;
}


/** 
 * Get current final page header show
 * @principle: @general setting => @template customizer => @invidual page option
 * value = @invidual page option
 * if value not by invidual   => value = @common template customizer 
 * if value not by common     => value = @general setting 
 * */

function gcod_show_page_header() {

    // default is get general page header setting
    $show_page_header = false;

    // invidual show page header
    $show_invidual_page_header = gcod_get_page_option('gcod_pop_page_header_style');

    // not show on this page
    if ($show_invidual_page_header == 'hide') {
        $show_page_header = false;
        return $show_page_header;

        // display by customizer setting
    } elseif ($show_invidual_page_header == 'global') {
        $show_page_header = false;
    };

    // not show on home page
    if (is_home() || is_front_page()) {
        return $show_page_header;
    }

    // page
    if (is_page()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_page');

        if (gcod_get_theme_mod('gcod_display_pageheader_all_single_page') == 'general') {
            $show_page_header = $general;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_single_page') == 'show' ? true : false;
        }
    }

    // post
    if (is_single()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_post');

        if (gcod_get_theme_mod('gcod_display_pageheader_all_single_post') == 'general') {
            $show_page_header = $general;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_single_post') == 'show' ? true : false;
        }
    }

    // archive
    if (is_archive()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_archive');

        if (gcod_get_theme_mod('gcod_display_pageheader_all_archive_page') == 'general') {
            $show_page_header = $general;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_archive_page') == 'show' ? true : false;
        }
    }

    // category
    if (is_category()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_archive');
        $archive = gcod_get_theme_mod('gcod_display_pageheader_all_archive_page') == 'show' ? true : false;

        if (gcod_get_theme_mod('gcod_display_pageheader_all_category_page') == 'general') {
            $show_page_header = $general;
        } elseif (gcod_get_theme_mod('gcod_display_pageheader_all_category_page') == 'archive') {
            $show_page_header = $archive;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_category_page') == 'show' ? true : false;
        }
    }


    // tag
    if (is_tag()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_archive');
        $archive = gcod_get_theme_mod('gcod_display_pageheader_all_archive_page') == 'show' ? true : false;

        if (gcod_get_theme_mod('gcod_display_pageheader_all_tag_page') == 'general') {
            $show_page_header = $general;
        } elseif (gcod_get_theme_mod('gcod_display_pageheader_all_tag_page') == 'archive') {
            $show_page_header = $archive;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_tag_page') == 'show' ? true : false;
        }
    }

    // author
    if (is_author()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_archive');
        $archive = gcod_get_theme_mod('gcod_display_pageheader_all_archive_page') == 'show' ? true : false;

        if (gcod_get_theme_mod('gcod_display_pageheader_all_author_page') == 'general') {
            $show_page_header = $general;
        } elseif (gcod_get_theme_mod('gcod_display_pageheader_all_author_page') == 'archive') {
            $show_page_header = $archive;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_author_page') == 'show' ? true : false;
        }
    }

    // search
    if (is_search()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_archive');
        $archive = gcod_get_theme_mod('gcod_display_pageheader_all_archive_page') == 'show' ? true : false;

        if (gcod_get_theme_mod('gcod_display_pageheader_all_search_page') == 'general') {
            $show_page_header = $general;
        } elseif (gcod_get_theme_mod('gcod_display_pageheader_all_search_page') == 'archive') {
            $show_page_header = $archive;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_search_page') == 'show' ? true : false;
        }
    }

    // 404
    if (is_404()) {

        $general = gcod_get_theme_mod('gcod_general_show_pageheader_all_page');

        if (gcod_get_theme_mod('gcod_display_pageheader_all_404_page') == 'general') {
            $show_page_header = $general;
        } else {
            $show_page_header = gcod_get_theme_mod('gcod_display_pageheader_all_404_page') == 'show' ? true : false;
        }
    }

    return $show_page_header;
}

// Breadcrumb Style and Display
function gcod_breadcrumb_style() {

    // default is get general breadcrumb setting
    $breadcrumb_style = false;

    // invidual show breadcrumb

    if (is_page() || is_single()) {
        $invidual_breadcrumb_style = gcod_get_page_option('gcod_pop_breadcrumb_style');
    }

    if (is_archive() || is_category()) {
        $invidual_breadcrumb_style = gcod_get_page_option('gcod_cop_breadcrumb_style');
    }

    // not show on home page
    if (is_home() || is_front_page()) {
        return $breadcrumb_style;
    }

    // if current page enabled breadcrumb
    if ($invidual_breadcrumb_style != 'hide') {

        // if not using global
        if ($invidual_breadcrumb_style != 'global') {
            $breadcrumb_style = $invidual_breadcrumb_style;
            return $breadcrumb_style;
        }

        // breadcrumb general
        $breadcrumb_style = gcod_get_theme_mod('gcod_breadcrumb_style');
    }

    return $breadcrumb_style;
}

// Feature Section Style
function gcod_featured_section_style($component) {

    // get from customizer  - from global  
    $featured_section_style = gcod_get_theme_mod('gcod_featured_' . $component . '_style');

    if (is_page() || is_single()) {

        // default get invidual
        $invidual_featured_section = gcod_get_page_option('gcod_pop_featured_' . $component . '_style');

        // get from invidual 
        if ($invidual_featured_section != 'global') {
            $featured_section_style = $invidual_featured_section;
        }

        // not show
        if ($invidual_featured_section == 'hide') {
            $featured_section_style = false;
        }
    }

    if (is_category()) {

        // default get invidual
        $invidual_featured_section = gcod_get_cat_option('gcod_cop_featured_' . $component . '_style');

        // get from invidual 
        if ($invidual_featured_section != 'global') {
            $featured_section_style = $invidual_featured_section;
        }

        // not show
        if ($invidual_featured_section == 'hide') {
            $featured_section_style = false;
        }
    }

    return $featured_section_style;
}

/** Get current final page layout
 * @principle: @general setting => @template customizer => @invidual page option
 * value = @invidual page option
 * if value not by invidual   => value = @common template customizer 
 * if value not by common     => value = @general setting
 */
function gcod_current_page_layout() {

    $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');

    // invidual sidebar layout 
    $invidual_sidebar_layout = gcod_get_page_option('gcod_pop_sidebar_layout');

    // if is category get invidual by category
    if (is_category() || is_archive()) {
        $invidual_sidebar_layout = gcod_get_cat_option('gcod_cop_sidebar_layout');
    }

    if ($invidual_sidebar_layout != 'global') {
        $sidebar_layout = $invidual_sidebar_layout;
        return $sidebar_layout;
    }

    // home
    if (is_home() || is_front_page()) {

        $general = gcod_get_theme_mod('gcod_layout_general_page');

        if (gcod_get_theme_mod('gcod_sidebar_layout_home_builder') == 'general') {
            $sidebar_layout = $general;
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_home_builder');
        }
    }

    // page
    if (is_page()) {
        if (gcod_get_theme_mod('gcod_sidebar_layout_page') == 'general') {
            $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_page');
        }
    }

    // 404
    if (is_404()) {
        $sidebar_layout = gcod_get_theme_mod('gcod_layout_page404');
    }

    // search
    if (is_search()) {
        if (gcod_get_theme_mod('gcod_sidebar_layout_search') == 'general') {
            $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_search');
        }
    }

    // archive
    if (is_archive()) {
        if (gcod_get_theme_mod('gcod_sidebar_layout_archive') == 'general') {
            $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_archive');
        }
    }

    // author
    if (is_author()) {
        if (gcod_get_theme_mod('gcod_sidebar_author_layout') == 'archive') {
            $archive = gcod_get_theme_mod('gcod_sidebar_layout_archive');
            if ($archive == 'general') {
                $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
            } else {
                $sidebar_layout = $archive;
            }
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_author_layout');
        }
    }

    // category
    if (is_category()) {
        if (gcod_get_theme_mod('gcod_sidebar_layout_category') == 'archive') {
            $archive = gcod_get_theme_mod('gcod_sidebar_layout_archive');
            if ($archive == 'general') {
                $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
            } else {
                $sidebar_layout = $archive;
            }
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_category');
        }
    }

    // tag
    if (is_tag()) {
        if (gcod_get_theme_mod('gcod_sidebar_layout_tag') == 'archive') {
            $archive = gcod_get_theme_mod('gcod_sidebar_layout_archive');
            if ($archive == 'general') {
                $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
            } else {
                $sidebar_layout = $archive;
            }
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_tag');
        }
    }

    // post
    if (is_single() && !is_home()) {
        if (gcod_get_theme_mod('gcod_sidebar_layout_post') == 'general') {
            $sidebar_layout = gcod_get_theme_mod('gcod_layout_general_page');
        } else {
            $sidebar_layout = gcod_get_theme_mod('gcod_sidebar_layout_post');
        }
    }

    return $sidebar_layout;
}

// Change class with eath home content layout
function gcod_add_home_content_classes($classes) {
    $classes = get_theme_mod('gcod_layout_home_content', 'header-1');
    return $classes;
}

// Change class with eath featured slider style
function gcod_add_featured_slider_classes($classes) {

    $classes .= ' ' . gcod_get_theme_mod('gcod_featured_slider_layout');

    // get featured slider darkmode
    $classes .= ' ' . gcod_get_section_darkmode('featured_slider');

    return $classes;
}

/** 
 * Get logic component featured show on page
 * @component_setting: Setting name that logic for display component on page
 * @principle: @general setting => @template customizer => @invidual page option
 * * value = @invidual page option
 * if value not by invidual   => value = @common template customizer 
 * if value not by common     => value = @general setting*
 */
if (!function_exists('gcod_display_on_current_page')) {

    function gcod_display_on_current_page($component) {

        $display = false;

        // check featured component
        $component_name = str_replace('featured_', '', $component);

        // is_home or front_page change by 
        if (is_home() || is_front_page()) {
            $display = get_theme_mod('gcod_general_show_featured_' . $component_name . '_all_page', true);
        } else {

            // Check invidual option
            if (is_single() || is_page()) {
                $setting_invidual = gcod_get_page_option('gcod_pop_featured_' . $component_name . '_style');
            } else {
                $setting_invidual = gcod_get_cat_option('gcod_cop_featured_' . $component_name . '_style');
            }

            // page
            if (is_page()) {
                $setting_page = 'gcod_display_featured_' . $component_name . '_all_single_page';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                $display = true;
                if ($setting_invidual == 'hide') {
                    $display = $setting_invidual == 'hide' ? false : true;
                } elseif ($setting_invidual == 'global') {
                    if (gcod_get_theme_mod($setting_page) == 'general') {
                        $display = gcod_get_theme_mod($setting_general);
                    } else {
                        $display = gcod_get_theme_mod($setting_page) == 'show' ? true : false;
                    }
                }
            }

            // single            
            if (is_single() && !is_home()) {
                $setting_single = 'gcod_display_featured_' . $component_name . '_on_single_post';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                $display = true;
                if ($setting_invidual == 'hide') {
                    $display = $setting_invidual == 'hide' ? false : true;
                } elseif ($setting_invidual == 'global') {
                    if (gcod_get_theme_mod($setting_single) == 'general') {
                        $display = gcod_get_theme_mod($setting_general);
                    } else {
                        $display = gcod_get_theme_mod($setting_single) == 'show' ? true : false;
                    }
                }
            }

            // archive
            if (is_archive()) {
                $setting_archive = 'gcod_display_featured_' . $component_name . '_all_archive_page';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                $display = true;
                if ($setting_invidual == 'hide') {
                    $display = $setting_invidual == 'hide' ? false : true;
                } elseif ($setting_invidual == 'global') {
                    if (gcod_get_theme_mod($setting_archive) == 'general') {
                        $display = gcod_get_theme_mod($setting_general);
                    } else {
                        $display = gcod_get_theme_mod($setting_archive) == 'show' ? true : false;
                    }
                }
            }

            // category
            if (is_category()) {
                $setting_category = 'gcod_display_featured_' . $component_name . '_all_category_page';
                $setting_archive = 'gcod_display_featured_' . $component_name . '_all_archive_page';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                $display = true;
                if ($setting_invidual == 'hide') {
                    $display = $setting_invidual == 'hide' ? false : true;
                } elseif ($setting_invidual == 'global') {
                    if (gcod_get_theme_mod($setting_category) == 'archive') {
                        $archive = gcod_get_theme_mod($setting_archive);
                        if ($archive == 'general') {
                            $display = gcod_get_theme_mod($setting_general);
                        } else {
                            $display = $archive == 'show' ? true : false;
                        }
                    } else {
                        $display = gcod_get_theme_mod($setting_category) == 'show' ? true : false;
                    }
                }
            }

            // tag
            if (is_tag()) {
                $setting_tag = 'gcod_display_featured_' . $component_name . '_all_category_page';
                $setting_archive = 'gcod_display_featured_' . $component_name . '_all_archive_page';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                $display = true;
                if ($setting_invidual == 'hide') {
                    $display = $setting_invidual == 'hide' ? false : true;
                } elseif ($setting_invidual == 'global') {
                    if (gcod_get_theme_mod($setting_tag) == 'archive') {
                        $archive = gcod_get_theme_mod($setting_archive);
                        if ($archive == 'general') {
                            $display = gcod_get_theme_mod($setting_general);
                        } else {
                            $display = $archive == 'show' ? true : false;
                        }
                    } else {
                        $display = gcod_get_theme_mod($setting_tag) == 'show' ? true : false;
                    }
                }
            }

            // author
            if (is_author()) {
                $setting_author = 'gcod_display_featured_' . $component_name . '_all_authour_page';
                $setting_archive = 'gcod_display_featured_' . $component_name . '_all_archive_page';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                if (gcod_get_theme_mod($setting_author) == 'archive') {
                    $archive = gcod_get_theme_mod($setting_archive);
                    if ($archive == 'general') {
                        $display = gcod_get_theme_mod($setting_general);
                    } else {
                        $display = $archive == 'show' ? true : false;
                    }
                } else {
                    $display = gcod_get_theme_mod($setting_author) == 'show' ? true : false;
                }
            }

            // search
            if (is_search()) {
                $setting_search = 'gcod_display_featured_' . $component_name . '_all_search_result';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                if (gcod_get_theme_mod($setting_search) == 'general') {
                    $display = gcod_get_theme_mod($setting_general);
                } else {
                    $display = gcod_get_theme_mod($setting_search) == 'show' ? true : false;
                }
            }

            // 404
            if (is_404()) {
                $setting_404 = 'gcod_display_featured_' . $component_name . '_all_404_page';
                $setting_general = 'gcod_general_show_featured_' . $component_name . '_all_page';

                if (is_search()) {
                    if (gcod_get_theme_mod($setting_404) == 'general') {
                        $display = gcod_get_theme_mod($setting_general);
                    } else {
                        $display = gcod_get_theme_mod($setting_404) == 'show' ? true : false;
                    }
                }
            }
        }

        return $display;
    }
}

/** Get value of multicheck settings
 * Checking if one setting in list of multicheck control have checked or not checked
 * @using: result = gcod_get_theme_mod_multicheck('check_name', 'setting_multicheck_name')
 */

if (!function_exists('gcod_get_theme_mod_multicheck')) {
    function gcod_get_theme_mod_multicheck($check_name, $setting_name) {

        $value_array = get_theme_mod($setting_name, gcod_defaults($setting_name));

        return in_array($check_name, $value_array);
    }
}

/**
 * Get value show elements or not
*/

if (!function_exists('gcod_display_post_element_on_section')) {
    function gcod_display_post_element_on_section($element_name = '') {
        
        $result = true;
        $archive_element_show = gcod_get_theme_mod_multicheck($element_name, 'gcod_general_archive_element_setting');
        $archive_element_apply_to_section = gcod_get_theme_mod('gcod_general_archive_element_apply_home_sections');

        if ($archive_element_apply_to_section) {            
            $result = $archive_element_show;
        } 

        return $result;
    }
}

/**
 * Get value show elements or not for related
*/

if (!function_exists('gcod_display_post_element_on_related')) {
    function gcod_display_post_element_on_related($element_name = '') {
        
        $result = true;
        $single_element_show = gcod_get_theme_mod_multicheck($element_name, 'gcod_general_single_element_setting');
        $single_element_apply_to_related = gcod_get_theme_mod('gcod_general_single_element_apply_related_posts');

        if ($single_element_apply_to_related) {            
            $result = $single_element_show;
        } 

        return $result;
    }
}

/* Get setting with default value for front-end because when not yet open customizer preview default setting alway is NULL
 * --------------------------
 * @using: open /inc/customizer/actions/customizer-default.php => define default setting value for 'setting_name' => default_value;
 * $value = gcod_get_theme_mod('setting_name','setting_name');
*/

if (!function_exists('gcod_get_theme_mod')) {
    function gcod_get_theme_mod($setting_name) {

        return get_theme_mod($setting_name, gcod_defaults($setting_name));
    }
}

/**
 * Set setting with default value for customizer if not have or sync default value front-end with customizer setting
 * @using: when render value setting with gcod_get_theme_mod('setting_name') at front-end then open customizer preview that default is NULL or false
 * call at template render: gcod_set_theme_mod('setting_name');
 */

if (!function_exists('gcod_set_theme_mod')) {
    function gcod_set_theme_mod($setting_name) {
        if (!get_theme_mod($setting_name)) {
            set_theme_mod($setting_name, gcod_defaults($setting_name));
        };
    }
}

/** 
 * Get Page Options
 */

if (!function_exists('gcod_get_page_option')) {
    function gcod_get_page_option($setting_name) {

        $page_option = get_post_meta(get_the_ID(), $setting_name, true);

        if ($page_option == '') {
            $page_option = 'global';
        }

        return $page_option;
    }
}

/** 
 * Get Term Options
 */

if (!function_exists('gcod_get_cat_option')) {
    function gcod_get_cat_option($setting_name) {

        $cat_option = get_term_meta(get_queried_object()->term_id, $setting_name, true);

        if ($cat_option == '') {
            $cat_option = 'global';
        }

        return $cat_option;
    }
}

/**
 * Setting from where? General? Global? Archive? Invidual?
 */
if (!function_exists('gcod_get_setting_from')) {
    function gcod_get_setting_from($global_name, $general_name, $archive_name, $invidual_name) {
        // code here
    }
}

/** 
 * Show Quick Guide Setting
 */

if (!function_exists('gcod_quick_guide_setting')) {
    function gcod_quick_guide_setting($guide = '') {

        echo '<div class="quick_guide_setting">';
        echo apply_filters('gcod_quick_guide_setting', $guide);
        echo '</div>';
    }
}

// Get darkmode for section
function gcod_get_section_darkmode($section_name) {

    $darkmode = '';
    $darkmode_setting = 'gcod_' . $section_name . '_darkmode';
    $darkmode_general = gcod_get_theme_mod('gcod_dark_mode_color');
    $darkmode_current = gcod_get_theme_mod($darkmode_setting);

    if ($darkmode_current == 'general') {
        $darkmode = $darkmode_general ? 'darkmode' : '';
    } elseif ($darkmode_current == 'darkmode') {
        $darkmode = $darkmode_current;
    }

    return $darkmode;
}

// Get logo url
function gcod_get_logo_url() {

    $default_logo = gcod_get_theme_mod('custom_logo');
    $darkmode_color = gcod_get_theme_mod('gcod_dark_mode_color');

    if (is_numeric($default_logo)) {
        $logo_link  = wp_get_attachment_url(gcod_get_theme_mod('custom_logo'));
    } else {
        $logo_link  = gcod_get_theme_mod('custom_logo');
    }

    if (!gcod_get_theme_mod('gcod_custom_logo_dark')) {
        $darkmode_logo = $logo_link;
    } else {
        $darkmode_logo = gcod_get_theme_mod('gcod_custom_logo_dark');
    }

    if ($darkmode_color == true) {
        $logo_link = $darkmode_logo;
    }

    if (gcod_get_section_darkmode('header') == 'darkmode') {
        $logo_link = gcod_get_theme_mod('gcod_custom_logo_dark');
    }

    return $logo_link;
}

// Get footer logo url
function gcod_get_footer_logo_url() {
    $default_logo = gcod_get_logo_url();
    $darkmode_color = gcod_get_theme_mod('gcod_dark_mode_color');
    $footer_logo_link = $default_logo;

    if (!gcod_get_theme_mod('gcod_footer_logo_url')) {
        $footer_logo_link = $default_logo;
    } else {
        $footer_logo_link = gcod_get_theme_mod('gcod_footer_logo_url');
    }

    if (!gcod_get_theme_mod('gcod_footer_logo_url_dark')) {
        $darkmode_logo = $footer_logo_link;
    } else {
        $darkmode_logo = gcod_get_theme_mod('gcod_footer_logo_url_dark');
    }

    if ($darkmode_color == true) {
        $footer_logo_link = $darkmode_logo;
    }

    if (gcod_get_section_darkmode('footer') == 'darkmode') {
        $footer_logo_link = gcod_get_theme_mod('gcod_footer_logo_url_dark');
    }

    return $footer_logo_link;
}

// Get show media thumbnail on all parts
if (!function_exists('gcod_show_media_thumbnail')) {
    function gcod_show_media_thumbnail() {
        $show_thumbnail = false;

        if (gcod_get_theme_mod('gcod_no_thumbnail_all_sections')) {

            $show_thumbnail = true;

            // show on category
            if (!gcod_get_theme_mod('gcod_show_thumbnail_on_category') && (is_category())) {
                $show_thumbnail = false;
            } elseif (!gcod_get_theme_mod('gcod_show_thumbnail_on_tag') && (is_tag())) { // hide on tag
                $show_thumbnail = false;
            } elseif (!gcod_get_theme_mod('gcod_show_thumbnail_on_author') && (is_author())) { // hide on author
                $show_thumbnail = false;
            } elseif (!gcod_get_theme_mod('gcod_show_thumbnail_on_list_post') && (is_category())) { // hide on category
                $show_thumbnail = false;
            }
        }

        return $show_thumbnail;
    }
}

// Get show media thumbnail on posts parts
if (!function_exists('gcod_show_media_thumbnail_on_posts')) {
    function gcod_show_media_thumbnail_on_posts() {
        $show_thumbnail = false;

        if (gcod_get_theme_mod('gcod_no_thumbnail_all_sections')) {

            $show_thumbnail = true;

            // show on posts list
            if (!gcod_get_theme_mod('gcod_show_thumbnail_on_list_post')) { // hide on post list other
                $show_thumbnail = false;
            }
        }

        return $show_thumbnail;
    }
}

// Function to handle the thumbnail request
function gcod_get_the_post_thumbnail_src($img) {
    return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}

// Function Add Buttons Shared
function gcod_social_buttons($content) {

    global $post;

    if (is_singular() || is_home()) {

        // Get current page URL 
        $sb_url = urlencode(get_permalink());

        // Get current page title
        $sb_title = str_replace(' ', '%20', get_the_title());

        // Get Post Thumbnail for pinterest
        $sb_thumb = gcod_get_the_post_thumbnail_src(get_the_post_thumbnail());

        // Construct sharing URL without using any script

        $shared_url = array(
            's-twitter' => 'https://twitter.com/intent/tweet?text=' . $sb_title . '&amp;url=' . $sb_url . '&amp;via=gcodesign',
            's-facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $sb_url,
            's-buffer' => 'https://bufferapp.com/add?url=' . $sb_url . '&amp;text=' . $sb_title,
            's-whatsapp' => 'whatsapp://send?text=' . $sb_title . ' ' . $sb_url,
            's-linkedIn' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . $sb_url . '&amp;title=' . $sb_title,
            's-pinterest' => 'https://pinterest.com/pin/create/button/?url=' . $sb_url . '&amp;description=' . $sb_title,
            's-gplus' => 'https://plus.google.com/share?url=' . $sb_title . '',
        );

        if (!empty($sb_thumb)) {
            $shared_url['s-pinterest'] = 'https://pinterest.com/pin/create/button/?url=' . $sb_url . '&amp;media=' . $sb_thumb[0] . '&amp;description=' . $sb_title;
        } else {
            $shared_url['s-pinterest'] = 'https://pinterest.com/pin/create/button/?url=' . $sb_url . '&amp;description=' . $sb_title;
        }

        // Based on popular demand added Pinterest too
        $shared_url['s-pinterest'] = 'https://pinterest.com/pin/create/button/?url=' . $sb_url . '&amp;media=' . $sb_thumb[0] . '&amp;description=' . $sb_title;
        $shared_url['s-gplus'] = 'https://plus.google.com/share?url=' . $sb_title . '';


        // Get button style
        $gcod_button_shared_style = gcod_get_theme_mod('gcod_button_shared_style');

        // Add sharing button at the end of page/page content
        $content .= '<div class="post-share"><label>' . esc_html__('Share', 'autumn-theme') . '</label>';
        $content .= '<div class="social-box "><div class="social-btn ' . $gcod_button_shared_style . '">';


        // Get display and order icons
        $gcod_social_shared_display = gcod_get_theme_mod('gcod_social_shared_setting');


        foreach ($gcod_social_shared_display as $gcod_social_name) :
            $shared_name = str_replace("s-", "", $gcod_social_name);

            $content .= '<a class="col-2 sbtn ' . $gcod_social_name . '" href="' . $shared_url[$gcod_social_name] . '" target="_blank" rel="nofollow" title="Share on ' . $shared_name . '"></a>';

        endforeach;

        $content .= '</div></div></div>';

        return $content;
    } else {
        // if not a post/page then don't include sharing button
        return $content;
    }
};

// Function Static Default Shared Buttons
function gcod_static_sample_shared_buttons() {

    $shared_buttons = printf('<div class="post-share"><label>%s</label>', esc_attr__('Share', 'autumn-theme'));
    $shared_buttons .= '
        <ul>
            <li>
                <a href="#" title="slider"><i class="fab fa-facebook icon"></i></a>
            </li>
            <li>
                <a href="#" title="slider"><i class="fab fa-twitter icon"></i></a>
            </li>
            <li>
                <a href="#" title="slider"><i class="fab fa-instagram icon"></i></a>
            </li>
        </ul>
    </div>
    ';

    return $shared_buttons;
}

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
// add_shortcode('gcod_social_share', 'gcod_social_buttons');

// Count total of posts
function gcod_display_post_count() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        //include your filter, eg. meta_key, meta_value, date range, etc.
    );
    $loop = new wp_query($args);
    $i = 0;
    while ($loop->have_posts()) {
        $loop->the_post();
        $i++;
    }
    wp_reset_postdata();
    return $i;
}

// Count total posts of category
function gcod_display_current_category_post_count() {

    $count = '';

    if (is_category()) {

        global $wp_query;
        $cat_ID = get_query_var('cat');
        $categories = get_the_category();

        foreach ($categories as $cat) {

            $id = $cat->cat_ID;

            if ($id == $cat_ID) {

                $count = $cat->category_count;
            }
        }
    }

    return $count;
}

// Count total posts of tag
function gcod_display_current_tag_post_count() {

    $count = '';


    if (is_tag()) {

        $tag = get_queried_object();
        $args = array('tag' => $tag->slug);
        $wp_query = new WP_Query( $args );
        $count = $wp_query->found_posts;
    }

    return $count;
}

// Count total posts of author
function gcod_display_current_author_post_count() {

    $count = '';


    if (is_tag()) {

        $author_id = the_author_meta('ID');
        $args = array('author__in' => $author_id);
        $wp_query = new WP_Query( $args );
        $count = $wp_query->found_posts;
    }

    return $count;
}
