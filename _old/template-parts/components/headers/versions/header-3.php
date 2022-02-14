<?php

/** 
 * Header style 3
 * @postions:   $gcod_elements_layout_postitions: array struct of header
 * @note:       each stack header with one unique key :ex header-1, header-2,...
 * @open_tag:   html content for open stack
 * @close_tag:  html content for close stack
 * @elements:   array list of elements name that defined in inc/customizer/sections/05-header/header-layouts.php
 * @sperator:   html of seperator bettwen elements in same stack
 */

$gcod_elements_layout_postitions = array(

    'topbar' => array(
        'open_tag'          => '<div class="header-topbar"><div class="inner-topbar">',
        'close_tag'         => '</div></div>',
        'elements'          => array('element-social-icons', 'element-search-box'),
        'seperator'         => false
    ),
    'header-bar1' => array(
        'open_tag'          => '<div class="site-branding"><div class="inner-branding">',
        'close_tag'         => '</div></div>',
        'elements'          => array('element-header-logo'),
        'seperator'         => false
    ),
    'header-bar2' => array(
        'open_tag'          => '<div class="site-menu"><div class="inner-sitemenu">',
        'close_tag'         => '</div></div>',
        'elements'          => array('element-header-menu'),
        'seperator'         => false
    ),
);

// default elements on header layout for first
$gcod_list_elements_default = array(
    'element-social-icons',
    'element-search-box',
    'element-header-logo',
    'element-header-menu',
);
