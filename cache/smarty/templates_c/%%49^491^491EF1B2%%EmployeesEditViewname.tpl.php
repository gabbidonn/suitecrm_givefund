<?php /* Smarty version 2.6.31, created on 2022-01-12 08:03:20
         compiled from cache/include/InlineEditing/EmployeesEditViewname.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
    maxlength='510' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >