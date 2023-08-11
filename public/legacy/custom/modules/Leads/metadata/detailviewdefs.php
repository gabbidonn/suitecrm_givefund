<?php
// created: 2023-08-10 16:22:39
$viewdefs['Leads']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        'SEND_CONFIRM_OPT_IN_EMAIL' => 
        array (
          'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'Leads\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Leads\'; this.form.module_tab.value=\'Leads\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
            'htmlOptions' => 
            array (
              'class' => 'button hidden',
              'id' => 'send_confirm_opt_in_email',
              'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Leads\'; this.form.module_tab.value=\'Leads\';',
              'name' => 'send_confirm_opt_in_email',
              'disabled' => true,
            ),
          ),
        ),
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 
        array (
          'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
          'sugar_html' => 
          array (
            'type' => 'button',
            'value' => '{$MOD.LBL_CONVERTLEAD}',
            'htmlOptions' => 
            array (
              'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
              'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
              'class' => 'button',
              'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
              'name' => 'convert',
              'id' => 'convert_lead_button',
            ),
            'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
          ),
        ),
        4 => 'FIND_DUPLICATES',
        5 => 
        array (
          'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'class' => 'button',
              'id' => 'manage_subscriptions_button',
              'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
              'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
            ),
          ),
        ),
        'AOS_GENLET' => 
        array (
          'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
        ),
      ),
      'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
    ),
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
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Leads/Lead.js',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_PANEL_ADVANCED' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_CONTACT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
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
        0 => 
        array (
          'name' => 'event_type_c',
          'studio' => 'visible',
          'label' => 'LBL_EVENT_TYPE',
        ),
        1 => '',
      ),
      1 => 
      array (
        0 => 'lead_source_description',
        1 => '',
      ),
      2 => 
      array (
        0 => 'status',
        1 => '',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'date_sent_c',
          'label' => 'LBL_DATE_SENT',
        ),
        1 => '',
      ),
      4 => 
      array (
        0 => 'status_description',
        1 => '',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        1 => '',
      ),
    ),
  ),
);