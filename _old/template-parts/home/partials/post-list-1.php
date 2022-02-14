<?php

/**
 * Home Post List Section. Default for Blog and Archive
 *
 * Description.
 *
 * @since 1.0.0
 */

// Home Blog Loop
?>
<div class="post-list-wrapper <?php gcod_home_post_list_class(); ?>">

    <div class="archive-wrapper <?php gcod_archive_page_classes(); ?>">

        <?php
        $section_title = gcod_get_theme_mod('gcod_section_home_post_list_title');

        if ($section_title != '') :
        ?>
            <div class="header__module">
                <h3 class="title"><?php echo esc_html($section_title); ?></h3>
            </div>
        <?php

        endif;

        // Set number post per page
        $number_post_per_page = gcod_get_theme_mod('gcod_section_home_post_list_number_items');
        query_posts(
            array(
                'post_type' => 'post',
                'posts_per_page' => $number_post_per_page
            )
        );

        get_template_part('template-parts/loop/post', 'excerpt');
        ?>

    </div>
</div>