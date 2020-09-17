<?php

/**
 * Navigation elements.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


if (!function_exists('generate_navigation_position')) {
	/**
	 * Build the navigation.
	 *
	 * @since 0.1
	 */
	function generate_navigation_position()
	{
?>
		<nav id="site-navigation" <?php generate_do_element_classes('navigation'); ?> <?php generate_do_microdata('navigation'); ?>>
			<div <?php generate_do_element_classes('inside_navigation'); ?>>
				<?php
				/**
				 * generate_inside_navigation hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_navigation_search - 10
				 * @hooked generate_mobile_menu_search_icon - 10
				 */
				do_action('generate_inside_navigation');
				?>
				<button class="reserve-button">
					<span>
						<p></p>
					</span>
				</button>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php
					/**
					 * generate_inside_mobile_menu hook.
					 *
					 * @since 0.1
					 */
					do_action('generate_inside_mobile_menu');

					generate_do_svg_icon('menu-bars', true);

					$mobile_menu_label = apply_filters('generate_mobile_menu_label', __('Menu', 'generatepress'));
					// $mobile_menu_label = null;
					$hamburger_menu_img = "/wp-content/uploads/2020/08/hamburger_menu.svg";

					printf(
						'<span class="hamburger-menu"><img src="%s"></span>',
						$hamburger_menu_img
					);
					?>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container' => 'div',
						'container_class' => 'main-nav',
						// 'container_class' => 'main-nav animate__animated animate__fadeIn',
						'container_id' => 'primary-menu',
						'menu_class' => '',
						'fallback_cb' => 'generate_menu_fallback',
						'items_wrap' => '<ul id="%1$s" class="%2$s ' . join(' ', generate_get_element_classes('menu')) . '">%3$s</ul>',
					)
				);

				/**
				 * generate_after_primary_menu hook.
				 *
				 * @since 2.3
				 */
				do_action('generate_after_primary_menu');
				?>
			</div><!-- .inside-navigation -->
		</nav><!-- #site-navigation -->
<?php
	}
}
