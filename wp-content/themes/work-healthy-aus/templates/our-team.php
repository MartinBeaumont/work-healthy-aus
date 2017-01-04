<?php // Template Name: Our Team
get_header();

get_template_part('parts/standard-hero');

if( have_posts() ):
  while( have_posts() ): the_post();
?>

    <section class="container our-team--content">
      <div class="row">
        <article class="col-8 col-centered">
          <?php the_content(); ?>
        </article>
      </div>
    </section>

<?php
endwhile;
endif;

get_template_part('parts/leadership-grid');

get_template_part('parts/all-staff-grid');

get_template_part('parts/cta');

get_footer();
