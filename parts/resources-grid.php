<?php // Resources Grid

if( have_posts() ):
?>
 <section class="container resources--grid">
   <div class="row">
     <div class="col-12">
       <div class="sm-block-grid-1 block-grid-3">
         <?php while( have_posts() ): the_post(); ?>
           <div class="col resources--grid-item">
             <a href="<?php the_permalink();?>" class="staff-card resources--item-container">

               <?php if( has_post_thumbnail() ): ?>
                 <div class="resources--item-image">
                   <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                     <?php the_post_thumbnail('356x200'); ?>
                   </a>
                 </div>
               <?php endif;?>

               <div class="staff-card--details">
                 <h3 class="staff-card--name">
                   <?php the_title(); ?>
                 </h3>
                 <span class="staff-card--title">
                   <?php
                   $terms = get_terms(array(
                     'taxonomy'   => 'resource_category'
                     'hide_empty' => false,
                   ) );

                   echo '<pre>';
                   print_r($terms);
                   echo '</pre>';

                  //  if( !empty($terms) && !is_wp_error( $terms ) ):
                  //    foreach( $terms as $term ):
                  //      echo '<a href="' . $term->link . '"'
                  //    endforeach;
                  //  endif;
                   ?>
                 </span>
                 <?php the_excerpt(); ?>
               </div>

             </a>
           </div>
         <?php endwhile;?>
       </div>
     </div>
   </div>
 </section>
<?php
endif;
