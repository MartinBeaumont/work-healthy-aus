<?php // Explore Category template part ?>

<section class="container explore-category">
  <div class="row">
    <div class="col-6 offset-1">
      <h2 style="padding-top: 0;">
        Explore by Category
      </h2>
    </div>
  </div>

  <?php
    // Get Injury Care posts
    // WP_Query arguments
    $args = array(
    	'post_type'              => array( 'services' ),
    	'nopaging'               => true,
    	'posts_per_page'         => '-1',
      'services_category'      => 'injury-care'
    );

    // The Query
    $query = new WP_Query( $args );

    if( $query->have_posts() ):
  ?>
    <div class="row">
      <div class="col-10 col-centered">
        <div class="row">
          <div class="col-6">
            <h3 class="secondary">
              Injury Care
            </h3>
          </div>
        </div>
        <div class="sm-block-grid-1 block-grid-2 service-card-block">
          <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col service-card-col">
              <a href="<?php the_permalink();?>" class="service-card">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <em>
                    <?php the_excerpt(); ?>
                  </em>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata();

    // Get Injury Care posts
    // WP_Query arguments
    $args = array(
    	'post_type'              => array( 'services' ),
    	'nopaging'               => true,
    	'posts_per_page'         => '-1',
      'services_category'      => 'injury-prevention'
    );

    // The Query
    $query = new WP_Query( $args );

    if( $query->have_posts() ):
  ?>
    <div class="row">
      <div class="col-10 col-centered">
        <div class="row">
          <div class="col-6">
            <h3 class="secondary">
              Injury Prevention
            </h3>
          </div>
        </div>
        <div class="sm-block-grid-1 block-grid-2 service-card-block">
          <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col service-card-col">
              <a href="<?php the_permalink();?>" class="service-card">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <em>
                    <?php the_excerpt(); ?>
                  </em>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata();

    // Get Injury Care posts
    // WP_Query arguments
    $args = array(
    	'post_type'              => array( 'services' ),
    	'nopaging'               => true,
    	'posts_per_page'         => '-1',
      'services_category'      => 'training'
    );

    // The Query
    $query = new WP_Query( $args );

    if( $query->have_posts() ):
  ?>
    <div class="row">
      <div class="col-10 col-centered">
        <div class="row">
          <div class="col-6">
            <h3 class="secondary">
              Training
            </h3>
          </div>
        </div>
        <div class="sm-block-grid-1 block-grid-2 service-card-block">
          <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col service-card-col">
              <a href="<?php the_permalink();?>" class="service-card">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <em>
                    <?php the_excerpt(); ?>
                  </em>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata();

    // Get Injury Care posts
    // WP_Query arguments
    $args = array(
    	'post_type'              => array( 'services' ),
    	'nopaging'               => true,
    	'posts_per_page'         => '-1',
      'services_category'      => 'reporting'
    );

    // The Query
    $query = new WP_Query( $args );

    if( $query->have_posts() ):
  ?>
    <div class="row">
      <div class="col-10 col-centered">
        <div class="row">
          <div class="col-6">
            <h3 class="secondary">
              Reporting
            </h3>
          </div>
        </div>
        <div class="sm-block-grid-1 block-grid-2 service-card-block">
          <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="col service-card-col">
              <a href="<?php the_permalink();?>" class="service-card">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <em>
                    <?php the_excerpt(); ?>
                  </em>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata(); ?>
</section>
