<?php
  /**
   * The 404 Not Found template.
   *
   * Used when WordPress encounters an unknown URL.
   */
  get_header();

  get_template_part('parts/standard-hero');
?>

<section class="container default-container">
  <div class="row">
    <div class="col-11 col-centered">
      <img src="http://unsplash.it/1200/600/?random" alt="Page not found">
    </div>
    <div class="col-10 col-centered">
      <h2>
        Sorry, we couldn't find that page
      </h2>

      <p>
        While we were busy treating injuries in the workplace, you discovered
        one on our website! Head back to the <a href="<?php echo get_home_url();?>/">home page</a> to
        learn more about Work Healthy Australia, or <a href="<?php echo get_home_url();?>/contact/">contact us</a>
        if you can't find the information you're looking for.
      </p>

    </div>
  </div>
</section>

<?php
  get_footer();
