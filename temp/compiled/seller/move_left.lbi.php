<ul>
	<?php $_from = $this->_var['filter_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_0_05622800_1611045296');if (count($_from)):
    foreach ($_from AS $this->_var['filter_0_05622800_1611045296']):
?>
	<li data-value="<?php echo $this->_var['filter_0_05622800_1611045296']['value']; ?>" data-text="<?php echo $this->_var['filter_0_05622800_1611045296']['text']; ?>"><i class="sc_icon sc_icon_ok"></i><a href="javascript:void(0);"><?php echo $this->_var['filter_0_05622800_1611045296']['text']; ?></a></li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>