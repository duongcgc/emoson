<?php

/**
 * TopBar Template.
 *
 * @since 1.0.0
 */

$gcod_topbar_layout = get_theme_mod('gcod_layout_topbar', 'topbar');
new GCOD_TopBar($gcod_topbar_layout);

do_action('gcod_render_topbar_elements');