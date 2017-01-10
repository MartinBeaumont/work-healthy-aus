<?php // Goals Template Part for All Services template ?>

<section class="container goals">
  <div class="row">
    <div class="col-6 offset-1">
      <h2>
        Explore by Goals
      </h2>
    </div>
  </div>
  <?php if( have_rows('goals') ): ?>
    <div class="row">
      <div class="col-10 col-centered">
        <div class="sm-block-grid-1 block-grid-2">
          <?php while( have_rows('goals') ): the_row(); ?>
            <div class="col">
              <a href="<?php the_sub_field('goal_page');?>" class="service-card">
                <h3>
                  <?php the_sub_field('goal_headline'); ?>
                </h3>
                <p>
                  <em>
                    <?php the_sub_field('goal_description'); ?>
                  </em>
                </p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
