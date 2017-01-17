<?php // Standard Page Hero

$poop = true;
?>

<section class="container standard-hero">
  <div class="row">
    <div class="col-12">
      <h1>
        <?php
        if( $poop === true ):
          echo 'Page Not Found';
        elseif( is_page_template('templates/goal.php') || basename(get_page_template()) === 'page.php' ):
          the_title();
          echo 'this is goal or page template';
        else:
          the_field('page_headline');
          echo 'else statement fired';
        endif;?>
      </h1>
    </div>
  </div>
</section>
