<div class="footer-tags">
    <?php
    // Show Title
    if (gcod_get_theme_mod('gcod_footer_element_tags_title_show')) {
        $tag_title = '<h3>';
        $tag_title .= gcod_get_theme_mod('gcod_footer_element_tags_title');
        $tag_title .= '</h3>';
        printf($tag_title);
    }


    // List Tags
    $tags = get_tags(
        array(
            'hide_empty' => true,
            'number'     => 10   
        )
    );

    echo '<div class="footer-tag-list">';
    foreach ($tags as $tag) {
        $tag_item = '<a href="';
        $tag_item .= get_tag_link($tag);
        $tag_item .= '">';
        $tag_item .= $tag->name;
        $tag_item .= '</a>';
        printf($tag_item);
    }
    echo '</div>';

    ?>
</div>