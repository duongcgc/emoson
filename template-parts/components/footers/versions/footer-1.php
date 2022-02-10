<?php

/** 
 * Footer style 1
 * @postions:   $gcod_elements_layout_postitions: array struct of header
 * @note:       each stack header with one unique key :ex footer-1, footer-2,...
 * @open_tag:   html content for open stack
 * @close_tag:  html content for close stack
 * @elements:   array list of elements name that defined in inc/customizer/sections/05-15/footer-layouts.php
 * @sperator:   html of seperator bettwen elements in same stack
 */

$gcod_elements_layout_postitions = array(

    'footer-main' => array(
        'open_tag'          => '<div class="site-branding">',
        'close_tag'         => '</div>',
        'elements'          => array('element-footer-logo'),
        'seperator'         => false
    ),
    'footer-info' => array(
        'open_tag'          => '<div class="site-copyright">',
        'close_tag'         => '</div>',
        'elements'          => array('element-copyright-text','element-topbutton'),
        'seperator'         => false
    ),
);

// default elements on footer layout for first
$gcod_list_elements_default = array(
    'element-footer-logo',
    'element-copyright-text',
    'element-topbutton'
);
