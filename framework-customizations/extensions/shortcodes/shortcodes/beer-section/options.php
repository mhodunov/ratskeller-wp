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
	'section_additional_text' => array(
    'type'  => 'wp-editor',
    'value' => 'Start writing here',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Additional Section Text', 'Page Builder'),
    'desc'  => __('Description', 'Page Builder'),
    'help'  => __('Help tip', 'Page Builder'),
    'size' => 'small',
    'editor_height' => 400,
    'wpautop' => true,
    'editor_type' => false,
    'shortcodes' => false
	),
	'image_one'            => array(
		'type'  => 'upload',
		'label' => __( 'Section Image 1', 'Page Builder' ),
		'desc'  => __( 'Upload a new, or choose an existing image from your media library', 'fw' )
	),
	'image_two'            => array(
		'type'  => 'upload',
		'label' => __( 'Section Image 2', 'Page Builder' ),
		'desc'  => __( 'Upload a new, or choose an existing image from your media library', 'fw' )
	),
	'image_three'            => array(
		'type'  => 'upload',
		'label' => __( 'Section Image 3', 'Page Builder' ),
		'desc'  => __( 'Upload a new, or choose an existing image from your media library', 'fw' )
	),

);
