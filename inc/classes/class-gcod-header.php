<?php

/**
 * Template Header.
 *
 * Description.
 *
 * @since 1.0.0
 */


 /**
  * Class render components with list of elements part with multiple versions
  * 1 - Define elements parts
  *   + create template of element parts inside component_folder/partials/elemenet-name1.php => each element on one file.php
  *   + create version of component inside component_folter/versions/version-name1.php => each version of component on one file.php  * 
  * 2 - Create elements content
  *   + element-name1.php => create template html and php
  *   + version-name1.php => define array elements create template with 2 array: $gcod_elements_layout_postitions list
  * 3 - Create settings on customizer
  *   + using control type sortable
  *   + with each value in array of option is file name of parts/element-name1.php 
  *   + ect: $setting_choices = ['element-name1'=>'Element Name 1', 'element-name2'=>'Element Name 2',]   
  * 4 - Using insde page template 
  *   + create one file of main component inside component_folder/component-template.php => new object from Class_Component('sortable_setting_name'); 
  *   + inside main component do_action('action_name_place_holder_for_component'); => etc: do_action('gcod_render_header_elements')
  *   + inside page template using get_template_parts('component_folder/component-template.php');
 */

class GCOD_Header {

    private $action_name;
    private $header_layout; 
    private $partials_elements; 
    private $versions_folder;   
    private $parts_folder;

    /**
     * Construct of Class
     */
    public function __construct($arg = array()) {


        $this->action_name = $arg['action_name'];
        $this->header_layout = gcod_get_theme_mod($arg['version_setting_name']);
        $this->partials_elements = $arg['partials_setting_name'];
        $this->parts_folder = $arg['template_parts_dir'];
        $this->versions_folder = $arg['verions_dir'];

        if ($this->header_layout) {
            
            // Header Elements => gcod_render_header_elements
            add_action($this->action_name, array($this, 'render_elements'));
        }
    }

    /**
     * # Functions
     * ---------------------------------------------------------------------------------------------------- */

    // Begin Header 
    public function begin_header() {
        echo '<header id="masthead" class="site-header ';
        echo '">';
        echo apply_filters('gcod_start_header_wrapper', '');
    }

    // End Header
    public function end_header() {
        echo apply_filters('gcod_end_header_wrapper', '');
        echo '</header><!-- #masthead -->';
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
        $header_layout_partials = $this->versions_folder . $this->header_layout . '.php';

        if (!file_exists($header_layout_partials)) {
            exit;
        };

        include($header_layout_partials);

        $this->begin_header();

        // rendering template parts with settings and config above
        gcod_render_layout_elements(
            $this->partials_elements,
            $this->parts_folder,
            $gcod_elements_layout_postitions,
            $gcod_list_elements_default,
        );

        // Get elements array in current version layout
        $current_header_version_array = array();

        // Get current header version array
        foreach ($gcod_elements_layout_postitions as $element_bar) {
            foreach ($element_bar['elements'] as $element_item) {
                array_push($current_header_version_array, $element_item);
            }
        }

        // Update current elements order in customizer
        if ($gcod_elements_layout_postitions) {
            set_theme_mod($this->partials_elements, $current_header_version_array);
        }

        $this->end_header();
    }
}