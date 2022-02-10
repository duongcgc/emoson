jQuery(function ($) {
    var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
        bottomOffset = 2000; // the distance (in px) from the page bottom when you want to load more posts

    $(window).scroll(function () {
        var data = {
            'action': 'loadmore',
            'query': gcod_loadmore_params.posts,
            'page': gcod_loadmore_params.current_page
        };
        if ($(document).scrollTop() > ($(document).height() - bottomOffset) && canBeLoaded == true) {
            $.ajax({
                url: gcod_loadmore_params.ajaxurl,
                data: data,
                type: 'POST',
                beforeSend: function (xhr) {
                    // you can also add your own preloader here
                    // you see, the AJAX call is in process, we shouldn't run it again until complete
                    canBeLoaded = false;
                },
                success: function (data) {
                    if (data) {

                        // loading post for post list
                        if ($('body').hasClass('home')) {
                            $('.archive-wrapper > .content__module').find('article:last-of-type').after(data); // where to insert posts

                        // category
                        } else if ($('body').hasClass('category')) {
                            $('.archive-wrapper').find('article:last-of-type').after(data); // where to insert posts

                        // author
                        } else if ($('body').hasClass('author')) {
                            $('.archive-wrapper').find('article:last-of-type').after(data); // where to insert posts

                        // search
                        } else if ($('body').hasClass('search')) {
                            $('#primary').find('article:last-of-type').after(data); // where to insert posts
                        }


                        canBeLoaded = true; // the ajax is completed, now we can run it again
                        gcod_loadmore_params.current_page++;
                    }
                }
            });
        }
    });
});