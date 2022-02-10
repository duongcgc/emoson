<?php

/**
 * Header Template.
 *
 * @since 1.0.0
 */

$arg = array(
    'action_name'               => 'gcod_render_header_elements',                       // for place holder 
    'partials_setting_name'     => 'gcod_header_elements_setting',                      // for get list of name elements template
    'version_setting_name'      => 'gcod_layout_header',                                // for get name version component defined
    'template_parts_dir'        => '/template-parts/components/headers/partials/',                     // for dir of elements template just from theme directory
    'verions_dir'               => get_template_directory() . '/template-parts/components/headers/versions/',  // for dir of versions template
);

new GCOD_Header($arg);

do_action('gcod_render_header_elements');