<?php

/**
 * Home Post List Section.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Home Blog Loop
?>
<div class="home-postlist-container">
    <?php
    $gcod_post_list_style = gcod_get_theme_mod('gcod_section_home_post_list_style');
    if ($gcod_post_list_style) {
        get_template_part('template-parts/home/partials/' . $gcod_post_list_style);
    }
    ?>
</div>