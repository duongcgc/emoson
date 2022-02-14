<?php

/**
 * Featured Content Template.
 *
 * @since 1.0.0
 */

$arg = array(
    'action_name'               => 'gcod_render_featured_content_sections',                       // for place holder 
    'partials_setting_name'     => 'gcod_featured_sections_setting',                      // for get list of name elements template
    'version_setting_name'      => 'gcod_layout_home_content',                                // for get name version component defined
    'template_parts_dir'        => 'template-parts/home/sections/',                     // for dir of elements template just from theme directory
    'verions_dir'               => get_template_directory() . '/template-parts/home/versions/',  // for dir of versions template
);

new GCOD_Featured_Content($arg);

do_action('gcod_render_featured_content_sections');