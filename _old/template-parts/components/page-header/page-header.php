<?php

/**
 * Page Header Template.
 *
 * @since 1.0.0
 */

$arg = array(
    'action_name'               => 'gcod_render_page_header_elements',                          // for place holder 
    'partials_setting_name'     => 'gcod_page_header_elements_setting',                         // for get list of name elements template
    'version_setting_name'      => 'gcod_page_header_style',                                    // for get name version component defined
    'template_parts_dir'        => '/template-parts/components/page-header/partials/',                     // for dir of elements template just from theme directory
    'verions_dir'               => '/template-parts/components/page-header/versions/',  // for dir of versions template
);

new GCOD_Page_Header($arg);

do_action('gcod_render_page_header_elements');