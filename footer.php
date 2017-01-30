<?php // Close main ?>
</main>

<footer class="container global-footer">
  <div class="row">
    <div class="sm-col-6 col-2 text-center">
      <a href="<?php echo get_home_url();?>/">
        <img src="<?php bloginfo('template_url');?>/assets/img/logo-white.svg" alt="Work Healthy Australia" class="footer--logo">
      </a>
    </div>
    <div class="sm-col-6 col-4 footer--info">
      <?php the_field('address', 'option'); ?>
      <p>
        Phone: <?php the_field('phone_1', 'option'); ?> <br>
        Phone: <?php the_field('phone_2', 'option'); ?> <br>
        Fax: <?php the_field('fax', 'option'); ?>
      </p>
    </div>
    <div class="col-6">
      <nav class="footer--nav">
        <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
      </nav>
    </div>
  </div>
</footer>

<div class="container footer--copyright">
  <div class="row">
    <div class="sm-col-6 col-4">
      <span>
        Copyright &copy; <?php echo date('Y');?> All Rights Reserved
      </span>
    </div>
    <div class="col-4 text-center sm-text-left privacy-terms">
      <span>
        <strong>
          <a href="<?php echo get_home_url();?>/privacy-statement/">
            Privacy Statement
          </a>
          |
          <a href="<?php echo get_home_url();?>/legal-notices/">
            Legal Notices
          </a>
        </strong>
      </span>
    </div>
    <div class="sm-col-6 col-4 text-right">
      <span>
        Site by <a href="https://factor1studios.com/" class="factor1">factor1</a>
      </span>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
