<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(

  'slider'=> array(
        'type'          => 'addable-popup',
        'label'         => _x('Add Slider', 'Page Builder'),
        'popup-title'   => null,
        'size'          => 'large',
        'template' => "<img src='{{=image['url']}}' height='100'>",
        'popup-options' => array(
            'image' => array(
                'type'        => 'upload',
                'label'       => _x('Choose or upload slider image', 'Page Builder'),
                'images_only' => true,
						),
					),
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
