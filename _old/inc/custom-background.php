<?php /**
 * Custom background theme support.
 *
 * Description.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (!function_exists('gcod_custom_background_theme_support')) {
   function gcod_custom_background_theme_support() {
      /**
       * Filter York Pro's custom-background support argument.
       *
       * @param array $args {
       *     An array of custom-background support arguments.
       * }
       */
      add_theme_support(
         'custom-background',
         apply_filters(
            'york_custom_background_args',
            array(
               'default-color' => 'ffffff',
               'default-image' => '',
            )
         )
      );
   }
}

add_action( 'after_setup_theme', 'gcod_custom_background_theme_support' );
