<?php // Template Name: About Us
get_header();
?>

<section class="container standard-hero">
  <div class="row">
    <div class="col-12">
      <h1>
        <?php the_field('page_headline'); ?>
      </h1>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-3">
      <?php get_template_part('parts/about-sidebar'); ?>
    </div>
    <div id="what-we-do" class="col-8">
      <?php
      // get the content of the page
      if( have_posts() ):
        while( have_posts() ):
          the_post();
          the_content();
        endwhile;
      endif;

      // repeater
      if( have_rows('what_we_do_items') ):
      ?>
        <div class="wwd-container container">
          <?php while( have_rows('what_we_do_items') ): the_row(); ?>

            <div class="row wwd-row">
              <div class="col-3 text-center">
                <img src="<?php the_sub_field('wwd_icon'); ?>" alt="" class="wwd-icon">
              </div>
              <div class="col-9 wwd-content">
                <?php the_sub_field('wwd_content');?>
              </div>
            </div>

          <?php endwhile;?>
        </div>
      <?php endif; ?>

    </div>
  </div>

  <div class="row row--full-width">
    <div class="col-12 text-center">
      <img src="<?php the_field('full_width_image');?>" alt="" role="presentation" class="wwd-full-img">
    </div>
  </div>

  <?php // Our Story ?>
  <div id="why-we-do-it" class="row">
    <div class="col-8 col-centered our-story">
      <?php the_field('our_story_content'); ?>
    </div>
  </div>

</div>

<?php
get_template_part('parts/testimonials');

get_template_part('parts/who-we-are');

get_template_part('parts/industry-slider');

get_footer();
