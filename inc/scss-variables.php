<?php

//  SCSS Variables
function wp_scss_set_variables()
{
  $variables = array(
    'nav-padding' => '3.5rem',
    'main-padding' => '3.5rem',
    'arrow-img' => 'url(/wp-content/uploads/2020/09/arrow.svg)',
    'color-01' => '#FFFFFF',
    'color-02' => '#290056',
    'color-03' => '#008A6A',
    'color-04' => '#FF5485',
    'color-05' => '#FF673A',
    'color-06' => '#ECEDF0',
    'color-07' => '#FFF5F5',
    'color-08' => '#FFE6D3',
    'color-09' => '#DAC5B4',
    'color-10' => '#E3DCFF',
    'color-11' => '#E4E4E7',
    'color-12' => '#FFD2C1',
    'color-13' => '#E3203D',
    'color-14' => '#B27D7E',
    'color-15' => '#BDACAB',
    'color-16' => '#FCB0B2',
    'color-17' => '#FFFEC3',
    'color-18' => '#FFDE47',
    'color-19' => '#8989BE',
    'color-20' => '#AAAAAA',
    'color-21' => '#4D87D9',
    'color-22' => '#C47159',
  );
  return $variables;
}
add_filter('wp_scss_variables', 'wp_scss_set_variables');
