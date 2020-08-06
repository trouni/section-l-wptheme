<?php

//  SCSS Variables
function wp_scss_set_variables()
{
  $variables = array(
    'nav-padding' => '3.5rem',
    'main-padding' => '3.5rem',
    'arrow-img' => 'url(/wp-content/uploads/2020/08/arrow_down.png)'
  );
  return $variables;
}
add_filter('wp_scss_variables', 'wp_scss_set_variables');
