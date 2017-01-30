<?php // Template Name: All Services
get_header();

get_template_part('parts/standard-hero');
?>

<section class="container">
  <div class="row">
    <div class="col-8 col-centered" style="margin-top: 45px;">
      <?php
      if( have_posts() ):
        while( have_posts() ):
          the_post();
          the_content();
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>

<?php
get_template_part('parts/goals');

get_template_part('parts/explore-category');

get_template_part('parts/testimonials');

$page_id = get_queried_object_id();

if( get_field('cta_content', $page_id) ):

  get_template_part('parts/cta');

endif;

get_footer();
