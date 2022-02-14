<?php

/**
 * Search Result Loop.
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

<?php if (gcod_page_header_style() == false): ?>
<header class="page-header">
    <h1 class="page-title">
        <?php
        /* translators: %s: search query. */
        printf( esc_html__( 'Search Results for: %s', 'autumn-theme' ), '<span>' . get_search_query() . '</span>' );
        ?>
    </h1>
</header><!-- .page-header -->
<?php endif; ?>

<?php
/* Start the Loop */
while ( have_posts() ) :
    the_post();

    /**
     * Run the loop for the search to output the results.
     * If you want to overload this in a child theme then include a file
     * called content-search.php and that will be used instead.
     */
    get_template_part( 'template-parts/content', 'search' );

endwhile;

the_posts_navigation();

else :

get_template_part( 'template-parts/content', 'none' );

endif;