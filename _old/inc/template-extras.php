<?php

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Autumn Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


// Add classes into body tag with body_classes
add_filter('body_class', 'gcod_body_classes');
if (!function_exists('gcod_body_classes')) {
   /**
    * Adds custom classes to the array of body classes.
    *
    * @param array $classes Classes for the body element.
    *
    * @return array
    */
   function gcod_body_classes($classes) {
      // Adds a class of group-blog to blogs with more than 1 published author.
      if (is_multi_author()) {
         $classes[] = 'group-blog';
      }
      // Adds a class of hfeed to non-singular pages.
      if (!is_singular()) {
         $classes[] = 'hfeed';
      }

      // Adds a body class based on the presence of a sidebar.
      $sidebar_pos = get_theme_mod('gcod_sidebar_position');
      if (is_page_template('page-templates/fullwidthpage.php')) {
         $classes[] = 'Autumn Theme-no-sidebar';
      } elseif (
         is_page_template(
            array(
               'page-templates/both-sidebarspage.php',
               'page-templates/left-sidebarpage.php',
               'page-templates/right-sidebarpage.php',
            )
         )
      ) {
         $classes[] = 'Autumn Theme-has-sidebar';
      } elseif ('none' !== $sidebar_pos) {
         $classes[] = 'Autumn Theme-has-sidebar';
      } else {
         $classes[] = 'Autumn Theme-no-sidebar';
      }

      return $classes;
   }
}

if (function_exists('gcod_adjust_body_class')) {
   /*
	 * gcod_adjust_body_class() deprecated in v0.9.4. We keep adding the
	 * filter for child themes which use their own gcod_adjust_body_class.
	 */
   add_filter('body_class', 'gcod_adjust_body_class');
}

// Filter custom logo with correct classes.
add_filter('get_custom_logo', 'gcod_change_logo_class');
if (!function_exists('gcod_change_logo_class')) {
   /**
    * Replaces logo CSS class.
    *
    * @param string $html Markup.
    *
    * @return string
    */
   function gcod_change_logo_class($html) {

      $html = str_replace('class="custom-logo"', 'class="img-fluid"', $html);
      $html = str_replace('class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html);
      $html = str_replace('alt=""', 'title="Home" alt="logo"', $html);

      return $html;
   }
}

// add pickback url to wp_head
add_action('wp_head', 'gcod_pingback');
if (!function_exists('gcod_pingback')) {
   /**
    * Add a pingback url auto-discovery header for single posts of any post type.
    */
   function gcod_pingback() {
      if (is_singular() && pings_open()) {
         echo '<link rel="pingback" href="' . esc_url(get_bloginfo('pingback_url')) . '">' . "\n";
      }
   }
}

// add mobile web app meta tags
add_action('wp_head', 'gcod_mobile_web_app_meta');
if (!function_exists('gcod_mobile_web_app_meta')) {
   /**
    * Add mobile-web-app meta.
    */
   function gcod_mobile_web_app_meta() {
      echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
      echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
      echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr(get_bloginfo('name')) . ' - ' . esc_attr(get_bloginfo('description')) . '">' . "\n";
   }
}

// add markup to body tag
add_filter('gcod_body_attributes', 'gcod_default_body_attributes');
if (!function_exists('gcod_default_body_attributes')) {
   /**
    * Adds schema markup to the body element.
    *
    * @param array $atts An associative array of attributes.
    * @return array
    */
   function gcod_default_body_attributes($atts) {
      $atts['itemscope'] = '';
      $atts['itemtype']  = 'http://schema.org/WebSite';
      return $atts;
   }
}

// Escapes all occurances of 'the_archive_description'.
add_filter('get_the_archive_description', 'gcod_escape_the_archive_description');
if (!function_exists('gcod_escape_the_archive_description')) {
   /**
    * Escapes the description for an author or post type archive.
    *
    * @param string $description Archive description.
    * @return string Maybe escaped $description.
    */
   function gcod_escape_the_archive_description($description) {
      if (is_author() || is_post_type_archive()) {
         return wp_kses_post($description);
      }

      /*
		 * All other descriptions are retrieved via term_description() which returns
		 * a sanitized description.
		 */
      return $description;
   }
} // End of if function_exists( 'gcod_escape_the_archive_description' ).

// Escapes all occurances of 'the_title()' and 'get_the_title()'.
add_filter('the_title', 'gcod_kses_title');

// Escapes all occurances of 'the_archive_title' and 'get_the_archive_title()'.
add_filter('get_the_archive_title', 'gcod_kses_title');

if (!function_exists('gcod_kses_title')) {
   /**
    * Sanitizes data for allowed HTML tags for post title.
    *
    * @param string $data Post title to filter.
    * @return string Filtered post title with allowed HTML tags and attributes intact.
    */
   function gcod_kses_title($data) {
      // Tags not supported in HTML5 are not allowed.
      $allowed_tags = array(
         'abbr'             => array(),
         'aria-describedby' => true,
         'aria-details'     => true,
         'aria-label'       => true,
         'aria-labelledby'  => true,
         'aria-hidden'      => true,
         'b'                => array(),
         'bdo'              => array(
            'dir' => true,
         ),
         'blockquote'       => array(
            'cite'     => true,
            'lang'     => true,
            'xml:lang' => true,
         ),
         'cite'             => array(
            'dir'  => true,
            'lang' => true,
         ),
         'dfn'              => array(),
         'em'               => array(),
         'i'                => array(
            'aria-describedby' => true,
            'aria-details'     => true,
            'aria-label'       => true,
            'aria-labelledby'  => true,
            'aria-hidden'      => true,
            'class'            => true,
         ),
         'code'             => array(),
         'del'              => array(
            'datetime' => true,
         ),
         'ins'              => array(
            'datetime' => true,
            'cite'     => true,
         ),
         'kbd'              => array(),
         'mark'             => array(),
         'pre'              => array(
            'width' => true,
         ),
         'q'                => array(
            'cite' => true,
         ),
         's'                => array(),
         'samp'             => array(),
         'span'             => array(
            'dir'      => true,
            'align'    => true,
            'lang'     => true,
            'xml:lang' => true,
         ),
         'small'            => array(),
         'strong'           => array(),
         'sub'              => array(),
         'sup'              => array(),
         'u'                => array(),
         'var'              => array(),
      );
      $allowed_tags = apply_filters('gcod_kses_title', $allowed_tags);

      return wp_kses($data, $allowed_tags);
   }
} // End of if function_exists( 'gcod_kses_title' ).

// hide posted by markup
add_filter('gcod_posted_by', 'gcod_hide_posted_by');
if (!function_exists('gcod_hide_posted_by')) {
   /**
    * Hides the posted by markup in `gcod_posted_on()`.
    *
    * @param string $byline Posted by HTML markup.
    * @return string Maybe filtered posted by HTML markup.
    */
   function gcod_hide_posted_by($byline) {
      if (is_author()) {
         return '';
      }
      return $byline;
   }
}

// remove ... from excerp readmore link
add_filter('excerpt_more', 'gcod_custom_excerpt_more');
if (!function_exists('gcod_custom_excerpt_more')) {
   /**
    * Removes the ... from the excerpt read more link
    *
    * @param string $more The excerpt.
    *
    * @return string
    */
   function gcod_custom_excerpt_more($more) {
      if (!is_admin()) {
         $more = '';
      }
      return $more;
   }
}

// Custom readmore link
add_filter('wp_trim_excerpt', 'gcod_all_excerpts_get_more_link');
if (!function_exists('gcod_all_excerpts_get_more_link')) {
   /**
    * Adds a custom read more link to all excerpts, manually or automatically generated
    *
    * @param string $post_excerpt Posts's excerpt.
    *
    * @return string
    */
   function gcod_all_excerpts_get_more_link($post_excerpt) {

      $readmore_link = '';
      if (gcod_get_theme_mod_multicheck('element-post-readmore', 'gcod_general_archive_element_setting')) {

         $readmore_link = '<p><a class="btn btn-secondary gcotheme-read-more-link" href="' . esc_url(get_permalink(get_the_ID())) . '">' . __(
            'Read More...',
            'autumn-theme'
         ) . '</a></p>';
      }

      if (!is_admin()) {
         $post_excerpt = $post_excerpt . $readmore_link;
      }



      return $post_excerpt;
   }
}

// Init default style from Customizer
if (get_theme_mod('confix_class_theme_field') == "Autumn Theme") {
   require_once DIR . "/assets/style_php/style.php";
}

// Social Share
if (!function_exists('gcod_social_share')) {

   function gcod_social_share() {
      // Get post thumbnail
      $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
?>
      <div class="share">
         <ul>
            <li>
               <h5 class="vk-text-uppercase title"><?php esc_html_e('Share', 'autumn-theme'); ?></h5>
            </li>
            <li class="social-item">
               <a title="Facebook" href="http://www.facebook.com/sharer.php?u=<?php esc_url(the_permalink()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                  <i class="fa fa-facebook"></i>
               </a>
            </li>
            <li class="social-item">
               <a title="Twitter" href="https://twitter.com/share?url=<?php esc_url(the_permalink()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                  <i class="fa fa-twitter"></i>
               </a>
            </li>
            <li class="social-item">
               <a title="Googleplus" href="https://plus.google.com/share?url=<?php esc_url(the_permalink()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                  <i class="fa fa-google-plus"></i>
               </a>
            </li>
            <li class="social-item">
               <a title="Pinterest" href="//pinterest.com/pin/create/button/?url=<?php esc_url(the_permalink()); ?>&media=<?php echo esc_attr($src[0]); ?>&description=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                  <i class="fa fa-pinterest"></i>
               </a>
            </li>
         </ul>
      </div>
<?php
   }
}

// add search filter before get posts
add_filter('pre_get_posts', 'gcod_searchfilter');
if (!function_exists('gcod_searchfilter')) {

   function gcod_searchfilter($query) {

      if ($query->is_search && !is_admin()) {
         $query->set('post_type', array('post',  'product'));
      }

      return $query;
   }
}

// Query Featured Slider
if (!function_exists('gcod_query_featured_slider')) {
   function gcod_query_featured_slider() {

      // Setting from settings      
      $number_of_item = gcod_get_theme_mod('gcod_featured_slider_number_items');
      $order_of_list = gcod_get_theme_mod('gcod_featured_slider_source_posts_order');
      $orderby = ($order_of_list == 'gcod-lastest') ? 'data' : 'comment_count';

      $slider_data_source = gcod_get_theme_mod('gcod_featured_slider_source');

      if ($slider_data_source == 'gcod-posts') {

         // if source from posts
         $select_from_posts = gcod_get_theme_mod('gcod_featured_slider_source_get_posts');

         if ($select_from_posts == 'gcod-all') {

            // Query all posts
            $args = array(
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item,
            );

            $the_query = new WP_Query($args);
            return $the_query;
         } elseif ($select_from_posts == 'gcod-category') {

            // query by cat
            $select_from_category = gcod_get_theme_mod('gcod_featured_slider_source_post_categories');

            // Query Data from Posts by category
            $args = array(
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item,
               'cat'             => $select_from_category
            );

            $the_query = new WP_Query($args);
            return $the_query;
         } else {

            // query by tag
            $select_from_tag = gcod_get_theme_mod('gcod_featured_slider_source_tags');

            // Query Data from Posts by tags
            $args = array(
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item,
               'tag__in'    => $select_from_tag,
            );

            $the_query = new WP_Query($args);
            return $the_query;
         }
      } else {

         // if source from custom post slider then
         $select_slider_from = gcod_get_theme_mod('gcod_featured_slider_source_all');
         $select_slider_category = gcod_get_theme_mod('gcod_featured_slider_source_categories_selected');

         // Query Data from Slider CTP

      }

      return false;
   }
}

// Query Featured Categories
if (!function_exists('gcod_query_featured_categories')) {
   function gcod_query_featured_categories() {

      // Setting from settings      
      $number_of_item = gcod_get_theme_mod('gcod_featured_categories_number_items');

      $categories_data_source = gcod_get_theme_mod('gcod_featured_categories_source');


      if ($categories_data_source == 'gcod-cats-selected') {

         // if source from categories
         $select_from_categories = gcod_get_theme_mod('gcod_featured_categories_source_get_posts');

         if ($select_from_categories == 'gcod-all') {

            // Query all categories
            $args = array(
               'hide_empty'        => 1,
               'parent'            => 0,
               'orderby'           => 'name',
               'order'             => 'DESC',
               'number'            => $number_of_item
            );

            $categories = get_categories($args);
            return $categories;
         } else {

            // get list categories inside
            $select_from_cat = gcod_get_theme_mod('gcod_featured_categories_source_selected_cats');

            // Query Data from Categories ID
            $args = array(
               'hide_empty'        => 1,
               'parent'            => $select_from_cat,
               'number'            => $number_of_item
            );

            $categories =  get_categories($args);
            return $categories;
         }
      } else {

         // if source from custom post slider then
         $select_slider_from = gcod_get_theme_mod('gcod_featured_slider_source_all');
         $select_slider_category = gcod_get_theme_mod('gcod_featured_slider_source_categories_selected');

         // Query Data from Slider CTP

      }

      return false;
   }
}


// Query Featured Posts
if (!function_exists('gcod_query_featured_posts')) {
   function gcod_query_featured_posts() {

      // Setting from settings      
      $number_of_item = gcod_get_theme_mod('gcod_featured_post_number_items');
      $order_of_list = gcod_get_theme_mod('gcod_featured_post_source_posts_order');
      $orderby = ($order_of_list == 'gcod-lastest') ? 'date' : 'comment_count';
      $sticky = count(get_option('sticky_posts'));

      $posts_data_source = gcod_get_theme_mod('gcod_featured_post_source');

      if ($posts_data_source == 'gcod-posts') {

         // if source from posts
         $select_from_posts = gcod_get_theme_mod('gcod_featured_post_source_get_posts');

         if ($select_from_posts == 'gcod-all') {

            // Query all posts
            $args = array(
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item - $sticky,
            );

            $the_query = new WP_Query($args);
            return $the_query;
         } elseif ($select_from_posts == 'gcod-category') {

            // query by cat
            $select_from_category = gcod_get_theme_mod('gcod_featured_post_source_post_categories');

            // Query Data from Posts by category
            $args = array(
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item - $sticky,
               'cat'             => $select_from_category,
            );

            $the_query = new WP_Query($args);
            return $the_query;
         } else {

            // query by tag
            $select_from_tag = gcod_get_theme_mod('gcod_featured_posts_source_tags');

            // Query Data from Posts by tags
            $args = array(
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item - $sticky,
               'tag__in'    => $select_from_tag,
            );

            $the_query = new WP_Query($args);
            return $the_query;
         }
      } else {

         // if source from custom post posts then
         $select_posts_from = gcod_get_theme_mod('gcod_featured_posts_source_all');
         $select_posts_category = gcod_get_theme_mod('gcod_featured_posts_source_categories_selected');

         // Query Data from Posts CTP

      }

      return false;
   }
}

// Query Lastest Posts
if (!function_exists('gcod_query_lastest_posts')) {
   function gcod_query_lastest_posts() {

      // Setting from settings      
      $number_of_item = gcod_get_theme_mod('gcod_section_home_lastest_posts_number_items');
      $orderby = 'date';
      $sticky = count(get_option('sticky_posts'));


      // Query all posts
      $args = array(
         'order'           => 'DESC',
         'orderby'         => $orderby,
         'posts_per_page'  => $number_of_item - $sticky,
      );

      $the_query = new WP_Query($args);
      return $the_query;
   }
}

// Query Related Posts
if (!function_exists('gcod_query_related_posts')) {
   function gcod_query_related_posts() {

      // Setting from settings  ============          

      // get source by
      $related_by = gcod_get_theme_mod('gcod_section_single_related_posts_source');

      // number post show
      $number_of_item = gcod_get_theme_mod('gcod_section_single_related_posts_number');

      // order post      
      $orderby = gcod_get_theme_mod('gcod_section_single_related_posts_order');

      global $post;

      if ($related_by == 'related-posts-by-tag') {
         $tags = wp_get_post_tags($post->ID);
         if ($tags) {
            $tag_ids = array();
            foreach ($tags as $individual_tag) {
               $tag_ids[] = $individual_tag->term_id;
            }

            // Query all posts
            $args = array(
               'tag__in' => $tag_ids,
               'post__not_in' => array($post->ID),
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item,
               'ignore_sticky_posts' => 1
            );
         }
      } else { // cat
         $categories = get_the_category($post->ID);
         if ($categories) {
            $category_ids = array();
            foreach ($categories as $individual_category) {
               $category_ids[] = $individual_category->term_id;
            }
            $args = array(
               'category__in' => $category_ids,
               'post__not_in' => array($post->ID),
               'order'           => 'DESC',
               'orderby'         => $orderby,
               'posts_per_page'  => $number_of_item,
               'ignore_sticky_posts' => 1
            );
         }
      }

      $the_query = new WP_Query($args);
      return $the_query;
   }
}

// Remove Archive Title
function gcod_category_title($title) {

   if (gcod_get_theme_mod('gcod_remove_archive_title')) {
      if (is_category() || is_author() || is_tag()) {
         $title = single_cat_title('', false);
      }
   }

   return $title;
}
add_filter('get_the_archive_title', 'gcod_category_title');


// Count Worlds
function gcod_word_count($string, $limit, $threedot = '...') {

   $words = explode(' ', $string);

   return implode(' ', array_slice($words, 0, $limit)) . ' ' . $threedot;
}


// Ajax Hander for Load More Posts
function gcod_loadmore_ajax_handler() {

   // prepare our arguments for the query
   $args = json_decode(stripslashes($_POST['query']), true);
   $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
   $args['post_status'] = 'publish';


   // if is category
   if (is_category()) {
      $category = single_cat_title('', false);
      $args = json_decode(stripslashes($_POST['query']), true);
      $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
      $args['category_name'] = $category;
   }

   // if is author
   if (is_author()) {
      $author = get_queried_object();
      $authorID = $author->ID;

      $args = json_decode(stripslashes($_POST['query']), true);
      $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
      $args['author__in'] = $authorID;
   }

   // if is search
   if (is_search()) {
      $search_term = get_query_var('s');

      $args = json_decode(stripslashes($_POST['query']), true);
      $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
      $args['s'] = $search_term;
   }

   // it is always better to use WP_Query but not here
   query_posts($args);

   if (have_posts()) :

      // run the loop
      while (have_posts()) : the_post();

         if (is_home()) {
            get_template_part('template-parts/content', 'ajax-home');
         } elseif (is_category()) {
            get_template_part('template-parts/content', 'ajax-category');
         } elseif (is_author()) {
            get_template_part('template-parts/content', 'ajax-author');
         } elseif (is_search()) {
            get_template_part('template-parts/content', 'ajax-search');
         }

      endwhile;

   endif;
   die; // here we exit the script and even no wp_reset_query() required!
}

// Loadmore Posts Hook Function
function gcod_ajax_load_more_scripts() {

   global $wp_query;

   // In most cases it is already included on the page and this line can be removed
   wp_enqueue_script('jquery');


   // check style ajax
   $page_navigation_type = gcod_get_theme_mod('gcod_navigation_pagenav');

   // register our main script but do not enqueue it yet
   if ($page_navigation_type == 'ajax') {
      wp_register_script('ajax_loadmore', get_stylesheet_directory_uri() . '/assets/js/ajax-loadmore.js', array('jquery'));
   } elseif ($page_navigation_type == 'infinity') {
      wp_register_script('ajax_loadmore', get_stylesheet_directory_uri() . '/assets/js/scroll-loadmore.js', array('jquery'));
   }

   // now the most interesting part
   // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
   // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
   wp_localize_script('ajax_loadmore', 'gcod_loadmore_params', array(
      'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
      'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
      'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
      'max_page' => $wp_query->max_num_pages
   ));

   wp_enqueue_script('ajax_loadmore');
}


// Function for options =============

// get option by key - one record in DB
if (!function_exists('gcod_get_option_key')) {
   function gcod_get_option_key($option_key) {
      $options = get_option($option_key);
      if ($options) {
         return $options;
      }
      return false;
   }
};

// get option value - if option by key is array
if (!function_exists('gcod_get_option_value')) {
   function gcod_get_option_value($option_key, $option_id) {
      $options = get_option($option_key);

      if ($options) {   // if options exist
         if (isset($options[$option_id])) { // if key exist
            return $options[$option_id];
         }
      }

      return false;
   }
};

// update option by key
if (!function_exists('gcod_update_option_key')) {
   function gcod_update_option_key($option_key, $new_value) {
      $options = get_option($option_key);

      if ($options) {      // if options exist	
         update_option($option_key, $new_value);
         return true;
      }
      return false;
   }
};

// update option by value into array item - if option by key is array
if (!function_exists('gcod_update_option_value')) {
   function gcod_update_option_value($option_key, $option_id, $new_value) {
      $options = get_option($option_key);

      if ($options) { // if options exist
         if (isset($options[$option_id])) { // if key exist
            $options[$option_id] = $new_value;
            update_option($option_key, $options);
            return true;
         }
      }
      return false;
   }
};

// add new option by key
if (!function_exists('gcod_add_option_key')) {
   function gcod_add_option_key($option_key, $new_value) {
      $options = get_option($option_key);

      // if not exist option then add new
      if ($options == false) {
         add_option($option_key, $new_value);
         return true;
      }
      return false;
   }
};

// add option by value into array item - if option by key is array
if (!function_exists('gcod_add_option_value')) {
   function gcod_add_option_value($option_key, $new_option_id, $new_value) {
      $options = get_option($option_key);

      if (!$options) { // if options not exist
         $options = array();
         add_option($option_key, $options);
         $options[$new_option_id] = $new_value;
         return true;
      } else { // if options exist
         if (!isset($options[$new_option_id])) {
            $options[$new_option_id] = $new_value;
            return true;
         }
      }
      return false;
   }
};

// Get post ID from post title
function gcod_get_page_id_by_title($title) {
   $page = get_page_by_title($title);
   return $page->ID;
}


// Get post content by ID 
function gcod_get_page_content_by_id($post_id) {
   $post_content = get_post($post_id);
   $content = $post_content->post_content;

   return $content;
}

// Get content in serialize 
function gcod_get_value_in_serialize($serialize_value, $item_id) {
   
   $result = false;
   $value = unserialize($serialize_value);

   if (is_array($value)) {
      $result = $value[$item_id];
   } else {
      $result = $value;
   }
   
   return $result;
}


// Set content on serialize
function gcod_set_value_in_serialize($serialize_value, $item_id, $new_value, $serialize_result = true) {
   
   $result = unserialize($serialize_value);

   if (is_array($result)) {
      $result[$item_id] = $new_value;
   } else {
      $result = $new_value;
   }

   if ($serialize_result) {
      return serialize($result);
   } else {
      return $result;
   }
   
}
