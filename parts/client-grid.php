<?php // Client Grid

if( have_rows('client_grid') ):
?>

<section class="container">
  <div class="row">
    <div class="col-12">
      <div class="sm-block-grid-1 block-grid-3 client-grid">
        <?php
        while( have_rows('client_grid') ): the_row();
        // get acf image size
        $image_object = get_sub_field('client_image');
        $image_size = 'client-grid';
        $image_url = $image_object['sizes'][$image_size];
        ?>
          <div class="col">
            <div class="client-grid--container">
              <img src="<?php echo $image_url; ?>" alt="<?php the_sub_field('client_name');?>">
              <h3>
                <?php the_sub_field('client_name'); ?>
              </h3>
              <p>
                <em>
                  <?php the_sub_field('client_description'); ?>
                </em>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php endif;
