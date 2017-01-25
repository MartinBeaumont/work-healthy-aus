<?php // Template Name: Goal
get_header();

get_template_part('parts/standard-hero');

// setup post id's to pull
$post_ids = get_field('post_selection');

echo '<pre>';
	print_r($post_ids);
echo '</pre>';

// WP_Query arguments
$args = array(
	//'p'                 => $post_ids,
  'post_type'         => array( 'services' ),
	'post__in'					=> array($post_ids)
);

// The Query
$query = new WP_Query( $args );

if( $query->have_posts() ):

  // setup empty array
  $service_posts = [];

  while( $query->have_posts() ):
    $query->the_post();

    // get post data
    $post_title = get_the_title();
    $post_content = get_the_content();

    // put post data into the array
    $service_posts[$post->ID] =  array($post->ID, $post_title, $post_content);

  endwhile;

	echo '<pre>';
	print_r($service_posts);
	echo '</pre>';

endif; wp_reset_postdata();

/*
?>

<section class="container">
  <div class="row">
    <div id="service-sidebar" class="col-4">
      <div id="goal-sidebar-container">
        <aside class="wha-sidebar">
          <nav>
            <ul>
                <?php foreach ($service_posts as $service_post) { ?>
                  <li>
                    <a href="#<?php echo $service_post[0];?>">
                      <?php echo $service_post[1]; ?>
                    </a>
                  </li>
                <?php } ?>
            </ul>
          </nav>
        </aside>
        <div class="sidebar-cta text-center">
          <div>
            <span class="sidebar-cta--heading">
              <?php the_field('sidebar_cta_headline'); ?>
            </span>
          </div>
          <div>
            <p class="featured-text">
              <?php the_field('sidebar_cta_text');?>
            </p>
          </div>
          <div>
            <?php
            // get button destination
            if( get_field('sidebar_button_destination') === 'internal' ):
              $sb_destination = get_field('sidebar_page_link');
            else:
              $sb_destination = get_field('sidebar_url');
            endif;
            ?>
            <a href="<?php echo $sb_destination;?>" class="button button--orange">
              <?php the_field('sidebar_button_text'); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-8" style="margin-top: 37px;">
      <?php
        // Standard loop for goal page
        if( have_posts() ):
          while( have_posts() ):
            the_post();
            the_content();
          endwhile;
        endif;

      foreach ($service_posts as $service_post) { ?>
        <div id="<?php echo $service_post[0];?>" class="service-post">
          <h2>
            <?php echo $service_post[1]; ?>
          </h2>
          <?php
          $content = $service_post[2];
          $content = apply_filters('the_content', $content);
          echo $content;
          ?>
        </div>
      <?php }
      ?>
    </div>
  </div>
</section>

<?php
*/
get_footer();
