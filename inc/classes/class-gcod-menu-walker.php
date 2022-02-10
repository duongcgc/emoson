<?php

/**
 * Main Menu Walker
 */

class GCOD_Menu_Walker extends Walker_Nav_Menu {

    public $li_class = 'nav-item';
    public $li_actived_class = 'active';
    public $a_class = 'nav-link';    

    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {

        $current_class = in_array("current_page_item",$item->classes) ? ' ' . $this->li_actived_class : '';    

        $output .= "<li class='" . $this->li_class;
        $output .= " " . $current_class;
        $output .= "'>";

        if ($item->url && $item->url != '#') {
            $output .= '<a class="' . $this->a_class . '" href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
}
