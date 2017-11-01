<?php
/**
 * Settings Customizer Section.
 *
 * @package   @@pkg.name
 * @copyright @@pkg.copyright
 * @author    @@pkg.author
 * @license   @@pkg.license
 */

/**
 * Settings Section.
 */

// $url = esc_url( add_query_arg( array(
// 	'utm_source'   => 'customizer',
// 	'utm_medium'   => 'license-key-description',
// 	'utm_campaign' => 'customizer',
// 	'utm_content' => 'enter-a-license-key',
// 	),
// 'https://logindesigner.com/extensions' ) );

// $wp_customize->add_setting( 'login_designer[settings_title]', array(
// 	'sanitize_callback'     => 'sanitize_text_field',
// ) );

// $wp_customize->add_control( new Login_Designer_Title_Control( $wp_customize, 'login_designer[settings_title]', array(
// 	'type'                  => 'login-designer-title',
// 	'label'                 => esc_html__( 'Settings', '@@textdomain' ),
// 	'description'           => sprintf( esc_html__( 'Settings for Login Designer %sextensions%s.', '@@textdomain' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ),
// 	'section'               => 'login_designer__section--settings',
// 	'priority' 		=> 1,
// ) ) );

$url = esc_url( add_query_arg( array(
	'utm_source'   => 'customizer',
	'utm_medium'   => 'license-key-description',
	'utm_campaign' => 'customizer',
	'utm_content' => 'enter-a-license-key',
	),
'https://logindesigner.com/pricing' ) );

$wp_customize->add_setting( 'login_designer_license[key]', array(
	'default'             	=> '',
	'transport'             => 'postMessage',
	'type' 			=> 'option',
	'sanitize_callback'     => 'sanitize_text_field',
) );

$wp_customize->add_control( new Login_Designer_License_Control( $wp_customize, 'login_designer_license[key]', array(
	'type'                  => 'login-designer-title',
	'label'                 => esc_html__( 'License', '@@textdomain' ),
	'description'           => sprintf( esc_html__( 'Enter a %slicense key%s to enable remote updates, unlock premium templates and activate professional extensions.', '@@textdomain' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ),
	'section'               => 'login_designer__section--settings',
	'priority' 		=> 1,
) ) );
