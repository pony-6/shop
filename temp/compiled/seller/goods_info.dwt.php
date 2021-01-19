<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>
<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent" style="display:none;">
            	<?php echo $this->fetch('library/url_here.lbi'); ?>
				<form action="goods.php" method="post" name="theForm" enctype="multipart/form-data" id="goods_form">
                <?php if ($this->_var['code'] != ''): ?><input type="hidden" name="extension_code" value="<?php echo $this->_var['code']; ?>" /><?php endif; ?>			
                <input type="hidden" name="goods_id" id="goods_id" value="<?php echo empty($this->_var['goods']['goods_id']) ? '0' : $this->_var['goods']['goods_id']; ?>" />
                <input name="numAdd_area" value="1" id="numAdd_area" type="hidden" /> 
                <input name="other_catids" value="<?php echo $this->_var['other_catids']; ?>" id="other_catids" type="hidden" /> 
                <input name="numAdd" value="1" id="numAdd" type="hidden" />  
                <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />				
                <div class="stepflex<?php if ($this->_var['goods']['model_price'] == 0): ?> stepflexActive<?php endif; ?>">
                	<dl class="current" data-step="1">
                    	<dt class="pointer" <?php if ($this->_var['goods']['goods_id']): ?>data-step="1" ectype="stepSubmit"<?php endif; ?>><i class="sc-set"></i></dt>
                        <dd><em>1</em>､<span><?php echo $this->_var['lang']['tab_goodsModel']; ?></span><i class="jt"></i></dd>
                    </dl>
                    <dl class="model" data-step="2" ectype="model"<?php if ($this->_var['goods']['model_price'] == 0): ?> style="display:none;"<?php endif; ?>>
                    	<dt class="pointer" <?php if ($this->_var['goods']['goods_id']): ?>data-step="2" ectype="stepSubmit"<?php endif; ?>><i class="sc-ware"></i></dt>
                        <dd><em>2</em>､<span ectype="model">
							<?php if ($this->_var['goods']['model_price'] == 0): ?><?php echo $this->_var['lang']['default_model']; ?><?php endif; ?>
							<?php if ($this->_var['goods']['model_price'] == 1): ?><?php echo $this->_var['lang']['tab_warehouse_model']; ?><?php endif; ?>
							<?php if ($this->_var['goods']['model_price'] == 2): ?><?php echo $this->_var['lang']['warehouse_region_model']; ?><?php endif; ?>
						</span><i class="jt"></i></dd>
                    </dl>					
                    <dl data-step="3">
                    	<dt class="pointer" <?php if ($this->_var['goods']['goods_id']): ?>data-step="3" ectype="stepSubmit"<?php endif; ?>><i class="sc-cate"></i></dt>
                        <dd><em>3</em>､<span><?php echo $this->_var['lang']['select_goods_cat']; ?></span><i class="jt"></i></dd>
                    </dl>
                    <dl data-step="4">
                    	<dt class="pointer" <?php if ($this->_var['goods']['goods_id']): ?>data-step="4" ectype="stepSubmit"<?php endif; ?>><i class="sc-info"></i></dt>
                        <dd><em>4</em>､<span><?php echo $this->_var['lang']['fill_in_goods_info']; ?></span><i class="jt"></i></dd>
                    </dl>
                    <dl data-step="5">
                    	<dt class="pointer" <?php if ($this->_var['goods']['goods_id']): ?>data-step="5" ectype="stepSubmit"<?php endif; ?>><i class="sc-attr"></i></dt>
                        <dd><em>5</em>､<span><?php if ($this->_var['code'] == 'virtual_card'): ?><?php echo $this->_var['lang']['fill_in_goods_album']; ?><?php else: ?><?php echo $this->_var['lang']['fill_in_goods_attr']; ?><?php endif; ?></span><i class="jt"></i></dd>
                    </dl>
                    <dl data-step="6">
                    	<dt class="pointer" <?php if ($this->_var['goods']['goods_id']): ?>data-step="6" ectype="stepSubmit"<?php endif; ?>><i class="sc-rel"></i></dt>
                        <dd><em>6</em>､<span><?php echo $this->_var['lang']['select_goods_relation']; ?></span><i class="jt"></i></dd>
                    </dl>
                </div>
                
                <div class="step-info goods_info">
                	<div class="step step_one" ectype="step" data-step="1">
						<div class="mos clearfix">
							<div class="mos_item mos_default<?php if ($this->_var['goods']['model_price'] == 0): ?> active<?php endif; ?>" data-model="0" data-stepmodel="3">
								<div class="mos_left"><i class="icon-model"></i></div>
								<div class="mos_right">
									<div class="radio-item">
										<input type="radio" name="model" class="ui-radio" id="model_default"<?php if ($this->_var['goods']['model_price'] == 0): ?> checked="checked"<?php endif; ?> />
										<label for="model_default" class="ui-radio-label"><?php echo $this->_var['lang']['default_model']; ?></label>
									</div>
								</div>
							</div>
                            <?php if ($this->_var['code'] != 'virtual_card'): ?>
							<div class="mos_item mos_warehouse<?php if ($this->_var['goods']['model_price'] == 1): ?> active<?php endif; ?>" data-model="1" data-stepmodel="2">
								<div class="mos_left"><i class="icon-model"></i></div>
								<div class="mos_right">
									<div class="radio-item">
										<input type="radio" name="model" class="ui-radio" id="model_warehouse"<?php if ($this->_var['goods']['model_price'] == 1): ?> checked="checked"<?php endif; ?> />
										<label for="model_warehouse" class="ui-radio-label"><?php echo $this->_var['lang']['tab_warehouse_model']; ?></label>
									</div>
								</div>
							</div>
							<div class="mos_item mos_region<?php if ($this->_var['goods']['model_price'] == 2): ?> active<?php endif; ?>" data-model="2" data-stepmodel="2">
								<div class="mos_left"><i class="icon-model"></i></div>
								<div class="mos_right">
									<div class="radio-item">
										<input type="radio" name="model" class="ui-radio" id="model_region"<?php if ($this->_var['goods']['model_price'] == 2): ?> checked="checked"<?php endif; ?> />
										<label for="model_region" class="ui-radio-label"><?php echo $this->_var['lang']['warehouse_region_model']; ?></label>
									</div>
								</div>
							</div>
                            <?php endif; ?>
							<input type="hidden" name="goods_model" id="goods_model" value="<?php echo empty($this->_var['goods']['model_price']) ? '0' : $this->_var['goods']['model_price']; ?>" />
						</div>
                        <div class="goods_btn">
                            <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-step="2" ectype="firstStepSubmit"><?php echo $this->_var['lang']['next_step']; ?></a>
                        </div>
						<input type="hidden" name="model_price" value="<?php echo $this->_var['goods']['model_price']; ?>"/> 
						<input type="hidden" name="model_inventory" value="<?php echo $this->_var['goods']['model_inventory']; ?>"/> 
						<input type="hidden" name="model_attr" value="<?php echo $this->_var['goods']['model_attr']; ?>"/>						
                    </div>
					<div class="step" style="display:none;" ectype="step" data-step="2">
						<div class="ecsc-form-title">
                        	<i class="dian"></i>
							<h3 ectype="model">
								<?php if ($this->_var['goods']['model_price'] == 0): ?><?php echo $this->_var['lang']['default_model']; ?><?php endif; ?>
								<?php if ($this->_var['goods']['model_price'] == 1): ?><?php echo $this->_var['lang']['tab_warehouse_model']; ?><?php endif; ?>
								<?php if ($this->_var['goods']['model_price'] == 2): ?><?php echo $this->_var['lang']['warehouse_region_model']; ?><?php endif; ?>
							</h3>
						</div>
						<div class="step_content" id="goods_model_list"></div>
                        <div class="goods_btn">
                            <a href="javascript:void(0);" class="sc-btn btn35 sc-blue-btn" data-step="1" data-type="step" ectype="stepSubmit"><?php echo $this->_var['lang']['prev_step']; ?></a>
                            <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-step="3" data-type="step" data-down="true" ectype="stepSubmit"><?php echo $this->_var['lang']['next_step']; ?></a>
        					<?php if ($this->_var['goods']['goods_id']): ?><a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-down="true" data-type="submit" ectype="stepSubmit"><?php echo $this->_var['lang']['release_now']; ?></a><?php endif; ?>
                        </div>				
					</div>					
                    <div class="step step_two" style="display:none;" ectype="step" data-step="3">
                    	<div class="choiceClass" id="choiceClass"><?php echo $this->_var['lang']['label_you_select_cate_is']; ?><strong class="green"></strong></div>
                        <div class="sort_info">
                        	<input type="hidden" name="cat_id" id="cat_id" value="<?php echo empty($this->_var['goods']['cat_id']) ? '0' : $this->_var['goods']['cat_id']; ?>" ectype="cat_id"/>
                        	<div class="sort_list">
                            	<div class="sort_list_warp">
                                    <div class="category_list">
                                        <ul ectype="category" data-cat_level="1">
                                        	<?php echo $this->_var['category_level']['1']; ?>
                                        </ul>
                                    </div>
                                    <div class="sort_point"></div>  
                                </div>
                            </div>
                            <div class="sort_list">
                            	<div class="sort_list_warp">
                                    <div class="category_list">
                                        <ul ectype="category" data-cat_level="2">
                                        	<?php echo $this->_var['category_level']['2']; ?>
                                        </ul>
                                    </div>
                                    <div class="sort_point"></div>
                                </div>
                            </div>
                            <div class="sort_list">
                            	<div class="sort_list_warp">
                                    <div class="category_list">
                                        <ul ectype="category" data-cat_level="3">
                                        	<?php echo $this->_var['category_level']['3']; ?>
                                        </ul>
                                    </div>
                                    <div class="sort_point"></div>  
                                </div>
                            </div>                            
                        </div>
                        <div class="goods_btn">
                            <a href="javascript:void(0);" class="sc-btn btn35 sc-blue-btn" data-step="1" data-type="step" ectype="stepSubmit"><?php echo $this->_var['lang']['prev_step']; ?></a>
                            <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-step="4" data-type="step" data-down="true" ectype="stepSubmit"><?php echo $this->_var['lang']['next_step']; ?></a>
                        	<?php if ($this->_var['goods']['goods_id']): ?><a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-down="true" data-type="submit" ectype="stepSubmit"><?php echo $this->_var['lang']['release_now']; ?></a><?php endif; ?>
                        </div>
                    </div>
                    <div class="step step_three" style="display:none;" ectype="step" data-step="4">
                    	<div class="step_content">
                            <input type="hidden" name="form_submit" value="ok">
                            <input type="hidden" name="commonid" value="100090">
                            <input type="hidden" name="type_id" value="0">
                            <input type="hidden" name="ref_url" value="">
                            <div class="ecsc-form-goods">
                            	<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_general']; ?></h3></div>
                            	<dl>
                                	<dt><?php echo $this->_var['lang']['lab_goods_cat']; ?></dt>
                                    <dd class="txtline">
                                    	<span></span>
                                        <a href="javascript:;" class="edit_category green" ectype="edit_category"><i class="icon icon-edit"></i></a>
                                        <?php if ($this->_var['form_act'] != 'insert'): ?><a href="javascript:void(0);" class="category_dialog"><?php echo $this->_var['lang']['add_extend_cat']; ?></a><?php endif; ?>
                                    </dd>
                                </dl>
                            	<dl>
                                	<dt><?php echo $this->_var['lang']['label_shop_cate']; ?></dt>
                                    <dd class="txtline">
                                        <div class="categorySelect fl">
                                            <div class="selection">
                                                <input type="text" name="category_name" id="category_name" class="text w250 valid" value="<?php if ($this->_var['user_cat_name']): ?><?php echo $this->_var['user_cat_name']; ?><?php else: ?><?php echo $this->_var['lang']['select_cat']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                                <input type="hidden" name="user_cat" id="category_id" value="<?php echo empty($this->_var['goods']['user_cat']) ? '0' : $this->_var['goods']['user_cat']; ?>" data-filter="cat_id" />
                                            </div>
                                            <div class="select-container" style="display:none;">
                                                <?php echo $this->fetch('library/filter_category_seller.lbi'); ?>
                                            </div>
                                        </div> 
                                        <a href="javascript:;" class="sc-btn sc-blueBg-btn btn30 ml10" ectype="ajaxCate"><?php echo $this->_var['lang']['add']; ?></a>                                        
                                    </dd>
                                </dl>								
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_goods_sn']; ?></dt>
                                    <dd>
                                        <input type="text" class="text" name="goods_sn" value="<?php echo htmlspecialchars($this->_var['goods']['goods_sn']); ?>" size="20" onblur="checkGoodsSn(this.value,'<?php echo $this->_var['goods']['goods_id']; ?>')" />
                                        <input type="hidden" name="goods_id" id="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
                                        <div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['notice_goods_sn']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_bar_code']; ?></dt>
                                    <dd>
                                        <input type="text" name="bar_code" class="text mr10" autocomplete="off"  value="<?php echo htmlspecialchars($this->_var['goods']['bar_code']); ?>"/>
                                        <?php if ($this->_var['form_act'] == 'insert'): ?><input type="button" class="sc-btn sc-blueBg-btn btn30 mr10" value="<?php echo $this->_var['lang']['scan_code_storage']; ?>" data-role="scan_code"><?php endif; ?>
                                        <input type="button" class="sc-btn sc-blueBg-btn btn30" value="<?php echo $this->_var['lang']['scan_code_storage_info']; ?>" data-role="edit_scan_code"<?php if ($this->_var['form_act'] == 'insert'): ?> style="display:none;"<?php endif; ?>>
                                        <div class="notic"><?php echo $this->_var['lang']['notice_bar_code_1']; ?><a href="index.php?act=merchants_first#code_appkey" class="fn"><?php echo $this->_var['lang']['notice_bar_code_2']; ?></a><?php echo $this->_var['lang']['notice_bar_code_3']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['lab_goods_name']; ?></dt>
                                    <dd>
                                        <input name="goods_name" type="text" class="text mr10" value="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" ectype="require">
                                        <div id="font_color" class="font_color mr10">
                                            <input type='text' id="full" value="<?php echo $this->_var['goods_name_color']; ?>" style="display:none"/>
                                        </div>
                                        <input type="hidden" id="goods_name_color" name="goods_name_color" value="<?php echo $this->_var['goods_name_color']; ?>">
                                        <div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['notice_goods_name']; ?></div>
                                    </dd>
                                </dl>
								<dl>
                                	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['lab_shop_price']; ?></dt>
                                    <dd>
                                    	<div id="td_shopPrice1">
                                    		<input name="shop_price" value="<?php echo $this->_var['goods']['shop_price']; ?>" type="text" onblur="priceSetted()" class="text" ectype="require">
                                            <a href="javascript:void(0);" class="lh30 ml10 fl" onclick="marketPriceSetted()"><?php echo $this->_var['lang']['compute_by_mp']; ?></a>
                                            <div class="form_prompt"></div>
                                            <div class="notic"><?php echo $this->_var['lang']['notice_shop_price']; ?></div>
                                        </div>
                                        <div id="td_shopPrice2" class="red txtline hide"><?php if ($this->_var['goods']['model_price'] == 1): ?><?php echo $this->_var['lang']['tab_warehouse_model']; ?><?php elseif ($this->_var['goods']['model_price'] == 2): ?><?php echo $this->_var['lang']['warehouse_region_model']; ?><?php endif; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_market_price']; ?></dt>
                                    <dd>
										<input name="market_price" value="<?php echo $this->_var['goods']['market_price']; ?>" type="text" class="text">
                                        <a href="javascript:void(0);" class="lh30 ml10" onclick="integral_market_price()"><?php echo $this->_var['lang']['integral_market_price']; ?></a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['label_cost_price']; ?></dt>
                                    <dd>
										<input name="cost_price" value="<?php echo $this->_var['goods']['cost_price']; ?>" type="text" class="text">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['lab_goods_number']; ?></dt>
                                    <dd>
                                    	<div id="td_goodsNumber1">
                                            <input name="goods_number" value="<?php echo $this->_var['goods']['goods_number']; ?>" type="text" class="text" ectype="require">
                                            <div class="form_prompt"></div>
                                            <div class="notic"><?php echo $this->_var['lang']['notice_goods_number']; ?></div>
                                        </div>
                						<div id="td_goodsNumber2" style="display:none;" class="whouse_text"></div>
                                    </dd>
                                </dl>
                                <dl>
									<dt><?php echo $this->_var['lang']['lab_warn_number']; ?></dt>
                                    <dd>
                                        <input name="warn_number" value="<?php echo $this->_var['goods']['warn_number']; ?>" type="text" class="text">
                                        <div class="notic"><?php echo $this->_var['lang']['notice_warn_number']; ?></div>
                                    </dd>
                                </dl>
                                <dl class="item">
                                    <dt><?php echo $this->_var['lang']['lab_goods_brand']; ?></dt>
									<dd class="relative">
                                    	<div class="selection">
                                            <input type="text" name="brand_name" id="brand_name" class="text w140 valid" data-filter="brand_name" ectype="require" autocomplete="off" value="<?php if ($this->_var['brand_name']): ?><?php echo $this->_var['brand_name']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?>" readonly />
                                            <input type="hidden" name="brand_id" id="brand_id" value="<?php echo $this->_var['goods']['brand_id']; ?>" data-filter="brand_id" />
                                            <div class="form_prompt"></div>
                                        </div>    
                                        <div class="brand-select-container" style="display:none;">
                                            <div class="brand-top">
                                                <div class="letter">
                                                    <ul>
                                                        <li><a href="javascript:void(0);" data-letter=""><?php echo $this->_var['lang']['all_brand']; ?></a></li>
                                                        <?php $_from = $this->_var['letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'letter_0_41878800_1611045307');if (count($_from)):
    foreach ($_from AS $this->_var['letter_0_41878800_1611045307']):
?>
                                                        <li><a href="javascript:void(0);" data-letter="<?php echo $this->_var['letter_0_41878800_1611045307']; ?>"><?php echo $this->_var['letter_0_41878800_1611045307']; ?></a></li>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                        <li><a href="javascript:void(0);" data-letter="QT"><?php echo $this->_var['lang']['other']; ?></a></li>
                                                    </ul>
                                                </div>
                                                <div class="b_search">
                                                    <input name="search_brand_keyword" id="search_brand_keyword" ectype="require" type="text" class="b_text" autocomplete="off" placeholder="<?php echo $this->_var['lang']['brand_key']; ?>">
                                                    <a href="javascript:void(0);" class="btn-mini"><i class="icon icon-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="brand-list">
                                                <?php echo $this->fetch('library/search_brand_list.lbi'); ?>
                                            </div>
                                            <div class="brand-not" style="display:none;"><?php echo $this->_var['lang']['lab_other_brand_notic']; ?></div>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['lab_picture']; ?></dt>
                                    <dd>
                                    	<div id="goods_figure" class="update_images fl mr10">
                                        	<div class="img"><img src="<?php if ($this->_var['goods']['goods_thumb']): ?><?php echo $this->_var['goods']['goods_thumb']; ?><?php else: ?>images/update_images.jpg<?php endif; ?>" /></div>
                                        </div>
                                        <div class="form_prompt">
                                            <p><?php echo $this->_var['lang']['notice_goods_image_1']; ?></p>
                                            <p><?php echo $this->_var['lang']['notice_goods_image_2']; ?></p>
                                            <p><?php echo $this->_var['lang']['notice_goods_image_3']; ?></p>
                                        </div>
                                        <div class="notic"></div>
                                        <input type="hidden" name="original_img" value="">
                                        <input type="hidden" name="goods_img" value="">
                                        <input type="hidden" name="goods_thumb" value="">
                                    </dd>
                                </dl>	
                                <dl class="gallery_album" data-inid="gallery_album" data-act="gallery_album_list" ectype="gallery_album_list">
                                    <dt>&nbsp;</dt>
                                    <dd>
                                    	<input type="button" class="sc-btn sc-blueBg-btn btn30" value="<?php echo $this->_var['lang']['gallery_album_select']; ?>" ectype="gallery_album" >
                                        <div id="gallery_album"></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['goods_video']; ?>：</dt>
                                    <dd>
                                        <div id="goods_video" class="update_images mr10 fl">
                                            <div class="img">
                                            <img src="images/update_video.jpg" />
                                            </div>
                                        </div>
                                        <div class="goods_video_div mr10 <?php if (! $this->_var['goods']['goods_video']): ?>hide<?php endif; ?>">
                                            <video class="goods_video_js" id="goods_video_js" width="200" height="200" src="<?php echo $this->_var['goods']['goods_video_path']; ?>" controls>
                                                <source src="<?php echo $this->_var['goods']['goods_video_path']; ?>" class="goods_video_js" type="video/mp4"/>
                                            </video>
                                            <div class="video_default"></div>
                                            <a href="javascript:void(0);" class="video_remove" ectype="video_remove"><i class="icon icon-remove"></i></a>
                                        </div>
                                        <input type="hidden" name="goods_video" value="<?php echo $this->_var['goods']['goods_video']; ?>">
                                        <div class="form_prompt">
                                        	<p><?php echo $this->_var['lang']['notice_goods_video_1']; ?></p>
                                            <p><?php echo $this->_var['lang']['notice_goods_video_2']; ?></p>
                                            <p><?php echo $this->_var['lang']['notice_goods_video_3']; ?></p>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['label_pic_outlink']; ?></dt>
                                    <dd>
                                    	<div class="step_label">
                                        	<div class="checkbox_items">
                                                <div class="checkbox_item fr mr0">
                                                    <input name="is_img_url" class="ui-checkbox" value="0" id="is_img_url" type="checkbox">
                                                    <label class="ui-label" for="is_img_url">&nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step_value">
                                        	<div class="checkbox_items">
                                                <input name="goods_img_url" class="text" id="goods_img_url" value="" placeholder="<?php echo $this->_var['lang']['pic_outlink']; ?>" onfocus="if (this.value == ''){this.value='';this.style.color='#666';}" disabled type="text">
                                                <div class="notic"><?php echo $this->_var['lang']['notice_pic_outlink']; ?></div>
                                                <div class="form_prompt"></div>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>	
                                
                                <dl>
                                    <dt class="step_label"><?php echo $this->_var['lang']['label_goods_freight']; ?></dt>
                                    <dd class="step_value">
                                        <div class="checkbox_items">
                                            
                                            <div class="checkbox_item mr15">
                                                <input type="radio" name="freight" class="ui-radio freight" id="freight_1" value="1" <?php if ($this->_var['goods']['freight'] == 1): ?>checked="checked"<?php endif; ?> />
                                                <label for="freight_1" class="ui-radio-label"><?php echo $this->_var['lang']['lab_freight_fixed']; ?></label> 
                                            </div>
                                            
                                            <div class="checkbox_item">
                                                <input type="radio" name="freight" class="ui-radio freight" id="freight_2" value="2" <?php if ($this->_var['goods']['freight'] == 2): ?>checked="checked"<?php endif; ?> />
                                                <label for="freight_2" class="ui-radio-label"><?php echo $this->_var['lang']['lab_freight_temp']; ?></label> 
                                            </div>
                                            
                                            <input id="shipping_fee" type="text" name="shipping_fee" class="text w150 mr10" autocomplete="off" value="<?php echo $this->_var['goods']['shipping_fee']; ?>" <?php if ($this->_var['goods']['freight'] != 1): ?>style="display:none;"<?php endif; ?>/>
											<div id="tid" class="fl" <?php if ($this->_var['goods']['freight'] != 2): ?>style="display:none;"<?php endif; ?>>
                                            	<div class="imitate_select select_w170">
                                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                    <ul style="display: none;">
                                                        <?php $_from = $this->_var['transport_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['item']['tid']; ?>" class="ftx-01"><?php echo $this->_var['item']['title']; ?></a></li>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </ul>
                                                    <input name="tid" type="hidden" value="<?php echo $this->_var['goods']['tid']; ?>" />
                                                </div>
                                                <a href="javascript:;" class="sc-btn sc-blueBg-btn btn28 mr5" ectype="ajaxTransport"><?php echo $this->_var['lang']['add']; ?></a>
                                            	<a href="javascript:;" class="sc-btn sc-blueBg-btn btn28"  data-attr="edit" ectype="ajaxTransport"><?php echo $this->_var['lang']['edit']; ?></a>                                            
											</div>	
                                            <div class="form_prompt"></div>
                                        </div>
                                    </dd>
                                </dl>		
                                
                                <dl>
                                    <dt class="step_label"><?php echo $this->_var['lang']['label_return_mark']; ?></dt>
                                    <dd class="step_value">
                                        <div class="checkbox_items" ectype="return_type">
                                        
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="return_type[]" class="ui-checkbox freight" id="return_type_0" value="0" <?php if ($this->_var['is_cause'] && in_array ( 0 , $this->_var['is_cause'] )): ?>checked="checked"<?php endif; ?>>
                                                    <label class="ui-label" for="return_type_0"><?php echo $this->_var['lang']['return_type']['0']; ?></label>
                                            </div>
                                            
                                            <div class="checkbox_item mr15">
                                                <input type="checkbox" name="return_type[]" class="ui-checkbox freight" id="return_type_1" value="1" <?php if ($this->_var['is_cause'] && in_array ( 1 , $this->_var['is_cause'] )): ?>checked="checked"<?php endif; ?>>
                                                    <label class="ui-label" for="return_type_1"><?php echo $this->_var['lang']['return_type']['1']; ?></label>
                                            </div>
                                            
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="return_type[]" class="ui-checkbox freight" id="return_type_2" value="2" <?php if ($this->_var['is_cause'] && in_array ( 2 , $this->_var['is_cause'] )): ?>checked="checked"<?php endif; ?>>
                                                    <label class="ui-label" for="return_type_2"><?php echo $this->_var['lang']['return_type']['2']; ?></label>
                                            </div>
                                            
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="return_type[]" class="ui-checkbox freight" id="return_type_3" value="3" <?php if ($this->_var['is_cause'] && in_array ( 3 , $this->_var['is_cause'] )): ?>checked="checked"<?php endif; ?>>
                                                    <label class="ui-label" for="return_type_3"><?php echo $this->_var['lang']['return_type']['3']; ?></label>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>	
                                <dl>
									<dt><?php echo $this->_var['lang']['lab_goods_service']; ?></dt>
                                    <dd>
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="is_reality" class="ui-checkbox" value="1" id="is_reality" <?php if ($this->_var['goods']['goods_extend']['is_reality']): ?> checked="checked"<?php endif; ?>>
                                                <label class="ui-label" for="is_reality"><?php echo $this->_var['lang']['goods_service']['0']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="is_return" class="ui-checkbox" value="1" id="is_return" <?php if ($this->_var['goods']['goods_extend']['is_return']): ?> checked="checked"<?php endif; ?>>
                                                <label class="ui-label" for="is_return"><?php echo $this->_var['lang']['goods_service']['1']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="is_fast" class="ui-checkbox" value="1" id="is_fast" <?php if ($this->_var['goods']['goods_extend']['is_fast']): ?> checked="checked"<?php endif; ?>>
                                                <label class="ui-label" for="is_fast"><?php echo $this->_var['lang']['goods_service']['2']; ?></label>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="step_label"><?php echo $this->_var['lang']['lab_commission_rate']; ?>：</dt>
                                    <dd class="step_value">
                                        <?php if ($this->_var['commission_setting']): ?>
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="text" name="commission_rate" class="text w150" autocomplete="off" value="<?php echo $this->_var['goods']['commission_rate']; ?>"/>&nbsp;%
                                                <div class="notic"><?php echo $this->_var['lang']['notice_commission_rate']; ?></div>
                                                <input type="hidden" name="old_commission_rate" autocomplete="off" value="<?php echo $this->_var['goods']['commission_rate']; ?>"/>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <input type="hidden" name="commission_rate" class="text w150" autocomplete="off" value="<?php echo $this->_var['goods']['commission_rate']; ?>"/>
                                        <span class="red"><?php echo $this->_var['goods']['commission_rate']; ?>%</span>
                                        <?php endif; ?>
                                    </dd>
                                </dl>
                                <dl class="item">
                                    <dt class="step_label"><?php echo $this->_var['lang']['lab_user_price']; ?></dt>
                                    <dd class="step_value">
                                        <?php echo $this->fetch('library/user_price_list.lbi'); ?>
                                        <div class="notic"><?php echo $this->_var['lang']['notice_user_price']; ?></div>
                                    </dd>
                                </dl>
                            </div>
                            <div class="ecsc-form-goods">
                            	<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_detail']; ?></h3></div>
                                <dl class="goods_describe">
                                	<dd>
                                	<div class="tabmenu">
                                    	<ul class="tab">
                                            <li class="active"><a href="javascript:void(0);"><?php echo $this->_var['lang']['pc_terminal']; ?></a></li>
                                            <li><a href="javascript:void(0);"><?php echo $this->_var['lang']['phone_terminal']; ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="items-info gallery_album" data-inid="gallery_album_dsc" data-act="gallery_album_list" ectype="gallery_album_list">
                                    	<div class="wrapper-list">
                                            <div id="FCKeditor">
                                                <?php echo $this->_var['FCKeditor']; ?>
                                                </div>
                                            <input type="button" class="sc-btn sc-blueBg-btn btn30" value="<?php echo $this->_var['lang']['gallery_album_select']; ?>" ectype="gallery_album" >
                                            <div id="gallery_album_dsc"></div>
                                        </div>
                                        <div class="wrapper-list" style="display:none;">
                                        	<div class="panel_warp">
                                                <div class="pannel">
                                                    <div class="pannel-content" ectype="mobile_pannel"><div class="section_warp"><?php echo $this->_var['goods']['desc_mobile']; ?></div></div>
                                                    <input type="hidden" name="desc_mobile" value='<?php echo $this->_var['goods']['desc_mobile']; ?>' />
                                                </div>
                                                <?php echo $this->_var['lang']['phone_terminal_notic']; ?>
                                                <div class="step_top_btn">
                                                    <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn mr10" ectype="mb_add_img"><i class="sc_icon sc_icon_images"></i><?php echo $this->_var['lang']['add_img']; ?></a>
                                                    <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" ectype="mb_add_txt"><i class="sc_icon sc_icon_font"></i><?php echo $this->_var['lang']['add_text']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </dd>
                                </dl>
                            </div>
                            <div class="ecsc-form-goods">
                            	<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['special_info']; ?></h3></div>
                                <div class="goods_activity">
                                    <dl>
                                        <dt class="step_label"><?php echo $this->_var['lang']['label_promotion']; ?></dt>
                                        <dd class="step_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" name="is_promote" class="ui-radio is_promote" id="pro_no" value="0" <?php if (! $this->_var['goods']['is_promote']): ?>checked="checked"<?php endif; ?> onclick="handlePromote(this);"/>
                                                    <label for="pro_no" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label> 
                                                </div>
                                                <div class="checkbox_item mr15">
                                                    <input type="radio" name="is_promote" class="ui-radio is_promote" id="pro_yes" value="1" <?php if ($this->_var['goods']['is_promote']): ?>checked="checked"<?php endif; ?> onclick="handlePromote(this);"/>
                                                    <label for="pro_yes" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label> 
                                                </div>
                                                <div class="hidden_div" <?php if ($this->_var['goods']['is_promote']): ?>style="display:block;"<?php endif; ?>>
                                                    <div id="text_time1" class="text_time<?php if (! $this->_var['goods']['is_promote']): ?> time_disabled<?php endif; ?>">
                                                        <input type="text" class="text mr0" name="promote_start_date" id="promote_start_date" value="<?php echo $this->_var['goods']['promote_start_date']; ?>" autocomplete="off" readonly />
                                                    </div>
                                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                                    <div id="text_time2" class="text_time<?php if (! $this->_var['goods']['is_promote']): ?> time_disabled<?php endif; ?>">
                                                        <input type="text" class="text" name="promote_end_date" id="promote_end_date" value="<?php echo $this->_var['goods']['promote_end_date']; ?>" autocomplete="off" readonly />
                                                    </div>
                                                    <input type="text" class="text w70 ml10" id="promote_1" name="promote_price" value="<?php echo $this->_var['goods']['promote_price']; ?>" <?php if ($this->_var['goods']['user_id']): ?>onblur="get_promote_price(this.value);"<?php endif; ?> <?php if (! $this->_var['goods']['is_promote']): ?>disabled="disabled"<?php endif; ?> placeholder="促销价格" autocomplete="off" />
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl class="item">
                                        <dt class="step_label"><?php echo $this->_var['lang']['label_limit_buy']; ?></dt>
                                        <dd class="step_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" name="is_xiangou" class="ui-radio is_xiangou" id="pur_no" value="0" <?php if (! $this->_var['goods']['is_xiangou']): ?>checked="checked"<?php endif; ?> onclick="handle_for_purchasing(this);"/>
                                                    <label for="pur_no" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label> 
                                                </div>
                                                <div class="checkbox_item mr15">
                                                    <input type="radio" name="is_xiangou" class="ui-radio is_xiangou" id="pur_yes" value="1" <?php if ($this->_var['goods']['is_xiangou']): ?>checked="checked"<?php endif; ?> onclick="handle_for_purchasing(this);"/>
                                                    <label for="pur_yes" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label> 
                                                </div>
                                                <div class="hidden_div" <?php if ($this->_var['goods']['is_xiangou']): ?>style="display:block;"<?php endif; ?>>
                                                    <div id="text_time3" class="text_time <?php if (! $this->_var['goods']['is_xiangou']): ?>time_disabled<?php endif; ?>">
                                                        <input type="text" class="text mr0" name="xiangou_start_date" id="xiangou_start_date" value="<?php echo $this->_var['goods']['xiangou_start_date']; ?>" autocomplete="off" readonly />
                                                    </div>
                                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                                    <div id="text_time4" class="text_time <?php if (! $this->_var['goods']['is_xiangou']): ?>time_disabled<?php endif; ?>">
                                                        <input type="text" class="text" name="xiangou_end_date" id="xiangou_end_date" value="<?php echo $this->_var['goods']['xiangou_end_date']; ?>" autocomplete="off" readonly />
                                                    </div>
                                                    <input type="text" class="text w70 ml10" name="xiangou_num" id="xiangou_num" value="<?php echo $this->_var['goods']['xiangou_num']; ?>" placeholder="限购数量" autocomplete="off" />
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                    
                                    <dl class="item">
                                        <dt class="step_label"><?php echo $this->_var['lang']['label_staging']; ?></dt>
                                        <dd class="step_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" name="is_stages" class="ui-radio is_handle_stages" id="stages_no" value="0" <?php if (! $this->_var['stages']): ?>checked="checked"<?php endif; ?> onclick="handle_for_stages(this);"/>
                                                    <label<?php if ($this->_var['seller_stages']): ?> for="stages_no"<?php endif; ?> class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label> 
                                                </div>
                                                <div class="checkbox_item mr15">
                                                    <input type="radio" name="is_stages" class="ui-radio is_handle_stages" id="stages_yes" value="1" <?php if ($this->_var['stages']): ?>checked="checked"<?php endif; ?> onclick="handle_for_stages(this);"/>
                                                    <label<?php if ($this->_var['seller_stages']): ?> for="stages_yes"<?php endif; ?> class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label> 
                                                </div>
                                                <div class="hidden_div hidden_stages" <?php if ($this->_var['stages']): ?>style="display:block;"<?php endif; ?>>
                                                    <div id="stages" class="checkbox_items">
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" stages="<?php echo $this->_var['stages']['0']; ?>" name="stages_num[0]" class="ui-checkbox" value="1" id="stages_num_0" />
                                                            <label<?php if ($this->_var['seller_stages']): ?> for="stages_num_0"<?php endif; ?> class="ui-label"><?php echo $this->_var['lang']['by_stages_type']['0']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" stages="<?php echo $this->_var['stages']['1']; ?>" name="stages_num[1]" class="ui-checkbox" value="3" id="stages_num_1" />
                                                            <label<?php if ($this->_var['seller_stages']): ?> for="stages_num_1"<?php endif; ?> class="ui-label"><?php echo $this->_var['lang']['by_stages_type']['1']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" stages="<?php echo $this->_var['stages']['2']; ?>" name="stages_num[2]" class="ui-checkbox" value="6" id="stages_num_2" />
                                                            <label<?php if ($this->_var['seller_stages']): ?> for="stages_num_2"<?php endif; ?> class="ui-label"><?php echo $this->_var['lang']['by_stages_type']['2']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" stages="<?php echo $this->_var['stages']['3']; ?>" name="stages_num[3]" class="ui-checkbox" value="9" id="stages_num_3" />
                                                            <label<?php if ($this->_var['seller_stages']): ?> for="stages_num_3"<?php endif; ?> class="ui-label"><?php echo $this->_var['lang']['by_stages_type']['3']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" stages="<?php echo $this->_var['stages']['4']; ?>" name="stages_num[4]" class="ui-checkbox" value="12" id="stages_num_4" />
                                                            <label<?php if ($this->_var['seller_stages']): ?> for="stages_num_4"<?php endif; ?> class="ui-label"><?php echo $this->_var['lang']['by_stages_type']['4']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" stages="<?php echo $this->_var['stages']['5']; ?>" name="stages_num[5]" class="ui-checkbox" value="24" id="stages_num_5" />
                                                            <label<?php if ($this->_var['seller_stages']): ?> for="stages_num_5"<?php endif; ?> class="ui-label"><?php echo $this->_var['lang']['by_stages_type']['5']; ?></label>
                                                        </div>
                                                        <input type="text" name="stages_rate" id="stages_rate" class="text fl w60 mr10" placeholder="<?php echo $this->_var['lang']['by_stages_rate']; ?>" autocomplete="off" value="<?php echo $this->_var['goods']['stages_rate']; ?>" <?php if (! $this->_var['seller_stages']): ?>readonly="readonly"<?php endif; ?>/>
                                                        <span class="fl">(%)</span>
                                                    </div>
                                                </div>
                                                <?php if (! $this->_var['seller_stages']): ?>
                                                <div class="notic"><?php echo $this->_var['lang']['notice_plat_no_open_stage']; ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </dd>
                                    </dl>
                                    
                                    <!--分销商品开关begin -->
                                    <!--<?php if ($this->_var['is_dis']): ?>-->
                                    <dl class="item">
                                        <dt class="step_label"><?php echo $this->_var['lang']['is_drp_goods']; ?></dt>
                                        <dd class="step_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" name="is_distribution" class="ui-radio is_dishandle" id="drp_no" value="0" <?php if (! $this->_var['goods']['is_distribution']): ?>checked="checked"<?php endif; ?> onclick="handle_distribution(this);"/>
                                                    <label for="drp_no" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label> 
                                                </div>
                                                <div class="checkbox_item mr15">
                                                    <input type="radio" name="is_distribution" class="ui-radio is_dishandle" id="drp_yes" value="1" <?php if ($this->_var['goods']['is_distribution']): ?>checked="checked"<?php endif; ?> onclick="handle_distribution(this);"/>
                                                    <label for="drp_yes" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label> 
                                                </div>
                                                <div class="hidden_div hidden_distribution" <?php if ($this->_var['$goods']['is_distribution']): ?>style="display:block;"<?php endif; ?>>
                                                    <input  type="text" id="dis_commission" name="dis_commission" value="<?php echo $this->_var['goods']['dis_commission']; ?>" size="20" class="text w50"/>
                                                    <label class="blue_label"> <?php echo $this->_var['lang']['notice_drp_comm']; ?></label>														
                                                    <div class="notic"></div>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                    <!--<?php endif; ?>-->
                                    <!--分销商品开关end -->
                                </div>
                                <div class="goods_special">
                                    <dl class="item">
                                        <dt class="step_label"><?php echo $this->_var['lang']['label_ladder_price']; ?></dt>
                                        <dd class="step_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                  <input type="radio" name="is_volume" class="ui-radio" id="ladder_no" value="0" <?php if ($this->_var['goods']['is_volume'] == 0): ?>checked="checked"<?php endif; ?>/>
                                                  <label for="ladder_no" class="ui-radio-label"><?php echo $this->_var['lang']['wu']; ?></label> 
                                                </div>
                                                <div class="checkbox_item">
                                                  <input type="radio" name="is_volume" class="ui-radio" id="ladder_yes" value="1" <?php if ($this->_var['goods']['is_volume'] == 1): ?>checked="checked"<?php endif; ?>/>
                                                  <label for="ladder_yes" class="ui-radio-label"><?php echo $this->_var['lang']['you']; ?></label> 
                                                </div>
                                            </div>
                                            <div class="special_div"<?php if ($this->_var['volume_price_list']): ?> style="display:block"<?php endif; ?> ectype="volumeNumber" data-number="100">
                                                <?php echo $this->fetch('library/volume_price_list.lbi'); ?>
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl class="item">
                                        <dt class="step_label"><?php echo $this->_var['lang']['label_full_price']; ?></dt>
                                        <dd class="step_value">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                  <input type="radio" name="is_fullcut" class="ui-radio" id="fullcut_no" value="0"  <?php if ($this->_var['goods']['is_fullcut'] == 0): ?>checked="checked"<?php endif; ?>/>
                                                  <label for="fullcut_no" class="ui-radio-label"><?php echo $this->_var['lang']['wu']; ?></label> 
                                                </div>
                                                <div class="checkbox_item">
                                                  <input type="radio" name="is_fullcut" class="ui-radio" id="fullcut_yes" value="1" <?php if ($this->_var['goods']['is_fullcut'] == 1): ?>checked="checked"<?php endif; ?>/>
                                                  <label for="fullcut_yes" class="ui-radio-label"><?php echo $this->_var['lang']['you']; ?></label> 
                                                </div>
                                            </div>
                                            <div class="special_div" <?php if ($this->_var['consumption_list']): ?>style="display:block"<?php endif; ?>>
                                                <?php echo $this->fetch('library/consumption_list.lbi'); ?>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="ecsc-form-goods">
                            	<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['other_info']; ?></h3></div>
                                <dl id="dl_give_integral" <?php if ($this->_var['goods']['model_price'] != 0): ?>style="display:none"<?php endif; ?>>
                                    <dt><?php echo $this->_var['lang']['lab_give_integral']; ?></dt>
                                    <dd>
										<input type="text" name="give_integral" value="<?php echo empty($this->_var['goods']['give_integral']) ? '0' : $this->_var['goods']['give_integral']; ?>" onblur="get_give_integral(this.value);" size="20" class="text" />
										<div class="notic"><?php echo $this->_var['lang']['notice_seller_give']; ?>，<?php echo $this->_var['lang']['maximum_setting']; ?><em id="give_integral"><?php echo empty($this->_var['goods']['use_give_integral']) ? '-1' : $this->_var['goods']['use_give_integral']; ?></em><?php echo $this->_var['lang']['consumption_integral']; ?></div>
                                    </dd>
                                </dl>	
                                <dl id="dl_rank_integral" <?php if ($this->_var['goods']['model_price'] != 0): ?>style="display:none"<?php endif; ?>>
                                    <dt><?php echo $this->_var['lang']['lab_rank_integral']; ?></dt>
                                    <dd>
										<input type="text" name="rank_integral" value="<?php echo empty($this->_var['goods']['rank_integral']) ? '0' : $this->_var['goods']['rank_integral']; ?>" onblur="get_rank_integral(this.value);" size="20" class="text" />
										<div class="notic"><?php echo $this->_var['lang']['notice_seller_rank']; ?>，<?php echo $this->_var['lang']['maximum_setting']; ?><em id="rank_integral"><?php echo empty($this->_var['goods']['use_rank_integral']) ? '-1' : $this->_var['goods']['use_rank_integral']; ?></em><?php echo $this->_var['lang']['rank_integral']; ?></div>
                                    </dd>
                                </dl>									
                                <dl id="dl_pay_integral" <?php if ($this->_var['goods']['model_price'] != 0): ?>style="display:none"<?php endif; ?>>
                                    <dt><?php echo $this->_var['lang']['lab_integral']; ?></dt>
                                    <dd>
										<input type="text" name="integral" value="<?php echo empty($this->_var['goods']['integral']) ? '0' : $this->_var['goods']['integral']; ?>" size="20" onblur="parseint_integral(this.value);" class="text"/>
										<div class="notic"><?php echo $this->_var['lang']['notice_integral']; ?>，<?php echo $this->_var['lang']['maximum_setting']; ?><?php echo $this->_var['lang']['integral_buy']; ?><em id="pay_integral"><?php echo empty($this->_var['goods']['use_pay_integral']) ? '0' : $this->_var['goods']['use_pay_integral']; ?></em><?php echo $this->_var['lang']['money']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_goods_weight']; ?></dt>
                                    <dd id="ncProductDetails">
                                        <input type="text" class="text mr10" name="goods_weight" value="<?php echo $this->_var['goods']['goods_weight_by_unit']; ?>" size="20" />
                                        <div class="value_select fl">
                                            <div id="commodity_weight" class="imitate_select select_w60">
                                                <div class="cite"><?php echo $this->_var['lang']['unit_kg']; ?></div>
                                                <ul style="display: none;">
                                                    <?php $_from = $this->_var['unit_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                                                    <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['item']; ?></a></li>
                                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                </ul>
                                                <input name="weight_unit" type="hidden" value="<?php echo $this->_var['weight_unit']; ?>" id="company_val">
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['label_goods_unit']; ?></dt>
                                    <dd>
                                        <input type="text" class="text mr10" name="goods_unit" value="<?php echo $this->_var['goods']['goods_unit']; ?>" size="20" />
                                        <div class="notic"><?php echo $this->_var['lang']['notice_goods_unit']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
									<dt><?php echo $this->_var['lang']['label_shop_recom']; ?></dt>
                                    <dd>
										<div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="store_best" class="ui-checkbox" value="1" id="store_best" <?php if ($this->_var['goods']['store_best']): ?>checked="checked"<?php endif; ?>>
                                                <label class="ui-label" for="store_best"><?php echo $this->_var['lang']['boutique']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="store_new" class="ui-checkbox" value="1" id="store_new" <?php if ($this->_var['goods']['store_new']): ?>checked="checked"<?php endif; ?>>
                                                <label class="ui-label" for="store_new"><?php echo $this->_var['lang']['new']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="store_hot" class="ui-checkbox" value="1" id="store_hot" <?php if ($this->_var['goods']['store_hot']): ?>checked="checked"<?php endif; ?>>
                                                <label class="ui-label" for="store_hot"><?php echo $this->_var['lang']['hot']; ?></label>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_is_on_sale']; ?></dt>
                                    <dd>
                                        <div class="switch switch_2 <?php if ($this->_var['goods']['is_on_sale']): ?>active<?php endif; ?>" title="是">
                                            <div class="circle"></div>
                                        </div>
                                        <input type="hidden" value="<?php echo $this->_var['goods']['is_on_sale']; ?>" name="is_on_sale">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_is_alone_sale']; ?></dt>
                                    <dd>
                                        <div class="switch switch_2 <?php if ($this->_var['goods']['is_alone_sale']): ?>active<?php endif; ?>" title="否">
                                            <div class="circle"></div>
                                        </div>
                                        <input type="hidden" value="<?php echo $this->_var['goods']['is_alone_sale']; ?>" name="is_alone_sale">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_is_free_shipping']; ?></dt>
                                    <dd>
                                        <div class="switch switch_2 <?php if ($this->_var['goods']['is_shipping']): ?>active<?php endif; ?>" title="否">
                                            <div class="circle"></div>
                                        </div>
                                        <input type="hidden" value="<?php echo $this->_var['goods']['is_shipping']; ?>" name="is_shipping">
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_keywords']; ?></dt>
                                    <dd>
										<input type="text" class="text" name="keywords" value="<?php echo htmlspecialchars($this->_var['goods']['keywords']); ?>" size="40" />
										<div class="notic"><?php echo $this->_var['lang']['notice_keywords']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_goods_brief']; ?></dt>
                                    <dd>
										<textarea class="textarea" name="goods_brief" cols="40" rows="3"><?php echo htmlspecialchars($this->_var['goods']['goods_brief']); ?></textarea>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['comment_tag']; ?></dt>
                                    <dd>
										<textarea name="goods_product_tag" cols="40" rows="3" class="textarea fl"><?php echo htmlspecialchars($this->_var['goods']['goods_product_tag']); ?></textarea>
										<div class="notic"><?php echo $this->_var['lang']['notice_product_tag']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['service_commitment_tag']; ?></dt>
                                    <dd>
										<textarea class="textarea" name="goods_tag"><?php echo htmlspecialchars($this->_var['goods']['goods_tag']); ?></textarea>
                                        <div class="notic"><?php echo $this->_var['lang']['service_commitment_tag_notic']; ?></div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['lab_seller_note']; ?></dt>
                                    <dd>
										<textarea name="seller_note" cols="40" rows="3" class="textarea fl"><?php echo htmlspecialchars($this->_var['goods']['seller_note']); ?></textarea>
										<div class="notic"><?php echo $this->_var['lang']['notice_seller_note']; ?></div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div id="scanCodeDialog" style="display:none;">
                            <?php echo $this->fetch('library/scan_code.lbi'); ?>
                        </div>
                        <div class="goods_footer">
                            <div class="goods_btn goods_btn_fixed">
                                <a href="javascript:void(0);" class="sc-btn btn35 sc-blue-btn" data-step="3" data-type="step" ectype="stepSubmit"><?php echo $this->_var['lang']['prev_step']; ?></a>
                                <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-step="5" data-type="step" data-down="true" ectype="stepSubmit"><?php echo $this->_var['lang']['next_step']; ?></a>
                            	<?php if ($this->_var['goods']['goods_id']): ?><a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-down="true" data-type="submit" ectype="stepSubmit"><?php echo $this->_var['lang']['release_now']; ?></a><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="step step_four" ectype="step" data-step="5" style="display:none;">
                    	<!-- <?php if ($this->_var['code'] != 'virtual_card'): ?> 虚拟商品不需要商品属性-->
                        <div class="step_content">
                        	<div class="ecsc-form-goods">
                        		<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_properties']; ?></h3></div>
                                <div class="step_item">
                                    <div class="step_item_left"><h5><?php echo $this->_var['lang']['label_attr_cate']; ?></h5></div>
                                    <div class="step_item_right">
                                        <div class="item_right_li">
                                            <div class="value_select" ectype="type_cat">
                                                <?php echo $this->fetch('library/type_cat_list.lbi'); ?>
                                            </div>
                                            <input type="button" class="sc-btn btn28 sc-blueBg-btn" value="<?php echo $this->_var['lang']['add_goods_type_cat']; ?>" ectype="dialog_operation" data-type="add_goods_type_cat" data-goodsid="<?php echo $this->_var['goods']['goods_id']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="step_item">
                                	<div class="step_item_left"><h5><?php echo $this->_var['lang']['label_goods_attr']; ?></h5></div>
                                	<div class="step_item_right">
										<div class="item_right_li">
											<div class="value_select">
												<div id="attr_select" class="imitate_select select_w320" ectype="attrTypeSelect">
													<div class="cite"><?php if ($this->_var['goods_type_name']): ?><?php echo $this->_var['goods_type_name']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?></div>
													<ul style="display: none;">
														<li><a href="javascript:getAttrList(<?php echo empty($this->_var['goods']['goods_id']) ? '0' : $this->_var['goods']['goods_id']; ?>);" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select_goods_type']; ?></a></li>
														<?php $_from = $this->_var['goods_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods_type');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods_type']):
?>
														<li><a href="javascript:getAttrList(<?php echo empty($this->_var['goods']['goods_id']) ? '0' : $this->_var['goods']['goods_id']; ?>);" data-value="<?php echo $this->_var['goods_type']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['goods_type']['cat_name']; ?></a></li>
														<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
													</ul>
													<input name="goods_type" type="hidden" value="<?php echo empty($this->_var['goods']['goods_type']) ? '0' : $this->_var['goods']['goods_type']; ?>" id="select_attr_val">
												</div>
											</div>
                                                                                    <input type="button" class="sc-btn btn28 sc-blueBg-btn" value="<?php echo $this->_var['lang']['add_goods_type']; ?>" ectype="dialog_operation" data-type="add_goods_type" data-goodsid="<?php echo $this->_var['goods']['goods_id']; ?>">
                                                <input type="button" class="sc-btn btn28 sc-blueBg-btn" value="<?php echo $this->_var['lang']['10_attribute_add']; ?>" ectype="dialog_operation" data-type="attribute_add" data-goodsid="<?php echo $this->_var['goods']['goods_id']; ?>">
										</div>
                                    </div>
                                </div>
								<div class="step_item pb0" id="tbody-goodsAttr"></div>
								<!--属性模式-->
								<div class="step_item border-bottom0" id="attribute_model" <?php if ($this->_var['goods']['model_price'] == 0): ?>style="display:none;"<?php endif; ?>>
									<div class="step_item_left"><h5><?php echo $this->_var['lang']['label_goods_warehouse']; ?></h5></div>
									<div class="step_item_right">
										<div class="item_right_li" id="attribute_warehouse">
											<div class="value">
												<div class="checkbox_items">
													<?php $_from = $this->_var['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'warehouse');$this->_foreach['warehouse'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['warehouse']['total'] > 0):
    foreach ($_from AS $this->_var['warehouse']):
        $this->_foreach['warehouse']['iteration']++;
?>
													<div class="checkbox_item mr20" data-wareid="<?php echo $this->_var['warehouse']['region_id']; ?>">
														<input type="radio" name="warehouse" class="ui-radio" id="warehouse_<?php echo $this->_var['warehouse']['region_id']; ?>" <?php if (($this->_foreach['warehouse']['iteration'] <= 1)): ?>checked<?php endif; ?> value="<?php echo $this->_var['warehouse']['region_id']; ?>" data-type="warehouse_id"/>
														<label for="warehouse_<?php echo $this->_var['warehouse']['region_id']; ?>" class="ui-radio-label blod"><?php echo $this->_var['warehouse']['region_name']; ?></label>
													</div>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</div>
											</div>
										</div>
										<div class="item_right_li" id="attribute_region"<?php if ($this->_var['goods']['model_price'] != 2): ?> style="display:none;"<?php endif; ?>>
											<div class="label"><?php echo $this->_var['lang']['label_area']; ?></div>
											<?php $_from = $this->_var['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'warehouse');$this->_foreach['warehouse'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['warehouse']['total'] > 0):
    foreach ($_from AS $this->_var['warehouse']):
        $this->_foreach['warehouse']['iteration']++;
?>
											<div class="value"<?php if (! ($this->_foreach['warehouse']['iteration'] <= 1)): ?> style="display:none;"<?php endif; ?> data-wareid="<?php echo $this->_var['warehouse']['region_id']; ?>">
												<div class="checkbox_items">
													<?php $_from = $this->_var['warehouse']['area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');$this->_foreach['area'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['area']['total'] > 0):
    foreach ($_from AS $this->_var['area']):
        $this->_foreach['area']['iteration']++;
?>
													<div class="checkbox_item">
														<input type="radio" name="region" class="ui-radio" id="region_<?php echo $this->_var['area']['region_id']; ?>" <?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>ectype="cityRegion"<?php endif; ?> data-warehouse="<?php echo $this->_var['warehouse']['region_id']; ?>" <?php if (($this->_foreach['area']['iteration'] <= 1) && ($this->_foreach['warehouse']['iteration'] <= 1)): ?>checked<?php endif; ?> value="<?php echo $this->_var['area']['region_id']; ?>" data-type="region_id"/>
														<label for="region_<?php echo $this->_var['area']['region_id']; ?>" class="ui-radio-label"><?php echo $this->_var['area']['region_name']; ?></label>
													</div>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</div>
											</div>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										</div>
                                        
                                        <?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
                                        <div class="item_right_li" id="attribute_city_region"<?php if ($this->_var['goods']['model_price'] != 2): ?> style="display:none;"<?php endif; ?>>
											<div class="label hide"><?php echo $this->_var['lang']['city_region']; ?>：</div>
											<div class="value hide"  id="region_city_list">
											</div>
										</div>
                                        <?php endif; ?>
                                        
									</div>
								</div>
								<!--属性模式-->
								<div class="step_item_table" id="attribute_table"></div>
                            </div>
                        </div>
						<div class="step" id="goods_attr_gallery"></div>
                        <!-- <?php endif; ?>-->
						<div class="step_content">
                        	<div class="ecsc-form-goods">
                        		<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_gallery']; ?></h3></div>
                                <div class="step_item border-bottom0">
                                    
                                    <div class="goods_album mt20" id="gallery_img_list">
                                        <?php echo $this->fetch('library/gallery_img.lbi'); ?>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="step_top_btn tl mt10 gallery_album" data-inid="addAlbumimg" data-act="gallery_album_list" ectype="gallery_album_list">
                                    	<a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" id="addExternalUrl"><i class="sc_icon_images"></i><?php echo $this->_var['lang']['add_href_img']; ?></a>
                                        <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" id="addImages"><i class="sc_icon_images"></i><?php echo $this->_var['lang']['add_img']; ?></a>
                                        <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" ectype="gallery_album" data-value="<?php echo $this->_var['lang']['gallery_album_select']; ?>"><i class="sc_icon sc_icon_images"></i><?php echo $this->_var['lang']['gallery_album_select']; ?></a>
                                        <span class="red"><?php echo $this->_var['lang']['checkbox_select_img_notic']; ?></span>
                                        <div id="addAlbumimg"></div>
                                    </div>
                                </div>						
							</div>						
						</div>
                        <div class="goods_footer">
                            <div class="goods_btn goods_btn_fixed">
                                <a href="javascript:void(0);" class="sc-btn btn35 sc-blue-btn" data-step="4" data-type="step" ectype="stepSubmit"><?php echo $this->_var['lang']['prev_step']; ?></a>
                                <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-step="6" data-type="step" data-down="true" ectype="stepSubmit"><?php echo $this->_var['lang']['next_step']; ?></a>
                            	<?php if ($this->_var['goods']['goods_id']): ?><a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-down="true" data-type="submit" ectype="stepSubmit"><?php echo $this->_var['lang']['release_now']; ?></a><?php endif; ?>
                            </div>
                        </div>
                    </div>
					<div class="step" style="display:none;" ectype="step" data-step="6">
						<div class="step" ectype="filter" data-filter="goods">
							<div class="step_content">
								<div class="ecsc-form-goods">
									<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['goods_related']; ?></h3></div>	
								</div>
								<!--通用部分 start-->
								<div class="goods_search_div mt20">
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
												<input type="hidden" name="brand" id="brand_id" value="0" data-filter="brand_id" />
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
								<div class="move_div">
									<div class="move_left">
										<h4><?php echo $this->_var['lang']['all_goods']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<?php echo $this->fetch('library/move_left.lbi'); ?>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="add_link_goods"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
										</div>
									</div>
									<div class="move_middle">
										<div class="checkbox_items">
											<div class="checkbox_item">
												<input type="radio" name="is_single" class="ui-radio" id="one_way" value="1" />
												<label for="one_way" class="ui-radio-label"><?php echo $this->_var['lang']['single']; ?></label>
											</div>
											<div class="checkbox_item">
												<input type="radio" name="is_single" class="ui-radio" id="two_way" checked value="0" />
												<label for="two_way" class="ui-radio-label"><?php echo $this->_var['lang']['double']; ?></label>
											</div>
										</div>
									</div>
									<div class="move_right">
										<h4><?php echo $this->_var['lang']['link_goods']; ?></h4>
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
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="drop_link_goods"><?php echo $this->_var['lang']['remove_relation']; ?></a>
										</div>
									</div>
								</div>
							</div>						
						</div>
						<div class="step" ectype="filter" data-filter="article">
							<div class="step_content">
								<div class="ecsc-form-goods">
									<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_article']; ?></h3></div>	
								</div>
								<div class="goods_search_div mt20">
									<input type="text" name="keyword" class="text w150 mr10" value="" placeholder="<?php echo $this->_var['lang']['article_title']; ?>" data-filter="keyword" autocomplete="off" />
									<a href="javascript:void(0);" class="sc-btn sc-blueBg-btn" ectype="search"><?php echo $this->_var['lang']['search_word']; ?></a>
								</div>
								<div class="move_div">
									<div class="move_left">
										<h4><?php echo $this->_var['lang']['all_article']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<?php echo $this->fetch('library/move_left.lbi'); ?>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="add_goods_article"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
										</div>
									</div>
									<div class="move_middle">
										<div class="move_point" data-operation="add_goods_article"></div>
									</div>
									<div class="move_right">
										<h4><?php echo $this->_var['lang']['goods_article']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<ul>
													<?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_article');if (count($_from)):
    foreach ($_from AS $this->_var['goods_article']):
?>
													<li data-value="<?php echo $this->_var['goods_article']['article_id']; ?>" data-text="<?php echo $this->_var['goods_article']['title']; ?>"><i class="sc_icon sc_icon_no"></i><a href="javascript:void(0);"><?php echo $this->_var['goods_article']['title']; ?></a></li>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</ul>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="drop_goods_article"><?php echo $this->_var['lang']['remove_relation']; ?></a>
										</div>
									</div>
								</div>								
							</div>						
						</div>
						<div class="step" ectype="filter" data-filter="area">
							<div class="step_content">
								<div class="ecsc-form-goods">
									<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_areaRegion']; ?></h3></div>	
								</div>	
								<div class="goods_search_div mt20">
									<div class="search_select">
										<div id="area_select" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['select_region']; ?></div>
											<ul style="display: none;">
												<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['all_region']; ?></a></li>
												<?php $_from = $this->_var['areaRegion_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');if (count($_from)):
    foreach ($_from AS $this->_var['area']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['area']['ra_id']; ?>" class="ftx-01"><?php echo $this->_var['area']['ra_name']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="ra_id" type="hidden" value="0" id="area_select_val" data-filter="keyword" />
										</div>
									</div>
									<a href="javascript:void(0);" class="sc-btn sc-blueBg-btn" ectype="search"><?php echo $this->_var['lang']['search_word']; ?></a>
								</div>
								<div class="move_div">
									<div class="move_left">
										<h4><?php echo $this->_var['lang']['optional_region']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<?php echo $this->fetch('library/move_left.lbi'); ?>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="add_area_goods"><?php echo $this->_var['lang']['button_submit_alt']; ?></a>
										</div>
									</div>
									<div class="move_middle">
										<div class="move_point" data-operation="add_area_goods"></div>
									</div>
									<div class="move_right">
										<h4><?php echo $this->_var['lang']['this_goods_region']; ?></h4>
										<div class="move_info">
											<div class="move_list">
												<ul>
													<?php $_from = $this->_var['area_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'area');if (count($_from)):
    foreach ($_from AS $this->_var['area']):
?>
													<li data-value="<?php echo $this->_var['area']['region_id']; ?>" data-text="<?php echo $this->_var['area']['region_name']; ?>"><i class="sc_icon sc_icon_no"></i><a href="javascript:void(0);"><?php echo $this->_var['area']['region_name']; ?></a></li>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</ul>
											</div>
										</div>
										<div class="move_handle">
											<a href="javascript:void(0);" class="sc-btn btn25 moveAll" ectype="moveAll"><?php echo $this->_var['lang']['check_all']; ?></a>
											<a href="javascript:void(0);" class="sc-btn btn25 sc-blueBg-btn" ectype="sub" data-operation="drop_area_goods"><?php echo $this->_var['lang']['remove_relation']; ?></a>
										</div>
									</div>
								</div>								
							</div>						
						</div>
						<div class="step" ectype="filter" data-filter="goods">
							<div class="step_content">
								<div class="ecsc-form-goods">
									<div class="ecsc-form-title"><i class="dian"></i><h3><?php echo $this->_var['lang']['tab_groupgoods']; ?></h3></div>	
								</div>
                                <div class="fl mt20">
                                	<div class="fl lh30"><?php echo $this->_var['lang']['label_limit_buy_number']; ?></div>
                                    <input type="text" name="group_number" class="text w150" value="<?php echo $this->_var['goods']['group_number']; ?>" placeholder="<?php echo $this->_var['lang']['xiangou_number']; ?>" autocomplete="off" />
									<a href="javascript:void(0);" class="sc-btn sc-blueBg-btn ml10" ectype="setupGroupGoods"><?php echo $this->_var['lang']['add_accessories']; ?></a>
                                </div>
                                <div class="clear"></div>
                                <div class="list-div mt20">
                                    <table class="ecsc-default-table">
                                        <thead>
                                            <tr>
                                                <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['goods_name']; ?></div></th>
                                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['goods_price']; ?></div></th>
                                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['accessories_price']; ?></div></th>
                                                <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['accessories_type']; ?></div></th>
                                                <th width="5%"><div class="handle"><?php echo $this->_var['lang']['handler']; ?></div></th>
                                            </tr>
                                        </thead>
                                        <tbody ectype="group_list">
                                        <?php $_from = $this->_var['group_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'sg');if (count($_from)):
    foreach ($_from AS $this->_var['sg']):
?>
                                            <tr  data-gid="<?php echo $this->_var['sg']['id']; ?>" data-goods="<?php echo $this->_var['sg']['goods_id']; ?>">
                                                <td><div class="tDiv"><?php echo $this->_var['sg']['goods_name']; ?></div></td>
                                                <td><div class="tDiv"><?php echo $this->_var['sg']['shop_price']; ?></div></td>
                                                <td><div class="tDiv"><input class="text w50 tc fn" style="margin-right:0px;" onblur="listTable.editInput(this, 'edit_gorup_price', <?php echo $this->_var['sg']['id']; ?> );" autocomplete="off" value="<?php echo $this->_var['sg']['goods_price']; ?>" type="text"></div></td>
                                                <td><div class="tDiv">
                                                    <div class="imitate_select select_w120">
                                                        <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                                            <ul style="display: none;" class="ps-container">
                                                                <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                                                <?php $_from = $this->_var['group_goods_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                                                
                                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01" ectype="group_checked"><?php echo $this->_var['list']; ?></a></li>
                                                                
                                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                            </ul>
                                                            <input name="group2[]" type="hidden" value="<?php echo $this->_var['sg']['group_id']; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="handle">
                                                    <div class="tDiv a1">
                                                        <a href="javascript:;" ectype="remove_group" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['remove']; ?></a>									
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; else: ?>
                                            <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </tbody>
                                    </table>							
								</div>
                            </div>						
						</div>
                        <div class="goods_footer">
                            <div class="goods_btn goods_btn_fixed">
                                <a href="javascript:void(0);" class="sc-btn btn35 sc-blue-btn" data-step="5" data-type="step" ectype="stepSubmit"><?php echo $this->_var['lang']['prev_step']; ?></a>
                                <a href="javascript:void(0);" class="sc-btn btn35 sc-blueBg-btn" data-step="0" data-type="submit" data-down="true" ectype="stepSubmit"><?php echo $this->_var['lang']['release_now']; ?></a>
                            </div>
                        </div>
					</div>
                </div>
				</form>
            </div>
            <div class="loadWarpper">
                <div class="loadSpin">
                    <i class="icon-spinner icon-spin"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/plupload.full.min.js,jquery.purebox.js,../js/spectrum-master/spectrum.js')); ?>
<script type="text/javascript">
	/**********************************{手机商品描述选相册 gallery_album} start*****************************/
	$.divselect("#album_id","#album_id_val",function(obj){
        var val = obj.attr("data-value");
        changedpic(val,obj,1);
    });
	
    $.divselect("#sort_name","#sort_name_val",function(obj){
		var sort = obj.attr("data-value");
        changedpic(0,obj,1,sort);
    });
	
	$.divselect("#album_file","#album_file_val",function(obj){
		var val = obj.attr("data-value"),
			inid = obj.parents("[ectype='album-warp']").data("inid"),
			is_vis = 0;
			
		if(inid == "gallery_album"){
			is_vis = 2;
		}else{
			is_vis = 1;
		}
			
		changedpic(val,obj,is_vis,"",inid);
	});
	
	//属性分类筛选出属性类型
	$.divselect("*[ectype='typeCatSelect']","*[ectype='typeCatVal']",function(obj){
		var level = obj.data('level'),
			val = obj.data("value");
		
		get_childcat(obj,2);
	});
    /**********************************{手机商品描述选相册 gallery_album} end*****************************/

	var goods_id = $("input[name='goods_id']").val();
	var user_id = '<?php echo empty($this->_var['goods']['user_id']) ? '0' : $this->_var['goods']['user_id']; ?>';
	
	$(function(){
		var steflex = $(".stepflex");
		var goodsInfo = $(".goods_info");
		var model_inventory = $("form[name='theForm'] :input[name='model_inventory']").val();
		$(window).load(function(){
			//默认进入加载步骤
			auto_step();
			
			//设置分类导航
			set_cat_nav();
			
			reset_step_number($("input[name='goods_model']").val());
			
			//促销
			handlePromote('input[name=is_promote]');
			
			//限购
			handle_for_purchasing('.is_xiangou');
			
			//分期
			handle_for_stages('.is_handle_stages');
			
			//隐藏属性模块
			var goods_attr_list = $("#goods_attr_gallery").html();
			if(goods_attr_list == ''){
				$("#goods_attr_gallery").hide();
			}
			
			//分销
			if(document.getElementById('dis_commission')){
				handle_distribution('.is_dishandle');
			}
			
			//会员价格
			
				<?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
					set_price_note('<?php echo $this->_var['item']['rank_id']; ?>');
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
			
			if(model_inventory != 0){
				$("#goods_number").hide();
			}
			
			if(model_inventory > 0){
				$("#dl_give_integral").hide();
				$("#dl_rank_integral").hide();
				$("#dl_pay_integral").hide();
			}else{
				$("#dl_give_integral").show();
				$("#dl_rank_integral").show();
				$("#dl_pay_integral").show();
			}
			
			$(".loadWarpper").hide();
			$(".main-content").show();
			
			$(".step[ectype=filter]").find(".move_right .move_list").perfectScrollbar('destroy');
			$(".step[ectype=filter]").find(".move_right .move_list").perfectScrollbar();
		});
		
		//设置步骤
		var auto_step = function(num){
			if(goods_id > 0){			
				var auto_step = 'auto_step_' + goods_id;
				if(num){
					$.cookie(auto_step, num, {expires:1,path:'/'});
				}else{
					//编辑商品默认到第三步
					//var num = $.cookie(auto_step)? $.cookie(auto_step):1;
					show_step('step', 4);
				}
			}else{
				if(num == null){
					//添加商品默认到第一步
					show_step('step', 1);
				}
			}
		}
		
		//页面跳转
		var show_step = function(type,num,valid,obj){
			//点击下一步骤验证
			if(obj != null){
				var obj = $(obj);
				var step = obj.parents("div[ectype='step']").data("step");
				if(validfunc(step) == false && valid == true){
					return;
				}
			}

			//当前步骤导航
			steflex.find("dl:lt("+num+")").addClass("current");
			steflex.find("dl:gt("+(num-1)+")").removeClass("current");

			//当前步骤内容页显示
			goodsInfo.find("*[ectype='step'][data-step="+num+"]").show().siblings().hide();
			
			if(type == "submit"){
				$("#goods_form").submit();
			}
			
			if(num == 4 || num == 5 || num == 6){
				scroll();
			}
		}
		
		//选择商品模式
		$("*[data-step='1']").find(".mos .mos_item").on("click",function(){
			var obj = $(this);
			var model = obj.data("model");
			
			if(model > 0){
				$("#dl_give_integral").hide();
				$("#dl_rank_integral").hide();
				$("#dl_pay_integral").hide();
			}else{
				$("#dl_give_integral").show();
				$("#dl_rank_integral").show();
				$("#dl_pay_integral").show();
			}
			
			obj.addClass("active");
			obj.siblings().removeClass("active");
			
			$("input[name='goods_model']").val(model);
			$("input[name='model_price']").val(model);
			$("input[name='model_inventory']").val(model);
			$("input[name='model_attr']").val(model);
			$(this).find("input[name='model']").prop("checked", true);
			
			set_attribute_table(goods_id); //重置表格
			getAttrList(goods_id);
		});
		
		//第一步商品模式选择后 点击下一步
		$("*[ectype='firstStepSubmit']").on("click",function(){
			var obj = $(this).parents(".step").find(".active");
			var model = obj.data("model");
			var stepModel = obj.data("stepmodel");
			
			//选择商品模式进去下一步骤
			show_step('model',stepModel);
			
			//选择不同的商品模式
			reset_step_number(model);
		});
		
		/* 重置步骤数字 */
		reset_step_number = function(model){
			if(model == 0){
				modelFormat(model);
			}else{
				modelFormat(model);
				goods_model_list("#goods_model_list", goods_id, model, user_id); //加载商品模式列表
			}
		}
		
		//选择不同的商品模式展示不同的模式属性
		modelFormat = function(model){
			var dlModel = steflex.find("dl[ectype='model']");
			if(model == 0){
				dlModel.hide();
				steflex.removeClass("steflexActive");
				$("dd span[ectype='model'],h3[ectype='model']").text(jl_default_model);
				$("#attribute_model").hide(); //属性模式
				<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
				$("#attribute_city_region").hide();
				<?php endif; ?>
			}else if(model == 1){
				dlModel.show();
				steflex.addClass("steflexActive");
				$("dd span[ectype='model'],h3[ectype='model']").text(jl_warehouse_model);
				$("#attribute_model").show(); //属性模式
				$("#attribute_region").hide();
				<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
				$("#attribute_city_region").hide();
				<?php endif; ?>
			}else if(model == 2){
				dlModel.show();
				steflex.addClass("steflexActive");
				$("dd span[ectype='model'], h3[ectype='model']").text(jl_region_model);
				$("#attribute_model").show(); //属性模式
				$("#attribute_region").show();
				<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
				$("#attribute_city_region").show();
				<?php endif; ?>
			}
			
			steflex.find("dl").each(function(index, element){
				var step_text = $(this).data("step");
				if(model == 0){
					step_text -= 1;
				}
				if(index>1){
					$(element).find("em").text(step_text);
				}
			});
		}

		//添加或者编辑商品点击下一步事件
		$("*[ectype='stepSubmit']").on("click",function(){
			var _this = $(this);
			var step = _this.data("step");
			var type = _this.data("type");
			var down = _this.data("down");
			if(down == true){
				show_step(type,step,true,_this);
			}else{
				show_step(type,step,false,_this);
			}
		});
		
		//步骤验证通过下一步
		validfunc = function (num){
			var model_inventory = $("form[name='theForm'] :input[name='model_inventory']").val();
			var stepDiv = $("div[data-step='"+num+"']");
			stepDiv.find("input[ectype='require']").removeClass("error");
			stepDiv.find(".form_prompt .error").remove();
			if(num == 3){
				//验证是否选择了分类
				if($("input[name='cat_id']").val() == 0){
					$("#choiceClass").find("strong").html("<?php echo $this->_var['lang']['select_cat']; ?>");
					return false;
				}
			}else if(num == 4){
				//验证商品基本信息必填信息
				if($("input[name='goods_name']").val() == ""){
					error_div("input[name='goods_name']",goods_name_not_null);
					return false;
				}

				if(!(/^[0-9]+.?[0-9]*$/.test($("input[name='shop_price']").val()))){
					error_div("input[name='shop_price']",shop_price_not_number);
					return false;
				}
				if(/[^0-9 \-]+/.test($("input[name='goods_number']").val())){
					error_div("input[name='goods_number']",goods_stock_must_init);
					return false;
				}
				
				if($("input[name='goods_number']").val() == ""){
					error_div("input[name='goods_number']",goods_stock_not_null);
					return false;
				}
				
				if($("input[name='goods_number']").val() == 0 && model_inventory == 0){
					error_div("input[name='goods_number']",goods_stock_not_0);
					return false;
				}
				
				/*if($("input[name='brand_id']").val() == 0){
					error_div("input[name='brand_name']","<?php echo $this->_var['lang']['select_barnd']; ?>");
					return false;
				}*/
				
				if($("#is_img_url").val() == 0){
					if($(".update_images").find("img").attr("src") == "images/update_images.jpg"){
						
						error_div(".moxie-shim input",jl_upload_default_img);
						return false;
					}
				}else{
					if($("#goods_img_url").val() == ''){
						error_div("input[name='goods_img_url']",jl_input_img_outlink);
						return false;
					}
				}
				
				if(document.getElementById('dis_commission')){
					
					var dis_true = 0;
					var is_dis = 0;
					var dis = $("#dis_commission").val();
					
					$("input[name='is_distribution']").each(function(index, element) {
					
					  if($(element).is(":checked") == true){
						if(dis == ''){
							is_dis = 1;
							
						}else if(dis < 0 || dis > 100){
							is_dis = 2;
						}
						
						dis_true = 1;
					  }else{
						dis_true = 0;
					  }
				  	});
					
					if(dis_true == 1){
						if(is_dis == 1){
							error_div("input[name='dis_commission']",jl_value_not_null);
							return false;
						}else if(is_dis == 2){
							error_div("input[name='dis_commission']",jl_value_in_0_100);
							return false;
						}
					}
				}
				
				if(document.getElementById('stages_rate')){
					
					var stages_true = 0;
					var stagesnum = 0;
					var is_stages = 0;
					var stages_rate = $("input[name='stages_rate']").val();
					
					$("input[name='is_stages']").each(function(index, element) {
					
					  if($(element).is(":checked") == true){
						if(stages_rate == ''){
							is_stages = 1;
							
						}else if(stages_rate <= 0 || stages_rate > 100){
							is_stages = 2;
						}
						
						for(var i = 0; i <= 5; i++){
							if($("input[name='stages_num[" + i + "]']").is(":checked") == true){
								stagesnum = 0;
								break;
							}else{
								stagesnum += 1;
							}
						}
						
						stages_true = 1;
					  }else{
					  	stages_true = 0;
					  }
				  	});

						
					if(stages_true == 1){
						if(stagesnum > 0){
							error_div("input[name='stages_rate']",jl_select_stage);
							return false;
						}else{
							if(is_stages == 1){
								error_div("input[name='stages_rate']",jl_value_not_null);
								return false;
							}else if(is_stages == 2){
								error_div("input[name='stages_rate']",jl_value_in_0_100);
								return false;
							}
						}
					}	
				}

                //运费验证
                if($("input[name='freight']").length > 0){
                    var is_freight = true;
                    var error_prompt = "";
                    
                    if($("input[name='freight']").is(":checked")){
                        var val = $("input[name='freight']:checked").val();
                        if(val == 2){
                            var tid = $("input[name='tid']").val();
                            if(tid == "" || tid == 0){
                                is_freight = false;
                                error_prompt = volume_freight_not_null;
                            }
                        }else{
                            is_freight = true;
                        }
                    }else{
                        is_freight = false;
                        error_prompt = volume_goods_freight_not_null;
                    };

                    if(is_freight == false){
                        error_div("input[name='freight']",error_prompt);
                        return false;
                    }
                }
				
			}else{
				return true;
			}
		}
		
		//验证调用的报错提示
		error_div = function(obj,error, is_error){
			var error_div = $(obj).parents('dd').find('div.form_prompt');
			//$(obj).parents('div.step_value').find(".notic").hide();
			
			if(is_error != 1){
				$(obj).addClass("error");
			}
			
			$(obj).focus();
			error_div.find("label").remove();
			error_div.append("<label class='error'><i class='icon icon-exclamation-sign'></i>"+error+"</label>");
		}
		
		//列出商品模式
		goods_model_list = function(obj, goods_id, model, user_id){
			var obj = $(obj);
			$.jqueryAjax('goods.php', 'act=goods_model_list&goods_id='+goods_id+'&model='+model+'&user_id='+user_id, function(data){
				obj.html(data.content);
			});
		}
		
		//悬浮显示上下步骤按钮
		scroll = function(){
			$(window).scroll(function(){
				var scrollTop = $(document).scrollTop();
				var height = $(".ecsc-layout-right").height();
				var wHeight = $(window).height();
				if(scrollTop>(height-wHeight)){
					$(".goods_footer .goods_btn").removeClass("goods_btn_fixed");
				}else{
					$(".goods_footer .goods_btn").addClass("goods_btn_fixed");
				}
			});
		}
		
		//返回修改分类
		$("a[ectype='edit_category']").on("click",function(){
			show_step('step', 3);
		});
		
		/**********************************{仓库和地区模式} start*****************************/
		
		/**********************************{手机商品描述选相册 gallery_album} start*****************************/
		//$.divselect("#pic_file","#pic_file_val",function(obj){
		//	var album_id = obj.attr("data-value");
			// alert(album_id);
		//	$.jqueryAjax('goods.php', 'act=gallery_album_pic&album_id='+album_id, function(data){
		//			if(data.error == 0){
		//				$('.albumContent').html(data.content);
		//			}
		//		});
	
			//get_store_search(val);
		//});
		$.divselect("#album_id","#album_id_val",function(obj){
			var val = obj.attr("data-value");
			changedpic(val,obj,1);
		});
		$.divselect("#sort_name","#sort_name_val",function(obj){
			changedpic(0,obj,1);
		});
		/**********************************{手机商品描述选相册 gallery_album} end*****************************/
		
		/*************************************仓库部分************************************/
		//添加仓库
		$(document).on("click","a[ectype='addWarehouse']",function(){
			var user_id = $(this).data('userid');
			$.jqueryAjax('dialog.php', 'is_ajax=1&act=dialog_warehouse' + '&user_id=' + user_id + '&temp=addBatchWarehouse', function(data){
				var content = data.content;
				pb({
					id:"categroy_dialog",
					title:jl_add_warehouse,
					width:788,
					content:content,
					ok_title:jl_determine,
					drag:false,
					foot:true,
					cl_cBtn:false,
					onOk:function(){addBatchWarehouse()}
				});
				
				$(".addList").on("click",function(){
					var list = $(this).parents(".add_warehouse_list");
					var it = list.find(".warehouse_item:first").clone();
					it.append("<a href='javascript:void(0);' class='delete'></a>")
					if(list.find(".warehouse_item").length>4){
						$(".red_notic").remove();
						$(this).before("<div class='red_notic'>"+jl_add_warehouse_no_5+"</div>");
						setTimeout('$(".red_notic").remove()',1000);
					}else{
						$(this).before(it);
					}
				});
				
				$(document).on("click",".delete",function(){
					$(this).parents(".warehouse_item").remove();
				});				
			});
		});
		
		//添加仓库处理
		function addBatchWarehouse(){
			var obj = $("#categroy_dialog");
			var ware_name = [];
			var ware_number = [];
			var ware_price = [];
			var ware_promote_price = [];
			var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
			obj.find("input[name='warehouse_name']").each(function(){
				var val = $(this).val();
				ware_name.push(val);
			});
			obj.find("input[name='warehouse_number']").each(function(){
				var number = $(this).val();
				ware_number.push(number);
			});
			obj.find("input[name='warehouse_price']").each(function(){
				var price = $(this).val();
				ware_price.push(price);
			});
			obj.find("input[name='warehouse_promote_price']").each(function(){
				var promote_price = $(this).val();
				ware_promote_price.push(promote_price);
			});
			Ajax.call('goods.php?is_ajax=1&act=addBatchWarehouse', 'ware_name=' + ware_name+"&ware_number="+ware_number+"&ware_price="+ware_price+"&ware_promote_price="+ware_promote_price+"&goods_id="+goods_id, addWarehouseResponse, 'POST', 'JSON');
		}
		
		//添加仓库处理回调
		function addWarehouseResponse(result){
			if(result.error == 1){
				alert(result.massege);
			}else{
				//加载商品模式列表
				goods_model_list("#goods_model_list", goods_id, 1, user_id);
			}
		}
		
		//删除仓库
		$(document).on("click","a[ectype='dropWarehouse']",function(){
			
			var w_id = $(this).data("wid");
			
			if (confirm('<?php echo $this->_var['lang']['drop_warehouse']; ?>')){
				$.jqueryAjax('goods.php', 'act=drop_warehouse&w_id='+w_id, function(data){
					if(data.error == 0){
						goods_model_list("#goods_model_list", goods_id, 1, user_id);
					}
				});
			}
		});
		
		/*************************************地区部分************************************/
		//添加地区
		$(document).on("click","a[ectype='addRegion']",function(){
			var user_id = $(this).data('userid');
			var goods_id = $(this).data('goodsid');
			$.jqueryAjax('dialog.php', 'is_ajax=1&act=dialog_warehouse' + '&user_id=' + user_id + '&goods_id=' + goods_id + '&temp=addBatchRegion', function(data){
				var content = data.content;
				
				<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
				var width = 1000;
				<?php else: ?>
				var width = 900;
				<?php endif; ?>
				
				pb({
					id:"categroy_dialog",
					title:jl_add_region,
					width:width,
					content:content,
					ok_title:jl_determine,
					drag:false,
					foot:true,
					cl_cBtn:false,
					onOk:function(){addBatchRegion()}
				});
				
				$(".addList").on("click",function(){									
					var list = $(this).parents(".add_warehouse_list");
					var it = list.find(".warehouse_item:first").clone();
					
					//补充
					var input = it;
					var num = $("input[name='numAdd_area']").val();
					if(num < <?php echo $this->_var['area_count']; ?>){
						num++;
						input.attr('id','area_' + num);
						input.find('font').attr('id',"warehouse_area_list_" + num);
						input.find('div.warehouse_area_name').attr('data-key',num);
						input.find('div.warehouse_area_name').attr('id', 'warehouse_area_name_' + num);
						input.find("input[name='warehouse_area_name']").attr('id',"warehouse_area_name_val_" + num);
						
						<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
						input.find('div.warehouse_area_city').attr('id', 'warehouse_area_city_name_' + num);
						input.find('div.warehouse_area_city').attr('data-key',num);
						input.find('div.area_city_list').attr('id', 'warehouse_area_city_' + num);
						<?php endif; ?>
						
						input.find('select').attr('id',num);
						$("input[name='numAdd_area']").val(num);
					}else{
						alert(jl_add_region_1+'<?php echo $this->_var['area_count']; ?>'+jl_add_region_2);
					}					
					//补充
					
					it.append("<a href='javascript:void(0);' class='delete'></a>")
					if(list.find(".warehouse_item").length>4){
						$(".red_notic").remove();
						$(this).before("<div class='red_notic'>"+jl_add_region_no_5+"</div>");
						setTimeout('$(".red_notic").remove()',1000);
					}else{
						$(this).before(it);
					}
				});
				
				$(document).on("click",".delete",function(){
					$(this).parents(".warehouse_item").remove();
				});				
			});	
		});
		
		$(document).on("click",".warehouse_area_name li",function(){
			var goods_id =$(this).parents(".warehouse_area_name").data("goodsid");
			var user_id =$(this).parents(".warehouse_area_name").data("userid");
			var key =$(this).parents(".warehouse_area_name").data("key");
			var value = $(this).find("a").data("value");

			get_warehouse_area_name(value, key ,goods_id, user_id, 1);
		});
		
		//批量添加地区
		function addBatchRegion(){
			var obj = $("#categroy_dialog");
			var warehouse_area_name = [];
			var region_number = [];
			var region_price = [];
			var region_promote_price = [];
			var warehouse_area_list = [];
			
			<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
			var warehouse_area_city = [];
			<?php endif; ?>
			
			var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
			obj.find("select").each(function(){
				var val = $(this).val();
				warehouse_area_name.push(val);
			});
			obj.find("input[name='area_name']").each(function(){
				var area_list = $(this).val();
				warehouse_area_list.push(area_list);
			});
			
			<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
			obj.find("input[name='area_city_name']").each(function(){
				var area_list = $(this).val();
				warehouse_area_city.push(area_list);
			});
			<?php endif; ?>
			
			 obj.find("input[name='region_number']").each(function(){
				var number = $(this).val();
				region_number.push(number);
			});
			obj.find("input[name='region_price']").each(function(){
				var price = $(this).val();
				region_price.push(price);
			});
			obj.find("input[name='region_promote_price']").each(function(){
				var promote_price = $(this).val();
				region_promote_price.push(promote_price);
			});
			
			var where = "";
			<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
				where = "&warehouse_area_city="+warehouse_area_city;
			<?php endif; ?>
			
			Ajax.call('goods.php?is_ajax=1&act=addBatchRegion', 'warehouse_area_name=' + warehouse_area_name+"&region_number="+region_number+"&region_price="+region_price+"&region_promote_price="+region_promote_price+"&goods_id="+goods_id+"&warehouse_area_list="+warehouse_area_list + where, addRegionResponse, 'POST', 'JSON');
		}
		
		//批量添加地区回调函数
		function addRegionResponse(result){
		   if(result.error == 1){
				alert(result.massege);
			}else{
				//加载商品模式列表
				goods_model_list("#goods_model_list", goods_id, 2, user_id);
			}
		}		
		
		function get_warehouse_area_name(warehouse_id, key, goods_id, ru_id){
			Ajax.call('goods.php?is_ajax=1&act=edit_warehouse_area_list', "id="+warehouse_id + "&key="+key + "&goods_id=" + goods_id + "&ru_id=" + ru_id, ResponseWarehouse_area, "GET", "JSON");
		
		}
		
		function ResponseWarehouse_area(result)
		{
			if (result.content.error == 0)
			{
				$('#warehouse_area_list_' + result.content.key).html(result.content.html);
			}else{
				$('#warehouse_area_list_' + result.content.key).find('select').remove();
				alert(jl_warehouse_no_region);
			}
		}
		
		//删除地区
		$(document).on("click","a[ectype='dropWarehouseArea']",function(){
			
			var a_id = $(this).data("aid");
			
			if (confirm('<?php echo $this->_var['lang']['drop_warehouse_area']; ?>')){
				$.jqueryAjax('goods.php', 'act=drop_warehouse_area&a_id='+a_id, function(data){
					if(data.error == 0){
						goods_model_list("#goods_model_list", goods_id, 2, user_id);
					}
				});
			}
		});
		
		$(document).on("click",":input[ectype='cityRegion']",function(){
			
			var area_id = $(this).val();
			
			get_city_region(area_id);
		});
		
		function get_city_region(area_id){
			Ajax.call('goods.php?is_ajax=1&act=city_region', 'area_id=' + area_id, RegionCityResponse, 'GET', 'JSON');
		}
		
		function RegionCityResponse(result){
			$("#attribute_city_region .label").removeClass('hide');
			$("#attribute_city_region .value").removeClass('hide');
			
			$("#attribute_city_region .label").addClass('show');
			$("#attribute_city_region .value").addClass('show');
			$("#region_city_list").html(result.content.html);
		}
		/**********************************{仓库和地区模式} end*****************************/		
		/*************************************批量上传跳转连接 start************************************/
		$(document).on("click","#produts_batch",function(){
			var model = $(":input[name='goods_model']").val();
			window.open("goods_produts_batch.php?act=add" + "&goods_id=" +goods_id+ "&model=" + model,"_blank");
		});
		
		$(document).on("click","#produts_warehouse_batch",function(){
			var model = $(":input[name='goods_model']").val();
			var warehouse_id = 0;
			
			$("input[data-type='warehouse_id']").each(function(index, element) {
				if($(element).is(":checked") == true){
					warehouse_id = $(this).val();
				}
			});
			
			window.open("goods_produts_warehouse_batch.php?act=add" + "&goods_id=" +goods_id+ "&model=" + model+ "&warehouse_id=" + warehouse_id,"_blank");
		});
		
		$(document).on("click","#produts_area_batch",function(){
			var model = $(":input[name='goods_model']").val();
			var area_id = 0;
			
			$("input[data-type='region_id']").each(function(index, element) {
				if($(element).is(":checked") == true){
					area_id = $(this).val();
				}
			});
			
			$("input[data-type='city_region_id']").each(function(index, element) {
				if($(element).is(":checked") == true){
					city_id = $(this).val();
				}
			});
			
			window.open("goods_produts_area_batch.php?act=add" + "&goods_id=" +goods_id+ "&model=" + model+ "&area_id=" + area_id+ "&city_id=" + city_id,"_blank");
		});
		
		$(document).on("click","#attr_refresh",function(){
			getAttrList(goods_id);
		});
		/*************************************批量上传跳转连接 end************************************/
	});
	
	/**********************************{商品分类选中} start*****************************/
	//分类滚动轴
	$(".category_list").perfectScrollbar();

	//常用分类
	$.divselect("#sortcommList","#sortcommValue",function(obj){
		var cat_id = $(obj).data('value');
		$.jqueryAjax('goods.php', 'act=set_common_category_pro&cat_id='+cat_id, function(data){
			for(var i=1; i<=3; i++){
				if(data.content[i]){
					$("ul[ectype=category][data-cat_level="+i+"]").html(data.content[i]);
				}
			}
			//设置商品分类
			set_cat_nav();
			$("input[name=cat_id]").val(cat_id);
		})
	});	
	
	$(document).on("click","ul[ectype='category'] li",function(){
		var _this = $(this);
		var cat_id = _this.data("cat_id");
		var cat_level = _this.data("cat_level");
		var goods_id = _this.data("goodsid");
		
		get_select_category_pro(_this, cat_id, cat_level, goods_id);
	});
	/**********************************{商品分类选中} end*****************************/	
	
	/**********************************{商品基本信息} start*****************************/
	//商品货号
	function checkGoodsSn(goods_sn, goods_id)
	{
		var callback = function(res)
		{
			if (res.error > 0)
			{
				error_div("input[name='goods_sn']",res.message, 1);
			}
		}
		
		Ajax.call('goods.php?is_ajax=1&act=check_goods_sn', "goods_sn=" + goods_sn + "&goods_id=" + goods_id, callback, "GET", "JSON");
	}
	
	//商品价格
	function priceSetted()
	{
		var shop_price = 0;  
		if(document.forms['theForm'].elements['shop_price']){
			$($("form[name='theForm'] :input[name='is_promote']")).each(function(index, element) {
			  if($(element).is(":checked") == true){
				  if($(element).val() == 1){
					  shop_price = Number(parseFloat(document.forms['theForm'].elements['promote_price'].value));
				  }else{
					  shop_price = Number(parseFloat(document.forms['theForm'].elements['shop_price'].value));
				  }
			  }
		  });
		}
		
		computePrice('market_price', marketPriceRate);
		
		<?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
		set_price_note(<?php echo $this->_var['item']['rank_id']; ?>);
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		
		<?php if ($this->_var['goods']['user_id']): ?>
		//商品价格
		var model_price = $("form[name='theForm'] :input[name='model_price']").val();
		
		if(model_price == 0){

			<?php if ($this->_var['grade_rank']['give_integral']): ?>
				var give_integral = Math.floor(shop_price * <?php echo $this->_var['grade_rank']['give_integral']; ?>);
				$("#give_integral").html(give_integral);
				
				var rank_integral = Math.floor(shop_price * <?php echo $this->_var['grade_rank']['rank_integral']; ?>);
				$("#rank_integral").html(rank_integral);
				
				var pay_integral = Math.floor(shop_price * <?php echo $this->_var['grade_rank']['pay_integral']; ?>);
				$("#pay_integral").html(pay_integral);
			<?php endif; ?>
		}
		<?php endif; ?> 
	}

	/*价格计算相关js start*/		
	var marketPriceRate = <?php echo empty($this->_var['cfg']['market_price_rate']) ? '1' : $this->_var['cfg']['market_price_rate']; ?>;
	var integralPercent = <?php echo empty($this->_var['cfg']['integral_percent']) ? '0' : $this->_var['cfg']['integral_percent']; ?>;
  
	//取整数
	function integral_market_price()
	{
		document.forms['theForm'].elements['market_price'].value = parseInt(document.forms['theForm'].elements['market_price'].value);
	} 
	
	/**
	* 赠送消费积分数
	*/
	function get_give_integral(val)
	{
		var val = Number(val);
		if(val > 0 || val == -1){
			var give_integral = Number($("#give_integral").html());
			if(val > give_integral || val == -1){
				alert(jl_set_jifen_1 +give_integral+ jl_set_jifen_2);
				var val = give_integral;
			} 
		}
		else
		{
			val = 0;
		}
		document.forms['theForm'].elements['give_integral'].value = parseInt(val);
	}
  
	/**
	* 赠送等级积分数
	*/
	function get_rank_integral(val)
	{
		var val = Number(val);
		if(val > 0 || val == -1){
			var rank_integral = Number($("#rank_integral").html());  
			if(val > rank_integral || val == -1){
				alert(jl_set_jifen_1 +rank_integral+ jl_set_jifen_3);
				var val = rank_integral;
			}
		}
		else if(val == -1)
		{
			val = -1;
		}
		else
		{
			val = 0;
		}
		document.forms['theForm'].elements['rank_integral'].value = parseInt(val);
	} 
  
	/**
	* 积分购买金额
	*/
	function parseint_integral(val)
	{
		var val = Number(val);
		if(val > 0 || val == -1){
			var pay_integral = Number($("#pay_integral").html());
			
			if(val > pay_integral || val == -1){
				alert(jl_set_jifen_1 +pay_integral+ jl_set_jifen_4);
				var val = pay_integral;
			}
		}else{
			val = 0;
		}
		document.forms['theForm'].elements['integral'].value = parseInt(val);
	}
  
	/**
	* 促销
	*/
	function handlePromote(obj)
	{
		var shop_price = 0;
		$(obj).each(function(index, element) {
		  if($(element).is(":checked") == true){
			  if($(element).val() == 1){
				  $("#promote_1").attr("disabled",false);
				  $("#promote_start_date").parent().removeClass("time_disabled");
				  
				  <?php if ($this->_var['goods']['user_id']): ?>
				  //priceSetted();
				  <?php endif; ?>
				  
				  shop_price = Number(parseFloat($("input[name='promote_price']").val()));
			  }else{
				  $("#promote_1").attr("disabled",true);
				  $("#promote_start_date").parent().addClass("time_disabled");
				  
				  shop_price = Number(parseFloat($("input[name='shop_price']").val()));
			  }
			  
			  get_price_give(shop_price);
		  }
	  });
	  
	  document.forms['theForm'].elements['give_integral'].value = <?php echo empty($this->_var['goods']['give_integral']) ? '0' : $this->_var['goods']['give_integral']; ?>;
	  document.forms['theForm'].elements['rank_integral'].value = <?php echo empty($this->_var['goods']['rank_integral']) ? '0' : $this->_var['goods']['rank_integral']; ?>;
	  document.forms['theForm'].elements['integral'].value = <?php echo empty($this->_var['goods']['integral']) ? '0' : $this->_var['goods']['integral']; ?>;
	}
	
	function get_price_give(val){
		<?php if ($this->_var['goods']['user_id']): ?>
		  //商品价格
		  var model_price = $("form[name='theForm'] :input[name='model_price']").val();
		  if(model_price == 0){
			 <?php if ($this->_var['grade_rank']['give_integral']): ?>
				var give_integral = Math.floor(val * <?php echo $this->_var['grade_rank']['give_integral']; ?>);
				$("#give_integral").html(give_integral);
				
				var rank_integral = Math.floor(val * <?php echo $this->_var['grade_rank']['rank_integral']; ?>);
				$("#rank_integral").html(rank_integral);
				
				var pay_integral = Math.floor(val * <?php echo $this->_var['grade_rank']['pay_integral']; ?>);
				$("#pay_integral").html(pay_integral);
			 <?php endif; ?>
		 }
		 <?php endif; ?> 
	}
	
	/**
	**促销价格
	*/
	function get_promote_price(val){
		var shop_price = 0;
		
		shop_price = Number(parseFloat(val));
		
		get_price_give(shop_price);
	}
	/**
	*分期
	*/
	function handle_for_stages(obj){
	  $(obj).each(function(index, element) {
		  if($(element).is(":checked") == true){
			  if($(element).val() == 1){
				  $(".hidden_stages").show();
			  }else{
				  $(".hidden_stages").hide();
			  }
		  }
	  });
	}
	
    /**
	*分销
	*/
	function handle_distribution(obj){
	  $(obj).each(function(index, element) {
		  if($(element).is(":checked") == true){
			  if($(element).val() == 1){
				  $(".hidden_distribution").show();
			  }else{
				  $(".hidden_distribution").hide();
			  }
		  }
	  });
	}
  
	/**
	* 限购
	*/
	function handle_for_purchasing(obj)
	{
	  $(obj).each(function(index, element) {
		  if($(element).is(":checked") == true){
			  if($(element).val() == 1){
					$("#xiangou_num").attr("disabled",false);
					$("#xiangou_start_date").parent().removeClass("time_disabled");
			  }else{
					$("#xiangou_num").attr("disabled",true);
					$("#xiangou_start_date").parent().addClass("time_disabled");
			  }
		  }
	  });
	}
	
	//按市场价
	function marketPriceSetted()
	{
		computePrice('shop_price', 1/marketPriceRate, 'market_price');
		computePrice('integral', integralPercent / 100);
		
		<?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
		set_price_note(<?php echo $this->_var['item']['rank_id']; ?>);
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
	}

	//计算价格
	function computePrice(inputName, rate, priceName)
	{
		var shopPrice = priceName == undefined ? document.forms['theForm'].elements['shop_price'].value : document.forms['theForm'].elements[priceName].value;
		shopPrice = Utils.trim(shopPrice) != '' ? parseFloat(shopPrice)* rate : 0;
		if(inputName == 'integral')
		{
		  shopPrice = parseInt(shopPrice);
		}
		shopPrice += "";
		
		n = shopPrice.lastIndexOf(".");
		if (n > -1)
		{
		  shopPrice = shopPrice.substr(0, n + 3);
		}
		
		if (document.forms['theForm'].elements[inputName] != undefined)
		{
		  document.forms['theForm'].elements[inputName].value = shopPrice;
		}
		else
		{
		  document.getElementById(inputName).value = shopPrice;
		}
	}

	function set_price_note(rank_id)
	{
		var shop_price = $("input[name='shop_price']");
		var rank = new Array();
		
		if(shop_price.length > 0){
			var shop_price = parseFloat(shop_price.value);
		}else{
			var shop_price = 0;
		}
		
		
			<?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
				rank[<?php echo $this->_var['item']['rank_id']; ?>] = <?php echo empty($this->_var['item']['discount']) ? '100' : $this->_var['item']['discount']; ?>;
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		
		if (shop_price >0 && rank[rank_id] && document.getElementById('rank_' + rank_id) && parseInt(document.getElementById('rank_' + rank_id).value) == -1)
		{
			var price = parseInt(shop_price * rank[rank_id] + 0.5) / 100;
			if (document.getElementById('nrank_' + rank_id)){
				document.getElementById('nrank_' + rank_id).innerHTML = '(' + price + ')';
			}
		}else{
			if (document.getElementById('nrank_' + rank_id)){
				document.getElementById('nrank_' + rank_id).innerHTML = '';
			}
		}
	} 
	/*价格计算相关js end*/
	
	//添加扩展分类
	$(".category_dialog").on("click",function(){
		var goods_id = $("input[name='goods_id']").val();
		$.jqueryAjax("dialog.php", "is_ajax=1&act=extension_category&goods_id="+goods_id, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:jl_extend_cate,
				width:788,
				content:content,
				ok_title:jl_determine,
				cl_title:jl_cancel,
				drag:false,
				foot:true,
				onOk:function(){}
			});
			$(".category_list").perfectScrollbar();
		});
	});
	
	/* 处理扩展分类 by wu start */
	$(document).on("click","a[ectype=addExdCategory]",function(){
		var thisObj = $(this).parent();
		var cat_id = thisObj.find("input[ectype=cat_id]").val();
		if(cat_id == 0){
			$(".red_notic").remove();
			$(".sort_info").after("<div class='red_notic'>"+jl_select_cate+"</div>");
			setTimeout('$(".red_notic").remove()',1500);
		}else if(thisObj.find(".filter_item input[value="+cat_id+"]").length > 0){
			$(".red_notic").remove();
			$(".sort_info").after("<div class='red_notic'>"+jl_no_duplicate_cate+"</div>");
			setTimeout('$(".red_notic").remove()',1500);
		}else{
			var str = "";
			thisObj.find("ul li.current").each(function(){
				str += $(this).text() + '>';
			});
			str = str.substr(0,str.length - 1);
			var div = "<span class='filter_item'><span>"+str+"</span><a herf='javascript:void(0);' class='delete'></a>";
			div += "<input type='hidden' name='other_cat[]' value='"+cat_id+"'></span>";
			thisObj.find(".filter").append(div);
			deal_extension_category(this, goods_id, cat_id, 'add'); //ajax添加扩展分类
		}
	});
	
	$(document).on("click","#extension_category .delete",function(){
		var cat_id = $(this).siblings("input").val();
		deal_extension_category(this, goods_id, cat_id, 'delete'); //ajax删除扩展分类
		$(this).parent().remove();
	});
	/* 处理扩展分类 by wu end */

	//分期判断
	$(function(){
		for(var i=0;i<6;i++){
		var val=$('#stages').find('input').eq(i).val();
		var stages=$('#stages').find('input').eq(i).attr('stages');
		if(val==stages){
			$('#stages').find('input').eq(i).attr('checked','checked');
		}
	}});
	
	//商品基本信息 - 上传商品图片
	var goods_id = $("input[name='goods_id']").val();
	var uploader = new plupload.Uploader({//创建实例的构造方法
		runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
		browse_button: 'goods_figure', // 上传按钮
		url: "get_ajax_content.php?is_ajax=1&act=upload_img&type=goods_img&id="+goods_id, //远程上传地址
		filters: {
			max_file_size: '2mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
			mime_types: [//允许文件上传类型
				{title: "files", extensions: "jpg,png,gif,jpeg"}
			]
		},
		multi_selection: false, //true:ctrl多文件上传, false 单文件上传
		init: {
			FilesAdded: function(up, files) { //文件上传前
				var li = '';
				plupload.each(files, function(file) { //遍历文件
					li += "<div class='img'><img src='images/loading.gif' /></div>";
				});
				$("#goods_figure").append(li);
				uploader.start();
			},
			FileUploaded: function(up, file, info) { //文件上传成功的时候触发
				var data = eval("(" + info.response + ")");
				$("#goods_figure").html("<div class='img'><img src='" + data.pic + "'/><div class='edit_images'>更换图片</div></div>");
				//处理商品图片 by wu start
				$("input[name=original_img]").val(data.data['original_img']);
				$("input[name=goods_img]").val(data.data['goods_img']);
				$("input[name=goods_thumb]").val(data.data['goods_thumb']);
				//处理商品图片 by wu end
				
			},
			Error: function(up, err) { //上传出错的时候触发
				alert(err.message);
			}
		}
	});
	uploader.init();

    //上传视频
    $("#goods_video").on("click",function(){
        $.jqueryAjax("dialog.php", "is_ajax=1&act=video_box", function(data){
            var content = data.content;
            pb({
                id:"update_video_dialog",
                title:jl_upload_video,
                width:500,
                content:content,
                drag:true,
                foot:false
            });
        });
    });

    $(".video_default").on("click",function(){
        $('#goods_video_js').click();
        $(this).hide();
    });

    var video=document.getElementById("goods_video_js");

    if(video){
        video.onclick=function(){
            if(video.paused){
                video.play();
                $(".video_default").hide();
            }else{
                video.pause();
                $(".video_default").show();
            }
        }
    }

    //删除视频
    $("*[ectype='video_remove']").on("click",function(){
        pbDialog(jl_whether_delete_video,"",0,"","","",true,function(){
            $.jqueryAjax("gallery_album.php", "is_ajax=1&act=del_video&goods_id=" + goods_id, function(data){
				$(".goods_video_div").addClass("hide");
				$(".goods_video_js").attr("src", '');
			});
        });
    });

	//日期选择插件调用
	var opts1 = {
		'targetId':'promote_start_date',//时间写入对象的id
		'triggerId':['promote_start_date'],//触发事件的对象id
		'alignId':'text_time1',//日历对齐对象
		'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
	},opts2 = {
		'targetId':'promote_end_date',
		'triggerId':['promote_end_date'],
		'alignId':'text_time2',
		'format':'-'
	},opts3 = {
		'targetId':'xiangou_start_date',
		'triggerId':['xiangou_start_date'],
		'alignId':'text_time3',
		'format':'-'
	},opts4 = {
		'targetId':'xiangou_end_date',
		'triggerId':['xiangou_end_date'],
		'alignId':'text_time4',
		'format':'-'
	}

	xvDate(opts1);
	xvDate(opts2);
	xvDate(opts3);
	xvDate(opts4);
	
	//商品名称颜色设置
	$("#font_color input").spectrum({
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		showInput: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		palette: [
			["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
			"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
			["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
			"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
			["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
			"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
			"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
			"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
			"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
			"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
			"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
			"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
			"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
			"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
		]
	});
	$('.sp-choose').click(function(){
		var sp_color = $('.sp-input').val();
		$('input[name="goods_name"]').css("color",sp_color);
		$('input[name="goods_name_color"]').val(sp_color);
	});
	
	/*
	** 删除优惠阶梯价格
	*/
	$(document).on("click","a[ectype='remove_volume']",function(){
		var index = $(this).parent("td").index();
		var parent = $(this).parents("table");
		var id = $(this).data('id');
		var goods_id = $("input[name='goods_id']").val();
		
		if(id > 0){
			if(confirm(jl_sure_delete_promotion_price)){
				$.jqueryAjax('dialog.php', 'act=del_volume' + '&id=' + id + '&goods_id=' + goods_id, function(data){
					parent.find("tr").each(function(){
						$(this).find("td").eq(index).remove();
					});	
				});
			}
			
		}else{
			parent.find("tr").each(function(){
				$(this).find("td").eq(index).remove();
			});
		}	
	});
	
	/*
	** 删除满立减优惠价格
	*/
	$(document).on("click","a[ectype='remove_cfull']",function(){
		var index = $(this).parent("td").index();
		var parent = $(this).parents("table");
		var id = $(this).data('id');
		var goods_id = $("input[name='goods_id']").val();
		
		if(id > 0){
			if(confirm(jl_sure_delete_promotion_price)){
				$.jqueryAjax('dialog.php', 'act=del_cfull' + '&id=' + id + '&goods_id=' + goods_id, function(data){
					parent.find("tr").each(function(){
						$(this).find("td").eq(index).remove();
					});	
				});
			}
		}else{
			parent.find("tr").each(function(){
				$(this).find("td").eq(index).remove();
			});
		}
	});
	
	/*
	** 编辑商品相册图片外链地址
	*/
	$(document).on("change","input[ectype='external_url']",function(){
		var img_id = $(this).data('imgid');
		var goods_id = $("input[name='goods_id']").val();
		var external_url = $(this).val();
		
		$.jqueryAjax('dialog.php', 'act=insert_gallery_url' + '&external_url=' + external_url + '&img_id=' + img_id + '&goods_id=' + goods_id, function(data){
			if(data.error){
				alert(jl_img_url_exist);
				$(".external_url_" + data.img_id).val('');
			}else{
				$("#external_img_url" + data.img_id).attr("src", data.external_url);
			}
		});
	});
	
	/*
	** 添加商品相册图片外链地址
	*/
	$("#addExternalUrl").click(function(){
		var goods_id = $("input[name='goods_id']").val();
		
		$.jqueryAjax('dialog.php', 'is_ajax=1&act=add_external_url' + '&goods_id=' + goods_id, function(data){
			var content = data.content;
			pb({
				id:"attr_input_type",
				title:jl_add_outlink_img,
				width:820,
				content:content,
				ok_title:jl_determine,
				cl_title:jl_cancel,
				drag:false,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_external_url();
				}
			});
		});
	});
	
	function insert_external_url(){
		var actionUrl = "dialog.php?act=insert_external_url";  
		$("#externalUrlList").ajaxSubmit({
			type: "POST",
			dataType: "JSON",
			url: actionUrl,
			data: {"action": "TemporaryImage"},
			success: function (data) {
				$("#gallery_img_list").html(data.content);
			},
			async: true  
		 });
	}
	
	$("input[name='is_img_url']").click(function(){
		if($(this).is(":checked") == true){
			$("input[name='is_img_url']").val(1);
			$("input[name='goods_img_url']").attr("disabled",false);
			
		}else{
			$("input[name='is_img_url']").val(0);
			$("input[name='goods_img_url']").attr("disabled",true);
			$("input[name='goods_img_url']").val('');
		}
	});
	
	$(".pannel-content").hover(function(){
		$(".pannel-content").perfectScrollbar("destroy");
		$(".pannel-content").perfectScrollbar();
	});
	
	//商品运费 by wu
	$("input[name='freight']").click(function(){
		var value = $(this).val();
		if(value == 0){
			$('#shipping_fee').hide();
			$('#tid').hide();			
		}else if(value == 1){
			$('#shipping_fee').show();
			$('#tid').hide();
		}else if(value == 2){
			$('#shipping_fee').hide();
			$('#tid').show();
		}
	});
	
	
	//扫码入库 by wu start
	var scan_status = false;
	$("[data-role='scan_code']").click(function(){
		$("input[name='bar_code']").focus();
		$("input[name='bar_code']").val('');
		scan_status = true;
	})
	$("input[name='bar_code']").change(function(){
		if(scan_status){
			var bar_code = $(this).val();
			$.jqueryAjax('goods.php', 'act=scan_code&bar_code='+bar_code, function(data){
				if(data['error'] == 1){
					alert(data['message']);
				}else{
					$("[data-role='edit_scan_code']").show();
					var content = $("#scanCodeDialog").html();
					$("#scanCodeDialog .step_content").remove();
					
					pb({
						id:"scanCode",
						title:jl_scan_extend_info,
						width:550,
						height:470,
						content:content,
						ok_title:jl_determine,
						drag:false,
						foot:true,
						cl_cBtn:false,
						onOk:function(){
							scanCodeDialog("#scanCode");
						},
						onClose:function(){
							scanCodeDialog("#scanCode");
						}
					});
					$(".pb-ct").perfectScrollbar("destroy");
					$(".pb-ct").perfectScrollbar();
					
					//基本信息
					$("input[name='goods_name']").val(data['goods_info']['goods_name']);
					$("input[name='shop_price']").val(data['goods_info']['shop_price']);
					$("input[name='goods_weight']").val(data['goods_info']['goods_weight']);
					$("input[name='keywords']").val(data['goods_info']['keywords']);
					//图片外链
					if(data['goods_info']['goods_img_url'] && !$("input[name='is_img_url']").prop('checked')){
						$("input[name='is_img_url']").trigger("click");
						$("input[name='goods_img_url']").val(data['goods_info']['goods_img_url']);
					}
					//商品描述
					if(data['goods_info']['goods_desc']){
						$("#FCKeditor").html(data['goods_info']['goods_desc']);
					}
					
					inputVal(data['goods_info']);
				}
			})
		}
	});
	
	$("[data-role='edit_scan_code']").on("click",function(){
		var obj = $("#scanCodeDialog .step_content");
		var cp = obj.clone();
		$("#scanCodeDialog .step_content").remove();
		pb({
			id:"scanCode",
			title:jl_scan_extend_info,
			width:550,
			height:470,
			content:cp,
			ok_title:jl_determine,
			drag:false,
			foot:true,
			cl_cBtn:false,
			onOk:function(){
				scanCodeDialog("#scanCode");
			},
			onClose:function(){
				scanCodeDialog("#scanCode");
			}
		});
		$(".pb-ct").perfectScrollbar("destroy");
		$(".pb-ct").perfectScrollbar();
	});
	
	function scanCodeDialog(obj){
		var obj = $(obj).find(".step_content");
		var cp = obj.clone();
		$("#scanCodeDialog").append(cp);
	}
	
	function inputVal(arr){
		$("input[name='width']").val(arr['width']);
		$("input[name='height']").val(arr['height']);
		$("input[name='depth']").val(arr['depth']);
		$("input[name='origincountry']").val(arr['origincountry']);
		$("input[name='originplace']").val(arr['originplace']);
		$("input[name='assemblycountry']").val(arr['assemblycountry']);
		$("input[name='barcodetype']").val(arr['barcodetype']);
		$("input[name='catena']").val(arr['catena']);
		$("input[name='isbasicunit'][value='"+arr['isbasicunit']+"']").prop('checked', true);
		$("input[name='packagetype']").val(arr['packagetype']);
		$("input[name='grossweight']").val(arr['grossweight']);
		$("input[name='netweight']").val(arr['netweight']);
		$("input[name='netcontent']").val(arr['netcontent']);
		$("input[name='licensenum']").val(arr['licensenum']);
		$("input[name='healthpermitnum']").val(arr['healthpermitnum']);
	}
	//扫码入库 by wu end

	/**********************************{商品基本信息} end*****************************/	

	/**********************************{商品属性信息} start*****************************/
	//自动加载商品属性
	getAttrList(goods_id);
	
	//设置商品属性
	function getAttrList(goodsId)
	{
		
		var selGoodsType = document.forms['theForm'].elements['goods_type'];
		var selModelAttr = document.forms['theForm'].elements['model_attr'];
		var modelAttr = selModelAttr.value;
		if (selGoodsType != undefined)
		{
			var goodsType = selGoodsType.value;	
			Ajax.call('goods.php?is_ajax=1&act=get_attribute', 'goods_id=' + goodsId + "&goods_type=" + goodsType + '&modelAttr=' + modelAttr, setAttrList, "GET", "JSON");
		}
	}
	
	function setAttrList(result, text_result)
	{
		document.getElementById('tbody-goodsAttr').innerHTML = result.goods_attribute;
		if(result.is_spec){
			$("#goods_attr_gallery").show();
			document.getElementById('goods_attr_gallery').innerHTML = result.goods_attr_gallery;
		}else{
			$("#goods_attr_gallery").hide();
		}
		
		<?php if ($this->_var['cfg']['area_pricetype'] == 1): ?>
		var warehouse_id = $("#attribute_model #attribute_warehouse").find("input[type=radio][data-type=warehouse_id]:first").val()
		var region_id = $("#attribute_region").find("input[type=radio][data-warehouse=" + warehouse_id + "]:first").val();
		
		var city_id = 0;
		$.ajax({
			type:"get",
			url:"goods.php?is_ajax=1&act=city_region&onload=1",
			data:'area_id=' + region_id,
			dataType: 'json',
			async : false, //设置为同步操作就可以给全局变量赋值成功
			success:function(result){
				
				$("#attribute_city_region .label").removeClass('hide');
				$("#attribute_city_region .value").removeClass('hide');
				$("#attribute_city_region .label").addClass('show');
				$("#attribute_city_region .value").addClass('show');
				$("#region_city_list").html(result.content.html);
			
				city_id = result.content.city_id;
			}
		});
		
		set_attribute_table(goods_id, 2, city_id);
		<?php else: ?>
		set_attribute_table(goods_id);
		<?php endif; ?>
	}
	
	//删除货品
	function dropProduct(product_id)
	{
		var group_attr = $("form[name='theForm'] :input[name='group_attr']").val();
		$.jqueryAjax('goods.php', 'act=drop_product&product_id=' + product_id + '&group_attr=' + group_attr, function(data){
			if(data.error == 0){
				$.jqueryAjax('goods.php', 'act=set_attribute_table&goods_id='+data.goods_id+'&attr_id='+data.attr_id+'&attr_value='+data.attr_value+'&goods_model='+data.goods_model+'&region_id='+data.region_id, function(data){
					$("#attribute_table").html(data.content);
				})
			}
		});
	}	
	
	//删除相册图片
	function dropImg(imgId)
	{
		Ajax.call('goods.php?is_ajax=1&act=drop_image', "img_id="+imgId, dropImgResponse, "GET", "JSON");
	}
	
	function dropImgResponse(result)
	{
		if (result.error == 0)
		{
			$("*[data-imgid="+result.content+"]").parents("li").remove();
		}
	}
	
	$(document).on("click",".delete_img",function(){
		var id = $(this).data("imgid");
		if (confirm(drop_img_confirm)){
			dropImg(id);
		}
	});
	
	//属性仓库价格 start
	$(document).on("click","input[name='warehouse_butt']",function(){
		
		var goods_id = $("#goods_id").val();
		var goods_attr_id = $(this).data('goodsattrid');
		var attr_value = $("#goodsAttrValue_" + goods_attr_id).val();
		
		if(attr_value == ''){
			alert(jl_select_goods_attr);
			return false;
		}
		
		$.jqueryAjax('dialog.php', 'act=add_warehouse_price' + '&goods_id=' + goods_id + '&goods_attr_id=' + goods_attr_id + '&goods_attr_name=' + attr_value, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:jl_attr_warehouse_price,
				width:664,
				content:content,
				ok_title:jl_determine,
				cl_title:jl_cancel,
				drag:true,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_attr_warehouse_price();
				}
			});
		});
	});
	
	function insert_attr_warehouse_price(){
		var actionUrl = "dialog.php?act=insert_warehouse_price";  
		$("#warehouseForm").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
				},
				async: true  
		 });
	}
	//属性仓库价格 end
	
	//属性地区价格 start
	$(document).on("click","input[name='area_butt']",function(){
		var goods_id = $("#goods_id").val();
		var goods_attr_id = $(this).data('goodsattrid');
		var attr_value = $("#goodsAttrValue_" + goods_attr_id).val();
		
		if(attr_value == ''){
			alert(jl_select_goods_attr);
			return false;
		}
		
		$.jqueryAjax('dialog.php', 'act=add_area_price' + '&goods_id=' + goods_id + '&goods_attr_id=' + goods_attr_id + '&goods_attr_name=' + attr_value, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:jl_attr_region_price,
				width:864,
				content:content,
				ok_title:jl_determine,
				cl_title:jl_cancel,
				drag:true,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_attr_area_price();
				}
			});
			$(".areaForm_list").hover(function(){
				$(".areaForm_list .items").perfectScrollbar("destroy");
				$(".areaForm_list .items").perfectScrollbar();
			});
		});
	});
	
	function insert_attr_area_price(){
		var actionUrl = "dialog.php?act=insert_area_price";  
		$("#areaForm").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
				},
				async: true  
		 });
	}
	//属性地区价格 end
	
	//删除商品勾选属性
	$(document).on("click","*[ectype='attrClose']",function(){
		var _this = $(this);
		var goods_id = _this.data("goodsid");
		var attr_id = _this.data("attrid");
		var goods_attr_id = _this.data("goodsattrid");
		var attr_value = _this.data("attrvalue");
		var model = $(":input[name='goods_model']").val();
                var warehouse_id = $("#attribute_model").find("input[type=radio][data-type=warehouse_id]:checked").val();
                var region_id = $("#attribute_model").find("input[type=radio][data-type=region_id]:checked").val();
                var extension = '';
                if(goods_model == 1){
                        extension = "&region_id="+warehouse_id;
                }else if(goods_model == 2){
                        extension = "&region_id="+region_id;
                }
                
		if(_this.siblings("input[type='checkbox']").is(":checked") == true){
			_this.siblings("input[type='checkbox']").prop("checked",false);
			$.jqueryAjax('dialog.php', 'act=del_goods_attr' + '&goods_id=' + goods_id + '&attr_id=' + attr_id + '&goods_attr_id=' + goods_attr_id + '&attr_value=' + attr_value + "&model=" + model + extension, function(data){
				getAttrList(goods_id);
			});
		};
		
	});
	
	
	//上传属性图片 start
	$(document).on("click","a[ectype='add_attr_img']",function(){
		
		var goods_id = $("#goods_id").val();
		var goods_name = $("input[name=goods_name]").val();
		var attr_id = $(this).data('attrid');
		var goods_attr_id = $(this).data('goodsattrid');
		var attr_value = $("#goodsAttrValue_" + goods_attr_id).val();
		
		if(attr_value == ''){
			alert(jl_select_goods_attr);
			return false;
		}
		
		$.jqueryAjax('dialog.php', 'act=add_attr_img' + '&goods_id=' + goods_id + '&goods_name=' + goods_name + '&attr_id=' + attr_id + '&goods_attr_name=' + attr_value + '&goods_attr_id=' + goods_attr_id, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:jl_upload_attr_img,
				width:664,
				content:content,
				ok_title:jl_determine,
				cl_title:jl_cancel,
				drag:true,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					get_attr_gallery();
				}
			});
		});
	});
	
	function get_attr_gallery(){
		var actionUrl = "dialog.php?act=insert_attr_img";  
		$("#fileForm").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
					if(data.is_checked){
						$(".attr_gallerys").find(".img[data-type='img']").remove();
						var _div_img = '<div class="img" data-type="img"><img src="images/yes.png" /></div>';
						$(".attr_gallerys").find("a[data-goodsattrid='" + data.goods_attr_id + "']").after(_div_img);
					}
				},
				async: true
		 });
	}
	
	function delete_attr_gallery(goods_id, attr_id, goods_attr_name, goods_attr_id){
		 $.jqueryAjax('dialog.php', 'act=drop_attr_img' + '&goods_id=' + goods_id + '&attr_id=' + attr_id + '&goods_attr_name=' + goods_attr_name + '&goods_attr_id=' + goods_attr_id, function(data){
			if(data.error == 0){
				$(".img_flie_" + data.goods_attr_id).remove();
			}
		 });
	}
	
	function get_choose_attrImg(goods_id, goods_attr_id){
		if($("#feedbox").is(":hidden")){
		 $.jqueryAjax('dialog.php', 'act=choose_attrImg' + "&goods_id="+goods_id +  "&goods_attr_id="+goods_attr_id, function(data){
			if(data.error == 0){
				$("#feedcontent").html(data.content);
				$("#feedbox").show();
			}
		 });
		}else{
			$("#feedbox").hide();
		}
	}
	
	function gallery_on(this_obj,gallery_id,goods_id,goods_attr_id)
	{
		var a = document.getElementById('feedcontent').getElementsByTagName("li");
	
		for(i = 0; i < a.length; i++)
		{
			a[i].className=" ";
		}
		
		$.jqueryAjax('dialog.php', 'act=insert_gallery_attr' + "&gallery_id="+gallery_id +  "&goods_id="+goods_id +  "&goods_attr_id="+goods_attr_id, function(data){
			$("#attr_gallery_flie_" + data.goods_attr_id).attr("href", data.img_url);
			$("input[name='img_url']").val(data.img_url);
		 });
		 
		this_obj.className="on";
	}

	//上传属性图片 end
	
	//商品相册--上传图片
	var uploader_gallery = new plupload.Uploader({//创建实例的构造方法
		runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
		browse_button: 'addImages', // 上传按钮
		url: "get_ajax_content.php?is_ajax=1&act=upload_img&type=gallery_img&id="+goods_id, //远程上传地址
		filters: {
			max_file_size: '2mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
			mime_types: [//允许文件上传类型
				{title: "files", extensions: "jpg,png,gif,jpeg"}
			]
		},
		multi_selection: true, //true:ctrl多文件上传, false 单文件上传
		init: {
			FilesAdded: function(up, files) { //文件上传前
				if ($("#ul_pics").children("li").length > 30) {
					alert(jl_img_too_much);
					uploader_gallery.destroy();
				} else {
					var li = '';
					plupload.each(files, function(file) { //遍历文件
						li += "<li id='" + file['id'] + "'><div class='img'><img src='images/loading.gif' /></li>";
					});
					$("#ul_pics").append(li);
					uploader_gallery.start();
				}
			},
			FileUploaded: function(up, file, info) { //文件上传成功的时候触发
				var data = eval("(" + info.response + ")");
                                var html = "&nbsp;";
                                if(data.img_id == data.min_img_id){
                                    html = jl_main_img;
                                    $("#ul_pics").find(".zt").each(function(){
                                        $(this).html("&nbsp;");
                                    });
                                }
                                $("#gallery_"+data.min_img_id).find(".zt").html(jl_main_img);
				$("#" + file.id).html("<div class='img' onclick='img_default("+data.img_id+")'><img src='" + data.pic + "'/></div><div class='info'><span class='zt red'>"+html+"</span><div class='sort'><span>"+jl_label_sort+"</span><input type='text' name='sort' value='" + data.img_desc + "' class='stext' /></div><a href='javascript:void(0);' class='delete_img' data-imgid='"+data.img_id+"'><i class='icon icon-trash'></i></a></div><div class='info'><input name='external_url' type='text' class='text w130' ectype='external_url' value='" + data.external_url + "' title='" + data.external_url + "' data-imgid='" + data.img_id + "' placeholder='"+jl_img_outlink+"' onfocus='if (this.value == '"+jl_img_outlink+"'){this.value='http://';this.style.color='#000';}></div>");
                        },
			Error: function(up, err) { //上传出错的时候触发
				alert(err.message);
			}
		}
	});
	uploader_gallery.init();
	
	function img_default(img_id){
		Ajax.call('goods.php?act=img_default', "img_id=" + img_id , img_defaultResult, "POST", "JSON");
	}
	
	function img_defaultResult(result){
		if(result.error == 1){
			$(".goods_album").html(result.content);
		}else{
			alert(result.massege);
		}
	}
	
	$(document).on("click","a[ectype='attr_input']",function(){
		var attr_id = $(this).data('attrid');
		var goods_id = $("input[name='goods_id']").val();
		
		$.jqueryAjax('dialog.php', 'is_ajax=1&act=attr_input_type' + '&attr_id=' + attr_id + '&goods_id=' + goods_id, function(data){
			var content = data.content;
			pb({
				id:"attr_input_type",
				title:jl_hand_input_attr,
				width:820,
				content:content,
				ok_title:jl_determine,
				cl_title:jl_cancel,
				drag:false,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_attr_input();
				}
			});
		});
	});
	
	function insert_attr_input(){
		var actionUrl = "dialog.php?act=insert_attr_input";  
		$("#insertAttrInput").ajaxSubmit({
			type: "POST",
			dataType: "JSON",
			url: actionUrl,
			data: {"action": "TemporaryImage"},
			success: function (data) {
				$(".attr_input_type_" + data.attr_id).html(data.content);
				
				//自动加载商品属性
				getAttrList(data.goods_id);
			},
			async: true
		});
	}

	//唯一属性框进入焦点
	function insert_attr_input_val(obj){
		var _this = $(obj).parents('.value'),
			attr_id_val = [],
			value_list_val = [],
			attr_id = _this.find("input[name='attr_id_list[]']").val(),
			goods_id = $("input[name='goods_id']").val();
			
		attr_id_val.push(_this.find("input[name='goods_attr_id_list[]']").val());
		value_list_val.push(_this.find("input[name='attr_value_list[]']").val());
		$.jqueryAjax('dialog.php', 'is_ajax=1&act=insert_attr_input&attr_id_val=' + attr_id_val + '&attr_id=' + attr_id + '&goods_id=' + goods_id + "&value_list_val=" + value_list_val, function(data){});
	}
	
	//下拉属性选择
	$.divselect("#blur_attr_list","#blur_attr_list_val",function(obj){
		var val = obj.data("value"),
			_this = obj.parents('.value'),
			attr_id_val = [],
			value_list_val = [],
			attr_id = _this.find("input[name='attr_id_list[]']").val(),
			goods_id = $("input[name='goods_id']").val();
			
		attr_id_val.push(_this.find("input[name='goods_attr_id_list[]']").val());
		value_list_val.push(val);
		
		$.jqueryAjax('dialog.php', 'is_ajax=1&act=insert_attr_input&attr_id_val=' + attr_id_val + '&attr_id=' + attr_id + '&goods_id=' + goods_id + "&value_list_val=" + value_list_val, function(data){});
	});
	$(document).on("click",".xds_up",function(){
		var _div = $(this).parent().clone();
		_div.find("i").removeClass("xds_up").addClass("xds_down");
		$(this).parents(".input_type_items").append(_div);
	});
	
	$(document).on("click",".xds_down",function(){
		var parent = $(this).parents(".input_type_item");
		var goods_attr_id = parent.children("input[name='goods_attr_id[]']").val();
		var goods_id = $("input[name='goods_id']").val();
		
		if(goods_attr_id > 0){
			
			var attr_id = $("input[name='attr_id']").val();

			if(confirm(jl_sure_delete_attr)){
				$.jqueryAjax('dialog.php', 'is_ajax=1&act=del_input_type' + '&goods_attr_id=' + goods_attr_id + '&attr_id=' + attr_id + '&goods_id=' + goods_id, function(data){
					$(".attr_input_type_" + data.attr_id).html(data.attr_content);
					parent.remove();
					
					//自动加载商品属性
					getAttrList(goods_id);
				});
			}
			
		}else{
			parent.remove();
		}
	});
        $(document).on("click","[ectype='search_attr']",function(){
            set_attribute_table(goods_id , 1); //重置表格
        })
	/**********************************{商品属性信息} end*****************************/
    
    /* 异步添加各类信息 begin */
    //添加运费模板
	$(document).on("click","[ectype='ajaxTransport']",function(){
        var name = jl_add_freight_tpl;
        var act = 'act=ajaxTransport';
        var _this = $(this);
        if(_this.data('attr') == 'edit'){
            var tid = $('#tid').find("input[name='tid']").val();
            name = jl_edit_freight_tpl;
            act = 'act=ajaxTransport&tid=' + tid;
        }
        
        $.jqueryAjax('dialog.php',act, function(data){
            goods_visual_desc(name,1000,data.content,function(){
                var form = $("#transport_dialog").find("form[name='theForm']");
                var title = form.find("input[name='title']");
                var act = form.find("input[name='act']").val();
                var fald = true;
                
                if(title.val() == ""){
                    error_div("#transport_dialog input[name='title']",jl_freight_tpl_title_not_null);
					fald = false;
                }else{
                    form.ajaxSubmit({
                        type: "POST",
                        dataType: "JSON",
                        url: "dialog.php?act=" + act,
                        data: {"action": "TemporaryImage"},
                        success: function (data) {
                            alert(data.message);
                            if(data.error == 0){
                                $("#tid").html(data.content); 
                            }

                        },
                        async: true  
                    });
                    
                    fald = true;
                }
                return fald;   
            },'transport_dialog');            
        });		
	});
    
    //添加分类
	$(document).on("click","[ectype='ajaxCate']",function(){
        $.jqueryAjax('dialog.php', 'act=ajaxCate', function(data){
            goods_visual_desc("添加分类",1200,data.content,function(){
                var form = $("#cate_dialog").find("form[name='theForm']");
                var cat_name = form.find("input[name='cat_name']");
                var fald = true;
                
                if(cat_name.val() == ""){
                    error_div("#cate_dialog input[name='cat_name']",jl_cate_name_not_null);
					fald = false;
                }else{
                    form.ajaxSubmit({
                        type: "POST",
                        dataType: "JSON",
                        url: "dialog.php?act=cate_insert",
                        data: {"action": "TemporaryImage"},
                        success: function (data) {
                            alert(data.message);
                            if(data.error == 0){
                                $("#cate_add").html(data.content); 
                            }                            
                        },
                        async: true  
                    });
                    
                    fald = true;
                }
                return fald;   
            },'cate_dialog');
        });		
	});
    /* 异步添加各类信息 end */
</script>
</body>
</html>
