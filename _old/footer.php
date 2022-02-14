<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autumn Theme
 */

// If sections home is show below main content
gcod_display_home_lastest_posts();
gcod_display_home_newsletter();
gcod_display_home_instagram(); 

?>

<div class="footer-wrapper <?php gcod_footer_class(); ?>">

	<?php

	// Footer layout
	get_template_part('template-parts/components/footers/footer', 'template');

	?>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<?php if (get_theme_mod('gcod_dark_mode_support', false)) : ?>
	<div class=".darkmode-wrapper">
		<?php gcod_switch_darkmode_button(); ?>
	</div>
<?php endif; ?>

</div><!-- .container-boxed -->
</body>

</html>