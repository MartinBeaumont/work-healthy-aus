<?php // Testimonials Template Part

// WP_Query arguments
$args = array(
	'post_type'              => array( 'simple_testimonials' ),
	'nopaging'               => false,
	'posts_per_page'         => '5',
);

// The Query
$query = new WP_Query( $args );

if( $query->have_posts() ):
?>

<section class="container testimonials">
  <div class="row">
    <div class="col-10 col-centered text-center">
      <div id="testimonial-slider">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
          <div class="testimonial-slide">

            <div class="testimonial-text">
              <?php the_field('testimonial'); ?>
            </div>

            <div class="testimonial-citation">
              <h3>
                <?php the_title(); ?>
              </h3>
              <p>
                <?php the_field('citation');?>
              </p>
            </div>

          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php endif; wp_reset_postdata();
