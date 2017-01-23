<?php

/*-----------------------------------------------------------------------------
  Get featured image as url
-----------------------------------------------------------------------------*/
function featuredURL($size = 'full'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  echo $url;
}

/*-----------------------------------------------------------------------------
  Get featured image as url and output style property
-----------------------------------------------------------------------------*/
function featuredBG($size = 'full', $pos_x = 'center', $pos_y = 'center', $repeat = 'no-repeat'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  echo 'style="background: url('. $url .')'. $pos_x .' '. $pos_y .' ' . $repeat .'"';
}

/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size('staff-thumb', 246, 246, array('center', 'top'));
  add_image_size('leadership-staff-thumb', 356, 350, array('center', 'top'));
  add_image_size('all-staff-thumb', 356, 250, array('center', 'top'));
  add_image_size('733x400', 733, 400, array('center', 'center'));
  add_image_size('733x400_CT', 733, 400, array('center', 'top'));
  add_image_size('166x166', 166, 166, array('center', 'center'));
  add_image_size('954x560', 954, 560, array('center', 'center'));
}
