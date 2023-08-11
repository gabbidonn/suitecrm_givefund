<?php
// created: 2023-08-10 16:22:39
$viewdefs['Opportunities']['EditView'] = array (
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
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'assigned_user_name',
        1 => 'account_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'currency_id',
          'label' => 'LBL_CURRENCY',
        ),
        1 => 
        array (
          'name' => 'date_closed',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'amount',
        ),
        1 => 'opportunity_type',
      ),
      3 => 
      array (
        0 => 'sales_stage',
        1 => 'lead_source',
      ),
      4 => 
      array (
        0 => 'probability',
        1 => 
        array (
          'name' => 'venue_c',
          'label' => 'LBL_VENUE',
        ),
      ),
      5 => 
      array (
        0 => 'next_step',
        1 => 'campaign_name',
      ),
      6 => 
      array (
        0 => 'description',
      ),
      7 => 
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
      8 => 
      array (
        0 => 
        array (
          'name' => 'status_c',
          'studio' => 'visible',
          'label' => 'LBL_STATUS',
        ),
        1 => '',
      ),
    ),
  ),
);