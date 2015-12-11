<?php
/**
 * Template Name: Results
 */

get_header(); ?>

<?php
	
   if($_GET['cidade'] != 'selecione'){

	   $args = array(
	   		'taxonomy' => $_GET['cidade']
	   );

   }
   else{
	   $args = array(
	   		'taxonomy' => $_GET['uf']
	   );
   }

   $meeting_results = new WP_Query($args);

   if($meeting_results->have_posts()) : 
      while($meeting_results->have_posts()) : 
         $meeting_results->the_post();
?>

         <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>   
      
<?php
      endwhile;
   else: 
?>

      ops

<?php
   endif;
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>