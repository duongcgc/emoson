<?php

/** 
 * Header style 1
 * @postions:   $gcod_elements_layout_postitions: array struct of header
 * @note:       each stack header with one unique key :ex header-1, header-2,...
 * @open_tag:   html content for open stack
 * @close_tag:  html content for close stack
 * @elements:   array list of elements name that defined in inc/customizer/sections/05-header/header-layouts.php
 * @sperator:   html of seperator bettwen elements in same stack
*/

$gcod_elements_layout_postitions = array(
    'column-left' => array(
        'open_tag'          => '<div class="inner-header"><div class="site-menu">',
        'close_tag'         => '</div>',
        'elements'          => array('element-header-menu'),
        'seperator'         => false,
    ),    
    'column-right' => array(
        'open_tag'          => '<div class="site-tools">',
        'close_tag'         => '</div></div>',
        'elements'          => array('element-social-icons'),
        'seperator'         => false,
    ),
);

// default elements on header layout for first
$gcod_list_elements_default = array(
    'element-header-menu',
    'element-social-icons',    
);