<?php


// Exit if accessed directly.
defined('ABSPATH') || exit;


// Selector Array

$typo_selectors = array(
    'body' => 'body, 
    .widget_gcowidgetnewsletters_widget .widget_posts .content__module div.email input, 
    .widget_gcowidgetnewsletters_widget .widget_posts .content__module div.name input,
    #page .newsletter-wrapper.newsletter-1 .inner-newsletter .form__module div.email input, 
    #page .newsletter-wrapper.newsletter-1 .inner-newsletter .form__module div.name input',

    'name' => '.post-name, 
                .post-name a, 
                .site-main .entry-title, 
                .page-title-2 .widget .posts__widget .post-name a,
                .page-title-2 h1,
                .site-main h3.title,
                h4.categoty-name,
                h1.entry-title',

    'module' => '.widget-area h2, 
                .widget-area h3.title, 
                .footer-wrapper h3, 
                .widget-area .wp-block-search__label',

    'subtitle' => '.post-cat, 
                        .post-cat a, 
                        .page-title-2 .widget .posts__widget .post-cat a,
                        .page-title-2 .featured-posts-wrapper .featured-posts-content .content__module .post-cat a,                                              
                        .subtitle,                                                    
                        .header__module h3.title
                        #secondary .widget .posts__widget.style-1 .post-cat a, 
                        #secondary .widget .posts__widget.style-2 .post-cat a',

    'meta' => '.post-meta,                        
                        .featured-slider-content .content__module .posts__module .post-cat a,
                        .page-title-2 .post-list-wrapper .archive-wrapper .content__module .post-cat a, 
                        .page-title-2 .widget .posts__widget .post-meta a, 
                        .page-title-2 .widget .posts__widget .post-cat a,
                        .post-meta a, 
                        .post-meta span,
                        .entry-header .entry-meta a, 
                        .entry-header .entry-meta ',


    'nav' => '.main-navigation li a, 
            .footer-menu li a, 
            #primary-menu li a,
            .page-title-2 .header-wrapper .main-navigation #primary-menu > li a',

    'button' => '.button, 
                        .button a, 
                        .button input, 
                        .btn, 
                        .post-button a,
                        .widget_gcowidgetnewsletters_widget .widget_posts .content__module div .button input,
                        #page .newsletter-wrapper.newsletter-1 .inner-newsletter .form__module div .button input',
);

// Typography Values Array
$typo_set_values = array(
    'typo-set-1' => array(
        'font-one'  => [
            "font-family" => "Poppins",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Playfair Display",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],        
    ),
    'typo-set-2' => array(
        'font-one'  => [
            "font-family" => "Playfair Display",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Poppins",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-3' => array(
        'font-one'  => [
            "font-family" => "Playfair Display",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Playfair Display",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-4' => array(
        'font-one'  => [
            "font-family" => "Poppins",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Poppins",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-5' => array(
        'font-one'  => [
            "font-family" => "League Spartan",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Libre Baskerville",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-6' => array(
        'font-one'  => [
            "font-family" => "Julius Sans One",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Archino Narrow",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-7' => array(
        'font-one'  => [
            "font-family" => "Open Sans",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Cooper Hewitt",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-8' => array(
        'font-one'  => [
            "font-family" => "Cooper",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Hewitt Heavy",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-9' => array(
        'font-one'  => [
            "font-family" => "Norwester",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Kollektif Regular",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-10' => array(
        'font-one'  => [
            "font-family" => "Source Serif Pro",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Sans Pro",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-11' => array(
        'typo-set-10' => array(
            'font-one'  => [
                "font-family" => "Yellotail",
                "variant" => "regular",
                "text-transform" => "none",
                "font-backup" => "",
                "font-weight" => 400,
                "font-style" => "normal"
            ],
            'font-two'  => [
                "font-family" => "Open Sans",
                "variant" => "regular",
                "text-transform" => "none",
                "font-backup" => "",
                "font-weight" => 400,
                "font-style" => "normal"
            ],
        ),
    ),
    'typo-set-12' => array(
        'typo-set-10' => array(
            'font-one'  => [
                "font-family" => "Cinzel",
                "variant" => "regular",
                "text-transform" => "none",
                "font-backup" => "",
                "font-weight" => 400,
                "font-style" => "normal"
            ],
            'font-two'  => [
                "font-family" => "Quattrocento",
                "variant" => "regular",
                "text-transform" => "none",
                "font-backup" => "",
                "font-weight" => 400,
                "font-style" => "normal"
            ],
        ),
    ),
    'typo-set-13' => array(
        'font-one'  => [
            "font-family" => "Oswald",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Monsterrat",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-14' => array(
        'font-one'  => [
            "font-family" => "Kollektif",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Gidole",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-15' => array(
        'font-one'  => [
            "font-family" => "Bodoni",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Bodoni",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-16' => array(
        'font-one'  => [
            "font-family" => "Merriweather",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Merriweather",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-17' => array(
        'font-one'  => [
            "font-family" => "League Gothic",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Kollektif",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-18' => array(
        'font-one'  => [
            "font-family" => "Sifonn",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Bebas Neue",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-19' => array(
        'font-one'  => [
            "font-family" => "Six Gaps",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Archivo Narrow",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-20' => array(
        'font-one'  => [
            "font-family" => "Sacramentor",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Montserrat",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-21' => array(
        'font-one'  => [
            "font-family" => "Oswald",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Roboto Condensed",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
    'typo-set-22' => array(
        'font-one'  => [
            "font-family" => "Noto Serif",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
        'font-two'  => [
            "font-family" => "Sura",
            "variant" => "regular",
            "text-transform" => "none",
            "font-backup" => "",
            "font-weight" => 400,
            "font-style" => "normal"
        ],
    ),
);

// create css for typo-set
function gcod_get_typoset_css($typoset_name, $typo_selectors, $typo_set_values) {

    $css_result = '';

    $css_result .=   $typo_selectors['body'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-one']['font-family'] . '";}';
    $css_result .=  $typo_selectors['name'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-two']['font-family']  . '";}';
    $css_result .=  $typo_selectors['module'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-one']['font-family']  . '";}';
    $css_result .=  $typo_selectors['subtitle'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-two']['font-family']  . '";}';
    $css_result .=  $typo_selectors['meta'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-two']['font-family']  . '";}';
    $css_result .=  $typo_selectors['nav'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-one']['font-family']  . '";}';
    $css_result .=  $typo_selectors['button'] . '{font-family: "' . $typo_set_values[$typoset_name]['font-one']['font-family']  . '";}';

    return $css_result;
}

// function update typo-set for custom setting - except body
function gcod_set_custom_typography($typoset_name, $typo_set_values) {

    set_theme_mod('gcod_custom_heading_font_family1', $typo_set_values[$typoset_name]);
    set_theme_mod('gcod_custom_heading_widget_font_family', $typo_set_values[$typoset_name]);
    set_theme_mod('gcod_custom_post_category_font_family', $typo_set_values[$typoset_name]);
    set_theme_mod('gcod_custom_post_meta_font_family', $typo_set_values[$typoset_name]);
    set_theme_mod('gcod_custom_menu_font_family', $typo_set_values[$typoset_name]);
    set_theme_mod('gcod_custom_button_font_family', $typo_set_values[$typoset_name]);

}
