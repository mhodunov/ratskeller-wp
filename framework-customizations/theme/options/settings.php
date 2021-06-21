<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    
  'contacts' => array(
    'type' => 'tab',
    'title' => 'Contact Info',
    'options' => array(
      
      'address' => array(
        'label' => __('Address (shown in footer)', 'Options'),
        'type' => 'text',
        'value' => 'Neuer Markt 1, 17192 Waren (Müritz)'
      ),
      
      'phone' => array(
        'label' => __('Phone Number (shown in header & footer)', 'Options'),
        'type' => 'text',
        'value' => '03991 633 27 77'
      ),

      'mail' => array(
        'label' => __('E-mail address', 'Options'),
        'type' => 'text',
        'value' => 'info@ratskeller-waren.de'
      ),

      'facebook' => array(
        'label' => __('Facebook link', 'Options'),
        'type' => 'text',
        'value' => '#'
      ),

      'facebook_person' => array(
        'label' => __('Facebook contact person', 'Options'),
        'type' => 'text',
        'value' => 'Fabian Kerber'
      ),

      'facebook_person_link' => array(
        'label' => __('Facebook contact person link', 'Options'),
        'type' => 'text',
        'value' => '#'
      ),
      
      'open_hours_from' => array(
        'label' => __('Opening hours (from)', 'Options'),
        'type' => 'text',
        'value' => '7'
      ),

      'open_hours_to' => array(
        'label' => __('Opening hours (to)', 'Options'),
        'type' => 'text',
        'value' => '22'
      ),
    )
    ),

  'api' => array(
    'type' => 'tab',
    'title' => 'API',
    'options' => array(
      'google_map_api' => array(
        'label' => __('Google Map API Key', 'Options'),
        'type' => 'text',
        'value' => 'Please, add key here'
      ),
      
      'google_analytics' => array(
        'label' => __('Google Analytics ID', 'Options'),
        'type' => 'text',
        'value' => 'Please, add ID here'
      )
    )
  ),
    );