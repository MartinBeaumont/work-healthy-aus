<?php // CTA Template Part ?>

<section class="call-to-action container">
  <div class="row row--justify-content-center">
    <div class="md-col-6 col-7">
      <?php the_field('cta_content'); ?>
    </div>
    <div class="md-col-6 col-3 sm-text-center md-text-center">
      <?php
      $page_id = $post->ID;

        if( get_field('cta_button_destination', $page_id) === 'internal' ):
          $cta_link = get_field('cta_internal', $page_id);
        else:
          $cta_link = get_field('cta_external', $page_id);
        endif;
       ?>
       <a href="<?php echo $cta_link;?>" class="button button--gold">
         <?php the_field('cta_button_text', $page_id); ?>
       </a>
    </div>
  </div>
</section>
