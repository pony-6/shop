<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="order.php?act=list" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['order_word']; ?> - <?php echo $this->_var['lang']['02_order_list']; ?> - <?php echo $this->_var['lang']['operation_error']; ?></div>
        <div class="content">
            <div class="flexilist">
				<ul class="lilist">
					<li><?php echo $this->_var['order_info']; ?></li>
				</ul>
				<form method="post" action="order.php?act=operate" name="listForm" onsubmit="return check()">
					<div class="list-div mt10" id="listDiv">
                        <table cellpadding="1" cellspacing="1">
                          <tr>
                          	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                            <th><div class="tDiv"><?php echo $this->_var['lang']['order_sn']; ?></div></th>
                            <th><div class="tDiv"><?php echo $this->_var['lang']['all_status']; ?></div></th>
                            <th><div class="tDiv"><?php echo $this->_var['lang']['op_you_can']; ?></div></th>
                            <th class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                          </tr>
                          <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['order']):
?>
                          <tr>
                          	<td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes" value="<?php echo $this->_var['order']['order_sn']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['list']['article_id']; ?>" /><label for="checkbox_<?php echo $this->_var['list']['article_id']; ?>" class="checkbox_stars"></label></div></td>
                            <td><div class="tDiv"><?php echo $this->_var['order']['order_sn']; ?></div></td>
                            <td><div class="tDiv"><?php echo $this->_var['lang']['os'][$this->_var['order']['order_status']]; ?>,<?php echo $this->_var['lang']['ps'][$this->_var['order']['pay_status']]; ?>,<?php echo $this->_var['lang']['ss'][$this->_var['order']['shipping_status']]; ?></div></td>
                            <td><div class="tDiv"><?php echo $this->_var['order']['operable']; ?></div></td>
                            <td class="handle">
                            	<div class="tDiv"><a href="order.php?act=info&order_id=<?php echo $this->_var['order']['order_id']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['detail']; ?></a></div>
                            </td>
                          </tr>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </table>
					</div>
				</form>
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
</body>
</html>
