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

	//Customize Title Section
	$wp_customize->get_section( 'title_tagline' )->title = __( 'Site Title, Tagline, & Icon', 'meg_n_boots' );

	//Hero Image and Title Section
	$wp_customize->add_section( 'meg_n_boots_hero_title' , array(
		'title'      => __( 'Hero Image and Title', 'meg_n_boots' ),
		'priority'   => 61,
	) );

	$wp_customize->add_setting( 'meg_n_boots_hero_title', array(
		'default' => 'A nice, bold tile!'
	) );

	$wp_customize->add_control( 'meg_n_boots_hero_title', array(
		'label'     => __( 'Hero Title', 'meg_n_boots' ),
		'description' => __('This is the text you want overlayed on your front page Hero Image.'),
		'section'   => 'meg_n_boots_hero_title',
		'type'      => 'text',
		'priority'  => 1
	) );

	$wp_customize->add_setting( 'meg_n_boots_hero_subtitle', array(
		'default' => 'And a smalled, supporting subtitle to go with it.'
	) );

	$wp_customize->add_control( 'meg_n_boots_hero_subtitle', array(
		'label'     => __( 'Hero Subtitle', 'meg_n_boots' ),
		'description' => __('This is the subtitle text you want overlayed on your front page Hero Image.'),
		'section'   => 'meg_n_boots_hero_title',
		'type'      => 'text',
		'priority'  => 2
	) );

	$wp_customize->add_setting( 'meg_n_boots_hero_image', array( 'default' => null ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'meg_n_boots_logo', array(
		'label'		=> __( 'Hero Image', 'meg_n_boots' ),
		'description' => __('his is the hero image you want displayed, should be at the dimensions 190 x 60 pixels, or proportionally larger. best results are with images 2000px or wider.'),
		'section'	=> 'meg_n_boots_hero_title',
		'settings'	=> 'meg_n_boots_hero_image',
		'priority'	=> 20
	) ) );

	//End Hero Image and Title Section

	//	Add Color Options for Theme
	//	remove default color areas

	$wp_customize->remove_control( 'header_textcolor');
	$wp_customize->remove_control( 'background_color');

	$wp_customize->add_setting( 'site_primary_color', array(
		'default' => '#d43f3a'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_primary_color', array(
		'label' => 'Site Primary Color',
		'section' => 'colors',
		'settings' => 'site_primary_color',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'title_text_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_text_color', array(
		'label' => 'Title Text Color',
		'section' => 'colors',
		'settings' => 'title_text_color',
		'priority' => 2
	) ) );

	$wp_customize->add_setting( 'body_color', array(
		'default' => '#ffffff'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_color', array(
		'label' => 'Body Color',
		'section' => 'colors',
		'settings' => 'body_color',
		'priority' => 11
	) ) );

	$wp_customize->add_setting( 'text_color', array(
		'default' => '#000000'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
		'label' => 'Text Color',
		'section' => 'colors',
		'settings' => 'text_color',
		'priority' => 12
	) ) );

	$wp_customize->add_setting( 'link_color', array(
		'default' => '#337ab7'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label' => 'Link Color',
		'section' => 'colors',
		'settings' => 'link_color',
		'priority' => 15
	) ) );

	$wp_customize->add_setting( 'background_theme_color', array(
		'default' => '#e9e9e9'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_theme_color', array(
		'label' => 'Background Theme Color',
		'section' => 'colors',
		'settings' => 'background_theme_color',
		'priority' => 20
	) ) );

	//	Add Color Options for Theme

}
add_action( 'customize_register', 'meg_n_boots_customize_register' );


/**
 * Add color customizations to CSS at wp_head
 */

function meg_n_boots_customizer_head_styles() {



	$site_primary_color = get_theme_mod( 'site_primary_color' );
	$title_text_color = get_theme_mod( 'title_text_color' );
	$body_color = get_theme_mod( 'body_color' );
	$text_color = get_theme_mod( 'text_color' );
	$link_color = get_theme_mod( 'link_color' );
	$background_theme_color = get_theme_mod( 'background_theme_color' );

	?>
		<style type="text/css">

			/*Site Primary Color*/
			button:hover,
			input[type="submit"]:hover,
			.nav-previous > a:hover,
			.nav-next > a:hover {
				color: <?php echo $site_primary_color; ?>;
			}

			input[type="submit"],
			.nav-previous > a,
			.nav-next > a {
				background-color: <?php echo $site_primary_color; ?>;
			}

			.navbar {
				background: <?php echo $site_primary_color; ?>;
			}

			/*Title Text Color*/
			h1.site-title > a,
			.glyphicon {
				color: <?php echo $title_text_color; ?>;
			}

			/*Text Color*/
			body,
			p > .glyphicon{
				color: <?php echo $text_color; ?>;
			}

			/*Body Color*/
			.grid-item-content,
			.site-content,
			#content {
				background: <?php echo $body_color; ?>;
			}

			/*Background Theme Color*/

			body {
				background: <?php echo $background_theme_color; ?>;
			}

			button:hover,
			.nav-next>a:hover,
			.nav-previous>a:hover {
				background-color: <?php echo $background_theme_color; ?>;
			}

			input[type="submit"] {
				color: <?php echo $background_theme_color; ?>;
			}

			/*Link Color*/
			a {
				color: <?php echo $link_color; ?>;
			}

		</style>
	<?php
}
add_action( 'wp_head', 'meg_n_boots_customizer_head_styles' );



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