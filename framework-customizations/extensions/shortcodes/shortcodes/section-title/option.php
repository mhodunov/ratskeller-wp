<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
  'section_title' => array(
    'type'  => 'text',
    'value' => 'default value',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Label', '{domain}'),
    'desc'  => __('Description', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
)
  );