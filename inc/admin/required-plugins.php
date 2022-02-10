<?php

/**
 * TGMPA Required Plugins.
 *
 * Register the required plugins for this theme.
 *
 * @package     Autumn Theme
 * @link        https://gco.vn/themes/copress
 */

/**
 * Register the required plugins for this theme.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function gcod_register_required_plugins() {
    /*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */

    $server_link = 'https://gcodesign.com/gcod-plugins/autumn/';

    $args = array(

        // This is core plugin for this theme (from github).
        array(
            'name'               => __('GCO Theme Core Plugin', 'autumn-theme'), // The plugin name.
            'slug'               => 'gcod-core', // The plugin slug (typically the folder name).                                     
            'source'             => $server_link . 'gcod-core.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // // This is plugin container elementor widgets for this theme.
        array(
            'name'               => __('GCO Elementors Plugin', 'autumn-theme'), // The plugin name.
            'slug'               => 'gcod-autumn-elementors', // The plugin slug (typically the folder name).
            'source'             => $server_link . 'gcod-autumn-elementors.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // // This is plugin container widgets for this theme.
        array(
            'name'               => __('GCO Theme Widgets Plugin', 'autumn-theme'), // The plugin name.
            'slug'               => 'gcod-autumn-widgets', // The plugin slug (typically the folder name).
            'source'             => $server_link . 'gcod-autumn-widgets.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // This is plugin for Page Builder.
        array(
            'name'      => __('Elementor Website Builder', 'autumn-theme'),
            'slug'      => 'elementor',
            'required'  => true,
        ),
        // This is plugin for Instant Insert Images from Unsflash, ...
        array(
            'name'      => __('Instant Images', 'autumn-theme'),
            'slug'      => 'instant-images',
            'required'  => false,
        ),

        // This is plugin for Breadcrumb Feature
        array(
            'name'      => __('Breadcrumb Navxt', 'autumn-theme'),
            'slug'      => 'breadcrumb-navxt',
            'required'  => true,
        ),

        // This is plugin for Reading Time and Progress Timeline
        array(
            'name'      => __('Reading Time', 'autumn-theme'),
            'slug'      => 'read-meter',
            'required'  => true,
        ),

        // This is plugin for Social Feed - Instagram - Facebook
        array(
            'name'      => __('Social Slider Feed', 'autumn-theme'),
            'slug'      => 'instagram-slider-widget',
            'required'  => true,
        ),

        // This is plugin for Newsletter
        array(
            'name'      => __('Mailchimp for WordPress', 'autumn-theme'),
            'slug'      => 'mailchimp-for-wp',
            'required'  => true,
        ),

        // This is plugin for Author Post
        array(
            'name'      => __('WP Post Author', 'autumn-theme'),
            'slug'      => 'wp-post-author',
            'required'  => true,
        ),

        // This is plugin for Mega Menu
        array(
            'name'      => __('WP Mega Menu', 'autumn-theme'),
            'slug'      => 'wp-megamenu',
            'source'    => $server_link . 'wp-megamenu-fixed.zip', // The plugin source.
            'required'  => true,
        ),

    );

    $plugins = apply_filters('gcod_recommended_plugins', $args);

    /*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
    $config = array(
        'id'           => 'autumn-theme',              // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be at the top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'gcod_register_required_plugins');
