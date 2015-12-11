<?php
function get_child_interna(){
   // $parent_location_slug = $_POST['parent_location'];
   // $parent_location_id = get_term_by('slug', $parent_location_slug, 'taxonomy');

   $parent_location_id = $_POST['parent_location'];
   

   $args = array(
            'taxonomy' => 'taxonomy', 
            'type' => 'taxonomy',
            'parent' => $parent_location_id,
            'hide_empty' => false
         );
   $child_locations = get_categories($args);
   $child_locations_array = array();

   foreach($child_locations as $child_location){
      $child_locations_array[] = array('term_id' => $child_location->term_id, 'child_name' => $child_location->name);
   }

   $child_locations_array = json_encode($child_locations_array);
   die($child_locations_array);
}

// create custom Ajax call for WordPress
add_action( 'wp_ajax_nopriv_get_childlocations', 'get_child_interna' );
add_action( 'wp_ajax_get_childlocations', 'get_child_interna' );