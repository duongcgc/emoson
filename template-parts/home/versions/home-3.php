<?php

/** 
 * Home style 3
 * @postions:   $gcod_elements_layout_postitions: array struct of header
 * @note:       each stack header with one unique key :ex header-1, header-2,...
 * @open_tag:   html content for open stack
 * @close_tag:  html content for close stack
 * @elements:   array list of elements name that defined in inc/customizer/sections/05-header/header-layouts.php
 * @sperator:   html of seperator bettwen elements in same stack
 */

$gcod_elements_layout_postitions = array(
    'none' => array(
        'open_tag'          => false,
        'close_tag'         => false,
        'elements'          => array(
            'section-home-featured-slider',
            'section-home-featured-categories',
            'section-home-featured-posts',
            'section-home-post-list',
            'section-home-lastest-posts',
            'section-home-newsletter',
            'section-home-instagram',
        ),
        'seperator'         => false
    ),
);

// default elements on home_content layout for first
$gcod_list_elements_default = array(
    'section-home-featured-slider',
    'section-home-featured-categories',
    'section-home-featured-posts',
    'section-home-post-list',
    'section-home-lastest-posts',
    'section-home-newsletter',
    'section-home-instagram',
);
