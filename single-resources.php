<?php
  /**
   * The single post template for resources .
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ):
    while( have_posts() ): the_post();
?>

    <section class="container default-container">

      <div class="row">
        <article class="col-10 col-centered">
          <?php
          if( has_post_thumbnail() ):
            the_post_thumbnail('954x560');
          endif;
          ?>
          <h2 class="single--title">
            <?php the_title(); ?>
          </h2>

          <div class="single--content">
            <?php the_content(); ?>
          </div>
        </div>
        </article>
      </div>

      <div class="form-gate">
        <div class="row">
          <div class="col-10 col-centered">
            <?php the_field('resource_form'); ?>
          </div>
        </div>
      </div>

      <div class="resource-download">
        <div class="row">
          <div class="col-10 col-centered">
            <?php the_field('resource_content'); ?>
          </div>
        </div>
      </div>

    </section>


<?php
    endwhile;
  endif;

  get_footer();
