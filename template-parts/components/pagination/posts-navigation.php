<?php 

echo '</div>';

// get navigation type
$page_navigation_type = gcod_get_theme_mod('gcod_navigation_pagenav');

if ($wp_query->max_num_pages > 1) {

    $paged = get_query_var('paged');

    echo '<div class="archive-pagination ' . $page_navigation_type . '">';

    if (('number' === $page_navigation_type) || ('border' === $page_navigation_type) || ($paged > 1)) {
        the_posts_pagination(
            array(
                'mid_size'  => 2,
                'prev_text' => esc_html__('', 'autumn-theme'),
                'next_text' => esc_html__('', 'autumn-theme'),
            )
        );
    } elseif ('standard' === $page_navigation_type) {
        gcod_posts_nav_link();
    } elseif ('ajax' === $page_navigation_type) {
        echo '<div class="gcod_loadmore">More Posts</div>';    
    } elseif ('infinity' === $page_navigation_type) {
        echo '<div class="gcod_loadmore">More Posts</div>';
    }

    echo '</div>'; // .archive-pagination

} else {

    the_posts_navigation();
}

echo '<div>'; 