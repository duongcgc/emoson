<div id="post-nav">
    <?php
    $prevPost = get_previous_post(true);
    if ($prevPost) {
        $args = array(
            'posts_per_page' => 1,
            'include' => $prevPost->ID
        );
        $prevPost = get_posts($args);
        foreach ($prevPost as $post) {
            setup_postdata($post);
    ?>
            <div class="post-previous <?php echo (has_post_thumbnail() == true ? 'has-thumb' : 'no-thumb') ?>">
                <a class="prev" href="<?php the_permalink(); ?>" class="previous">Previous</a>
                <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail('gcod_thumbnail_pagenav'); ?></a>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
            </div>
        <?php
            wp_reset_postdata();
        } // end foreach
    } // end if

    $nextPost = get_next_post(true);
    if ($nextPost) {
        $args = array(
            'posts_per_page' => 1,
            'include' => $nextPost->ID
        );
        $nextPost = get_posts($args);
        foreach ($nextPost as $post) {
            setup_postdata($post);
        ?>
            <div class="post-next <?php echo (has_post_thumbnail() == true ? 'has-thumb' : 'no-thumb') ?>">
                <a class="next" href="<?php the_permalink(); ?>">Next</a>
                <a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('gcod_thumbnail_pagenav'); ?></a>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
            </div>
    <?php
            wp_reset_postdata();
        } // end foreach
    } // end if
    ?>
</div>