<?php
/**
 * Meg-n-Boots Theme Customizer.
 *
 * @package Meg-n-Boots
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function meg_n_boots_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Additional Customizer Options and changes
	 */

	$wp_customize->get_section( 'title_tagline' )->title = __( 'Site Title, Logo, Icon, & Tagline', 'meg_n_boots' );

	// Logo Uploader
	$wp_customize->add_setting( 'meg_n_boots_logo', array( 'default' => null ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'meg_n_boots_logo', array(
		'label'		=> __( 'Custom Site Logo (replaces title)', 'meg_n_boots' ),
		'description' => __('The Logo should be at the dimensions 190 x 60 pixels, or proportional.'),
		'section'	=> 'title_tagline',
		'settings'	=> 'meg_n_boots_logo',
		'priority'	=> 20
	) ) );
}
add_action( 'customize_register', 'meg_n_boots_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function meg_n_boots_customize_preview_js() {
	wp_enqueue_script( 'meg_n_boots_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'meg_n_boots_customize_preview_js' );


/**
 * Custom sections added
 */

//function meg_n_boots_customizer( $wp_customize ) {
//	// customizer build code
//}
//add_action( 'customize_register', 'meg_n_boots_customizer' );