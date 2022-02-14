<?php

/**
 * Single Related Posts Section.
 *
 * Description.
 *
 * @since 1.0.0
 */
?>
<div class="lastest-posts-wrapper related-posts-wrapper <?php gcod_single_related_posts_classes(); ?> ">
    <?php

    $gcod_related_posts_style = gcod_get_theme_mod('gcod_section_single_related_posts_style');

    if ($gcod_related_posts_style) {
        get_template_part('template-parts/home/partials/' . $gcod_related_posts_style);
    }


    ?>
</div>