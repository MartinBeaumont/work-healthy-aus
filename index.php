<?php
  /**
   * The default blog / index template.
   */
  get_header();

  get_template_part('parts/standard-hero');
?>

<section class="container blog-container">
  <?php
  if( have_posts() ):
    while( have_posts() ): the_post(); ?>
      <div class="row row--justify-content-center index--post-row">
        <div class="col-8">
          <a href="<?php the_permalink();?>">
            <h3 class="secondary index--post-title">
              <?php the_title(); ?>
            </h3>
          </a>
          <?php the_excerpt(); ?>
        </div>
      </div>
      <div class="row index--row-divider">
        <div class="col-8 col-centered">
          <hr>
        </div>
      </div>
    <?php endwhile;
  else: ?>
    <div class="row">
      <div class="col-8 col-centered text-center">
        <h3>
          Sorry, no posts where found.
        </h3>
      </div>
    </div>
  <?php endif;?>
  <div class="row">
    <div class="col-8 col-centered text-center">
      <?php the_posts_pagination( array('mid_size' => 2) ); ?>
    </div>
  </div>
</section>

<?php
  $page_id = get_queried_object_id();

  if( get_field('cta_content', $page_id) ):

    get_template_part('parts/cta');

  endif;

  get_footer();
