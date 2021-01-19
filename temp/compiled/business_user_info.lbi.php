<div class="vip-con">
    <div class="avatar">
        <a href="user.php?act=profile"><img src="<?php if ($this->_var['user_id']): ?><?php if ($this->_var['info']['user_picture']): ?><?php echo $this->_var['info']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/avatar.png<?php endif; ?>"></a>
    </div>
    <div class="login-info">
        <?php if ($this->_var['user_id']): ?>
            <span>Hi，<?php if ($this->_var['info']['nick_name']): ?><?php echo $this->_var['info']['nick_name']; ?><?php else: ?><?php echo $this->_var['lang']['Welcome_to']; ?><?php echo $GLOBALS['_CFG']['shop_name']; ?>!<?php endif; ?></span>
            <a href="<?php echo $this->_var['site_domain']; ?>user.php" class="login-button login-success"><?php echo $this->_var['lang']['user_center']; ?></a>
        <?php else: ?>
            <span><?php echo $this->_var['lang']['welcome_to']; ?><?php echo $GLOBALS['_CFG']['shop_name']; ?>!</span>
            <a href="<?php echo $this->_var['site_domain']; ?>user.php" class="login-button"><?php echo $this->_var['lang']['please_login']; ?></a>
            <a href="merchants.php" target="_blank" class="register_button"><?php echo $this->_var['lang']['register_button']; ?></a>
        <?php endif; ?>
    </div>
    <div class="vip-item">
        <div class="tit">
			<a href="javascript:void(0);" class="tab_head_item"><?php echo $this->_var['lang']['purchase_info']; ?></a>
            <?php $_from = $this->_var['wholesale_article_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'cat_0_98969900_1611044451');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['cat_0_98969900_1611044451']):
        $this->_foreach['cat']['iteration']++;
?>
            <a href="javascript:void(0);" class="tab_head_item"><?php echo $this->_var['cat_0_98969900_1611044451']['cat']['name']; ?></a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <div class="con">
            <ul>
                <?php $_from = $this->_var['purchase']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                <li><a href="<?php echo $this->_var['list']['url']; ?>" target="_blank"><?php echo $this->_var['list']['subject']; ?></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php $_from = $this->_var['wholesale_article_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_98975400_1611044451');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_98975400_1611044451']):
        $this->_foreach['cat']['iteration']++;
?>
            <ul style="display:none;">
                <?php $_from = $this->_var['cat_0_98975400_1611044451']['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article']['iteration']++;
?>
                <li><a href="<?php echo $this->_var['article']['url']; ?>" target="_blank"><?php echo $this->_var['article']['title']; ?></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>
</div>