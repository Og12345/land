<?php
function get_cidade_interna(){

   $parent_interna_id = $_POST['city_interna'];

   $args = array(
            'taxonomy' => 'taxonomy', 
            'type' => 'taxonomy',
            'parent' => $parent_interna_id,
            'hide_empty' => false
         );
   $get_city_interna = get_categories($args);
   $get_city_interna_array = array();

   foreach($get_city_interna as $get_city){
      $get_city_interna_array[] = array('term_id' => $get_city->term_id, 'child_name' => $get_city->name);
   }

   $get_city_interna_array = json_encode($get_city_interna_array);
   die($get_city_interna_array);
}

// create custom Ajax call for WordPress
add_action( 'wp_ajax_nopriv_get_cidade_interna', 'get_cidade_interna' );
add_action( 'wp_ajax_get_cidade_interna', 'get_cidade_interna' );