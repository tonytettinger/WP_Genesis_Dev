<?php

/**
 * Customizer Handler
 * 
 * @package antal\Toniquez\Functions
 * @since 1.0.0
 * @author Antal
 * @license GNU General Public License 2.0+
 * 
 */

namespace antal\Toniquez\Customizer;

use WP_Customize_Color_Control;

add_action( 'customize_register', __NAMESPACE__ . '\register_with_customizer' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.2.3
 * 
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function register_with_customizer() {
	$prefix = get_settings_prefix();
	global $wp_customize;

	$wp_customize->add_setting(
		$prefix. '_link_color',
		array(
			'default'           => get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			$prefix. '_link_color',
			array(
				'description' => __( 'Change the default color for linked titles, menu links, post info links and more.', 'genesis-sample' ),
			    'label'       => __( 'Link Color', 'genesis-sample' ),
			    'section'     => 'colors',
			    'settings'    => $prefix. '_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		$prefix. '_accent_color',
		array(
			'default'           => get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genesis_sample_accent_color',
			array(
				'description' => __( 'Change the default color for button hovers.', 'genesis-sample' ),
			    'label'       => __( 'Accent Color', 'genesis-sample' ),
			    'section'     => 'colors',
			    'settings'    => 'genesis_sample_accent_color',
			)
		)
	);

}
