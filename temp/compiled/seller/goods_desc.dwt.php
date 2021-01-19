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
                <div class="clear"></div>
                <div class="explanation" id="explanation">
                    <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4></div>
                    <ul>
                        <li><?php echo $this->_var['lang']['operation_prompt_content']['goods_desc']['0']; ?></li>
                        <li><?php echo $this->_var['lang']['operation_prompt_content']['goods_desc']['1']; ?></li>
                        <li><?php echo $this->_var['lang']['operation_prompt_content']['goods_desc']['2']; ?></li>
                    </ul>
                </div>
				<div class="flexilist mt20" id="linkgoods-table" data-table="linkgoods">
					<div class="common-content">
						<form enctype="multipart/form-data" action="goods.php" method="post" name="theForm" id="goods_desc_form">
						<div class="step" ectype="filter" data-filter="goods">
							<div class="step_content">
								<div class="goods_search_div">
									<!--通用部分 start-->
									<div class="goods_search_div">
										<div class="search_select">
											<div class="categorySelect">
												<div class="selection">
													<input type="text" name="category_name" id="category_name" class="text w250 valid" value="<?php echo $this->_var['lang']['select_cat']; ?>" autocomplete="off" readonly data-filter="cat_name" />
													<input type="hidden" name="category_id" id="category_id" value="0" data-filter="cat_id" />
												</div>
												<div class="select-container" style="display:none;">
													<?php echo $this->fetch('library/filter_category.lbi'); ?>
												</div>
											</div>
										</div>
										<div class="search_select">
											<div class="brandSelect">
												<div class="selection">
													<input type="text" name="brand_name" id="brand_name" class="text w120 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
													<input type="hidden" name="brand_id" id="brand_id" value="0" data-filter="brand_id" />
												</div>
												<div class="brand-select-container" style="display:none;">
													<?php echo $this->fetch('library/filter_brand.lbi'); ?>
												</div>
											</div>                            
										</div>
										<input type="text" name="keyword" class="text w150 mr10" value="" placeholder="<?php echo $this->_var['lang']['input_keywords']; ?>" data-filter="keyword" autocomplete="off" />
										<a href="javascript:void(0);" class="sc-btn sc-blueBg-btn" ectype="search"><?php echo $this->_var['lang']['search_word']; ?></a>
									</div>
									<!--通用部分 end-->
								</div>
								<div class="move_div">
									<div class="move_left">
										<h4><?php echo $this->_var['lang']['src_list']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<?php echo $this->fetch('library/move_left.lbi'); ?>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="add_link_desc"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
										</div>
									</div>
									<div class="move_middle">
										<div class="move_point" data-operation="add_link_desc"></div>
									</div>
									<div class="move_right">
										<h4><?php echo $this->_var['lang']['dest_list']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<ul>
													<?php $_from = $this->_var['link_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link_goods');if (count($_from)):
    foreach ($_from AS $this->_var['link_goods']):
?>
													<li data-value="<?php echo $this->_var['link_goods']['goods_id']; ?>" data-text="<?php echo $this->_var['link_goods']['goods_name']; ?>"><i class="sc_icon sc_icon_no"></i><a href="javascript:void(0);"><?php echo $this->_var['link_goods']['goods_name']; ?></a></li>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</ul>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="drop_link_desc"><?php echo $this->_var['lang']['remove']; ?></a>
										</div>
									</div>
								</div>
								<div class="mian-info">
									<div class="switch_info">
										<div class="item mt20">
											<div class="label" style="width:auto;"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['goods_desc_name']; ?>：</div>
											<div class="label_value">
												<input name="desc_name" type="text" class="text" value="<?php echo $this->_var['goods']['desc_name']; ?>" size="80" />
												<div class="form_prompt"></div>
											</div>
										</div>
										<div class="item">
											<div class="label">&nbsp;</div>
											<div class="label_value"></div>
											<?php echo $this->_var['goods_desc']; ?>
										</div>
                                        <div class="item">
											<div class="label" style="width:50%;"><?php echo $this->_var['lang']['adopt_status']; ?>：</div>
											<div class="label_value" style="width:48%;">
                                            	<?php if ($this->_var['goods']['review_status'] == 1): ?>
                                                <font class="org2"><?php echo $this->_var['lang']['not_audited']; ?></font>
                                                <?php elseif ($this->_var['goods']['review_status'] == 2): ?>
                                                <font class="red"><?php echo $this->_var['lang']['audited_not_adopt']; ?><?php if ($this->_var['goods']['review_content']): ?>：<?php echo $this->_var['goods']['review_content']; ?><?php endif; ?></font>
                                                <?php elseif ($this->_var['goods']['review_status'] == 3): ?>
                                                <font class="blue"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></font>
                                                <?php endif; ?>
                                            </div>
										</div>									
									</div>
								</div>
								<div class="button-bottom">
                                	<div class="button_info">
									<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
									<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
									<input type="hidden" name="id" value="<?php echo empty($this->_var['goods']['id']) ? '0' : $this->_var['goods']['id']; ?>" />
									<input type="hidden" name="goods_id" value="0" />
									<input type="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="sc-btn sc-blueBg-btn btn35" id="submitBtn" />
									<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="sc-btn btn35 sc-blue-btn" />								
                                    </div>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
    
	<script language="JavaScript">
	//切换标签
	$(".tabmenu li a").click(function(){
		var this_tab = $(this).data('tab');
		$(".flexilist[data-table="+this_tab+"]").show();
		$(".flexilist[data-table="+this_tab+"]").siblings(".flexilist").hide();
	});
	
	$(function(){
		//表单验证
		$("#submitBtn").click(function(){
			if($("#goods_desc_form").valid()){
				$("#goods_desc_form").submit();
			}
		});
	
		$('#goods_desc_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				//element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				desc_name:{
					required : true
				}
			},
			messages:{
				desc_name:{
					required : '<i class="icon icon-exclamation-sign"></i>'+confirm_batch_delete
				}
			}			
		});
		
		$(".move_list").perfectScrollbar('destroy');
		$(".move_list").perfectScrollbar();
	});
	</script>
    
</body>
</html>