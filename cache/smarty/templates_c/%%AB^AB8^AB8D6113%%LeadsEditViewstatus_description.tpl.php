<?php /* Smarty version 2.6.31, created on 2021-10-11 06:46:46
         compiled from cache/include/InlineEditing/LeadsEditViewstatus_description.tpl */ ?>

<?php if (empty ( $this->_tpl_vars['fields']['status_description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['status_description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['status_description']['value']); ?>
<?php endif; ?>




<textarea  id='<?php echo $this->_tpl_vars['fields']['status_description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['status_description']['name']; ?>
'
rows="2"
cols="32"
title='' tabindex="1" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>


<?php echo ''; ?>