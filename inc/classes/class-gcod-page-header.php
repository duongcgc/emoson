<?php

/**
 * Template Page Header Content.
 *
 * @since 1.0.0
 */

class GCOD_Page_Header {

    private $action_name;
    private $page_header_layout;
    private $partials_elements;
    private $versions_folder;
    private $parts_folder;

    /**
     * Construct of Class
     */
    public function __construct($arg = array()) {

        $this->action_name = $arg['action_name'];
        $this->page_header_layout = gcod_show_page_header();    // check is show header
        $this->partials_elements = gcod_page_header_style();    // get header style
        $this->parts_folder = $arg['template_parts_dir'];       
        $this->versions_folder = $arg['verions_dir'];           // get version folter

        if ($this->page_header_layout) {

            // Page Header Elements - gcod_render_page_header_sections
            add_action($this->action_name, array($this, 'render_elements'));
        }
    }

    /**
     * # Functions
     * ---------------------------------------------------------------------------------------------------- */

    // Begin Page Header 
    public function begin_page_header() {
        echo '<section class="page-header"><div class="inner-page-header">';
        echo apply_filters('gcod_start_page_header_wrapper', '');
    }

    // End Page Header
    public function end_page_header() {
        echo apply_filters('gcod_end_page_header_wrapper', '');
        echo '</div></section><!-- .inner-page-header -->';
    }

    // Render Elements
    public function render_elements() {


        $this->begin_page_header();        
        
        // Load page header
        get_template_part($this->versions_folder . $this->partials_elements);

        $this->end_page_header();
    }
}
