<?php

/**
 * Section L theme's functions and definitions
 *
 * @package SectionLTheme
 * @since SectionLTheme 1.0
 */

add_action('init', function () {
  add_filter('wpml_elementor_widgets_to_translate', 'shortcode_widget_registration');
});

/**
 * Translate Shortcodes widget by elementor
 * @param array $widgets
 * @return array
 */
function shortcode_widget_registration($widgets)
{
  $widgets['shortcode'] = [
    'conditions' => ['widgetType' => 'shortcode'],
    'fields' => [
      [
        'field' => 'shortcode',
        'type' => __('Enter your shortcode', 'sitepress'),
        'editor_type' => 'AREA'
      ],

    ],
  ];

  return $widgets;
}

/**
 * Enqueuing stylesheets
 */
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
function enqueue_custom_styles()
{
  foreach (glob(get_stylesheet_directory() . '/css/*.css') as $file) {
    // $file returns the absolute path
    $filename = substr($file, strrpos($file, '/') + 1);
    wp_enqueue_style($file, get_stylesheet_directory_uri() . '/css/' . $filename, array(), filemtime(get_stylesheet_directory() . '/css/' . $filename));
  }

  foreach (glob(get_stylesheet_directory() . '/css/vendors/*.css') as $file) {
    // $file returns the absolute path
    $filename = substr($file, strrpos($file, '/') + 1);
    wp_enqueue_style($file, get_stylesheet_directory_uri() . '/css/vendors/' . $filename);
  }
}

/**
 * Enqueuing JavaScript files in the footer
 */
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function enqueue_custom_scripts()
{
  foreach (glob(get_stylesheet_directory() . '/js/*.js') as $file) {
    // $file returns the absolute path
    $filename = substr($file, strrpos($file, '/') + 1);
    wp_enqueue_script($file, get_stylesheet_directory_uri() . '/js/' . $filename, array(), filemtime(get_stylesheet_directory() . '/js/' . $filename), false);
  }
}

/**
 * Adding custom fonts to Customizer
 */
add_filter('generate_typography_default_fonts', function ($fonts) {
  $fonts[] = 'Inter';

  return $fonts;
});

/**
 * Get all necessary theme files
 */
$theme_dir = get_stylesheet_directory();

require $theme_dir . '/inc/scss-variables.php';
require $theme_dir . '/inc/elementor_heading.php';
require $theme_dir . '/inc/structure/navigation.php';
