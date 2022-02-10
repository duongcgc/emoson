<?php

/**
 * Home Lastest Post Section.
 *
 * Description.
 *
 * @since 1.0.0
 */
?>
<div class="home-lastest-posts-container">
    <?php
    $gcod_lastest_posts_style = gcod_get_theme_mod('gcod_section_home_lastest_posts_style');

    if ($gcod_lastest_posts_style) {
        get_template_part('template-parts/home/partials/' . $gcod_lastest_posts_style);
    }
    ?>
</div>