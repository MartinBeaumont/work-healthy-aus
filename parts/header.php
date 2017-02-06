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
      <div class="sm-col-6 col-2">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url');?>/assets/img/logo.svg" alt="Work Healthy Australia" class="svg-logo">
        </a>
      </div>
      <div class="sm-col-6 col-10">
        <nav class="main-nav sm-hide">
          <?php wp_nav_menu(array('theme_location' => 'primary'));?>
        </nav>
        <div class="sm-only">
          <a id="nifty-nav-toggle">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="search-panel" class="search-container">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>

<div class="nifty-panel">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav>
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
      </div>
    </div>
  </div>
</div>
