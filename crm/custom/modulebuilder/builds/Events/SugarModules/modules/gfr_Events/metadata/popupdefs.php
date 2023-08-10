<?php
$popupMeta = array (
    'moduleMain' => 'gfr_Events',
    'varName' => 'gfr_Events',
    'orderBy' => 'gfr_events.name',
    'whereClauses' => array (
  'name' => 'gfr_events.name',
  'event_date' => 'gfr_events.event_date',
  'event_type' => 'gfr_events.event_type',
  'assigned_user_id' => 'gfr_events.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'event_date',
  5 => 'event_type',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'event_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EVENT_DATE',
    'width' => '10%',
    'name' => 'event_date',
  ),
  'event_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EVENT_TYPE',
    'width' => '10%',
    'name' => 'event_type',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
