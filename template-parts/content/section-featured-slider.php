<?php

/** 
 * Featured Slider Section
 */

// Get logic for display section

if (gcod_display_on_current_page('featured_slider')) :

?>

    <div class="featured-slider-wrapper <?php gcod_featured_slider_class(); ?>">
            <?php
            $gcod_featured_slider_style = gcod_featured_section_style('slider');

            if ($gcod_featured_slider_style) {
                get_template_part('template-parts/content/partials/' . $gcod_featured_slider_style);
            }
            ?>
    </div>

<?php

endif;

?>