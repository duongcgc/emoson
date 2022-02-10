<div class="footer-lastest-posts">

    <?php
    // Show Title
    if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_title_show')) {
        $lastest_posts_title = '<h3>';
        $lastest_posts_title .= gcod_get_theme_mod('gcod_footer_element_lastest_posts_title');
        $lastest_posts_title .= '</h3>';
        printf($lastest_posts_title);
    }
    ?>

    <ul class="footer-posts-list">

        <?php
        
        // Define our WP Query Parameters
        $the_query = new WP_Query('posts_per_page=' . gcod_get_theme_mod('gcod_footer_element_lastest_posts_number')); ?>

        <?php
        // Start our WP Query
        while ($the_query->have_posts()) : $the_query->the_post();
            // Display the Post Title with Hyperlink
        ?>

            <li>
                <?php if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_thumbnail_show')) : ?>

                    <div class="thumbnail <?php if (!has_post_thumbnail()) { echo esc_attr('no-thumb'); } ?>">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('gcod_thumbnail_footer'); ?></a>
                    </div>

                <?php endif; ?>

                <div class="content">
                    <?php
                    $categories = get_the_category();
                    $cat_name = $categories[0]->cat_name;
                    $cat_link = get_category_link($categories[0]);

                    ?>

                    <?php if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_category_show')) : ?>
                        <span class="category"><a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($cat_name); ?></a></span>
                    <?php endif; ?>

                    <?php if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_number')) : ?>
                        <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <?php endif; ?>

                    <?php
                    if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_date_show')) {
                        gcod_posted_on();
                        if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_author_show')) {
                            echo '<span class="seperator"> | </span>';
                        }
                    };

                    if (gcod_get_theme_mod('gcod_footer_element_lastest_posts_author_show')) {
                        gcod_posted_by();
                    };

                    ?>
                </div>
            </li>

        <?php
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>

    </ul>
</div>