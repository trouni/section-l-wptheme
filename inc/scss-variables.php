<?php

//  SCSS Variables
function wp_scss_set_variables()
{
  $variables = array(
    'black' => '#000',
    'white' => '#fff'
  );
  return $variables;
}
add_filter('wp_scss_variables', 'wp_scss_set_variables');
