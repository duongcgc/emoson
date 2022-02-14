<?php

/**
 * Home Lastest Post Section Style 2.
 *
 * Description.
 *
 * @since 1.0.0
 */

$custom_text = gcod_get_theme_mod('gcod_section_home_lastest_posts_title');
$url_text = '#';
$infor_text = '';
$style_posts = 2;
$lastest_posts_number     = gcod_get_theme_mod('gcod_section_home_lastest_posts_number_items');

// get posts content
$the_query = gcod_query_lastest_posts();

?>

<div class="lastest-posts-wrapper <?php gcod_home_lastest_posts_class(); ?>">

    <div class="featured-posts-content lastest-posts-content">
        <?php if ($custom_text) { ?>
            <div class="header__module">
                <h3 class="title">
                    <?php if ($url_text) { ?>
                        <a href="<?php echo esc_html($url_text); ?>" title="slider">
                        <?php } else { ?>
                            <span>
                            <?php } ?>
                            <?php echo esc_html($custom_text); ?>
                            <?php if ($url_text) { ?>
                        </a>
                    <?php } else { ?>
                        </span>
                    <?php } ?>
                </h3>
                <?php if ($infor_text) { ?>
                    <p class="infor"><?php echo esc_html($infor_text); ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="content__module">
            <?php if ($style_posts == '1' || $style_posts == '3' || $style_posts == '4') { ?>
                <div class="posts__module style-<?php echo esc_html($style_posts); ?>">

                    <?php

                    // The Loop
                    if ($the_query->have_posts()) :

                        while ($the_query->have_posts()) : $the_query->the_post();

                            // Do Stuff
                            $categories = get_the_category();
                            $cat_name = $categories[0]->cat_name;
                            $cat_link = get_category_link($categories[0]);
                            $author_name = get_the_author();
                            $author_id = get_the_author_meta('ID');
                            $author_url = get_author_posts_url($author_id);
                            $content_image = gcod_get_page_option('gcod_pop_slider_image');
                            if ($content_image == 'global') {
                                $content_image = false;
                            }


                    ?>
                            <div class="item" style="width: calc(100% / <?php echo esc_attr($lastest_posts_number); ?>);">
                                <div class="post">

                                    <?php if (gcod_show_media_thumbnail_on_posts()) : ?>
                                        <?php if (gcod_display_post_element_on_section('element-post-thumnbail')) : ?>
                                            <div class="image">
                                                <a href="<?php echo get_the_permalink(); ?>" title="slider">
                                                    <image src="<?php the_post_thumbnail_url('gcod_thumbnail_post_380'); ?>" alt="<?php echo esc_html($cat_name); ?>" />
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <div class="content">
                                        <?php if (gcod_display_post_element_on_section('element-post-categories')) : ?>
                                            <div class="post-cat">
                                                <a href="<?php echo esc_url($cat_link); ?>" title="slider"><?php echo esc_html($cat_name); ?></a>
                                            </div>
                                        <?php endif; ?>

                                        <h4 class="post-name">
                                            <a href="<?php echo get_the_permalink(); ?>" title="slider"><?php the_title(); ?></a>
                                        </h4>

                                        <?php if ((!gcod_display_post_element_on_section('element-post-author')) && (!gcod_display_post_element_on_section('element-post-date'))) : ?>
                                            <ul class="post-meta">

                                                <?php if (gcod_display_post_element_on_section('element-post-author')) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url($author_url); ?>" title="slider"><?php echo esc_html($author_name); ?></a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if (gcod_display_post_element_on_section('element-post-date')) : ?>
                                                    <li>
                                                        <span><?php echo get_the_date(); ?></span>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <?php if (gcod_display_post_element_on_section('element-post-excerpt')) : ?>

                                            <div class="post-infor">
                                                <p><?php echo gcod_word_count(get_the_excerpt(), 15); ?></p>
                                            </div>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div> <!-- end item -->
                    <?php

                        endwhile;
                    endif;

                    // Reset Post Data
                    wp_reset_postdata();

                    ?>


                </div>
            <?php } else { ?>
                <div class="posts__module style-<?php echo esc_html($style_posts); ?>">

                    <?php

                    // The Loop
                    if ($the_query->have_posts()) :

                        while ($the_query->have_posts()) : $the_query->the_post();

                            // Do Stuff
                            $categories = get_the_category();
                            $cat_name = $categories[0]->cat_name;
                            $cat_link = get_category_link($categories[0]);
                            $author_name = get_the_author();
                            $author_id = get_the_author_meta('ID');
                            $author_url = get_author_posts_url($author_id);
                            $content_image = gcod_get_page_option('gcod_pop_slider_image');
                            if ($content_image == 'global') {
                                $content_image = false;
                            }


                    ?>
                            <div class="item">
                                <div class="post">
                                    <div class="content">
                                        <?php if (gcod_display_post_element_on_section('element-post-categories')) : ?>

                                            <div class="post-cat">
                                                <a href="<?php echo esc_url($cat_link); ?>" title="slider"><?php echo esc_html($cat_name); ?></a>
                                            </div>

                                        <?php endif; ?>

                                        <h4 class="post-name">
                                            <a href="<?php echo get_the_permalink(); ?>" title="slider"><?php the_title(); ?></a>
                                        </h4>
                                        <?php if ((!gcod_display_post_element_on_section('element-post-author')) && (!gcod_display_post_element_on_section('element-post-date'))) : ?>
                                            <ul class="post-meta">

                                                <?php if (gcod_display_post_element_on_section('element-post-author')) : ?>

                                                    <li>
                                                        <a href="<?php echo esc_url($author_url); ?>" title="slider"><?php echo esc_html($author_name); ?></a>
                                                    </li>

                                                <?php endif; ?>

                                                <?php if (gcod_display_post_element_on_section('element-post-date')) : ?>

                                                    <li>
                                                        <span><?php echo get_the_date(); ?></span>
                                                    </li>

                                                <?php endif; ?>

                                            </ul>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (gcod_show_media_thumbnail_on_posts()) : ?>
                                        <?php if (gcod_display_post_element_on_section('element-post-thumnbail')) : ?>

                                            <div class="image">
                                                <a href="<?php echo get_the_permalink(); ?>" title="slider">
                                                    <image src="<?php the_post_thumbnail_url('gcod_thumbnail_post_380'); ?>" alt="<?php echo esc_html($cat_name); ?>" />
                                                </a>
                                            </div>

                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if (gcod_display_post_element_on_section('element-post-excerpt')) : ?>

                                        <div class="content">
                                            <div class="post-infor">
                                                <p><?php echo gcod_word_count(get_the_excerpt(), 15); ?></p>
                                            </div>
                                        </div>

                                    <?php endif; ?>

                                </div>
                            </div> <!-- end item -->
                    <?php
                        endwhile;
                    endif;
                    // Reset Post Data
                    wp_reset_postdata();

                    ?>
                </div>
                <?php if (gcod_display_post_element_on_section('element-post-readmore')) : ?>

                    <div class="post-button is-style-outline">
                        <a href="<?php echo get_the_permalink(); ?>" title="slider" class="btn wp-block-button__link" tabindex="0">Read More</a>
                    </div>
                <?php endif; ?>

            <?php } ?>
        </div>
    </div>

</div>