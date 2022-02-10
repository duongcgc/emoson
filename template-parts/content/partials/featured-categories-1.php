<?php
$custom_text = gcod_get_theme_mod('gcod_featured_categories_style_title');
$url_text = '#';
$infor_text = '';
$categories_style = 1;
$categories_number_items = gcod_get_theme_mod('gcod_featured_categories_number_items');

// get categories content
$category_list = gcod_query_featured_categories();
$background_color = gcod_get_theme_mod('gcod_featured_categories_background_color');

?>
<div class="featured-categories-wrapper <?php gcod_featured_categories_class(); ?>" style="background:<?php echo esc_attr($background_color); ?>">
    <div class="inner-featured-categories">
        <div class="featured-categories-content">
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
                <div class="slick-slider categories-slider categories__module">
                    <?php
                    foreach ($category_list as $category) :
                        $cat_link = get_category_link($category);
                        $cat_name = $category->cat_name;
                        $cat_id = $category->cat_ID;
                        $term_id = $category->term_id;
                        $cat_thumbnail = get_term_meta($cat_id, 'gcod_cop_thumbnail_photo')[0];
                        $cat_thumbnail_295 = str_replace('.', '-295x295.', $cat_thumbnail);

                        // If exist thumbnail size 295x295
                        if (file_exists($cat_thumbnail_295)) {
                            $cat_thumbnail = $cat_thumbnail_295;
                        }

                        // Check set thumbnail category
                        if ($cat_thumbnail == '') {
                            $cat_thumbnail = get_template_directory_uri() . '/assets/images/place-holder.jpg';
                        }

                    ?>
                        <div class="item" style="width: calc(100% / <?php echo esc_attr($categories_number_items);?>)">
                            <div class="category">
                                <div class="image">
                                    <a href="<?php echo esc_url($cat_link); ?>" title="slider">
                                        <image width="295" height="295" src="<?php echo esc_url($cat_thumbnail); ?>" alt="<?php printf(esc_html__('%s', 'autumn-theme'),$cat_name); ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="categoty-name">
                                        <a href="<?php echo esc_url($cat_link); ?>" title="slider">
                                            <?php echo esc_html($cat_name); ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div> <!-- end item -->
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>