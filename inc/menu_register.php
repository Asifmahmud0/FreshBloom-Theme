<?php
register_nav_menu( 'primary _menu', __('Primary Menu', 'freshBloom'));

//Walker Menu Properties
// function ali_nav_description( $item_output, $item, $args){
//     if( !empty ($item->description)){
//       $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
//     }
//     return $item_output;
//   }
//   add_filter('walker_nav_menu_start_el', 'ali_nav_description', 10, 3);

function asif_nav_description( $item_output, $item, $args ){
    if ( !empty($item->description) && is_object($args) && isset($args->link_after) ) {
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'asif_nav_description', 10, 3 );