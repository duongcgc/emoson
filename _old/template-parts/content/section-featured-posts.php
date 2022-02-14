<?php

/** 
 * Featured Posts Section
 */

// Get logic for display section
if (gcod_display_on_current_page('featured_posts')) :

?>

    <div class="featured-posts-container">
        <?php
        $gcod_featured_posts_style = gcod_featured_section_style('posts');
        if ($gcod_featured_posts_style) {
            get_template_part('template-parts/content/partials/' . $gcod_featured_posts_style);
        }
        ?>
    </div>
<?php

endif;

?>