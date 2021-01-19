<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>
 
<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
		<div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
				<div class="ecsc-form-goods">
                <div class="explanation" id="explanation">
                    <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4></div>
                    <?php echo $this->_var['lang']['use_help']; ?>
                </div>
				<form action="goods_warehouse_batch.php?act=upload" method="post" enctype="multipart/form-data" name="theForm" id="goods_warehouse_batch_form" >
                <div class="wrapper-list border1 mt20">
                	<?php if ($this->_var['goods_name']): ?>
                    <dl>
                    	<dt><?php echo $this->_var['lang']['goods_name']; ?></dt>
                        <dd class="red"><?php echo $this->_var['goods_name']; ?></dd>
                    </dl>
                    <?php endif; ?>
                    <dl>
                    	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['file_charset']; ?></dt>
                        <dd>
                        	<div id="charset" class="imitate_select select_w145 mr0">
                                <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                <ul>
                                    <?php $_from = $this->_var['lang_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                    <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['list']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <input name="charset" type="hidden" value="UTF8"/>
                            </div>
                            <div class="form_prompt"></div>
                        </dd>
                    </dl>
                    <dl>
                    	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['csv_file']; ?></dt>
                        <dd>
                        	<div class="type-file-box">
                            	<div class="input">
                                <input type="text" name="textfile" class="type-file-text" id="textfield" readonly>
                                <input type="button" name="button" id="button" class="type-file-button" value="<?php echo $this->_var['lang']['upload_dot']; ?>">
                                <input type="file" class="type-file-file" name="file" size="30" hidefocus="true" data-state="csvfile" value="">                                
                                </div>
                            </div>
							<div class="form_prompt"></div>
                            <div class="notic"><?php echo $this->_var['lang']['notice_file']; ?></div>
                        </dd>
                    </dl>
                    <?php $_from = $this->_var['download_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('charset', 'download');if (count($_from)):
    foreach ($_from AS $this->_var['charset'] => $this->_var['download']):
?>
				  	<?php if ($this->_var['charset'] == 'zh_cn'): ?>
                    <dl>
                    	<dt>&nbsp;</dt>
                        <dd class="lh"><a href="goods_warehouse_batch.php?act=download&charset=<?php echo $this->_var['charset']; ?>&goods_id=<?php echo $this->_var['goods_id']; ?>" class="blue"><?php echo $this->_var['download']; ?></a></dd>
                    </dl>
                    <?php endif; ?>
				  	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <dl class="button_info">
                    	<dt>&nbsp;</dt>
                        <dd>
                        	<input type="hidden" name="goods_id" value="<?php echo empty($this->_var['goods_id']) ? '0' : $this->_var['goods_id']; ?>" />
                        	<input name="submit" type="submit" id="submitBtn" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="sc-btn sc-blueBg-btn btn35" />
                        </dd>
                    </dl>
                </div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>

<script language="JavaScript">
    var elements;
    /**
     * 检查是否底级分类
     */
    function checkIsLeaf(selObj)
    {
        if (selObj.options[selObj.options.selectedIndex].className != 'leafCat')
        {
            alert(goods_cat_not_leaf);
            selObj.options.selectedIndex = 0;
        }
    }

    /**
     * 检查输入是否完整
     */
    $(function(){
		//表单验证
		$("#submitBtn").click(function(){
			if($("#goods_warehouse_batch_form").valid()){
				$("#goods_warehouse_batch_form").submit();
			}
		});
	
		$('#goods_warehouse_batch_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('dl').find('div.form_prompt');
				//element.parents('dl').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				charset : {
					required : true
				},
				textfile:{
					required : true
				}
			},
			messages:{
				charset:{
					required : '<i class="icon icon-exclamation-sign"></i>'+jl_pls_select_file_encode
				},
				textfile:{
					required : '<i class="icon icon-exclamation-sign"></i>'+jl_pls_select_upload_file
				}
			}			
		});
	});
</script>

</body>
</html>