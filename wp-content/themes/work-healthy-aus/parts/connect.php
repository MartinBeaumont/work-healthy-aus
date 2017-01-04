<?php // Template Name: Connect
get_header();
?>

<section class="container standard-hero">
  <div class="row">
    <div class="col-12">
      <h1>
        Connect with Work Healthy Australia
      </h1>
    </div>
  </div>
</section>

<section class="container connect--content">
  <div class="row">
    <div class="col-8 col-centered">
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
  <div class="row row--justify-content-center connect--details">
    <div class="col-4">

      <div class="row">
        <div class="sm-col-4 col-4">
          Phone:
        </div>
        <div class="sm-col-8 col-8">
          <?php the_field('phone_1', 'option'); ?>
        </div>
      </div>
      <div class="row">
        <div class="sm-col-4 col-4">
          Phone:
        </div>
        <div class="sm-col-8 col-8">
          <?php the_field('phone_2', 'option'); ?>
        </div>
      </div>
      <div class="row">
        <div class="sm-col-4 col-4">
          Fax:
        </div>
        <div class="sm-col-8 col-8">
          <?php the_field('fax', 'option'); ?>
        </div>
      </div>

    </div>

    <div class="col-4">

      <div class="row">
        <div class="sm-col-4 col-3">
          Address:
        </div>
        <div class="sm-col-8 col-9">
          <?php the_field('address', 'option'); ?>
        </div>
      </div>
      <div class="row">
        <div class="sm-col-4 col-3">
          Email:
        </div>
        <div class="sm-col-8 col-9">
          <a href="<?php echo get_field('email', 'option');?>">
            <?php the_field('email', 'option'); ?>
          </a>
        </div>
      </div>

    </div>

  </div>

  <?php // Horizontal Row ?>
  <div class="row">
    <div class="col-10 col-centered text-center">
      <hr>
    </div>
  </div>

  <?php // Contact Form Embed ?>
  <div class="row">
    <div class="col-8 col-centered">
      <?php the_field('contact_embed'); ?>
    </div>
  </div>

</section>

<?php

get_template_part('parts/industry-slider');

get_footer();
