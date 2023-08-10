<?php
// created: 2019-04-22 05:25:53
$dictionary["Lead"]["fields"]["gfr_events_leads_1"] = array (
  'name' => 'gfr_events_leads_1',
  'type' => 'link',
  'relationship' => 'gfr_events_leads_1',
  'source' => 'non-db',
  'module' => 'gfr_Events',
  'bean_name' => 'gfr_Events',
  'vname' => 'LBL_GFR_EVENTS_LEADS_1_FROM_GFR_EVENTS_TITLE',
  'id_name' => 'gfr_events_leads_1gfr_events_ida',
);
$dictionary["Lead"]["fields"]["gfr_events_leads_1_name"] = array (
  'name' => 'gfr_events_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GFR_EVENTS_LEADS_1_FROM_GFR_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'gfr_events_leads_1gfr_events_ida',
  'link' => 'gfr_events_leads_1',
  'table' => 'gfr_events',
  'module' => 'gfr_Events',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["gfr_events_leads_1gfr_events_ida"] = array (
  'name' => 'gfr_events_leads_1gfr_events_ida',
  'type' => 'link',
  'relationship' => 'gfr_events_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GFR_EVENTS_LEADS_1_FROM_LEADS_TITLE',
);
