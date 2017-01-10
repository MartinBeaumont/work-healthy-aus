<?php // Template Name: All Services
get_header();

get_template_part('parts/standard-hero');
?>

<section class="container">
  <div class="row">
    <div class="col-8 col-centered">
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
get_footer();
