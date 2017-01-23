<?php // All Staff Grid

// WP_Query arguments
$args = array(
    'post_type'             => array( 'f1_staffgrid_cpt' ),
    'posts_per_page'        => -1,
    'orderby'               => 'menu_order',
    'order'                 => 'ASC',
    'tax_query'             => array(
      array(
        'taxonomy'     => 'f1_staffgrid_tax',
        'terms'        => array('leadership', 'physicians'),
        'field'        => 'slug',
        'operator'     => 'NOT IN',
      ),
    )
);

// The Query
$query = new WP_Query( $args );

if( $query->have_posts() ):
?>

<section id="all-staff-grid" class="container">
  <div class="row">
    <div class="col-12">
      <div class="sm-block-grid-1 block-grid-4">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
          <div class="col">

            <a href="<?php the_permalink();?>" class="staff-card">
              <div class="staff-card--image all-staff" style="background: url(<?php featuredURL('all-staff-thumb');?>) center center no-repeat;"></div>
              <div class="staff-card--details">
                <h3 class="staff-card--name all-staff">
                  <?php
                  the_field('first_name');
                  echo ' ';
                  the_field('last_name');
                  ?>
                </h3>
              </div>
            </a>

          </div>
        <?php endwhile;?>
      </div>
    </div>
  </div>
</section>

<?php endif; wp_reset_postdata();
