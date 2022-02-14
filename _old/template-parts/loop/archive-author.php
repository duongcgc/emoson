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

if ( have_posts() ) : ?>


    <?php 
        if (gcod_show_page_header() != true) :
    ?>

    <header class="page-header">
        <?php
        the_archive_title( '<h1 class="page-title"><span>', '</span></h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <?php endif; ?>

    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'author' );

    endwhile;

    get_template_part('template-parts/components/pagination/posts', 'navigation');

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>