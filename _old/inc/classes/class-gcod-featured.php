<?php

/**
 * Template Featured Content.
 *
 * Build Featured Content with Partials.
 *
 * @since 1.0.0
 */

class GCOD_Featured_Content {

    private $action_name;
    private $featured_content_layout;
    private $partials_elements;
    private $versions_folder;
    private $parts_folder;

    /**
     * Construct of Class
     */
    public function __construct($arg = array()) {

        $this->action_name = $arg['action_name'];
        $this->featured_content_layout = gcod_get_theme_mod($arg['version_setting_name']);
        $this->partials_elements = $arg['partials_setting_name'];
        $this->parts_folder = $arg['template_parts_dir'];
        $this->versions_folder = $arg['verions_dir'];

        if ($this->featured_content_layout) {

            // Featured Content Elements - gcod_render_featured_content_sections
            add_action($this->action_name, array($this, 'render_elements'));
        }
    }

    /**
     * # Functions
     * ---------------------------------------------------------------------------------------------------- */

    // Begin Featured Content 
    public function begin_featured_content() {
        echo '<div class="inner-featured-content">';
        echo apply_filters('gcod_start_featured_content_wrapper', '');
    }

    // End Featured Content
    public function end_featured_content() {
        echo apply_filters('gcod_end_featured_content_wrapper', '');
        echo '</div> <!-- .inner-featured-content -->';
    }


    // Render Elements
    public function render_elements() {

        // Get style in versions - JUST ONE VERSION 
        // $featured_content_layout_partials = $this->versions_folder . $this->featured_content_layout . '.php';


        /** 
         * elements on layout position settings
         * this design group of element on postions
         * @wrapper_id          => id of wrapper tag / false
         * @wrapper_classes     => list class of wrapper tag / false
         * @elements            => list element in postion
         * @seperator           => html of seperator / false 
         **/
        $gcod_elements_layout_postitions = array(
            'none' => array(
                'open_tag'          => false,
                'close_tag'         => false,
                'elements'          => array(
                    'section-home-featured-slider',
                    'section-home-featured-categories',
                    'section-home-featured-posts',
                ),
                'seperator'         => false
            ),
        );


        // default elements on featured_content layout for first
        $gcod_featured_content_elements_default = gcod_defaults($this->partials_elements);

        $this->begin_featured_content();

        // rendering template parts with settings and config above
        gcod_render_layout_elements(
            $this->partials_elements,
            $this->parts_folder,
            $gcod_elements_layout_postitions,
            $gcod_featured_content_elements_default,
        );

        $this->end_featured_content();
    }
}
