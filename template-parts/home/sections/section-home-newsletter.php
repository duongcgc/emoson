<?php

/**
 * Home Newsletter Section.
 *
 * Description.
 *
 * @since 1.0.0
 */

if (gcod_get_theme_mod('gcod_section_home_instagram_below_main') == false) :

?>

    <div class="newsletter-wrapper <?php gcod_home_newsletter_class(); ?>">
        <?php
        $gcod_newsletter_style = gcod_get_theme_mod('gcod_section_home_newsletter_style');

        if ($gcod_newsletter_style) {
            get_template_part('template-parts/home/partials/' . $gcod_newsletter_style);
        }
        ?>
    </div>

<?php
endif;
?>