<?php

/**
 * Merlin WP Configuration file.
 *
 * @package     Autumn Theme Admin
 * @link        https://gco.vn/
 */

if (!class_exists('Merlin')) {
	return;
}

require_once get_template_directory() . '/inc/admin/merlin/includes/class-merlin-hooks.php';

class GCOD_Theme_Setup_Hooks extends Merlin_Hooks {

	/**
	 * Wrapper function for the after all import action hook.
	 *
	 * @param int $selected_import_index The selected demo import index.
	 */
	public function after_all_import_action( $selected_import_index ) {


		// For Homes =========================	

		if ($selected_import_index == 0) {
			include get_template_directory() . '/inc/demo/autumn-festival/settings.php';
		} else if ($selected_import_index == 1) {
			include get_template_directory() . '/inc/demo/autumn-freeman/settings.php';		
		} else if ($selected_import_index == 2) {
			include get_template_directory() . '/inc/demo/autumn-mountain/settings.php';
		}

		do_action( 'merlin_after_all_import', $selected_import_index );

		return true;
	}

}


class GCOD_Theme_Setup extends Merlin {

	/**
	 * Require necessary classes.
	 */
	function required_classes() {
		if ( ! class_exists( '\WP_Importer' ) ) {
			require ABSPATH . '/wp-admin/includes/class-wp-importer.php';
		}

		require_once trailingslashit( $this->base_path ) . $this->directory . '/includes/class-merlin-downloader.php';

		$this->importer = new ProteusThemes\WPContentImporter2\Importer( array( 'fetch_attachments' => true ), $this->logger );

		require_once trailingslashit( $this->base_path ) . $this->directory . '/includes/class-merlin-widget-importer.php';

		if ( ! class_exists( 'WP_Customize_Setting' ) ) {
			require_once ABSPATH . 'wp-includes/class-wp-customize-setting.php';
		}

		require_once trailingslashit( $this->base_path ) . $this->directory . '/includes/class-merlin-customizer-option.php';
		require_once trailingslashit( $this->base_path ) . $this->directory . '/includes/class-merlin-customizer-importer.php';
		require_once trailingslashit( $this->base_path ) . $this->directory . '/includes/class-merlin-redux-importer.php';
		require_once trailingslashit( $this->base_path ) . $this->directory . '/includes/class-merlin-hooks.php';
		

		$this->hooks = new GCOD_Theme_Setup_Hooks();

		if ( class_exists( 'EDD_Theme_Updater_Admin' ) ) {
			$this->updater = new EDD_Theme_Updater_Admin();
		}
	}


}


/**
 * Set directory locations, text strings, and settings.
 */

$wizard = new GCOD_Theme_Setup(

	$config  = array(
		'directory'            => 'inc/admin/merlin',
		'merlin_url'           => 'merlin',
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes',
		'dev_mode'             => false,
		'license_step'         => false,
		'license_required'     => false,
		'license_help_url'     => 'https://kb.gco.com/article/14-license-activation-guide',
		'edd_remote_api_url'   => 'https://gcodesign.com',
		'edd_item_name'        => esc_attr(gcod_get_theme(false)),
		'edd_theme_slug'       => esc_attr(gcod_get_theme(true)),
	),

	$strings = array(
		'admin-menu'               => esc_html__('Theme Setup', 'autumn-theme'),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__('%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'autumn-theme'),
		'return-to-dashboard'      => esc_html__('Return to the Dashboard', 'autumn-theme'),
		'ignore'                   => esc_html__('Disable Wizard', 'autumn-theme'),

		'btn-skip'                 => esc_html__('Skip', 'autumn-theme'),
		'btn-next'                 => esc_html__('Next', 'autumn-theme'),
		'btn-start'                => esc_html__('Start', 'autumn-theme'),
		'btn-no'                   => esc_html__('Cancel', 'autumn-theme'),
		'btn-plugins-install'      => esc_html__('Install', 'autumn-theme'),
		'btn-child-install'        => esc_html__('Install', 'autumn-theme'),
		'btn-content-install'      => esc_html__('Install', 'autumn-theme'),
		'btn-import'               => esc_html__('Import', 'autumn-theme'),
		'btn-license-activate'     => esc_html__('Activate', 'autumn-theme'),
		'btn-license-skip'         => esc_html__('Later', 'autumn-theme'),

		/* translators: Theme Name */
		'license-header%s'         => esc_html__('Activate %s', 'autumn-theme'),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__('%s is Activated', 'autumn-theme'),
		/* translators: Theme Name */
		'license%s'                => esc_html__('Enter your license key to enable remote updates and theme support.', 'autumn-theme'),
		'license-label'            => esc_html__('License key', 'autumn-theme'),
		/* translators: Theme Name */
		'license-success%s'        => esc_html__('%s is already registered and activated. Please proceed to the next step.', 'autumn-theme'),
		'license-tooltip'          => esc_html__('Need help?', 'autumn-theme'),
		'license-json-success%s'   => esc_html__('Your theme is activated! Remote updates and theme support are enabled.', 'autumn-theme'),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__('Welcome to %s', 'autumn-theme'),
		'welcome-header-success%s' => esc_html__('Hi. Welcome back', 'autumn-theme'),
		'welcome%s'                => esc_html__('This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'autumn-theme'),
		'welcome-success%s'        => esc_html__('You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'autumn-theme'),

		'child-header'             => esc_html__('Install Child Theme', 'autumn-theme'),
		'child-header-success'     => esc_html__('You\'re good to go!', 'autumn-theme'),
		'child'                    => esc_html__('Let\'s build & activate a child theme so you may easily make theme changes.', 'autumn-theme'),
		'child-success%s'          => esc_html__('Your child theme has already been installed and is now activated, if it wasn\'t already.', 'autumn-theme'),
		'child-action-link'        => esc_html__('Learn about child themes', 'autumn-theme'),
		'child-json-success%s'     => esc_html__('Awesome. Your child theme has already been installed and is now activated.', 'autumn-theme'),
		'child-json-already%s'     => esc_html__('Awesome. Your child theme has been created and is now activated.', 'autumn-theme'),

		'plugins-header'           => esc_html__('Install Plugins', 'autumn-theme'),
		'plugins-header-success'   => esc_html__('You\'re up to speed!', 'autumn-theme'),
		'plugins'                  => esc_html__('Let\'s install some essential WordPress plugins to get your site up to speed.', 'autumn-theme'),
		'plugins-success%s'        => esc_html__('The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'autumn-theme'),
		'plugins-action-link'      => esc_html__('Advanced', 'autumn-theme'),

		'import-header'            => esc_html__('Import Content', 'autumn-theme'),
		'import'                   => esc_html__('Let\'s import content to your website, to help you get familiar with the theme.', 'autumn-theme'),
		'import-action-link'       => esc_html__('Advanced', 'autumn-theme'),

		'ready-header'             => esc_html__('All done. Have fun!', 'autumn-theme'),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__('Your theme has been all set up. Enjoy your new theme by %s.', 'autumn-theme'),
		'ready-action-link'        => esc_html__('Extras', 'autumn-theme'),
		'ready-big-button'         => esc_html__('View your website', 'autumn-theme'),
		'ready-link-1'             => sprintf('<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__('Explore WordPress', 'autumn-theme')),
		'ready-link-2'             => sprintf('<a href="%1$s" target="_blank">%2$s</a>', 'https://gcodesign.com/contact/', esc_html__('Get Theme Support', 'autumn-theme')),
		'ready-link-3'             => sprintf('<a href="%1$s">%2$s</a>', admin_url('customize.php'), esc_html__('Start Customizing', 'autumn-theme')),
	)
);

/**
 * Filter demo content.
 */
function gcod_merlin_import_files() {

	return array(
		array(
			'import_file_name'             => esc_html__('Home Festival', 'autumn-theme'),
			'local_import_file'            => get_parent_theme_file_path('/inc/demo/autumn-festival/content.xml'),
			'local_import_widget_file'     => get_parent_theme_file_path('/inc/demo/autumn-festival/widgets.wie'),
			'local_import_customizer_file' => get_parent_theme_file_path('/inc/demo/autumn-festival/customizer.dat'),
			
		),
		array(
			'import_file_name'             => esc_html__('Home Freeman', 'autumn-theme'),
			'local_import_file'            => get_parent_theme_file_path('/inc/demo/autumn-freeman/content.xml'),
			'local_import_widget_file'     => get_parent_theme_file_path('/inc/demo/autumn-freeman/widgets.wie'),
			'local_import_customizer_file' => get_parent_theme_file_path('/inc/demo/autumn-freeman/customizer.dat'),
		),
		array(
			'import_file_name'             => esc_html__('Home Mountain', 'autumn-theme'),
			'local_import_file'            => get_parent_theme_file_path('/inc/demo/autumn-mountain/content.xml'),
			'local_import_widget_file'     => get_parent_theme_file_path('/inc/demo/autumn-mountain/widgets.wie'),
			'local_import_customizer_file' => get_parent_theme_file_path('/inc/demo/autumn-mountain/customizer.dat'),
		),
	);
}
add_filter('merlin_import_files', 'gcod_merlin_import_files');

/**
 * Enqueue an inline style for Merlin WP.
 */
function gcod_merlin_inline_styles() {
	wp_add_inline_style('merlin', '.merlin__drawer--import-content li[data-content="after_import"] { display: none; }');
}
add_action('admin_print_styles', 'gcod_merlin_inline_styles');

/**
 * Filter the license registration check.
 *
 * @return boolean
 */
function gcod_merlin_is_theme_registered() {

	// If for some reason the licensing class is not found, return.
	if (!class_exists('Gcod_License')) {
		return;
	}

	$license       = new Gcod_License();
	$status        = $license->status();
	$is_registered = ('valid' === $status) ? true : false;

	return $is_registered;
}
add_filter('merlin_is_theme_registered', 'gcod_merlin_is_theme_registered');

/**
 * Filter the generated child theme's functions.php file.
 *
 * @param string $output Generated content.
 * @param string $slug Parent theme slug.
 */
function gcod_merlin_child_functions_php($output, $slug) {

	// Get the parent theme.
	$theme = gcod_get_theme(false);

	$output = "
		<?php
		/**
		 * {$theme} Child Theme functions and definitions.
		 * This child theme was generated by Merlin WP.
		 *
		 * @package {$theme}
		 * @author  ThemeBeans + Merlin WP <hello@themebeans.com>
		 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
		 *
		 * @link https://developer.wordpress.org/themes/basics/theme-functions/
		 *
		 * When using a child theme you can override certain functions (those wrapped
		 * in a function_exists() call) by defining them first in your child theme's
		 * functions.php file. The child theme's functions.php file is included before
		 * the parent theme's file, so the child theme functions would be used.
		 *
		 * @link https://codex.wordpress.org/Child_Themes
		 */\n\n
	";

	// Let's remove the tabs so that it displays nicely.
	$output = trim(preg_replace('/\t+/', '', $output));

	// Filterable return.
	return $output;
}
add_filter('merlin_generate_child_functions_php', 'gcod_merlin_child_functions_php', 10, 2);

/**
 * Unset default widgets from specific Widget Areas.
 * If your theme's first widget area is "sidebar-1", you don't need this.
 *
 * @see https://stackoverflow.com/questions/11757461/how-to-populate-widgets-on-sidebar-on-theme-activation
 *
 * @param  array $widget_areas Arguments for the sidebars_widgets widget areas.
 * @return array of arguments to update the sidebars_widgets option.
 */
function gcod_merlin_unset_default_widgets_args($widget_areas) {

	// Get the parent theme.
	$theme = gcod_get_theme(true);

	if ('autumn-theme' === $theme) {
		$widget_areas = array(
			'sidebar-2' => array(),
			'sidebar-3' => array(),
		);
	}

	return $widget_areas;
}
add_filter('merlin_unset_default_widgets_args', 'gcod_merlin_unset_default_widgets_args');

/**
 * Assign menus after the import has finished.
 */
function gcod_merlin_after_import() {

	

}
add_action('merlin_after_all_import', 'gcod_merlin_after_import');