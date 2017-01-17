<?php
  /**
   * The default blog / index template.
   */
  get_header();

  get_template_part('parts/standard-hero');
?>

<section class="container">
  <?php
  if( have_posts() ):
    while( have_posts() ): the_post(); ?>
      <div class="row row--justify-content-center">
        <div class="col-2">
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('166x166'); ?>
          </a>
        </div>
        <div class="col-6">
          <a href="<?php the_permalink();?>">
            <h3 class="secondary">
              <?php the_title(); ?>
            </h3>
          </a>
          <div class="index-meta">
            <span class="post-date">
              <?php the_time('M d, Y'); ?>
            </span>
            |
            <span class="post-author">
              <?php the_author(); ?>
            </span>
          </div>
          <?php the_excerpt(); ?>
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
</section>

<?php
  get_footer();
