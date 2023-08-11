<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2019-04-25 08:09:16
$dictionary['Lead']['fields']['account_name']['inline_edit']=true;
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['full_text_search']=NULL;

 

 // created: 2019-04-26 11:54:32
$dictionary['Lead']['fields']['captured_sent_date_c']['inline_edit']='1';
$dictionary['Lead']['fields']['captured_sent_date_c']['labelValue']='captured sent date';

 

 // created: 2019-04-25 08:09:49
$dictionary['Lead']['fields']['charity_name_c']['inline_edit']='1';
$dictionary['Lead']['fields']['charity_name_c']['labelValue']='Charity Name';

 

 // created: 2019-04-24 06:49:15
$dictionary['Lead']['fields']['contact_form_c']['inline_edit']='1';
$dictionary['Lead']['fields']['contact_form_c']['labelValue']='Contact form';

 

 // created: 2019-04-26 11:53:55
$dictionary['Lead']['fields']['date_sent_c']['inline_edit']='1';
$dictionary['Lead']['fields']['date_sent_c']['labelValue']='Date Sent';

 

 // created: 2019-04-24 06:46:45
$dictionary['Lead']['fields']['event_date_c']['inline_edit']='1';
$dictionary['Lead']['fields']['event_date_c']['labelValue']='Event Date';

 

 // created: 2019-04-24 06:45:47
$dictionary['Lead']['fields']['event_name_c']['inline_edit']='1';
$dictionary['Lead']['fields']['event_name_c']['labelValue']='Event Name';

 

 // created: 2019-04-26 11:49:16
$dictionary['Lead']['fields']['event_type_c']['inline_edit']='1';
$dictionary['Lead']['fields']['event_type_c']['labelValue']='Event type';

 

 // created: 2019-02-21 07:22:18
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-02-21 07:22:18
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2019-02-21 07:22:17
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2019-02-21 07:22:17
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2019-04-26 11:46:20
$dictionary['Lead']['fields']['lead_source']['inline_edit']=true;
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source']['default']='Website';

 

 // created: 2019-04-27 13:52:31
$dictionary['Lead']['fields']['status']['inline_edit']=true;
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['default']='New';

 

 // created: 2019-04-24 06:49:35
$dictionary['Lead']['fields']['status_description']['inline_edit']=true;
$dictionary['Lead']['fields']['status_description']['comments']='Description of the status of the lead';
$dictionary['Lead']['fields']['status_description']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status_description']['rows']='4';
$dictionary['Lead']['fields']['status_description']['cols']='20';

 

 // created: 2019-04-24 06:48:55
$dictionary['Lead']['fields']['website']['inline_edit']=true;
$dictionary['Lead']['fields']['website']['comments']='URL of website for the company';
$dictionary['Lead']['fields']['website']['merge_filter']='disabled';

 
?>