<?php // Stat Slider Template Part

if( have_rows('stat_slider') ):
?>

<section class="container stat-slider">
  <div class="row">
    <div class="col-10 sm-col-9 col-centered">

      <h1 class="text-center">
        <?php the_field('stat_slider_headline'); ?>
      </h1>

      <div id="stat-slider">
        <?php while( have_rows('stat_slider') ): the_row(); ?>

          <div class="stat-slide text-center">
            <img src="<?php the_sub_field('stat_image');?>" alt="">
          </div>

        <?php endwhile; ?>
      </div>

    </div>
  </div>
</section>

<?php endif;
