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

get_template_part('parts/cta');

get_footer();
