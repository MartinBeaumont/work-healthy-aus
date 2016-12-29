<?php // Featured Staff Template Part

// WP_Query arguments
$args = array(
	'post_type'              => array( 'f1_staffgrid_cpt' ),
	'f1_staffgrid_tax'       => 'featured',
	'nopaging'               => false,
	'posts_per_page'         => '4',
  'orderby'                => 'menu_order',
  'order'                  => 'ASC'
);

// The Query
$query = new WP_Query( $args );

if( $query->have_posts() ):
?>

<section class="container featured-staff">
  <div class="row">
    <div class="col-10 col-centered">
      <div class="sm-block-grid-2 block-grid-4">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
          <div class="col text-center">
            <div class="featured-staff--image" style="background: url(<?php featuredURL('staff-thumb');?>) center center no-repeat;"></div>
            <p class="featured-staff--name">
              <?php
              the_title();
              echo '<br>';
              the_field('title');
              ?>
            </p>
            <div>
              <a href="<?php the_permalink();?>" class="button button--purple">
                Learn more
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php endif; wp_reset_postdata();
