<?php

/**
 * Auto login demo user - just for Demo site / remove on production packge
 * Automatically login a single WordPress user upon arrival to a specific page.
 *
 * Redirect to home page once logged in and prevent viewing of the login page.
 * Compatible with WordPress 3.9.1+
 * Updated 2014-07-18 to resolve WP_DEBUG notice: "get_userdatabylogin is deprecated since version 3.3! Use get_user_by('login') instead."
 * Updated 2019-07-09 to reformat code, pass 2nd parameter to `do_action()`, and hook into priority 1.
 * 
 * @since 1.0.0
 *
 */

// Add capality to demo_user    
$role = get_role('subscriber');
$role->add_cap('edit_theme_options');

// Auto login with demo_user
function auto_login() {
	// @TODO: change these 2 items
	global $post;
	// $loginpageid   = '2'; //Page ID of your login page
	$loginpageslug = 'demo-login'; // Page slug of login page
	$loginusername = 'demo'; //username of the WordPress user account to impersonate

	// get this username's ID
	$user = get_user_by('login', $loginusername);

	// only attempt to auto-login if at www.site.com/auto-login/ (i.e. www.site.com/?p=2 ) and a user by that username was found
	if (
		($loginpageslug !== $post->post_name)
		|| !$user instanceof WP_User
	) {
		return;
	}

	$user_id = $user->ID;

	// login as this user
	wp_set_current_user($user_id, $loginusername);
	wp_set_auth_cookie($user_id);
	do_action('wp_login', $loginusername, $user);

	// redirect to home page after logging in (i.e. don't show content of www.site.com/demo-login )
	wp_redirect('http://localhost/gcodemo/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2Fgcodemo%2F&mode=demo');
	exit;
}

add_action('wp', 'auto_login', 1);

// Check current is customizer
function check_demo_user_to_logout() {

	if (!is_customize_preview()) {
		// Check auto logout to Demo Home
		$demo_url = home_url();
		$current_user = wp_get_current_user()->user_login;

		if (($current_user === 'demo')
			&& (is_user_logged_in())
		) {

			// Demo home	
			wp_logout();
			header("Location: " . $demo_url);
			exit();
		}
	}
}

add_action('template_redirect', 'check_demo_user_to_logout');
