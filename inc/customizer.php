<?php
/**
 * comedian Theme Customizer
 *
 * @package comedian
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function comedian_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'comedian_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'comedian_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'comedian_customize_register' );


function comedian_newer_customizer($wp_customizer){
	$wp_customizer->add_section('comedian_wc_single_page_section', array(
		'title' => __("WC Single Page", "comedian"),
		'priority'=>200,

	));

	$wp_customizer->add_setting('comedian_wc_single_page_setting', array(
		'transport' => 'refresh',
	));

	$wp_customizer->add_control(
		new WP_Customize_Image_Control(
			$wp_customizer,
			'comedian_single_product_page_background',
			array(
				'label'      => __( 'Upload a Background Image', 'comedian' ),
				'section'    => 'comedian_wc_single_page_section',
				'settings'   => 'comedian_wc_single_page_setting',
			)
		)
	);

}
add_action('customize_register', 'comedian_newer_customizer');

function comedian_social_customizer($wp_customizer){
	$wp_customizer->add_section('comedian_social_section', array(
		'title' => __("Social Links", "comedian"),
		'priority'=>200,

	));

	$wp_customizer->add_setting('comedian_socail_setting_facebook', array(
		'transport' => 'refresh',
	));


	$wp_customizer->add_control(
		'comedian_facebook',
		array(
			'label'    => __( 'Facebook URL', 'comedian' ),
			'section'  => 'comedian_social_section',
			'settings' => 'comedian_socail_setting_facebook',
			'type'     => 'text',
		)
	);


	$wp_customizer->add_setting('comedian_socail_setting_twitter', array(
		'transport' => 'refresh',
	));

	$wp_customizer->add_control(
		'comedian_twitter',
		array(
			'label'    => __( 'Twitter URL', 'comedian' ),
			'section'  => 'comedian_social_section',
			'settings' => 'comedian_socail_setting_twitter',
			'type'     => 'url',
			
		)
	);

	$wp_customizer->add_setting('comedian_socail_setting_instagram', array(
		'transport' => 'refresh',
	));

	$wp_customizer->add_control(
		'comedian_instagram',
		array(
			'label'    => __( 'Instagram URL', 'comedian' ),
			'section'  => 'comedian_social_section',
			'settings' => 'comedian_socail_setting_instagram',
			'type'     => 'url',
			
		)
	);

	$wp_customizer->add_setting('comedian_socail_setting_youtube', array(
		'transport' => 'refresh',
	));

	$wp_customizer->add_control(
		'comedian_youtube',
		array(
			'label'    => __( 'YouTube URL', 'comedian' ),
			'section'  => 'comedian_social_section',
			'settings' => 'comedian_socail_setting_youtube',
			'type'     => 'url',
			
		)
	);


}

add_action('customize_register', 'comedian_social_customizer');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function comedian_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function comedian_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function comedian_customize_preview_js() {
	wp_enqueue_script( 'comedian-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'comedian_customize_preview_js' );
