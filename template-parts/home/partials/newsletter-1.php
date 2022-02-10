<?php
// Newsletter 1

if (!defined('ABSPATH')) exit; // Exit if accessed directly 

$newsletter_title = gcod_get_theme_mod('gcod_section_home_newsletter_title');
$newsletter_shortcode = gcod_get_theme_mod('gcod_section_home_newsletter_shortcode');

if ($newsletter_title != '') : ?>
    <div class="header__module">
        <h3 class="title">
            <?php 
                printf(esc_html__('%s', 'autumn-theme'), $newsletter_title);                 
            ?>
        </h3>
    </div>
<?php endif; ?>

<?php if ($newsletter_shortcode != '') : ?>
    <div class="form__module">

        <?php
        echo do_shortcode($newsletter_shortcode);
        ?>

    </div>

<?php endif; ?>