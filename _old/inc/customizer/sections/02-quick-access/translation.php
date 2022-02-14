<?php

/**
 * Quick translation section customizer. *
 * @section: gcod_translation_settings
 * @since 1.0.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$section_id = 'gcod_translation_settings';
$priority = 11;
Kirki::add_section(
   $section_id,
   array(
      'title'          => esc_attr__('Common Translation', 'autumn-theme'),
      'priority'       => $priority++,
      'capability'     => 'edit_theme_options',
      'panel'          => 'gcod_panel_quick'
   )
);

// Text Readmore
$setting_name = 'gcod_translation_readmore';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Readmore"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'            => 'postMessage',
      //  'partial_refresh'      => [
      //     'gcod_site_header_layout' => [
      //        'selector'        => '.header-wrapper',
      //        'render_callback' => 'gcod_change_header_layout',
      //     ],
      //  ]
   )
);

// Text views
$setting_name = 'gcod_translation_views';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "views"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text Published:
$setting_name = 'gcod_translation_published';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Published:"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text Last Updated on:
$setting_name = 'gcod_translation_last_updated';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Last Updated on"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'   => 'postMessage',
   )
);

// Text comment:
$setting_name = 'gcod_translation_comment';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "comment"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text comments:
$setting_name = 'gcod_translation_comments';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "comments"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'    => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text Reply:
$setting_name = 'gcod_translation_reply';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Reply"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text Edit:
$setting_name = 'gcod_translation_edit';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Edit"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text Your comment is awaiting approval:
$setting_name = 'gcod_translation_wait_approval';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Your comment is awaiting approval"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Save my name, email, and website in this browser for the next time I comment."
$setting_name = 'gcod_translation_save_my_name';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Save my name, email, and website in this browser for the next time I comment."', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "by"
$setting_name = 'gcod_translation_by';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "by"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Home"
$setting_name = 'gcod_translation_home';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Home"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Newer Posts"
$setting_name = 'gcod_translation_newer_posts';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Newer Posts"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Older Posts"
$setting_name = 'gcod_translation_older_posts';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Older Posts"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Load More Posts"
$setting_name = 'gcod_translation_load_more_posts';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Load More Posts"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Sorry, No more posts"
$setting_name = 'gcod_translation_no_more_posts';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Sorry, No more posts"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "All"
$setting_name = 'gcod_translation_all';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "All"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Back To Top"
$setting_name = 'gcod_translation_back_to_top';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Back To Top"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "written by"
$setting_name = 'gcod_translation_written_by';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "written by"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text previous post"
$setting_name = 'gcod_translation_previous_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "previous post"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "next post"
$setting_name = 'gcod_translation_next_post';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "next post"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Name*"
$setting_name = 'gcod_translation_name';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Name*"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Email*"
$setting_name = 'gcod_translation_email';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Email*"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Website"
$setting_name = 'gcod_translation_website';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Website"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Your Comment"
$setting_name = 'gcod_translation_your_comment';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Your Comment"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Leave a Comment"
$setting_name = 'gcod_translation_leave_comment';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Leave a Comment"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Cancel Reply"
$setting_name = 'gcod_translation_cancel_reply';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Cancel Reply"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Submit"
$setting_name = 'gcod_translation_submit';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Submit"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Category:"
$setting_name = 'gcod_translation_category';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Category:"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Continue Reading"
$setting_name = 'gcod_translation_continue_reading';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Continue Reading"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Read more"
$setting_name = 'gcod_translation_read_more';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Read more"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "View All"
$setting_name = 'gcod_translation_viewall';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "View All"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Tag:"
$setting_name = 'gcod_translation_tag';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Tag:"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Tags"
$setting_name = 'gcod_translation_tags';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Tags"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Posts tagged with"
$setting_name = 'gcod_translation_post_tag_width';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Posts tagged with"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Author"
$setting_name = 'gcod_translation_author';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Author"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Daily Archives"
$setting_name = 'gcod_translation_daily_archives';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Daily Archives"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Monthly Archives"
$setting_name = 'gcod_translation_monthly_archive';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Monthly Archives"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Yearly Archives"
$setting_name = 'gcod_translation_yearly_archives';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Yearly Archives"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Search"
$setting_name = 'gcod_translation_search';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Search"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Search results for"
$setting_name = 'gcod_translation_search_results';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Search results for"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Share"
$setting_name = 'gcod_translation_share';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Share"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Comments are closed."
$setting_name = 'gcod_translation_comment_closed';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Comments are closed."', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Sorry, but nothing matched your search terms. Please try again with some different keywords."
$setting_name = 'gcod_translation_sorry_but';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Sorry, but nothing matched your search terms. Please try again with some different keywords."', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);

// Text "Back to Home Page"
$setting_name = 'gcod_translation_back_to_home';
Kirki::add_field(
   GCOD_CONFIG_ID,
   array(
      'type'        => 'text',
      'settings'    => $setting_name,
      'label'       => __('Text: "Back to Home Page"', 'autumn-theme'),
      'section'     => $section_id,
      'default'     => gcod_defaults($setting_name),
      'priority'       => $priority++,
      'transport'            => 'postMessage',
   )
);
