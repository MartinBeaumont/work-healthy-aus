<?php // Leadership Staff Grid

// WP_Query arguments
$args = array(
    'post_type'             => array( 'f1_staffgrid_cpt' ),
    'posts_per_page'        => -1,
    'f1_staffgrid_tax'      => 'leadership', // Department Taxonomy (optional)
    'orderby'               => 'menu_order',
    'order'                 => 'ASC'
);

// The Query
$query = new WP_Query( $args );

if( $query->have_posts() ):
?>

<section id="leadership-staff-grid" class="container">
  <div class="row">
    <div class="col-12">
      <div class="sm-block-grid-1 block-grid-2">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
          <div class="col">

            <a href="<?php the_permalink();?>" class="staff-card">
              <div class="staff-card--image" style="background: url(<?php featuredURL();?>) center center no-repeat;"></div>
              <div class="staff-card--details">
                <h3 class="staff-card--name">
                  <?php
                  the_field('first_name');
                  echo ' ';
                  the_field('last_name');
                  ?>
                </h3>
                <span class="staff-card--title">
                  <?php the_field('title'); ?>
                </span>
              </div>
            </a>

          </div>
        <?php endwhile;?>
      </div>
    </div>
  </div>
</section>

<?php endif; wp_reset_postdata();
