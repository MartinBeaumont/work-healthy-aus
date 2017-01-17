<?php // Template Name: Physicians
get_header();

get_template_part('parts/standard-hero');
?>

<section class="container">
  <div class="row staff-filter--row">
    <div class="col-8 col-centered">
      <span class="region-label">
        Region:
      </span>
      <select class="dropdown-filter">
        <option>
          Select
        </option>
        <option>
          Region 1
        </option>
        <option>
          Region 2
        </option>
        <option>
          Region 3
        </option>
      </select>
    </div>
  </div>
</section>

<?php
get_template_part('parts/cta');

get_footer();
