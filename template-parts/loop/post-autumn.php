<?php

/**
 * Home Blog List Loop for Autumn Styled.
 *
 * Description.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage Component
 * @since Version
 */

if (have_posts()) :

    echo '<div class="content__module">';

    /* Start the Loop */
    while (have_posts()) :

        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part('template-parts/content', 'autumn');

    endwhile;

    echo '</div>';

    get_template_part('template-parts/components/pagination/posts', 'navigation');

else :

    get_template_part('template-parts/content', 'none');

endif;
