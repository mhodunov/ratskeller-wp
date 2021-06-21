<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(

	'background_image' => array(
		'type'  => 'upload',
		'label' => __( 'Hero Image', 'Page Builder' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),

	'logo' => array(
		'type'  => 'upload',
		'label' => __( 'Logo', 'Page Builder' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),

	'small_text' => array(
		'label' => __('Opening Hours Small Text', 'Page Builder'),
		'desc'  => __('Insert Info About Working Hours', 'Page Builder'),
		'type'  => 'text',
	),

	'large_text' => array(
		'label' => __('Opening Hours Large Text', 'Page Builder'),
		'desc'  => __('Insert Info About Working Hours', 'Page Builder'),
		'type'  => 'text',
	),

);
