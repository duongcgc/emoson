<?php /**
 * Defined editor color palette.
 *
 * Description.
 *
 * @since 1.0.0
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( !function_exists('gcod_editor_color_palette_theme_support') ) {

   function gcod_editor_color_palette_theme_support() {
      /**
       * Custom colors for use in the editor.
       *
       * @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
       */
      add_theme_support(
         'editor-color-palette',
         array(
            array(
               'name'  => esc_html__('Black', 'autumn-theme'),
               'slug'  => 'black',
               'color' => '#2a2a2a',
            ),
            array(
               'name'  => esc_html__('Gray', 'autumn-theme'),
               'slug'  => 'gray',
               'color' => '#727477',
            ),
            array(
               'name'  => esc_html__('Light Gray', 'autumn-theme'),
               'slug'  => 'light-gray',
               'color' => '#f8f8f8',
            ),
            array(
               'name'  => esc_html__('White', 'autumn-theme'),
               'slug'  => 'white',
               'color' => '#ffffff',
            ),
            array(
               'name'  => esc_html__('Titan White', 'autumn-theme'),
               'slug'  => 'titan-white',
               'color' => '#E0D8E2',
            ),
            array(
               'name'  => esc_html__('Tropical Blue', 'autumn-theme'),
               'slug'  => 'tropical-blue',
               'color' => '#C5DCF3',
            ),
            array(
               'name'  => esc_html__('Peppermint', 'autumn-theme'),
               'slug'  => 'peppermint',
               'color' => '#d0eac4',
            ),
            array(
               'name'  => esc_html__('Iceberg', 'autumn-theme'),
               'slug'  => 'iceberg',
               'color' => '#D6EFEE',
            ),
            array(
               'name'  => esc_html__('Bridesmaid', 'autumn-theme'),
               'slug'  => 'bridesmaid',
               'color' => '#FBE7DD',
            ),
            array(
               'name'  => esc_html__('Pipi', 'autumn-theme'),
               'slug'  => 'pipi',
               'color' => '#fbf3d6',
            ),
            array(
               'name'  => esc_html__('Accent', 'autumn-theme'),
               'slug'  => 'accent',
               'color' => esc_html(gcod_get_theme_mod('theme_accent_color')),
            ),
         )
      );
   }

   add_action('after_setup_theme', 'gcod_editor_color_palette_theme_support');

}