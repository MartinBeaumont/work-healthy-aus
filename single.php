<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ):
    while( have_posts() ): the_post();
?>

    <section class="container default-container">
      <div class="row">
        <article class="col-10 col-centered">
          <?php
          if( has_post_thumbnail() ):
            the_post_thumbnail('954x560');
          endif;
          ?>
          <h2 class="single--title">
            <?php the_title(); ?>
          </h2>
          
          <?php // if its not a post type of service
          if( !is_singular('services') ):
          ?>
            <div class="post-meta">
              <span class="post-date">
                <?php the_time('d M y'); ?>
              </span>
              |
              <span class="post-author">
                <?php the_author(); ?>
              </span>
          <?php endif;?>

              <div class="single--content">
                <?php the_content(); ?>
              </div>
            </div>
        </article>
      </div>
      <div class="row">
        <div class="col-8 col-centered text-center">
          <button class="button button--purple" onclick="goBack()">
            Back
          </button>
        </div>
      </div>
    </section>

    <script>
      // Back in history
      var goBack = function(){
        window.history.back();
      };
    </script>

<?php
    endwhile;
  endif;

  // if it is a services single view show the cta
  if( is_singular('services') ):
    get_template_part('parts/cta');
  endif;

  get_footer();
