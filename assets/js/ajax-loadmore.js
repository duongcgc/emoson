jQuery(function ($) { // use jQuery code inside this to avoid "$ is not defined" error
    $('.gcod_loadmore').click(function () {

        var button = $(this),
            data = {
                'action': 'loadmore',
                'query': gcod_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page': gcod_loadmore_params.current_page
            };

        $.ajax({ // you can also use $.post here
            url: gcod_loadmore_params.ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success: function (data) {
                if (data) {
                    
                    // loading post for post list
                    if ($('body').hasClass('home')) {
                        $('.archive-wrapper > .content__module').append(data); // insert new posts
                    } else if ($('body').hasClass('category')) {
                        $('.archive-wrapper').append(data); // insert new posts
                        $('.archive-wrapper > .archive-pagination').insertAfter('.archive-wrapper');                                        
                    } else if ($('body').hasClass('author')) {
                        $('.archive-wrapper').append(data); // insert new posts
                        $('.archive-wrapper > .archive-pagination').insertAfter('.archive-wrapper');                                
                    } else if ($('body').hasClass('search')) {
                        $('#primary').append(data); // insert new posts
                        $('#primary .archive-pagination').insertAfter('#primary');
                    }                    

                    gcod_loadmore_params.current_page++;

                    if (gcod_loadmore_params.current_page == gcod_loadmore_params.max_page)
                        button.remove(); // if last page, remove the button

                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});