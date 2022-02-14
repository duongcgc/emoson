<div class="footer-category">
    <?php
    // Show Title
    if (gcod_get_theme_mod('gcod_footer_element_category_title_show')) {
        $category_title = '<h3>';
        $category_title .= gcod_get_theme_mod('gcod_footer_element_category_title');
        $category_title .= '</h3>';
        printf($category_title);
    }


    // List Categories
    $args = array(
        'hide_empty'        => 1,
        'parent'            => 0,
        'number'            => 10
    );

    $categories =  get_categories($args);

    echo '<ul>';
    foreach ($categories as $category) {
        $category_item = '<li><a href="';
        $category_item .= get_category_link($category);
        $category_item .= '">';
        $category_item .= $category->cat_name;
        $category_item .= '</a></li>';
        printf($category_item);
    }
    echo '</ul>';

    ?>
</div>