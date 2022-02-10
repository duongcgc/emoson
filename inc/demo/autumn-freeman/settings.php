<?php

// Get the parent theme.
$theme = gcod_get_theme(true);

// * Theme menus.
$menus = '';

if ('autumn-theme' === $theme) {

    $main_menu   = get_term_by('name', 'Main Menu', 'nav_menu');
    $footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');

    // - WP Menu value
    $menus = array(
        'main-menu' => $main_menu->term_id,
        'footer-menu'  => $footer_menu->term_id,
    );

    // - Assign Location
    set_theme_mod('nav_menu_locations', $menus);

    // - WP MegaMenu ============================
    global $wpdb;


    $wpmm_term_id = $main_menu->term_id; // get_term_by name = Main Menu term_id (vd 14)
    $wpmm_meta_key = 'wpmm_nav_options'; // meta key for check
    $wpmm_meta_value = gcod_get_page_id_by_title('modern-dark'); // get post-id by Title
    $selected_theme = $wpmm_meta_value;

    $selected_theme = 7;

    // - option of theme
    $selected_theme_settings = 'a:219:{s:6:"zindex";s:0:"";s:19:"dropdown_arrow_down";s:13:"fa-angle-down";s:19:"dropdown_arrow_left";s:13:"fa-angle-left";s:20:"dropdown_arrow_right";s:14:"fa-angle-right";s:17:"enable_search_bar";s:4:"true";s:24:"search_field_placeholder";s:0:"";s:10:"brand_logo";s:80:"http://localhost/autumn-freeman/wp-content/uploads/2021/12/logo-autumn-white.png";s:16:"brand_logo_width";s:3:"200";s:17:"brand_logo_height";s:2:"73";s:15:"logo_margin_top";s:0:"";s:17:"logo_margin_right";s:4:"15px";s:18:"logo_margin_bottom";s:0:"";s:16:"logo_margin_left";s:0:"";s:10:"menu_align";s:5:"right";s:14:"menubar_height";s:4:"70px";s:10:"menubar_bg";s:0:"";s:12:"menubar_bg_2";s:0:"";s:25:"menubar_bg_gradient_angle";s:3:"-90";s:9:"sticky_bg";s:0:"";s:11:"sticky_bg_2";s:0:"";s:24:"sticky_bg_gradient_angle";s:3:"-90";s:16:"menu_padding_top";s:0:"";s:18:"menu_padding_right";s:2:"20";s:19:"menu_padding_bottom";s:0:"";s:17:"menu_padding_left";s:2:"20";s:27:"menu_border_radius_top_left";s:0:"";s:21:"menu_radius_top_right";s:0:"";s:23:"menu_radius_bottom_left";s:0:"";s:24:"menu_radius_bottom_right";s:0:"";s:13:"shadow_enable";s:5:"false";s:10:"top_shadow";s:0:"";s:12:"right_shadow";s:0:"";s:13:"bottom_shadow";s:0:"";s:11:"left_shadow";s:0:"";s:17:"wpmm_theme_shadow";s:0:"";s:24:"menubar_top_border_width";s:1:"0";s:26:"menubar_right_border_width";s:1:"0";s:27:"menubar_bottom_border_width";s:0:"";s:25:"menubar_left_border_width";s:1:"0";s:16:"menu_border_type";s:4:"none";s:17:"menu_border_color";s:0:"";s:24:"top_level_item_text_font";s:0:"";s:25:"top_level_item_text_color";s:21:"rgba(255,255,255,0.7)";s:31:"top_level_item_text_hover_color";s:7:"#ffffff";s:29:"top_level_item_text_font_size";s:4:"16px";s:31:"top_level_item_text_font_weight";s:3:"600";s:31:"top_level_item_text_line_height";s:2:"24";s:29:"top_level_item_text_transform";s:9:"uppercase";s:34:"top_level_item_text_letter_spacing";s:2:".5";s:23:"top_level_item_bg_color";s:0:"";s:25:"top_level_item_bg_color_2";s:0:"";s:38:"top_level_item_bg_color_gradient_angle";s:3:"-90";s:29:"top_level_item_bg_hover_color";s:0:"";s:31:"top_level_item_bg_hover_color_2";s:0:"";s:44:"top_level_item_bg_hover_color_gradient_angle";s:3:"-90";s:26:"top_level_item_padding_top";s:4:"23px";s:28:"top_level_item_padding_right";s:4:"14px";s:29:"top_level_item_padding_bottom";s:4:"23px";s:27:"top_level_item_padding_left";s:4:"14px";s:25:"top_level_item_margin_top";s:0:"";s:27:"top_level_item_margin_right";s:0:"";s:28:"top_level_item_margin_bottom";s:0:"";s:26:"top_level_item_margin_left";s:0:"";s:27:"top_level_item_border_width";s:0:"";s:33:"top_level_item_border_width_right";s:0:"";s:34:"top_level_item_border_width_bottom";s:0:"";s:32:"top_level_item_border_width_left";s:0:"";s:26:"top_level_item_border_type";s:0:"";s:27:"top_level_item_border_color";s:0:"";s:33:"top_level_item_hover_border_width";s:0:"";s:39:"top_level_item_hover_border_width_right";s:0:"";s:40:"top_level_item_hover_border_width_bottom";s:0:"";s:38:"top_level_item_hover_border_width_left";s:0:"";s:32:"top_level_item_hover_border_type";s:4:"none";s:33:"top_level_item_hover_border_color";s:0:"";s:37:"top_level_item_highlight_current_item";s:5:"false";s:19:"dropdown_menu_width";s:3:"300";s:16:"dropdown_menu_bg";s:7:"#ffffff";s:18:"dropdown_menu_bg_2";s:0:"";s:31:"dropdown_menu_bg_gradient_angle";s:3:"-90";s:25:"dropdown_menu_padding_top";s:4:"15px";s:27:"dropdown_menu_padding_right";s:0:"";s:28:"dropdown_menu_padding_bottom";s:4:"15px";s:26:"dropdown_menu_padding_left";s:0:"";s:36:"dropdown_menu_border_radius_top_left";s:0:"";s:30:"dropdown_menu_radius_top_right";s:0:"";s:32:"dropdown_menu_radius_bottom_left";s:0:"";s:33:"dropwodn_menu_radius_bottom_right";s:0:"";s:26:"dropdown_menu_border_width";s:0:"";s:25:"dropdown_menu_border_type";s:4:"none";s:26:"dropdown_menu_border_color";s:7:"#d3a538";s:31:"dropdown_submenu_item_text_font";s:0:"";s:32:"dropdown_submenu_item_text_color";s:21:"rgba(255,255,255,0.7)";s:38:"dropdown_submenu_item_text_hover_color";s:7:"#ffffff";s:36:"dropdown_submenu_item_text_font_size";s:4:"13px";s:38:"dropdown_submenu_item_text_font_weight";s:3:"400";s:38:"dropdown_submenu_item_text_line_height";s:2:"20";s:36:"dropdown_submenu_item_text_transform";s:10:"capitalize";s:41:"dropdown_submenu_item_text_letter_spacing";s:0:"";s:38:"dropdown_submenu_first_item_text_color";s:7:"#e8e8e8";s:44:"dropdown_submenu_first_item_text_hover_color";s:7:"#ffffff";s:42:"dropdown_submenu_first_item_text_font_size";s:4:"13px";s:44:"dropdown_submenu_first_item_text_font_weight";s:3:"500";s:44:"dropdown_submenu_first_item_text_line_height";s:2:"20";s:42:"dropdown_submenu_first_item_text_transform";s:9:"uppercase";s:47:"dropdown_submenu_first_item_text_letter_spacing";s:2:".5";s:30:"dropdown_submenu_item_bg_color";s:7:"inherit";s:36:"dropdown_submenu_item_bg_hover_color";s:7:"inherit";s:33:"dropdown_submenu_item_padding_top";s:3:"5px";s:35:"dropdown_submenu_item_padding_right";s:4:"15px";s:36:"dropdown_submenu_item_padding_bottom";s:3:"5px";s:34:"dropdown_submenu_item_padding_left";s:4:"15px";s:32:"dropdown_submenu_item_margin_top";s:0:"";s:34:"dropdown_submenu_item_margin_right";s:0:"";s:35:"dropdown_submenu_item_margin_bottom";s:0:"";s:33:"dropdown_submenu_item_margin_left";s:0:"";s:34:"dropdown_submenu_item_border_width";s:0:"";s:33:"dropdown_submenu_item_border_type";s:4:"none";s:34:"dropdown_submenu_item_border_color";s:0:"";s:40:"dropdown_submenu_item_hover_border_width";s:0:"";s:39:"dropdown_submenu_item_hover_border_type";s:4:"none";s:40:"dropdown_submenu_item_hover_border_color";s:0:"";s:29:"widgets_first_item_margin_top";s:0:"";s:31:"widgets_first_item_margin_right";s:0:"";s:32:"widgets_first_item_margin_bottom";s:1:"5";s:30:"widgets_first_item_margin_left";s:0:"";s:41:"submenu_first_item_border_separator_width";s:0:"";s:40:"submenu_first_item_border_separator_type";s:4:"none";s:41:"submenu_first_item_border_separator_color";s:0:"";s:29:"submenu_first_item_icon_color";s:0:"";s:32:"submenu_first_item_icon_fontsize";s:0:"";s:17:"megamenu_bg_color";s:7:"#ffffff";s:15:"mega_menu_width";s:4:"100%";s:20:"megamenu_padding_top";s:0:"";s:22:"megamenu_padding_right";s:0:"";s:23:"megamenu_padding_bottom";s:0:"";s:21:"megamenu_padding_left";s:0:"";s:31:"megamenu_border_radius_top_left";s:0:"";s:25:"megamenu_radius_top_right";s:0:"";s:27:"megamenu_radius_bottom_left";s:0:"";s:28:"megamenu_radius_bottom_right";s:0:"";s:26:"megamenu_menu_border_width";s:0:"";s:25:"megamenu_menu_border_type";s:4:"none";s:26:"megamenu_menu_border_color";s:0:"";s:36:"megamenu_menu_border_separator_width";s:0:"";s:35:"megamenu_menu_border_separator_type";s:5:"solid";s:36:"megamenu_menu_border_separator_color";s:0:"";s:22:"megamenu_boxshadow_top";s:0:"";s:24:"megamenu_boxshadow_right";s:0:"";s:25:"megamenu_boxshadow_bottom";s:0:"";s:23:"megamenu_boxshadow_left";s:0:"";s:24:"megamenu_boxshadow_color";s:0:"";s:26:"widgets_heading_text_color";s:7:"#ffffff";s:32:"widgets_heading_text_hover_color";s:7:"#ffffff";s:30:"widgets_heading_text_font_size";s:4:"13px";s:32:"widgets_heading_text_font_weight";s:3:"600";s:32:"widgets_heading_text_line_height";s:2:"25";s:30:"widgets_heading_text_transform";s:9:"uppercase";s:35:"widgets_heading_text_letter_spacing";s:2:".5";s:40:"widget_first_item_border_separator_width";s:0:"";s:39:"widget_first_item_border_separator_type";s:4:"none";s:40:"widget_first_item_border_separator_color";s:7:"#ffffff";s:26:"widgets_heading_margin_top";s:0:"";s:28:"widgets_heading_margin_right";s:0:"";s:29:"widgets_heading_margin_bottom";s:0:"";s:27:"widgets_heading_margin_left";s:0:"";s:19:"widgets_padding_top";s:0:"";s:21:"widgets_padding_right";s:0:"";s:22:"widgets_padding_bottom";s:0:"";s:20:"widgets_padding_left";s:0:"";s:18:"widgets_margin_top";s:0:"";s:20:"widgets_margin_right";s:0:"";s:21:"widgets_margin_bottom";s:0:"";s:19:"widgets_margin_left";s:0:"";s:20:"widgets_border_width";s:0:"";s:19:"widgets_border_type";s:4:"none";s:20:"widgets_border_color";s:0:"";s:26:"widgets_hover_border_width";s:0:"";s:25:"widgets_hover_border_type";s:4:"none";s:26:"widgets_hover_border_color";s:0:"";s:21:"widgets_content_color";s:7:"#ffffff";s:20:"toggle_bar_alignment";s:5:"right";s:20:"toggle_btn_open_text";s:4:"Menu";s:21:"toggle_bar_close_icon";s:4:"true";s:21:"toggle_btn_text_color";s:7:"#ffffff";s:27:"toggle_btn_text_hover_color";s:7:"#ffffff";s:20:"toggle_bar_font_size";s:4:"14px";s:20:"togglebar_margin_top";s:2:"21";s:22:"togglebar_margin_right";s:0:"";s:23:"togglebar_margin_bottom";s:2:"21";s:21:"togglebar_margin_left";s:0:"";s:13:"toggle_bar_bg";s:13:"rgba(0,0,0,0)";s:19:"toggle_bar_hover_bg";s:7:"#000000";s:26:"mobile_item_text_font_size";s:4:"14px";s:28:"mobile_item_text_font_weight";s:3:"400";s:28:"mobile_item_text_line_height";s:0:"";s:26:"mobile_item_text_transform";s:10:"capitalize";s:31:"mobile_item_text_letter_spacing";s:0:"";s:22:"mobile_menu_item_color";s:7:"#ffffff";s:28:"mobile_menu_item_hover_color";s:0:"";s:28:"mobile_menu_item_padding_top";s:4:"10px";s:30:"mobile_menu_item_padding_right";s:0:"";s:31:"mobile_menu_item_padding_bottom";s:4:"10px";s:29:"mobile_menu_item_padding_left";s:0:"";s:27:"mobile_menu_item_margin_top";s:0:"";s:29:"mobile_menu_item_margin_right";s:0:"";s:30:"mobile_menu_item_margin_bottom";s:0:"";s:28:"mobile_menu_item_margin_left";s:0:"";s:14:"mobile_menu_bg";s:7:"#3d3d4c";s:16:"mobile_menu_bg_2";s:0:"";s:29:"mobile_menu_bg_gradient_angle";s:3:"-90";s:10:"wpmm_class";s:0:"";s:10:"custom_css";s:0:"";s:9:"custom_js";s:0:"";s:19:"social_links_target";s:6:"_blank";s:12:"social_color";s:0:"";s:18:"social_hover_color";s:0:"";s:11:"social_icon";a:2:{s:4:"icon";a:1:{i:0;s:0:"";}s:3:"url";a:1:{i:0;s:0:"";}}s:14:"animation_type";s:10:"fadeindown";}';

    // update to serialize		
    $post = get_post($selected_theme);
    $post->post_content = $selected_theme_settings;
    wp_update_post($post);

    // Update megamenu
    $megamenu = array(
        'theme_id' => $selected_theme
    );

    // - Check Term Meta exist
    if (metadata_exists('post', $wpmm_meta_value, 'wpmm_nav_options')) {
        update_term_meta($wpmm_term_id, $wpmm_meta_key, $megamenu);
    } else {
        add_term_meta($wpmm_term_id, $wpmm_meta_key, $megamenu);
    }

    // - Check wpmm options
    $wpmm_option = 'wpmm_options';
    $megamenu_option = array(
        'css_output_location' => 'filesystem',
        'container_tag' => 'div',
        'enable_font_awesome' => 'enable',
        'responsive_breakpoint' => '767px',
        'enable_icofont' => 'enable',
        'disable_wpmm_on_mobile' => 0,
        'main-menu' =>
        array(
            'menu_location' => 'main-menu',
            'is_enabled' => '1',
        ),
    );

    if (get_option($wpmm_option)) {
        gcod_update_option_key($wpmm_option, $megamenu_option);
    } else {
        gcod_add_option_key($wpmm_option, $megamenu_option);
    }

    // Subcrible ======================

    // - Add form sucrible
    $form_post_id = wp_insert_post(array(
        'post_status' => 'publish',
        'post_name'    => 'subscribe',
        'post_type' => 'post',
        'post_title' => 'Subscribe',
        'post_content' => '<div class="email">
        <input type="email" name="EMAIL" placeholder="Your email" required />
    </div>
    <div class="confirm">
        
        <label>
            <input name="AGREE_TO_TERMS" type="checkbox" value="1" required="">By checking this box, you confirm that you have read and are agreeing
            to our terms of use regarding the storage of the data submitted through
            this form.</label>
    </div>
    <div class="button">
        <input type="submit" value="subscribe" />
    </div>'
    ));

    $form_post_type = 'mc4wp-form';
    $query = "UPDATE {$wpdb->prefix}posts SET post_type='" . $form_post_type . "' WHERE id='" . $form_post_id . "' LIMIT 1";
    $wpdb->query($query);


    $mailchimp_option_name = 'mc4wp';
    $mailchimp_option_value = unserialize('a:6:{s:19:"grecaptcha_site_key";s:0:"";s:21:"grecaptcha_secret_key";s:0:"";s:7:"api_key";s:37:"fea2673ebc8d83821f39983342a33fc0-us20";s:20:"allow_usage_tracking";i:0;s:15:"debug_log_level";s:7:"warning";s:18:"first_activated_on";i:1639555184;}');

    gcod_add_option_key($mailchimp_option_name, $mailchimp_option_value);

    $mc4wp_option_name = '_transient_mc4wp_mailchimp_lists';
    $mc4wp_option_value = unserialize('a:1:{s:10:"bfa42d0fbb";O:8:"stdClass":5:{s:2:"id";s:10:"bfa42d0fbb";s:6:"web_id";i:292768;s:4:"name";s:10:"GCO Design";s:21:"marketing_permissions";b:0;s:5:"stats";O:8:"stdClass":1:{s:12:"member_count";i:1;}}}');

    gcod_add_option_key($mc4wp_option_name, $mc4wp_option_value);

    $mc4wp_setting_option_name = '_mc4wp_settings';
    $mc4wp_setting_option_value = unserialize('a:1:{s:10:"bfa42d0fbb";O:8:"stdClass":5:{s:2:"id";s:10:"bfa42d0fbb";s:6:"web_id";i:292768;s:4:"name";s:10:"GCO Design";s:21:"marketing_permissions";b:0;s:5:"stats";O:8:"stdClass":1:{s:12:"member_count";i:1;}}}');

    gcod_add_option_key($mc4wp_setting_option_name, $mc4wp_setting_option_value);


    // Widgets ===================================

    $widget_post_key = 'widget_gcowidgetpost_widget';
    $widget_post_value = array (
        3 => 
        array (
          'title' => '',
          'title_text' => '',
          'urltitle_url' => '',
          'numberposts_number' => '',
          'style_select' => 'Style 01',
          'source_select' => 'By Tag',
          'category_name' => '',
          'tag_name' => 'widget',
        ),
        4 => 
        array (
          'title' => '',
          'title_text' => '',
          'urltitle_url' => '',
          'numberposts_number' => '',
          'style_select' => 'Style 01',
          'source_select' => 'By Tag',
          'category_name' => '',
          'tag_name' => 'widget',
          'wpmm_mega_menu_columns' => 2,
          'wp_menu_order' => 
          array (
            108 => 1,
          ),
          'wpmm_mega_menu_parent_menu_id' => 108,
        ),
        5 => 
        array (
          'quadmenu_parent_menu_id' => 237,
        ),
        6 => 
        array (
          'title' => '',
          'title_text' => '',
          'urltitle_url' => '',
          'numberposts_number' => '',
          'style_select' => 'Style 01',
          'source_select' => 'By Tag',
          'category_name' => '',
          'tag_name' => 'food',
        ),
        7 => 
        array (
          'title' => '',
          'title_text' => '',
          'urltitle_url' => '',
          'numberposts_number' => '3',
          'style_select' => 'Style 04',
          'source_select' => 'By Tag',
          'category_name' => '',
          'tag_name' => 'food',
        ),
        '_multiwidget' => 1,
      );

    gcod_add_option_key($widget_post_key, $widget_post_value);

    $widget_post_author_key = 'widget_wp__post_author';
    $widget_post_author_value = array (
        '_multiwidget' => 1,
        3 => 
        array (
          'awpa-post-author-title' => '',
          'awpa-post-author-id' => '',
          'awpa-post-author-type' => '',
          'awpa-post-author-align' => 'center',
          'awpa-post-author-image-layout' => 'round',
          'awpa-post-author-show-role' => 'false',
          'awpa-post-author-show-email' => 'false',
        ),
      );

    gcod_add_option_key($widget_post_author_key, $widget_post_author_value);

    // - Add widget posts
    $sidebars_widgets_option = 'sidebars_widgets';
    $sidebars_widgets_value = array (
        'wp_inactive_widgets' => 
        array (
          0 => 'wpmm_featuresbox_widget-2',
          1 => 'wpmm_featuresbox_widget-3',
          2 => 'wpmm_grid_posts_widget-2',
          3 => 'block-2',
          4 => 'block-3',
          5 => 'block-8',
          6 => 'gcowidgetpost_widget-3',
          7 => 'gcowidgetpost_widget-4',
          8 => 'categories-2',
          9 => 'gcowidgetpost_widget-5',
        ),
        'sidebar-main' => 
        array (
          0 => 'wp__post_author-3',
          1 => 'block-4',
          2 => 'block-11',
          3 => 'gcowidgettitle_widget-2',
          4 => 'block-10',
        ),
        'sidebar-footer' => 
        array (
          0 => 'block-5',
          1 => 'block-6',
        ),
        'wpmm' => 
        array (
          0 => 'gcowidgetpost_widget-6',
          1 => 'gcowidgetpost_widget-7',
        ),
        'array_version' => 3,
      );
    gcod_add_option_key($sidebars_widgets_option, $sidebars_widgets_value);


    // Social Slider Feeds ==================

    $wis_option_name = 'wis_account_profiles';
    $wis_option_value = unserialize('a:1:{s:19:"nguyentrihoangduong";a:5:{s:2:"id";s:17:"17841406181385333";s:11:"media_count";i:13;s:8:"username";s:19:"nguyentrihoangduong";s:5:"token";s:147:"IGQVJWTjY1Nm1Md0pGeXhWZA2RNc0ExQk1VS3NmVmlFQXZA0dWlFM1d5TjNZAQXppQTIxZA2c4ZA09NV1d0MTZAYRGJLeHR1VXp5bUNnOGhIZAHN1ZAkRXRWJXXzlBdkFpcmZAOb2dYSm4zeW93";s:7:"expires";i:1644562370;}}');
    gcod_add_option_key($wis_option_name, $wis_option_value);

    $widget_gco_instagram_widget = 'widget_gco_instagram_widget';
    $widget_gco_instagram_widget_option_value = unserialize('a:2:{s:12:"_multiwidget";i:1;i:3;a:4:{s:5:"title";s:0:"";s:10:"title_text";s:9:"Instagram";s:19:"instagram_shortcode";s:21:"[jr_instagram id="1"]";s:16:"instagram_follow";s:18:"autum2021gcodesign";}}');
    gcod_add_option_key($widget_gco_instagram_widget, $widget_gco_instagram_widget_option_value);

    $widget_gco_feeds_instagram = 'wis_feeds_instagram';
    $widget_gco_feeds_instagram_value = unserialize('a:2:{i:1;O:18:"WIS_Instagram_Feed":1:{s:8:"instance";a:75:{s:2:"id";s:1:"1";s:5:"title";s:11:"Autumn Blog";s:10:"search_for";s:7:"account";s:7:"account";s:19:"nguyentrihoangduong";s:16:"account_business";s:0:"";s:8:"username";s:0:"";s:7:"hashtag";s:0:"";s:13:"blocked_users";s:0:"";s:13:"blocked_words";s:0:"";s:13:"allowed_words";s:0:"";s:10:"attachment";i:0;s:8:"template";s:6:"thumbs";s:11:"images_link";s:10:"image_link";s:10:"custom_url";s:0:"";s:7:"orderby";s:9:"date-DESC";s:13:"images_number";s:1:"4";s:7:"columns";s:1:"4";s:12:"refresh_hour";s:1:"5";s:14:"slick_img_size";s:3:"300";s:10:"image_size";s:8:"standard";s:14:"image_link_rel";s:0:"";s:16:"image_link_class";s:0:"";s:6:"no_pin";i:0;s:8:"controls";s:4:"none";s:9:"animation";s:5:"slide";s:13:"caption_words";s:2:"20";s:15:"shopifeed_phone";s:0:"";s:15:"shopifeed_color";s:7:"#da004a";s:17:"shopifeed_columns";s:1:"3";s:10:"slidespeed";s:4:"7000";s:11:"description";a:3:{i:0;s:8:"username";i:1;s:4:"time";i:2;s:7:"caption";}s:14:"support_author";i:0;s:6:"gutter";s:1:"0";s:19:"masonry_image_width";s:3:"200";s:20:"slick_slides_to_show";s:1:"3";s:19:"slick_sliding_speed";s:4:"5000";s:22:"enable_control_buttons";i:0;s:10:"keep_ratio";i:0;s:9:"enable_ad";s:1:"1";s:12:"enable_icons";s:1:"1";s:20:"slick_slides_padding";i:0;s:16:"show_feed_header";s:1:"1";s:14:"enable_stories";i:1;s:16:"highlight_offset";s:1:"1";s:17:"highlight_pattern";s:1:"6";s:10:"m_template";s:6:"slider";s:15:"m_images_number";i:20;s:9:"m_columns";i:4;s:17:"m_shopifeed_phone";s:0:"";s:17:"m_shopifeed_color";s:7:"#DA004A";s:19:"m_shopifeed_columns";i:3;s:10:"m_controls";s:9:"prev_next";s:11:"m_animation";s:5:"slide";s:12:"m_slidespeed";i:7000;s:13:"m_description";a:0:{}s:15:"m_caption_words";i:20;s:24:"m_enable_control_buttons";i:0;s:18:"m_show_feed_header";i:1;s:16:"m_enable_stories";i:1;s:12:"m_keep_ratio";i:0;s:16:"m_slick_img_size";i:300;s:22:"m_slick_slides_to_show";i:3;s:21:"m_slick_sliding_speed";i:5000;s:22:"m_slick_slides_padding";i:0;s:8:"m_gutter";i:0;s:21:"m_masonry_image_width";i:200;s:18:"m_highlight_offset";i:1;s:19:"m_highlight_pattern";i:6;s:11:"m_enable_ad";i:0;s:14:"m_enable_icons";i:0;s:9:"m_orderby";s:4:"rand";s:13:"m_images_link";s:10:"image_link";s:15:"m_blocked_words";s:0:"";s:15:"m_allowed_words";s:0:"";s:17:"m_powered_by_link";s:0:"";}}i:3;O:18:"WIS_Instagram_Feed":1:{s:8:"instance";a:75:{s:2:"id";i:3;s:5:"title";s:12:"Autumn Theme";s:10:"search_for";s:8:"username";s:7:"account";s:19:"nguyentrihoangduong";s:16:"account_business";s:0:"";s:8:"username";s:19:"nguyentrihoangduong";s:7:"hashtag";s:0:"";s:13:"blocked_users";s:0:"";s:13:"blocked_words";s:0:"";s:13:"allowed_words";s:0:"";s:10:"attachment";i:0;s:8:"template";s:6:"thumbs";s:11:"images_link";s:10:"image_link";s:10:"custom_url";s:0:"";s:7:"orderby";s:9:"date-DESC";s:13:"images_number";s:1:"4";s:7:"columns";s:1:"4";s:12:"refresh_hour";s:1:"5";s:14:"slick_img_size";s:3:"300";s:10:"image_size";s:8:"standard";s:14:"image_link_rel";s:0:"";s:16:"image_link_class";s:0:"";s:6:"no_pin";i:0;s:8:"controls";s:9:"prev_next";s:9:"animation";s:5:"slide";s:13:"caption_words";s:1:"4";s:15:"shopifeed_phone";s:0:"";s:15:"shopifeed_color";s:7:"#da004a";s:17:"shopifeed_columns";s:1:"3";s:10:"slidespeed";s:4:"7000";s:11:"description";a:0:{}s:14:"support_author";i:0;s:6:"gutter";s:1:"0";s:19:"masonry_image_width";s:3:"200";s:20:"slick_slides_to_show";s:1:"3";s:19:"slick_sliding_speed";s:4:"5000";s:22:"enable_control_buttons";i:0;s:10:"keep_ratio";i:0;s:9:"enable_ad";s:1:"1";s:12:"enable_icons";s:1:"1";s:20:"slick_slides_padding";i:0;s:16:"show_feed_header";s:1:"1";s:14:"enable_stories";i:1;s:16:"highlight_offset";s:1:"1";s:17:"highlight_pattern";s:1:"6";s:10:"m_template";s:6:"slider";s:15:"m_images_number";i:20;s:9:"m_columns";i:4;s:17:"m_shopifeed_phone";s:0:"";s:17:"m_shopifeed_color";s:7:"#DA004A";s:19:"m_shopifeed_columns";i:3;s:10:"m_controls";s:9:"prev_next";s:11:"m_animation";s:5:"slide";s:12:"m_slidespeed";i:7000;s:13:"m_description";a:0:{}s:15:"m_caption_words";i:20;s:24:"m_enable_control_buttons";i:0;s:18:"m_show_feed_header";i:1;s:16:"m_enable_stories";i:1;s:12:"m_keep_ratio";i:0;s:16:"m_slick_img_size";i:300;s:22:"m_slick_slides_to_show";i:3;s:21:"m_slick_sliding_speed";i:5000;s:22:"m_slick_slides_padding";i:0;s:8:"m_gutter";i:0;s:21:"m_masonry_image_width";i:200;s:18:"m_highlight_offset";i:1;s:19:"m_highlight_pattern";i:6;s:11:"m_enable_ad";i:0;s:14:"m_enable_icons";i:0;s:9:"m_orderby";s:4:"rand";s:13:"m_images_link";s:10:"image_link";s:15:"m_blocked_words";s:0:"";s:15:"m_allowed_words";s:0:"";s:17:"m_powered_by_link";s:0:"";}}}');
    gcod_add_option_key($widget_gco_feeds_instagram, $widget_gco_feeds_instagram_value);


    $wfs_option_name = 'wis_facebook_account_profiles';
    $wfs_option_value = unserialize('a:1:{s:23:"Visual Hierarchy Design";a:5:{s:4:"name";s:23:"Visual Hierarchy Design";s:6:"avatar";s:362:"https://scontent.fhan5-6.fna.fbcdn.net/v/t1.18169-1/cp0/p50x50/12439362_1590101464637925_5614797490443828904_n.png?_nc_cat=105&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=t--BNq8R3_cAX-2PRAE&_nc_oc=AQnhjW92pK28c2Bcm_qiW_4fDHB8td9ujT6T693M99KMBWUmVXeX7bsMJRQhNL73JEE&_nc_ht=scontent.fhan5-6.fna&edm=AGaHXAAEAAAA&oh=00_AT_IB8xmTBrYrWxyWjeEMziBKL7Iex04gqNkVLQw_CiqgA&oe=61DEEA87";s:2:"id";s:16:"1561335627514509";s:5:"token";s:241:"EAALB9itO2CoBAJv3lUhZCWiss1EjsAS1MZCCvtkB9rZC8sQxSgwF932vEhzpljZC2umLWlTNtfjxoCjdGa3AZA8oFdraavn2zoFpk1cTwoSlTxfDBnoOzyhk1bfllG1W12o1FxQSABKAbemdTvOx9TM4muUlFXwo90Ijs3bYEIoF0e90LDUcyX4XJbl014lQ0ppEmTC55LoyOZCXtL4LdNC2MRQGhIVGph1CzcufRR5QZDZD";s:5:"is_me";b:0;}}');
    gcod_add_option_key($wfs_option_name, $wfs_option_value);

    // Update the Hello World! post by making it a draft.
    $hello_world = get_page_by_title('Hello World!', OBJECT, 'post');
    if (!empty($hello_world)) {
        $hello_world->post_status = 'draft';
        wp_update_post($hello_world);
    }
}
