<?php
/**
 * Dashboard functions
 *
 * @package     Autumn Theme Admin
 * @link        https://gco.vn/
 */

/**
 * Retrieve the current theme's name or URL slug.
 *
 * @param string|string $url URL or not.
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function gcod_get_theme( $url ) {

	// Get the parent theme's name.
	$theme = esc_attr( wp_get_theme( get_template() )->get( 'Name' ) );

	// Replace spaces with hypens, and makes it lowercase for links.
	if ( true === $url ) {
		$theme = strtolower( $theme );
		$theme = str_replace( ' ', '-', $theme );
		$theme = preg_replace( '#[ -]+#', '-', $theme );
	} else {
		$theme = str_replace( '_', ' ', $theme );
	}

	return $theme;
}

/**
 * Theme changelog in footer admin.
 *
 * @param string|string $html WordPress version.
 */
function gcod_dashboard_footer_version( $html ) {

	// Get the parent theme's current version number.
	$version = wp_get_theme( get_template() )->get( 'Version' );
	$html   .= ' | ' . esc_html( gcod_get_theme( false ) . '&nbsp;' . $version );

	return $html;
}

/**
 * This function takes a css-string and compresses it, removing
 * unneccessary whitespace, colons, removing unneccessary px/em
 * declarations etc.
 *
 * @param string $css Styles to be minified.
 * @return string compressed css content
 * @see https://github.com/Schepp/CSS-JS-Booster
 */
function gcod_minify_css( $css ) {
	// Remove comments.
	$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );

	// Backup values within single or double quotes.
	preg_match_all( '/(\'[^\']*?\'|"[^"]*?")/ims', $css, $hit, PREG_PATTERN_ORDER );
	$count = count( $hit[1] );
	for ( $i = 0; $i < $count; $i++ ) {
		$css = str_replace( $hit[1][ $i ], '##########' . $i . '##########', $css );
	}

	// Remove traling semicolon of selector's last property.
	$css = preg_replace( '/;[\s\r\n\t]*?}[\s\r\n\t]*/ims', "}\r\n", $css );

	// Remove any whitespace between semicolon and property-name.
	$css = preg_replace( '/;[\s\r\n\t]*?([\r\n]?[^\s\r\n\t])/ims', ';$1', $css );

	// Remove any whitespace surrounding property-colon.
	$css = preg_replace( '/[\s\r\n\t]*:[\s\r\n\t]*?([^\s\r\n\t])/ims', ':$1', $css );

	// Remove any whitespace surrounding selector-comma.
	$css = preg_replace( '/[\s\r\n\t]*,[\s\r\n\t]*?([^\s\r\n\t])/ims', ',$1', $css );

	// Remove any whitespace surrounding opening parenthesis.
	$css = preg_replace( '/[\s\r\n\t]*{[\s\r\n\t]*?([^\s\r\n\t])/ims', '{$1', $css );

	// Remove any whitespace between numbers and units.
	$css = preg_replace( '/([\d\.]+)[\s\r\n\t]+(px|em|pt|%)/ims', '$1$2', $css );

	// Shorten zero-values.
	$css = preg_replace( '/([^\d\.]0)(px|em|pt|%)/ims', '$1', $css );

	// Constrain multiple whitespaces.
	$css = preg_replace( '/\p{Zs}+/ims', ' ', $css );

	// Remove newlines.
	$css = str_replace( array( "\r\n", "\r", "\n" ), '', $css );

	// Restore backupped values within single or double quotes.
	$count = count( $hit[1] );
	for ( $i = 0; $i < $count; $i++ ) {
		$css = str_replace( '##########' . $i . '##########', $hit[1][ $i ], $css );
	}
	return $css;
}