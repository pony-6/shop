<?php if ($this->_var['attribute_list']['attr']): ?>
<div class="step_item_left">
	<h5><?php echo $this->_var['lang']['label_goods_attr']; ?></h5>
</div>
<div class="step_item_right">
    <?php $_from = $this->_var['attribute_list']['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
    <div class="item_right_li goods_attr_type">
        <div class="label"><?php echo $this->_var['val']['attr_name']; ?>：</div>
        <div class="value">
            <?php if ($this->_var['val']['attr_input_type'] == 1): ?>
                <div class="imitate_select select_w140" id="blur_attr_list">
                  <div class="cite"><?php if ($this->_var['val']['this_value']): ?><?php echo $this->_var['val']['this_value']; ?><?php else: ?><?php echo $this->_var['lang']['select_please']; ?><?php endif; ?></div>
                  <ul>
                  	 <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                     <?php $_from = $this->_var['val']['attr_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr_values');if (count($_from)):
    foreach ($_from AS $this->_var['attr_values']):
?>
                     <li><a href="javascript:;" data-value="<?php echo $this->_var['attr_values']; ?>" class="ftx-01"><?php echo $this->_var['attr_values']; ?></a></li>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </ul>
                  <input name="attr_value_list[]" type="hidden" value="<?php echo $this->_var['val']['this_value']; ?>" id="blur_attr_list_val">
                </div>
            <?php else: ?>
                <input type="text" name="attr_value_list[]" class="text" value="<?php echo $this->_var['val']['this_value']; ?>" onblur="insert_attr_input_val(this)" autocomplete="off" />
            <?php endif; ?>
            <input type="hidden" name="attr_price_list[]" value="<?php echo $this->_var['val']['attr_price']; ?>">
            <input type="hidden" name="attr_id_list[]" value="<?php echo $this->_var['val']['attr_id']; ?>">
            <input type="hidden" name="goods_attr_id_list[]" value="<?php echo $this->_var['val']['goods_attr_id']; ?>">
        </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>

<?php if ($this->_var['attribute_list']['spec']): ?>
<div class="step_item_left">
	<h5><?php echo $this->_var['lang']['label_goods_specifications']; ?></h5>
</div>
<div class="step_item_right">
    <?php $_from = $this->_var['attribute_list']['spec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
    <div class="item_right_li">
        <div class="label"><?php echo $this->_var['val']['attr_name']; ?>：</div>
        <div class="value li_value">
            <div class="checkbox_items fn attr_input_type_<?php echo $this->_var['val']['attr_id']; ?>">
                <?php $_from = $this->_var['val']['attr_values_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['v']):
?>
                <div class="checkbox_item">
                    <input type="checkbox" data-type="attr_id" name="attr_id_list1[]" class="ui-checkbox" <?php if ($this->_var['v']['is_selected']): ?>checked<?php endif; ?> value="<?php echo $this->_var['val']['attr_id']; ?>">
                    <?php if ($this->_var['v']['goods_attr_id']): ?>
                    <input type="checkbox" data-type="attr_value" name="attr_value_list1[]" class="ui-checkbox" <?php if ($this->_var['v']['is_selected']): ?>checked<?php endif; ?> value="<?php echo $this->_var['v']['attr_value']; ?>" id="goods_attr_checkbox<?php echo $this->_var['v']['goods_attr_id']; ?>"/>
                    <label for="goods_attr_checkbox<?php echo $this->_var['v']['goods_attr_id']; ?>" class="ui-label"><?php echo $this->_var['v']['attr_value']; ?></label>
                    <?php else: ?>
                    <input type="checkbox" data-type="attr_value" name="attr_value_list1[]" class="ui-checkbox" <?php if ($this->_var['v']['is_selected']): ?>checked<?php endif; ?> value="<?php echo $this->_var['v']['attr_value']; ?>" id="goods_attr_checkbox<?php echo $this->_var['key']; ?><?php echo $this->_var['k']; ?>"/>
                    <label for="goods_attr_checkbox<?php echo $this->_var['key']; ?><?php echo $this->_var['k']; ?>" class="ui-label"><?php echo $this->_var['v']['attr_value']; ?></label>
                    <?php endif; ?>
                    <i class="iconfont icon-cha" data-goodsid="<?php echo empty($this->_var['goods_id']) ? '0' : $this->_var['goods_id']; ?>" data-attrid="<?php echo $this->_var['val']['attr_id']; ?>" data-goodsattrid="<?php echo empty($this->_var['v']['goods_attr_id']) ? '0' : $this->_var['v']['goods_attr_id']; ?>" data-attrvalue="<?php echo $this->_var['v']['attr_value']; ?>" ectype="attrClose"></i>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php if ($this->_var['val']['attr_input_type'] == 0): ?>
                <div class="checkbox_item">
                <a href="javascript:void(0);" class="sc-btn btn28 sc-blueBg-btn" data-attrid="<?php echo $this->_var['val']['attr_id']; ?>" ectype="attr_input"><?php echo $this->_var['lang']['custom']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="common-head">
	<div class="search" ectype="attr_search_main">
    	<?php $_from = $this->_var['attribute_list']['spec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
        <?php if ($this->_var['val']['attr_type'] == 1): ?>
        <div class="select">
        	<div class="search_attr_label"><?php echo $this->_var['val']['attr_name']; ?>：</div>
            <div class="imitate_select select_w145">
                <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                <ul>
                    <li><a href="javascript:;" data-value="0" data-level='<?php if ($this->_var['cat_tree1']['arr']): ?>3<?php else: ?>2<?php endif; ?>' class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                   <?php $_from = $this->_var['val']['attr_values_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['v']):
?>
                    <li><a href="javascript:;" data-value="<?php echo $this->_var['v']['attr_value']; ?>" class="ftx-01"><?php echo $this->_var['v']['attr_value']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <input type="hidden" value=""  name="">
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <a href="javascript:void(0);" class="sc-btn btn28 sc-blueBg-btn" ectype="search_attr"><?php echo $this->_var['lang']['search_word']; ?></a>
    </div>
</div>
<?php endif; ?>