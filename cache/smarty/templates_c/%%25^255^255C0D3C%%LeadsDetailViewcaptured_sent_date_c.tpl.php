<?php /* Smarty version 2.6.31, created on 2023-07-20 10:17:19
         compiled from cache/modules/AOW_WorkFlow/LeadsDetailViewcaptured_sent_date_c.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['captured_sent_date_c']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['captured_sent_date_c']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['captured_sent_date_c']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['captured_sent_date_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['captured_sent_date_c']['name']; ?>
" value="$fields.captured_sent_date_c.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>