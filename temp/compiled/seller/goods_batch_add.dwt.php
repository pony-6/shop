<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
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
                        <form action="goods_batch.php?act=upload" method="post" enctype="multipart/form-data" name="theForm" id="goods_batch_form">
                        <div class="wrapper-list border1 mt20">
                            <dl>
                                <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['export_format']; ?>：</dt>
                                <dd>
                                    <div id="data_cat" class="imitate_select select_w320 mr0">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul style="display: none;">
                                        <?php $_from = $this->_var['data_format']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
                                            <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="data_cat" type="hidden" value="" id="data_cat_val">
                                    </div>
                                    <div class="form_prompt"></div>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['label_plat_cate']; ?></dt>
                                <dd>
                                    <div class="search_select">
                                        <div class="categorySelect">
                                            <div class="selection">
                                                <input type="text" name="category_name" id="category_name" class="text w290 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?><?php echo $this->_var['lang']['category_top']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                                <input type="hidden" name="cat" id="cat" value="0" data-filter="cat_id" />
                                            </div>
                                            <div class="select-container w320" style="display:none;">
                                                <?php echo $this->fetch('library/filter_category.lbi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['label_shop_cate']; ?></dt>
                                <dd class="txtline">
                                    <div class="categorySelect fl">
                                        <div class="selection">
                                            <input type="text" name="category_name" id="category_name" class="text w290 valid" value="<?php if ($this->_var['user_cat_name']): ?><?php echo $this->_var['user_cat_name']; ?><?php else: ?><?php echo $this->_var['lang']['category_top']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                            <input type="hidden" name="user_cat" id="category_id" value="" data-filter="cat_id" />
                                        </div>
                                        <div class="select-container" style="display:none;">
                                            <?php echo $this->fetch('library/filter_category_seller.lbi'); ?>
                                        </div>
                                    </div>                                      
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['file_charset']; ?></dt>
                                <dd>
                                    <div id="charset" class="imitate_select select_w320 mr0">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul style="display: none;">
                                        <?php $_from = $this->_var['lang_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                            <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['list']; ?></a></li>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="charset" type="hidden" value="" id="charset_val">
                                    </div>
                                    <div class="form_prompt"></div>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['csv_file']; ?></dt>
                                <dd>
                                    <div class="type-file-box">
                                        <div class="input">
                                            <input type="text" name="textfile" class="type-file-text" id="textfield" value="" readonly>
                                            <input type="button" name="button" id="button" class="type-file-button" value="<?php echo $this->_var['lang']['upload_dot']; ?>" />
                                            <input type="file" class="type-file-file" id="file" name="file" data-state="csvfile" size="30" hidefocus="true" />
                                        </div>
                                    </div>
                                    <div class="form_prompt"></div>
                                    <div class="notic" id="AdCodeFlash"><?php echo $this->_var['lang']['notice_file']; ?></div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>&nbsp;</dt>
                                <dd class="lh"><?php $_from = $this->_var['download_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('charset', 'download');if (count($_from)):
    foreach ($_from AS $this->_var['charset'] => $this->_var['download']):
?><a href="goods_batch.php?act=download&charset=<?php echo $this->_var['charset']; ?>" class="mr10"><?php echo $this->_var['download']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></dd>
                            </dl>
                            <dl class="button_info">
                                <dt>&nbsp;</dt>
                                <dd><input name="submit" type="submit" id="submitBtn" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="sc-btn sc-blueBg-btn btn35" /></dd>
                            </dl>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script language="JavaScript">
    var elements;
	
	$(function(){
	//表单验证
	$("#submitBtn").click(function(){
		var cat_val = $("input[name='cat']").val();
		var fald = false;
		if(cat_val>0){
			fald = true;
			$(".categorySelect .form_prompt label").remove();
		}else{
			$("#category_name").addClass("error");
			$(".categorySelect .form_prompt label").remove();
			$(".categorySelect .form_prompt").append('<label class="label_error"><i class="icon icon-exclamation-sign"></i>请选择分类</label>')
		}
		
		if($("#goods_batch_form").valid()){
			$("#goods_batch_form").submit();
		}
	});

	$('#goods_batch_form').validate({
		errorPlacement:function(error, element){
			var error_div = element.parents('dl').find('div.form_prompt');
			//element.parents('dl').find(".notic").hide();
			error_div.append(error);
		},
		rules:{
			data_cat : {
				required : true
			},
			cat : {
				required : true
			},
			charset : {
				required : true
			},
			textfile:{
				required : true
			}
		},
		messages:{
			data_cat:{
				required : '<i class="icon icon-exclamation-sign"></i>'+jl_pls_select_file_format
			},
			cat:{
				required : '<i class="icon icon-exclamation-sign"></i>'+jl_pls_select_belong_cate
			},
			charset:{
				required : '<i class="icon icon-exclamation-sign"></i>'+jl_pls_select_file_encode
			},
			textfile:{
				required : '<i class="icon icon-exclamation-sign"></i>'+jl_pls_upload_batch_csv
			}
		}			
	});
	});

	// 分类分级 by qin
	function catList(val, level)
	{
		var cat_id = val;
		document.getElementById('cat').value = cat_id;
		Ajax.call('goods.php?is_ajax=1&act=sel_cat', 'cat_id='+cat_id+'&cat_level='+level, catListResponse, 'GET', 'JSON');
	}

	function catListResponse(result)
	{
		if (result.error == '1' && result.message != '')
		{
		  alert(result.message);
		  return;
		}
		var response = result.content;
		var cat_level = result.cat_level; // 分类级别， 1为顶级分类
		for(var i=cat_level;i<10;i++)
		{
		  $("#cat_list"+Number(i+1)).remove();
		}
		if(response)
		{
			$("#cat_list"+cat_level).after(response);
		}
	  return;
	}
</script>


<?php echo $this->fetch('library/seller_footer.lbi'); ?>
</body>
</html>