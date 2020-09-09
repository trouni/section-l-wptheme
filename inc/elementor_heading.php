<?php
/*
 * @author Eliza "kokers" Witkowska - AIO collective
 *
 * Custom control for WordPress Elementor plugin
 * inside Section > Style > Typography settings
 * and Column > Style > Typography settings,
 * for setting custom headings color (h1...h6).
 * 
 * Current Heading Color control inside Elementor, 
 * works only for heading widget, and not h1...h6 tags.
 * This control allow you to set color for those tags.
 *
 */

function aio_section_headings_color($element, $section_id, $args)
{
  if (('column' === $element->get_name() || 'section' === $element->get_name()) && 'section_typo' === $section_id) {
    $element->add_control(
      'html_headings_color',
      [
        'type' => \Elementor\Controls_Manager::COLOR,
        'label' => __('Heading (h1, h2 ...) Color', 'aiocollective'),
        'separator' => 'default',
        'selectors' => [
          '{{WRAPPER}} h1,{{WRAPPER}} h2,{{WRAPPER}} h3,{{WRAPPER}} h4,{{WRAPPER}} h5' => 'color: {{VALUE}}',
        ]
      ]
    );
  }
}
add_action('elementor/element/after_section_start', 'aio_section_headings_color', 10, 3);
