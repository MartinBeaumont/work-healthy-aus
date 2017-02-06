<?php // Template Name: Home
get_header();

get_template_part('parts/home-header');

get_template_part('parts/home-hero');

get_template_part('parts/home-buckets');

get_template_part('parts/stat-slider');

get_template_part('parts/video-row');

$page_id = get_queried_object_id();

if( get_field('cta_content', $page_id) ):

  get_template_part('parts/cta');

endif;

get_template_part('parts/industry-slider');

get_footer();
