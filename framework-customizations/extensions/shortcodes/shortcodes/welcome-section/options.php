<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(

	'section_title' => array(
		'label' => __('Section Title', 'Page Builder'),
		'desc'  => __('Insert Section Title Here', 'Page Builder'),
		'type'  => 'text',
	),
	'section_content' => array(
    'type'  => 'wp-editor',
    'value' => 'Start writing here',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Section Content', 'Page Builder'),
    'help'  => __('Help tip', 'Page Builder'),
    'size' => 'small',
    'editor_height' => 400,
    'wpautop' => true,
    'editor_type' => false,
    'shortcodes' => false
	),
	'button_text' => array(
		'label' => __('Button Text', 'Page Builder'),
		'desc'  => __('Insert Button Text Here', 'Page Builder'),
		'type'  => 'text',
	),
	'button_url' => array(
		'label' => __('Button URL', 'Page Builder'),
		'desc'  => __('Insert Link Here', 'Page Builder'),
		'type'  => 'text',
	),
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Section Image', 'Page Builder' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'rotated_text' => array(
		'label' => __('Additional Text', 'Page Builder'),
		'desc'  => __('Insert Text Here', 'Page Builder'),
		'type'  => 'text',
	),

);
