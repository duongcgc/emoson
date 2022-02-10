<?php 
/**
 * Home Instagram Section.
 *
 * Description.
 *
 * @since 1.0.0
 */

if (gcod_get_theme_mod('gcod_section_home_instagram_below_main') == false) :
?>

<div class="instagram-wrapper <?php gcod_home_instagram_class(); ?>">
    <?php
    $gcod_instagram_style = gcod_get_theme_mod('gcod_section_home_instagram_style');

    if ($gcod_instagram_style) {
        get_template_part('template-parts/home/partials/' . $gcod_instagram_style);
    }
    ?>
</div>

<?php endif; ?>