<?php

// Get display and order icons
$gcod_social_icons_display = gcod_get_theme_mod('gcod_social_icons_setting');

?>
 

<div class="gcod-social-icons">
    <?php

    foreach ($gcod_social_icons_display as $gcod_social_icon) :
        $icon_name = str_replace("icon-", "", $gcod_social_icon);
        $social_url = gcod_get_theme_mod('gcod_' . $icon_name . '_uri');
        $social_icon = 'fa-' . $icon_name;
    ?>
        <a href="<?php echo esc_url($social_url); ?>" aria-label="<?php echo esc_attr($icon_name); ?>"></a>

    <?php
    endforeach;
    ?>
</div>