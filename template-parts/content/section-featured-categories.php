<?php

/** 
 * Featured Categories Section
 */

// Get logic for display section
if (gcod_display_on_current_page('featured_categories')) :
?>
    <div class="featured-categories-container">
        
                <?php
                $gcod_featured_categories_style = gcod_featured_section_style('categories');
                if ($gcod_featured_categories_style) {
                    get_template_part('template-parts/content/partials/' . $gcod_featured_categories_style);
                }
                ?>
       
    </div>
<?php

endif;

?>