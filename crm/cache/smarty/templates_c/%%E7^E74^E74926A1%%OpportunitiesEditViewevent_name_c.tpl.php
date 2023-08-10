<?php /* Smarty version 2.6.31, created on 2019-09-26 09:12:48
         compiled from cache/include/InlineEditing/OpportunitiesEditViewevent_name_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['event_name_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['event_name_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['event_name_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['event_name_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['event_name_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >