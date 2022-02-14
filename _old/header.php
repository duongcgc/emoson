<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autumn Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>	

	<?php 
		if (is_user_logged_in() && gcod_get_theme_mod('gcod_show_quick_guide_setting') ) {
			gcod_quick_guide_setting();			
		} 

	?>

	<div id="page" class="site">
		<div class="container-boxed <?php gcod_container_class(); ?>">

			<div class="container-header <?php echo gcod_page_header_style(); ?>">

				<div class="header-wrapper <?php gcod_header_class(); ?>">

					<?php
					// Header layout  
					get_template_part('template-parts/components/headers/header', 'template');
					?>

				</div>

				<?php

				// Page Header
				get_template_part('template-parts/components/page-header/page', 'header');

				?>
			</div> <!-- End of .container-header  -->