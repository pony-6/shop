<?php $_from = $this->_var['main_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?> 
<div class="lie<?php if (($this->_foreach['attr']['iteration'] == $this->_foreach['attr']['total'])): ?> last-child<?php endif; ?>" ectype="attr_group" data-attr_group="<?php echo $this->_var['attr']['attr_group']; ?>">
    <div class="row1"><strong class="ftx-06"><?php echo $this->_var['attr']['attr_value']; ?></strong></div>
    <div class="row2"><div class="price"><?php echo $this->_var['goods']['goods_price_formatted']; ?></div></div>
    <div class="row3">
       <div class="b-stock"><?php echo $this->_var['attr']['product_number']; ?>件可售</div> 
    </div>
    <div class="row4">
    	<div class="number">
            <a href="javascript:void(0)" class="decrement btn-reduce">-</a>
            <input name="goods_number[<?php echo $this->_var['attr']['goods_attr_id']; ?>][]" type="text" id="quantity" class="itxt buy-num" value="0" size="10" data-inventory="<?php echo $this->_var['attr']['product_number']; ?>">
            <a href="javascript:void(0)" class="increment btn-add">+</a>
        </div>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>