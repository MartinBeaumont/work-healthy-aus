<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();

  get_template_part('parts/standard-hero');
  ?>

  <section class="container default-container">
    <div class="row">
      <div class="col-10 col-centered">
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
  get_template_part('parts/cta');

  get_footer();
