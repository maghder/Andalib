<?php
/**
 * Andalib.
 *
 * This file adds the Customizer additions to the Andalib Theme.
 *
 * @package Andalib
 * @author  AyoubMaghder
 * @license GPL-2.0+
 * @link    http://3andalib.com/
 */

add_action( 'customize_register', 'andalib_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function andalib_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'andalib_link_color',
		array(
			'default'           => andalib_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'andalib_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'andalib' ),
				'label'       => __( 'Link Color', 'andalib' ),
				'section'     => 'colors',
				'settings'    => 'andalib_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'andalib_accent_color',
		array(
			'default'           => andalib_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'andalib_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', 'andalib' ),
				'label'       => __( 'Accent Color', 'andalib' ),
				'section'     => 'colors',
				'settings'    => 'andalib_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		'andalib_logo_width',
		array(
			'default'           => 350,
			'sanitize_callback' => 'absint',
		)
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'andalib_logo_width',
		array(
			'label'       => __( 'Logo Width', 'andalib' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'andalib' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'andalib_logo_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 100,
			),

		)
	);

}
