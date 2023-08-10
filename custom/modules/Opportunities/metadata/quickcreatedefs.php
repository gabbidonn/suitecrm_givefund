<?php
$viewdefs ['Opportunities'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'account_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
          ),
          1 => 
          array (
            'name' => 'opportunity_type',
          ),
        ),
        2 => 
        array (
          0 => 'amount',
          1 => 'date_closed',
        ),
        3 => 
        array (
          0 => 'next_step',
          1 => 'sales_stage',
        ),
        4 => 
        array (
          0 => 'lead_source',
          1 => 'probability',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'venue_c',
            'label' => 'LBL_VENUE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'event_name_c',
            'label' => 'LBL_EVENT_NAME',
          ),
          1 => 
          array (
            'name' => 'charity_name_c',
            'label' => 'LBL_CHARITY_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
