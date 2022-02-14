<?php
$custom_text = gcod_get_theme_mod('gcod_featured_categories_style_title');
$url_text = '#';
$infor_text = '';
$categories_style = 2;
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
                        $cat_thumbnail = get_term_meta($cat_id, 'gcod_cop_thumbnail_photo');

                    ?>

                        <div class="item" style="width: calc(100% / <?php echo esc_attr($categories_number_items)?>)">
                            <div class="category">
                                <div class="image">
                                    <a href="<?php echo esc_url($cat_link); ?>" title="slider">
                                        <image src="<?php echo esc_url($cat_thumbnail[0]); ?>" alt="<?php printf(esc_html__('%s', 'autumn-theme'),$cat_name); ?>" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="categoty-name">
                                        <a href="<?php echo esc_url($cat_link); ?>" title="slider">
                                            <?php printf(esc_html__('%s', 'autumn-theme'),$cat_name); ?>
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