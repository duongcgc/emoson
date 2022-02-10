<?php

/**
 * Footer Template.
 *
 * @since 1.0.0
 */

$arg = array(
    'action_name'               => 'gcod_render_footer_elements',                               // for place holder 
    'partials_setting_name'     => 'gcod_footer_element_setting',                               // for get list of name elements template
    'version_setting_name'      => 'gcod_layout_footer',                                        // for get name version component defined
    'template_parts_dir'        => '/template-parts/components/footers/partials/',                             // for dir of elements template just from theme directory
    'verions_dir'               => get_template_directory() . '/template-parts/components/footers/versions/',  // for dir of versions template
);

new GCOD_Footer($arg);

do_action('gcod_render_footer_elements');