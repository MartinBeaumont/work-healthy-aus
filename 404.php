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
        This page does not exist
      </h2>
      <a href="<?php echo get_home_url();?>/">
        Go back home
      </a>
    </div>
  </div>
</section>

<?php
  get_footer();
