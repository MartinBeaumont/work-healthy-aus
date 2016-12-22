<?php // Header Template Part ?>

<header>
  <div class="container utility-nav">
    <div class="row">
      <div class="col-12">
        <?php wp_nav_menu(array('theme_location' => 'utility')); ?>
      </div>
    </div>
  </div>
  <div class="container container--justify-content-center site-nav">
    <div class="row row--align-items-center">
      <div class="col-2">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url');?>/assets/img/logo.svg" alt="Work Healthy Australia" class="svg-logo">
        </a>
      </div>
      <div class="col-10">
        <nav class="main-nav">
          <?php wp_nav_menu(array('theme_location' => 'primary'));?>
        </nav>
      </div>
    </div>
  </div>
</header>
