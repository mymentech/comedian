<?php

define( 'CS_ACTIVE_FRAMEWORK',   false  ); // default true
define( 'CS_ACTIVE_METABOX',     true ); // default true
define( 'CS_ACTIVE_TAXONOMY',    false ); // default true
define( 'CS_ACTIVE_SHORTCODE',   false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',   false ); // default true
define( 'CS_ACTIVE_LIGHT_THEME',  true  ); // default false

function comedian_csf_init(){
	CSFramework_Metabox::instance( array() );
}
add_action('init', 'comedian_csf_init');


function comedian_csf_metaboxes($options){
	$options[]    = array(
		'id'        => '_comedian_page_options',
		'title'     => 'Custom Page Options',
		'post_type' => 'page',
		'context'   => 'normal',
		'priority'  => 'default',
		'sections'  => array(

			// begin: a section
			array(
				'name'  => 'page_options',
				'title' => __('Page Options', 'comedian'),
				'icon'  => 'fa fa-cog',

				'fields' => array(
					array(
						'id'    => 'page_bg_image',
						'type'  => 'image',
						'title' => __('Page Background Image','comedian'),
					),

				),
			),


		),
	);
	return $options;
}
add_filter('cs_metabox_options', 'comedian_csf_metaboxes');