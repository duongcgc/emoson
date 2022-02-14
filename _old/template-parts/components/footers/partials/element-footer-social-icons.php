<div class="footer-social-icons">
    <?php
    // Show Title
    if (gcod_get_theme_mod('gcod_footer_element_social_icons_title_show')) {
        $social_icons_title = '<h3>';
        $social_icons_title .= gcod_get_theme_mod('gcod_footer_element_social_icons_title');
        $social_icons_title .= '</h3>';
        printf($social_icons_title);
    }

    // List Social Icons
    echo '<div class="social-icon-list">';
    $list_footer_social_icons = gcod_get_theme_mod('gcod_footer_social_elements_setting');

    foreach ($list_footer_social_icons as $element) {

        $icon_name = str_replace("element-social-", "", $element);
        $icon_name = str_replace("-icon", "", $icon_name);
        $social_url = get_theme_mod('gcod_' . $icon_name . '_uri');

        $html = '<a href="'. $social_url .'">';
        $html .= get_social_icon_image($element);
        $html .= '</a>';
        printf($html);
    }
    echo '</div>';
    ?>
</div>