<?php

/**
 * Summary.
 *
 * Description.
 *
 * @since Version 3 digits
 */

class GCOD_Footer {

    private $action_name;
    private $footer_layout; 
    private $partials_elements; 
    private $versions_folder;   
    private $parts_folder;  

    /**
     * Construct of Class
     */
    public function __construct($arg = array()) {

        $this->action_name = $arg['action_name'];
        $this->footer_layout = gcod_get_theme_mod($arg['version_setting_name']);
        $this->partials_elements = $arg['partials_setting_name'];
        $this->parts_folder = $arg['template_parts_dir'];
        $this->versions_folder = $arg['verions_dir'];          
        
        if ($this->footer_layout) {            

            // Footer Elements
            add_action($this->action_name, array($this, 'render_elements'));
            
        }
    }

    /**
     * # Functions
     * ---------------------------------------------------------------------------------------------------- */

    // Begin Footer 
    public function begin_footer() {
        echo '<footer id="colophon" class="site-footer ';
        gcod_footer_class();
        echo '">';
        echo apply_filters('gcod_start_footer_wrapper', '');
    }

    // End Footer
    public function end_footer() {
        echo apply_filters('gcod_end_footer_wrapper', '');
        echo '</footer><!-- #colophon -->';
    }


    /** 
     * elements on layout position settings
     * this design group of element on postions
     * @wrapper_id          => id of wrapper tag / false
     * @wrapper_classes     => list class of wrapper tag / false
     * @open_tag            => html code for open tags includes all tag, attributes
     * @close_tag           => html code for close tags includes all tag
     * @elements            => list element in postion
     * @seperator           => html of seperator / false 
     **/

    // Render Elements
    public function render_elements() {
        

        // Get style in versions
        $footer_layout_partials = $this->versions_folder . $this->footer_layout . '.php';

        if (!file_exists($footer_layout_partials)) {
            exit;
        };

        include($footer_layout_partials);

        $this->begin_footer();


        // rendering template parts with settings and config above
        gcod_render_layout_elements(
            $this->partials_elements,
            $this->parts_folder,
            $gcod_elements_layout_postitions,
            $gcod_list_elements_default,
        );

        // Get elements array in current version layout
        $current_footer_version_array = array();

        // Get current footer version array
        foreach ($gcod_elements_layout_postitions as $element_bar) {
            foreach ($element_bar['elements'] as $element_item) {
                array_push($current_footer_version_array, $element_item);
            }
        }

        // Update current elements order in customizer
        if ($gcod_elements_layout_postitions) {
            set_theme_mod($this->partials_elements, $current_footer_version_array);
        }

        $this->end_footer();
        
    }
}
