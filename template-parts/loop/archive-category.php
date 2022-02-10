<?php

/**
 * Archive Blog Loop.
 *
 * Description.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since Version
 */

$total_posts = gcod_display_post_count();

if (is_category()) {

    $total_posts = gcod_display_current_category_post_count();

}elseif (is_tag()) {

    $total_posts = gcod_display_current_tag_post_count();

}elseif (is_author()) {

    $total_posts = gcod_display_current_author_post_count();

}

if (have_posts()) : ?>


    <?php
    if (gcod_show_page_header() != true) :
    ?>

        <header class="page-header">
            <?php
            if (is_tag()) {
                the_archive_title('<h1 class="page-title"><span class="archive-sub-title">Tag\' posts:</span><span> "', '"</span><span class="total-posts">(' . $total_posts .' posts)</span></h1>');
            } else {
                the_archive_title('<h1 class="page-title"><span>', '</span><span class="total-posts">(' . $total_posts .' posts)</span></h1>');
            }

            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header><!-- .page-header -->

    <?php endif; ?>

<?php
    /* Start the Loop */
    while (have_posts()) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part('template-parts/content', 'category');

    endwhile;

    get_template_part('template-parts/components/pagination/posts', 'navigation');

else :

    get_template_part('template-parts/content', 'none');

endif;
?>