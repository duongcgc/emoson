<?php
// Instagram 1

if (!defined('ABSPATH')) exit; // Exit if accessed directly 

$instagram_title = gcod_get_theme_mod('gcod_section_home_instagram_title');
$instagram_shortcode = gcod_get_theme_mod('gcod_section_home_instagram_shortcode');

if ($instagram_title != '') : ?>
    <div class="header__module">
        <h3 class="title">
            <?php printf(esc_html__('%s', 'autumn-theme'), $instagram_title); ?>
        </h3>
    </div>
<?php endif; ?>

<?php if ($instagram_shortcode != '') : ?>
    <div class="form__module">

        <?php
        echo do_shortcode($instagram_shortcode);
        ?>

    </div>

<?php endif; ?>