<div class="footer-photo">
    <?php

    if (gcod_get_theme_mod('gcod_footer_photo_url')) {
        echo '<img src="';
        echo gcod_get_theme_mod('gcod_footer_photo_url');
        echo '" alt="footer photo">';
    }

    // sync default to customizer
    gcod_set_theme_mod('gcod_footer_photo_url');

    ?>
</div>