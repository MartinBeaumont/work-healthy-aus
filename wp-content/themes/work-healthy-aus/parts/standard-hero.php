<?php // Standard Page Hero ?>

<section class="container standard-hero">
  <div class="row">
    <div class="col-12">
      <h1>
        <?php
        if( is_page_template('templates/goal.php') ):
          the_title();
        else:
          the_field('page_headline');
        endif;?>
      </h1>
    </div>
  </div>
</section>