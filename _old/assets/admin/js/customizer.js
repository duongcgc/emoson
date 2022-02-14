(function ($) {

	/* Fontsize */
	wp.customize("gcod_font_size_setting", function (value) {
		value.bind(function (to) {
			$("body").css("fontSize", to + "px");
		});
	});

	/* Line height */
	wp.customize("gcod_line_height_setting", function (value) {
		value.bind(function (to) {
			$("body p, li").css("lineHeight", to + "px");
		});
	});

	/* Line width */
	wp.customize("gcod_line_width_setting", function (value) {
		value.bind(function (to) {
			$("body.single #primary").css("maxWidth", to + "px");
		});
	});

	/* Paragraph Spacing */
	wp.customize("gcod_paragraph_space_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content p").css("marginBottom", to + "px");
		});
	});

	/** 
	 * Headings
	*/
	wp.customize("gcod_heading_1_size_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content h1").css("font-size", to + "px");
		});
	});

	wp.customize("gcod_heading_2_size_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content h2").css("font-size", to + "px");
		});
	});

	wp.customize("gcod_heading_3_size_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content h3").css("font-size", to + "px");
		});
	});

	wp.customize("gcod_heading_4_size_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content h4").css("font-size", to + "px");
		});
	});

	wp.customize("gcod_heading_5_size_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content h5").css("font-size", to + "px");
		});
	});

	wp.customize("gcod_heading_6_size_setting", function (value) {
		value.bind(function (to) {
			$(".entry-content h6").css("font-size", to + "px");
		});
	});

	/** 
	 * Spacings
	*/
	wp.customize("gcod_spacing_page_setting", function (value) {
		value.bind(function (to) {
			$("body").css("padding", to + "px");
			console.log(to);
		});
	});

	wp.customize("gcod_spacing_1_setting", function (value) {
		value.bind(function (to) {
			$(".featured-slider-wrapper, \
			.featured-categories-wrapper, \
			.featured-posts-wrapper, \
			.post-list-wrapper, \
			.lastest-posts-wrapper, \
			.newsletter-wrapper, \
			.instagram-wrapper, \
			.related-posts-wrapper, \
			").css('height', to + "px");
		});
	});

	// Darkmode onoff
	wp.customize("gcod_dark_mode_support", function (value) {
		value.bind(function (to) {

			if (to == true) {

				if ($(".darkmode-wrapper").length > 0) {
					$(".darkmode-wrapper, .darkmode-toggle, .darkmode-layer, .darkmode-background").show();
				} else {
					$(".container-boxed").append('<div class=".darkmode-wrapper"></div>');
				}

			} else {
				$(".darkmode-wrapper, .darkmode-toggle, .darkmode-layer, .darkmode-background").hide();
			}

		});
	});

	// TopBar onoff
	wp.customize("gcod_topbar_enable", function (value) {
		value.bind(function (to) {

			if (to == true) {

				// if exist wrapper then show
				if ($(".topbar-wrapper").length > 0) {
					$(".topbar-wrapper").show();

					// if not exist must create for call_back topbar render
				} else {
					$(".container-boxed").prepend('<div class="topbar-wrapper"></div>');
				}

			} else {
				$(".topbar-wrapper").hide();
			}

		});
	});

	// Header Logo Dark
	wp.customize("gcod_custom_logo_dark", function (value) {
		value.bind(function (to) {
			var img = $('<img />', {
				id: 'header-logo',
				src: to,
				alt: 'header-logo'
			});

			if ( $('#masthead').hasClass('darkmode')) {
				$('.wpmm_brand_logo_wrap a, .gcod_logo a').html(img);
			}
		})
	})

	// Footer Logo
	wp.customize("gcod_footer_logo_url", function (value) {
		value.bind(function (to) {
			var img = $('<img />', {
				id: 'footer-logo',
				src: to,
				alt: 'footer-logo'
			});

			if ( $('#colophon').hasClass('darkmode') == false) {
				$('.footer-logo a').html(img);
			}

		})
	})

	// Footer Logo Dark
	wp.customize("gcod_footer_logo_url_dark", function (value) {
		value.bind(function (to) {
			var img = $('<img />', {
				id: 'footer-logo',
				src: to,
				alt: 'footer-logo'
			});

			if ( $('#colophon').hasClass('darkmode')) {
				$('.footer-logo a').html(img);
			}		
			
		})
	})

	// Footer Photo
	wp.customize("gcod_footer_photo_url", function (value) {
		value.bind(function (to) {
			var img = $('<img />', {
				id: 'footer-photo',
				src: to,
				alt: 'footer-photo'
			});
			$('.footer-photo').html(img);
		})
	})

	// Footer Category Show
	wp.customize("gcod_footer_element_category_title_show", function (value) {
		value.bind(function (to) {

			if (to == true) {

				// if exist wrapper then show
				if ($(".footer-category > h3").length > 0) {
					$(".footer-category > h3").show();

					// if not exist must create for call_back footer render
				} else {
					$(".footer-category").prepend('<h3></h3>');
				}

			} else {
				$(".footer-category > h3").hide();
			}

		});
	});

	// Footer Tag Show
	wp.customize("gcod_footer_element_tags_title_show", function (value) {
		value.bind(function (to) {

			if (to == true) {

				// if exist wrapper then show
				if ($(".footer-tags > h3").length > 0) {
					$(".footer-tags > h3").show();

					// if not exist must create for call_back footer render
				} else {
					$(".footer-tags").prepend('<h3></h3>');
				}

			} else {
				$(".footer-tags > h3").hide();
			}

		});
	});

	// Footer Lastest Posts Show
	wp.customize("gcod_footer_element_lastest_posts_title_show", function (value) {
		value.bind(function (to) {

			if (to == true) {

				// if exist wrapper then show
				if ($(".footer-lastest-posts > h3").length > 0) {
					$(".footer-lastest-posts > h3").show();

					// if not exist must create for call_back footer render
				} else {
					$(".footer-lastest-posts").prepend('<h3></h3>');
				}

			} else {
				$(".footer-lastest-posts > h3").hide();
			}

		});
	});

	// Footer Social Icons Show
	wp.customize("gcod_footer_element_social_icons_title_show", function (value) {
		value.bind(function (to) {

			if (to == true) {

				// if exist wrapper then show
				if ($(".footer-social-icons > h3").length > 0) {
					$(".footer-social-icons > h3").show();

					// if not exist must create for call_back topbar render
				} else {
					$(".footer-social-icons").prepend('<h3></h3>');
				}

			} else {
				$(".footer-social-icons > h3").hide();
			}

		});
	});

})(jQuery);