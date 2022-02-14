<?php

/** 
 * Header style 2
 * @postions:   $gcod_elements_layout_postitions: array struct of header
 * @note:       each stack header with one unique key :ex header-1, header-2,...
 * @open_tag:   html content for open stack
 * @close_tag:  html content for close stack
 * @elements:   array list of elements name that defined in inc/customizer/sections/05-header/header-layouts.php
 * @sperator:   html of seperator bettwen elements in same stack
*/

$gcod_elements_layout_postitions = array(
    'div' => array(
        'open_tag'          => '<div class="site-branding">',
        'close_tag'         => '</div>',
        'elements'          => array('element-header-menu'),
        'seperator'         => false
    ),
);

// default elements on header layout for first
$gcod_list_elements_default = array(    
    'element-header-menu',
);