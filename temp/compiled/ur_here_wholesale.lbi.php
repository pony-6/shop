
<div class="crumbs-nav">
	<div class="crumbs-nav-main clearfix">
		 <span><a href="wholesale.php">批发首页</a></span>
		 <?php $_from = $this->_var['data']['body']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_78226800_1611044566');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_78226800_1611044566']):
        $this->_foreach['cat']['iteration']++;
?>
		 <span class="arrow">&gt;</span><span>  <a href="<?php echo $this->_var['cat_0_78226800_1611044566']['url']; ?>"><?php echo $this->_var['cat_0_78226800_1611044566']['cat_name']; ?></a></span>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php if ($this->_var['data']['foot']): ?>
		 <span class="arrow">&gt;</span><span class="finish"><?php echo $this->_var['data']['foot']; ?></span>
        <?php endif; ?>
	</div>
</div>
