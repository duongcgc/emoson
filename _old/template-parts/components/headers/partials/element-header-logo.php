<?php

// Dispaly Custom Logo and Link to Home
$click_link = get_home_url();
$logo_link = gcod_get_logo_url();

// sync default into customizer setting
gcod_set_theme_mod('custom_logo', $logo_link);

$html_logo  = '<div class="gcod_logo"><a href="';
$html_logo  .= $click_link;
$html_logo  .= '"><img src="';
$html_logo  .= $logo_link;
$html_logo  .= '" alt=""/></a></div>';

printf($html_logo);