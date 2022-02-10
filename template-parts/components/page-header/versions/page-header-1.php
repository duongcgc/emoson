<?php if (is_single()) : ?>
    <h3 class="single-cat-name">
        <?php

        $current_cat = get_the_category();
        $current_cat_name = $current_cat[0]->name;
        $current_cat_link = '';

        ?>
        <a href="<?php echo esc_url($current_cat_link); ?>">
            <?php printf(esc_html__('%s', 'autumn-theme'),$current_cat_name); ?>
        </a>
    </h3>
<?php endif; ?>

<h1 class="single-heading">
    <?php
    gcod_current_page_name_header();
    ?>
</h1>

<?php if (is_single()) : ?>
<div class="entry-meta">
    <?php
        gcod_entry_meta();
    ?>
</div><!-- .entry-meta -->
<?php endif; ?>

<?php
if (function_exists('bcn_display') && (gcod_breadcrumb_style() != false) && (!is_single()) && (!is_author())) :

?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php
        bcn_display(); ?>

    </div>
<?php

endif;

?>