<?php

//  SCSS Variables
function wp_scss_set_variables()
{
  $variables = array(
    'nav-padding' => '3.5rem',
    'main-padding' => '3.5rem',
    'arrow-svg' => "url(\"data:image/svg+xml;utf8,<svg id='a2ac12bf-8d9c-419c-b313-ef0c525b27ab' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36.77 59.88'><polygon class='e22aa11f-bda2-4928-bb62-ef3a9efbf9f7' points='14.88 19.77 14.88 59.88 21.89 59.88 21.89 19.77 36.77 19.77 18.39 0 18.38 0 0 19.77 14.88 19.77' fill='currentColor'/></svg>\")",
    'arrow-svg-red' => "url(\"data:image/svg+xml;utf8,<svg id='a2ac12bf-8d9c-419c-b313-ef0c525b27ab' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36.77 59.88'><polygon class='e22aa11f-bda2-4928-bb62-ef3a9efbf9f7' points='14.88 19.77 14.88 59.88 21.89 59.88 21.89 19.77 36.77 19.77 18.39 0 18.38 0 0 19.77 14.88 19.77' fill='%23E3203D'/></svg>\")",
    'arrow-svg-orange' => "url(\"data:image/svg+xml;utf8,<svg id='a2ac12bf-8d9c-419c-b313-ef0c525b27ab' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36.77 59.88'><polygon class='e22aa11f-bda2-4928-bb62-ef3a9efbf9f7' points='14.88 19.77 14.88 59.88 21.89 59.88 21.89 19.77 36.77 19.77 18.39 0 18.38 0 0 19.77 14.88 19.77' fill='%23FF673A'/></svg>\")",
    'arrow-svg-brown' => "url(\"data:image/svg+xml;utf8,<svg id='a2ac12bf-8d9c-419c-b313-ef0c525b27ab' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36.77 59.88'><polygon class='e22aa11f-bda2-4928-bb62-ef3a9efbf9f7' points='14.88 19.77 14.88 59.88 21.89 59.88 21.89 19.77 36.77 19.77 18.39 0 18.38 0 0 19.77 14.88 19.77' fill='%23C47159'/></svg>\")",
    'mobile-breakpoint' => '768px',
    'tablet-breakpoint' => '996px',
    'desktop-breakpoint' => '1280px',
    'xl-desktop-breakpoint' => '1680px',
    'xxl-desktop-breakpoint' => '1920px',
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
