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
    <div class="row">
      <div class="col-4 text-center staff-single-img">
        <?php the_post_thumbnail('380x510'); ?>
      </div>
      <div class="col-8 staff-single-columns">
        <?php the_field('right_column'); ?>
      </div>
    </div>
  <div class="row staff-single-columns">
    <div class="col-12">
      <?php the_field('left_column'); ?>
    </div>
  </div>
</section>

<?php
get_template_part('parts/cta');

get_footer();
