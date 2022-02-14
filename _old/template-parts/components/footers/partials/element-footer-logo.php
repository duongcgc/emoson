<?php 

$footer_logo_link = gcod_get_footer_logo_url();

?>
<div class="footer-logo">
    <?php
    if (gcod_get_theme_mod('gcod_footer_logo_url')) {
        echo '<a href="';
        echo get_home_url();
        echo '"><img src="';
        echo esc_url($footer_logo_link);
        echo '" alt="gcod autumn theme"></a>';
    } else {
        // sync default to customizer
        gcod_set_theme_mod('gcod_footer_logo_url');
    }

    ?>
</div>