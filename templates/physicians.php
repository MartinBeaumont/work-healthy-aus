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
$page_id = get_queried_object_id();

if( get_field('cta_content', $page_id) ):

  get_template_part('parts/cta');

endif;

get_footer();
