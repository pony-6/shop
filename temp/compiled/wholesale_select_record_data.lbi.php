<?php $_from = $this->_var['record_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'data_0_78360300_1611044566');if (count($_from)):
    foreach ($_from AS $this->_var['data_0_78360300_1611044566']):
?>
<div class="w-lie">
	<?php if ($this->_var['data_0_78360300_1611044566']['main_attr']): ?>
	<div class="w-l-left">
		<?php $_from = $this->_var['data_0_78360300_1611044566']['main_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'main');if (count($_from)):
    foreach ($_from AS $this->_var['main']):
?>
		<span class="mr10"><?php echo $this->_var['main']['attr_value']; ?></span>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    <?php endif; ?>
	<div class="w-l-right<?php if (! $this->_var['data_0_78360300_1611044566']['main_attr']): ?> w-l-r-curr<?php endif; ?>">
		<?php $_from = $this->_var['data_0_78360300_1611044566']['end_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'end');if (count($_from)):
    foreach ($_from AS $this->_var['end']):
?>
		<div class="w-td" style="width:20%;"><?php echo $this->_var['end']['attr_value']; ?>(<em><?php echo $this->_var['end']['attr_num']; ?></em>)</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>