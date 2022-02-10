<?php

/**
 * Template part for displaying pages 404
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autumn Theme
 */

?>

<section class="error-404 not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'autumn-theme'); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'autumn-theme'); ?></p>

        <?php
        get_search_form();

        // Related posts
        get_template_part('template-parts/home/sections/section-home','lastest-posts');

        ?>

    </div><!-- .page-content -->
</section><!-- .error-404 -->