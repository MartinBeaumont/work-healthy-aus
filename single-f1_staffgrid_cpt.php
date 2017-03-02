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
        <h3>
          Bio
        </h3>
        <?php the_field('left_column'); ?>
      </div>
    </div>
</section>

<?php
$page_id = get_queried_object_id();

if( get_field('cta_content', $page_id) ):

  get_template_part('parts/cta');

endif;

get_footer();
