<?php // Home Category Buckets Template Part
if( have_rows('home_buckets') ):
?>
<section class="container home--buckets">
  <div class="row">
    <div class="col-12">
      <div class="sm-block-grid-1 block-grid-3 home--buckets-grid">
        <?php while( have_rows('home_buckets') ): the_row(); ?>
          <div class="col stretch text-center">
            <div class="home--bucket-col">
              <h3>
                <?php the_sub_field('headline'); ?>
              </h3>
              <p>
                <?php the_sub_field('excerpt'); ?>
              </p>
              <a href="<?php the_sub_field('link');?>" class="button button--white">
                <?php the_sub_field('button_text'); ?>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<?php endif;
