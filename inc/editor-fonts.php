<?php

/**
 * Returns an array of Google Font options
 * @return array of font styles.
 * @package     Autumn Theme
 * @link        https://gco.vn/themes/copress
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function gcod_get_fonts() {

	$fonts = array(
		'Abril Fatface'       => 'Abril Fatface',
		'georgia'             => 'Georgia',
		'helvetica'           => 'Helvetica',
		'Lato'                => 'Lato',
		'Lora'                => 'Lora',
		'Karla'               => 'Karla',
		'Josefin Sans'        => 'Josefin Sans',
		'Mulish'              => 'Mulish',
		'Montserrat'          => 'Montserrat',
		'Oswald'              => 'Oswald',
		'Overpass'            => 'Overpass',
		'Poppins'             => 'Poppins',
		'PT Sans'             => 'PT Sans',
		'Roboto'              => 'Roboto',
		'Fira Sans Condensed' => 'Fira Sans',
		'times'               => 'Times New Roman',
		'Nunito'              => 'Nunito',
		'Merriweather'        => 'Merriweather',
		'Rubik'               => 'Rubik',
		'Playfair Display'    => 'Playfair Display',
		'Spectral'            => 'Spectral',
	);

	return apply_filters('gcod_site_editor_fonts', $fonts);
}
