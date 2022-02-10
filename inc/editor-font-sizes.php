<?php /**
 * Editor font sizes theme support.
 *
 * Description.
 *
 * @since 1.0.0
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( !function_exists('gcod_editor_font_sizes_theme_support') ) {
    
   function gcod_editor_font_sizes_theme_support() {
      /**
       * Custom font sizes for use in the editor.
       *
       * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#block-font-sizes
       */
      add_theme_support(
         'editor-font-sizes',
         array(
            array(
               'name'      => esc_html__('Small', 'autumn-theme'),
               'shortName' => esc_html__('S', 'autumn-theme'),
               'size'      => 16,
               'slug'      => 'small',
            ),
            array(
               'name'      => esc_html__('Medium', 'autumn-theme'),
               'shortName' => esc_html__('M', 'autumn-theme'),
               'size'      => 19,
               'slug'      => 'medium',
            ),
            array(
               'name'      => esc_html__('Large', 'autumn-theme'),
               'shortName' => esc_html__('L', 'autumn-theme'),
               'size'      => 24,
               'slug'      => 'large',
            ),
            array(
               'name'      => esc_html__('Huge', 'autumn-theme'),
               'shortName' => esc_html__('XL', 'autumn-theme'),
               'size'      => 30,
               'slug'      => 'huge',
            ),
         )
      );
   }

   add_action('after_setup_theme', 'gcod_editor_font_sizes_theme_support');

}