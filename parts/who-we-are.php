<?php // Who We Are Section ?>

<section id="who-we-are" class="container">
  <div class="row">
    <div class="col-8 col-centered text-center">

      <?php
      $image_object = get_field('who_we_are_img');
      $image_size = '733x400';
      $image_url = $image_object['sizes'][$image_size];
      ?>

      <img src="<?php echo $image_url; ?>" alt="Who We Are">

      <h2>
        <?php the_field('who_we_are_title'); ?>
      </h2>

      <h6>
        <?php the_field('who_we_are_subheadline'); ?>
      </h6>

      <?php the_field('who_we_are_content'); ?>

    </div>
  </div>
  <div class="row">
    <div class="col-10 col-centered">
      <?php if( have_rows('who_we_are_list') ): ?>
        <ul>
          <?php while( have_rows('who_we_are_list') ): the_row(); ?>
            <li>
              <?php the_sub_field('list_item'); ?>
            </li>
          <?php endwhile;?>
        </ul>
      <?php endif;?>
    </div>
  </div>
  <div class="row">
    <div class="col-8 col-centered">
      <?php the_field('who_we_are_contact'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-8 col-centered text-center">
      <a href="<?php echo get_home_url();?>/our-team/" class="button button--purple">
        Meet The Team
      </a>
    </div>
  </div>
</section>
