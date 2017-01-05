<?php
get_header();
?>

<section class="container standard-hero staff-single-hero">
  <div class="row">
    <div class="col-12 text-center">
      <h1>
        <?php the_field('first_name'); echo ' '; the_field('last_name') ?>
      </h1>
      <h3>
        <?php the_field('title'); ?>
      </h3>
    </div>
  </div>
</section>

<section class="container">
  <?php if( has_post_thumbnail() ): ?>
    <div class="row">
      <div class="col-8 col-centered text-center staff-single-img">
        <?php the_post_thumbnail('733x400'); ?>
      </div>
    </div>
  <?php endif;?>
  <div class="row staff-single-columns">
    <div class="col-8">
      <?php the_field('left_column'); ?>
    </div>
    <div class="col-4">
      <?php the_field('right_column'); ?>
    </div>
  </div>
</section>

<?php
get_template_part('parts/cta');

get_footer();
