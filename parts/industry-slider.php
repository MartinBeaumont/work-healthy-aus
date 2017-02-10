<?php // Industry Slider Template Part

if( have_rows('industry_slider', 'option') ):
?>

<section class="container industry-slider--section">
  <div class="row">
    <div class="col-12 text-center">

      <h2 class="text-center">
        <?php the_field('industry_slider_headline', 'option'); ?>
      </h2>

      <div id="industry-slider">
        <?php while( have_rows('industry_slider', 'option') ): the_row(); ?>
          <div class="industry-slide">
            <div class="industry-slide--container">
              <div>
                <img src="<?php the_sub_field('industry_logo');?>" alt="<?php the_sub_field('industry_name');?>" class="industry-logo">
              </div>
            </div>
          </div>
        <?php endwhile;?>
      </div>

      <p>
        <?php the_field('industry_slider_text', 'option'); ?>
      </p>

    </div>
  </div>
</section>

<?php endif;
