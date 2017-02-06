<?php
/* Template Name: Clients */

get_header();

get_template_part('parts/standard-hero');
?>

<section class="container">
  <div class="row">
    <article class="col-10 col-centered">
      <?php
      if( have_posts() ):
        while( have_posts() ):
          the_post();
          the_content();
        endwhile;
      endif;
      ?>
    </article>
  </div>
</section>

<?php
get_template_part('parts/client-grid');

get_footer();
