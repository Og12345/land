<?php
function get_polo(){

   $parent_polo_interna = $_POST['child_city'];
   
      $args = array(
         'category'        => '9',
         'orderby'         => 'name',
         'order'           => 'ASC',
         'posts_per_page'  => '50',
            'tax_query'             => array(
               array(
                  'taxonomy'        => 'taxonomy',
                  'terms'           => $parent_polo_interna,
                  'field'           => 'term_id',
                  'hide_empty'      => false
               )
            )
         );
   $polo_locations = get_posts($args);
   $polo_locations_array = array();

   //die(var_dump($polo_locations));

   foreach($polo_locations as $polo_location){
      //var_dump($polo_location);
      $mapa = get_field('conteudo_info_3', $polo_location);
      $polo_locations_array[] = array(
         'name'         => $polo_location->post_title,
         'endereco'     => get_field('endereco_polo', $polo_location),
         'telefone'     => get_field('telefone_polo', $polo_location),
         'linkpolo'     => get_bloginfo('url').'/'.$polo_location->post_name,
         'mapalat'      => $mapa{'lat'},
         'mapalng'      => $mapa{'lng'}
         );
   }

   //var_dump($polo_locations_array);
   $polo_locations_array = json_encode($polo_locations_array);
   die($polo_locations_array);
}

// create custom Ajax call for WordPress
add_action( 'wp_ajax_nopriv_get_polo', 'get_polo' );
add_action( 'wp_ajax_get_polo', 'get_polo' );