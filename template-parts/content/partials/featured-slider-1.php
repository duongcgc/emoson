<?php

$custom_text = '';
$url_text = 'URL Text';
$infor_text = 'Info Text';
$style = 1;

// get slider content
$the_query = gcod_query_featured_slider();

?>
<div class="inner <?php gcod_featured_slider_class(); ?>">
    <div class="featured-slider-content">

        <?php if ($custom_text) { ?>
            <div class="header__module">
                <h3 class="title">
                    <?php if ($url_text) { ?>
                        <a href="<?php echo esc_html($url_text); ?>" title="slider">
                        <?php } else { ?>
                            <span>
                            <?php } ?>
                            <?php echo esc_html($custom_text); ?>
                            <?php if (esc_html($url_text)) { ?>
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
            <div class="slick-slider slidershow-slider posts__module slidershow__module">
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
                                <div class="image">
                                    <a href="<?php echo esc_url($cat_link); ?>" title="slider">
                                        <image src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php printf(esc_html__('%s', 'autumn-theme'),$cat_name); ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="content-text">
                                        <div class="post-cat">
                                            <a href="<?php echo esc_url($cat_link); ?>" title="slider"><?php echo esc_html($cat_name); ?></a>
                                        </div>
                                        <h4 class="post-name">
                                            <a href="<?php echo get_the_permalink(); ?>" title="slider"><?php the_title(); ?></a>
                                        </h4>

                                        <ul class="post-meta">
                                            <li>
                                                <a href="<?php echo esc_url($author_url); ?>" title="slider"><?php echo esc_html($author_name); ?></a>
                                            </li>
                                            <li>
                                                <span><?php the_date(); ?></span>
                                            </li>
                                        </ul>
                                        <div class="post-button">
                                            <a href="<?php echo get_the_permalink(); ?>" title="slider" class="btn wp-block-button__link" tabindex="0">View post <i class="fal fa-arrow-right icon"></i></a>
                                        </div>
                                    </div>

                                    <?php if ($content_image != false) : ?>
                                        <div class="content-image">
                                            <a href="<?php echo esc_url($cat_link); ?>" title="slider">
                                                <image src="<?php echo esc_url($content_image); ?>" alt="<?php printf(esc_html__('%s', 'autumn-theme'),$cat_name); ?>" />
                                            </a>
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
        </div>

    </div>
</div>