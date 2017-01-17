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
        <div class="col-2">
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('166x166'); ?>
          </a>
        </div>
        <div class="col-6">
          <a href="<?php the_permalink();?>">
            <h3 class="secondary index--post-title">
              <?php the_title(); ?>
            </h3>
          </a>
          <div class="index-meta">
            <span class="post-date">
              <?php the_time('d M Y'); ?>
            </span>
            |
            <span class="post-author">
              <?php the_author(); ?>
            </span>
          </div>
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
  get_template_part('parts/cta');

  get_footer();
