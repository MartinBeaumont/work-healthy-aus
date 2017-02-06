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

// cta section
$page_id = get_queried_object_id();

if( get_field('cta_content', $page_id) ):

  get_template_part('parts/cta');

endif;

get_footer();
