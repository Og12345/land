<?php
function get_curso(){

   $parent_city = $_POST['parent_city'];

      $args = array(
         'category'  => '8',
            'tax_query'             => array(
               array(
                  'taxonomy'        => 'taxonomy',
                  'terms'           => $parent_city,
                  'field'           => 'term_id',
                  'hide_empty'      => false,
                  'numberposts'     => -1
               )
            )
         );
   $child_locations = get_posts($args);
   $child_locations_array = array();

   foreach($child_locations as $child_location){
      $child_locations_array[] = array('name' => $child_location->post_title, 'link' => get_bloginfo('url').'/'.$child_location->post_name);
   }

   $child_locations_array = json_encode($child_locations_array);
   die($child_locations_array);
}

// create custom Ajax call for WordPress
add_action( 'wp_ajax_nopriv_get_curso', 'get_curso' );
add_action( 'wp_ajax_get_curso', 'get_curso' );
