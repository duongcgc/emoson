<?php

/**
 * Post Single Loop.
 *
 * Description.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since Version
 */

while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', get_post_type());

    get_template_part('template-parts/pagination/post', 'nav');

    if (gcod_get_theme_mod_multicheck('element-post-comment', 'gcod_general_single_element_setting')) {
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    }

endwhile; // End of the loop.