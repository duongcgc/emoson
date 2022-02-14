<?php

/**
 * Template Home Content.
 *
 * Build Home Content Content with Partials.
 *
 * @since 1.0.0
 */

class GCOD_Home_Content {

    private $action_name;
    private $home_content_layout; 
    private $partials_elements; 
    private $versions_folder;   
    private $parts_folder;

    /**
     * Construct of Class
     */
    public function __construct($arg = array()) {

        $this->action_name = $arg['action_name'];
        $this->home_content_layout = gcod_get_theme_mod($arg['version_setting_name']);
        $this->partials_elements = $arg['partials_setting_name'];
        $this->parts_folder = $arg['template_parts_dir'];
        $this->versions_folder = $arg['verions_dir']; 

        if ($this->home_content_layout) {

            // Home Content Elements - gcod_render_home_content_sections
            add_action($this->action_name, array($this, 'render_elements'));
        }
    }

    /**
     * # Functions
     * ---------------------------------------------------------------------------------------------------- */

    // Begin Home Content 
    public function begin_home_content() {
        echo '<div class="inner-home-content ';
        gcod_home_content_class();
        echo '">';
        echo apply_filters('gcod_start_home_content_wrapper', '');
    }

    // End Home Content
    public function end_home_content() {
        echo apply_filters('gcod_end_home_content_wrapper', '');
        echo '</div> <!-- inside home class .inner-home-content -->';
    }

    /** 
     * elements on layout position settings
     * this design group of element on postions
     * @wrapper_id          => id of wrapper tag / false
     * @wrapper_classes     => list class of wrapper tag / false
     * @elements            => list element in postion
     * @seperator           => html of seperator / false 
     **/

    // Render Elements
    public function render_elements() {

        // Get style in versions
        $home_content_layout_partials = $this->versions_folder . $this->home_content_layout . '.php';

        if (!file_exists($home_content_layout_partials)) {
            exit;
        };

        include($home_content_layout_partials);

        $this->begin_home_content();

        // rendering template parts with settings and config above
        gcod_render_layout_elements(
            $this->partials_elements,
            $this->parts_folder,
            $gcod_elements_layout_postitions,
            $gcod_list_elements_default,
        );

        $this->end_home_content();
        
    }
}
