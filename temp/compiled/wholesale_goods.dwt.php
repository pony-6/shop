<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/wholesale_new.css" />
<link rel="stylesheet" type="text/css" href="js/perfect-scrollbar/perfect-scrollbar.min.css" />
</head>

<body>
<?php echo $this->fetch('library/page_header_business.lbi'); ?>
<div class="content b2b-content">
    <div class="w w1200">
        <?php echo $this->fetch('library/ur_here_wholesale.lbi'); ?>
    </div>
    <div class="container b2b-goods-container">
        <div class="w w1200">
            <div class="product-info">
                <?php echo $this->fetch('library/goods_gallery_wholesale.lbi'); ?>
                <div class="product-wrap product-wrap-min">
                    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                        <div class="name"><?php echo $this->_var['goods']['goods_name']; ?></div>
                        <div class="summary">
                            <div class="summary-price-wrap">
                                <div class="s-p-w-wrap">
                                    <div class="summary-item">
                                    	<div class="si-tit">批发价</div>
                                        <div class="si-warp">
                                            <div class="s-tr">
                                                <?php if ($this->_var['goods']['price_model'] == 1): ?>
                                                <?php $_from = $this->_var['goods']['volume_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'price');$this->_foreach['price'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['price']['total'] > 0):
    foreach ($_from AS $this->_var['price']):
        $this->_foreach['price']['iteration']++;
?>
                                                <div class="s-td<?php if (($this->_foreach['price']['iteration'] == $this->_foreach['price']['total'])): ?> last<?php endif; ?>">
                                                    <div class="qp-price"><em>¥</em><?php echo $this->_var['price']['volume_price']; ?></div>
                                                    <div class="m-price"><em>¥</em><?php echo $this->_var['goods']['market_price']; ?></div>
                                                </div>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                <?php else: ?>
                                                <div class="s-td">
                                                    <div class="qp-price"><em>¥</em><?php echo $this->_var['goods']['goods_price']; ?></div>
                                                    <div class="m-price"><em>¥</em><?php echo $this->_var['goods']['market_price']; ?></div>
                                                </div>													
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-item">
                                    	<div class="si-tit">起批量</div>
                                        <div class="si-warp">
											<?php if ($this->_var['goods']['price_model'] == 1): ?>
                                            <div class="s-tr">
                                                <?php $_from = $this->_var['goods']['volume_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'number');$this->_foreach['number'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['number']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['number']):
        $this->_foreach['number']['iteration']++;
?>
                                                    <?php if (! ($this->_foreach['number']['iteration'] == $this->_foreach['number']['total'])): ?>
                                                    <div class="s-td"><span class="ftx-06"><?php echo $this->_var['number']['volume_number']; ?>-<?php echo $this->_var['number']['range_number']; ?><?php echo $this->_var['goods']['goods_unit']; ?></span></div>
                                                    <?php else: ?>
                                                    <div class="s-td"><span class="ftx-06">≥<?php echo $this->_var['number']['volume_number']; ?><?php echo $this->_var['goods']['goods_unit']; ?></span></div>
                                                    <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div> 
										    <?php else: ?>
                                            <div class="s-tr">
												<div class="s-td"><span class="ftx-06">≥<?php echo $this->_var['goods']['moq']; ?><?php echo $this->_var['goods']['goods_unit']; ?></span></div>
                                            </div>											
											<?php endif; ?>
                                        </div>
                                    </div>    
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="summary-basic-info">
                                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['foo']['iteration']++;
?>
                                <?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>
                                <div class="summary-item is-size">
                                    <div class="si-tit"><?php echo $this->_var['spec']['name']; ?></div>
                                    <div class="si-warp">
                                        <div class="si-lie-list" ectype="main_attr_list">
                                            <?php echo $this->fetch('library/wholesale_main_attr_list.lbi'); ?>
                                        </div>
                                    </div>
                                    <ul class="hide" ectype="select_record"></ul>
                                    <div class="whodet" ectype="whodet">
                                        <div class="whodet-list">
                                            <div class="w-number"><em class="org" ectype="w-number">0</em>个</div>
                                            <div class="w-total">共<em class="org" ectype="w-total">0.00</em>元</div>
                                            <div class="w-handle" ectype="w-handle">已选清单<i></i></div>
                                        </div>
                                        <div class="whodet-goods-info" ectype="wginfo">
											<?php echo $this->fetch('library/wholesale_select_record_data.lbi'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <?php else: ?>
                                <?php if ($this->_var['spec']['values']): ?>
                                <div class="summary-item is-attr goods_info_attr" ectype="is-attr" data-type="radio">
                                    <div class="si-tit"><?php echo $this->_var['spec']['name']; ?></div>
                                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                    <div class="si-warp">
                                        <ul>
                                            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['attrvalues'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attrvalues']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['attrvalues']['iteration']++;
?>  
                                            <?php if ($this->_var['spec']['is_checked'] > 0): ?>
                                            <li class="item<?php if ($this->_var['value']['checked'] == 1): ?> selected<?php endif; ?>" data-name="<?php echo $this->_var['value']['id']; ?>">
                                                <b></b>
                                                <a href="<?php if ($this->_var['value']['img_site']): ?><?php echo $this->_var['value']['img_site']; ?><?php else: ?>javascript:void(0);<?php endif; ?>">
                                                    <?php if ($this->_var['value']['img_flie']): ?>
                                                    <img src="<?php echo $this->_var['value']['img_flie']; ?>" width="24" height="24" />
                                                    <?php endif; ?>
                                                    <i><?php echo $this->_var['value']['label']; ?></i>
                                                    <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" data-attrtype="1" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" class="hide" <?php if ($this->_var['value']['checked'] == 1): ?> checked<?php endif; ?> />
                                                </a>
                                            </li>
                                            <?php else: ?>
                                            <li class="item <?php if ($this->_var['key'] == 0): ?> selected<?php endif; ?>" data-name="<?php echo $this->_var['value']['id']; ?>">
                                                <b></b>
                                                <a href="javascript:void(0);" name="<?php echo $this->_var['value']['id']; ?>" class="noimg">
                                                    <i><?php echo $this->_var['value']['label']; ?></i>
                                                    <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" data-attrtype="1" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" class="hide" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a>
                                                </a>
                                            </li>						
                                            <?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                    </div>
                                    <?php else: ?>
                                    ...
                                    <?php endif; ?>
                                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['spec_key']; ?>" data-spectype="<?php if ($this->_var['spec']['attr_type'] == 1): ?>attr-radio<?php else: ?>attr-check<?php endif; ?>" />
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php endforeach; else: ?>
								<div class="summary-item is-size">
                                    <div class="si-tit">属性</div>
                                    <div class="si-warp">
                                        <div class="si-lie-list">
											<div class="lie">
												<div class="row1"><strong class="ftx-06">无属性</strong></div>
												<div class="row2"><div class="price"><?php echo $this->_var['goods']['goods_price_formatted']; ?></div></div>
												<div class="row3">
													<div class="b-stock">库存<?php echo empty($this->_var['goods']['goods_number']) ? '0' : $this->_var['goods']['goods_number']; ?></div>
												</div>
												<div class="row4">
                                                	<div class="number">
														<a href="javascript:void(0)" class="decrement btn-reduce">-</a>
														<input name="goods_number" type="text" id="quantity" class="itxt buy-num" value="0" size="10" data-inventory="<?php echo $this->_var['goods']['goods_number']; ?>">
														<a href="javascript:void(0)" class="increment btn-add">+</a>
													</div>
                                                </div>
											</div>
                                        </div>
                                    </div>
                                    <div class="whodet" ectype="whodet">
                                        <div class="whodet-list">
                                            <div class="w-number"><em class="org" ectype="w-number">0</em>个</div>
                                            <div class="w-total">共<em class="org" ectype="w-total">0.00</em>元</div>
                                        </div>
                                    </div>									
								</div>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>								
                            </div>
                            <?php if ($this->_var['wholesale_rank']): ?>
                            <div class="summary-item is-ladder">
                                <div class="si-tit"><?php echo $this->_var['lang']['wholesale_rank']; ?></div>
                                <div class="si-warp">
                                    <a href="javascript:void(0);" class="link-red" ectype="view_priceLadder"><?php echo $this->_var['lang']['View_price_ladder']; ?></a>
                                    <dl class="priceLadder" ectype="priceLadder">
                                        <dt>
                                        <span><?php echo $this->_var['lang']['rank']; ?></span>
                                        </dt>
                                        <?php $_from = $this->_var['wholesale_rank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'rank');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['rank']):
?>
                                        <dd>
                                            <span><?php echo $this->_var['rank']['rank_name']; ?></span>
                                        </dd>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </dl>
                                    &nbsp;&nbsp;&nbsp;<?php echo $this->_var['lang']['rank_desc']; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="choose-btns clearfix">
								
								<a href="javascript:void(0);" onClick="addToWholesaleCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0);" class="btn-b2b-buynow">立即订购</a>
								<a href="javascript:void(0);" onClick="addToWholesaleCart(<?php echo $this->_var['goods']['goods_id']; ?>, 1);" class="btn-b2b-append"><i class="iconfont icon-b2b-cart"></i>加入进货单</a>
                            </div>
                            <div class="summary-item summary-tips">
								<?php if ($this->_var['goods']['goods_extend']['is_delivery'] || $this->_var['goods']['goods_extend']['is_free'] || $this->_var['goods']['goods_extend']['is_return']): ?>
                                <div class="si-tit">实力保障</div>
                                <div class="si-warp">
                                    <ul class="tips-list">
                                    <?php if ($this->_var['goods']['goods_extend']['is_delivery']): ?><li><em class="goods-icons">48</em>48小时发货</li><?php endif; ?>
                                    <?php if ($this->_var['goods']['goods_extend']['is_free']): ?><li><em class="goods-icons">邮</em>包邮</li><?php endif; ?>
                                    <?php if ($this->_var['goods']['goods_extend']['is_return']): ?><li><em class="goods-icons">退</em>可退</li><?php endif; ?>
                                    </ul>
                                </div>
								<?php endif; ?>
                            </div>
                            <input type="hidden" value="<?php echo $this->_var['act_id']; ?>" id="act_id" name="act_id">
                            <input type="hidden" value="<?php echo $this->_var['user_id']; ?>" id="user_id" name="user_id">
                            <input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" id="goods_id" name="goods_id">
                            <input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" id="good_id" name="good_id">
                            <input type="hidden" value="<?php echo $this->_var['goods']['goods_type']; ?>" id="goods_type" name="goods_type">
                            <input type="hidden" value="<?php echo $this->_var['goods']['moq']; ?>" id="moq" name="moq">
                            <input type="hidden" value="<?php echo $this->_var['region_id']; ?>" id="region_id" name="region_id">
                            <input type="hidden" value="<?php echo $this->_var['area_id']; ?>" id="area_id" name="area_id">
                        </div>
                    </form>
                </div>
                <?php if ($this->_var['goods']['user_id']): ?>
                <div class="seller-pop">
					<?php if ($this->_var['goods']['store_url'] || $this->_var['goods']['goods_brand_url']): ?>
                    <div class="seller-logo">
                        <?php if ($this->_var['goods']['shopinfo']['brand_thumb']): ?>
                        <a href="<?php echo $this->_var['goods']['store_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['shopinfo']['brand_thumb']; ?>" /></a>
                        <?php else: ?>
                        <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['brand_thumb']; ?>" /></a>
                        <?php endif; ?>
                    </div>
					<?php endif; ?>
                    <div class="seller-info">
                        <a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['shopinfo']['shop_name']; ?>" target="_blank" class="name"><?php echo $this->_var['goods']['shopinfo']['shop_name']; ?></a>
                        <?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
                            <a id="IM" href="javascript:;" onclick="openWin(this)" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="p-kefu p-c-org"><i class="iconfont icon-kefu"></i></a>
                        <?php else: ?>
                            <?php if ($this->_var['basic_info']['kf_type'] == 1): ?>
                            <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="p-kefu p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                            <?php else: ?>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes" class="p-kefu p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="seller-item">
                        <p>联系卖家：<?php echo $this->_var['shop_information']['kf_tel']; ?></p>
                        <p>经营方式：<?php echo $this->_var['shop_information']['business_practice']; ?></p>
                        <p>所在地区：
                            <?php if ($this->_var['adress']['province'] && $this->_var['adress']['city']): ?>
                                <?php echo $this->_var['adress']['province']; ?>&nbsp;<?php echo $this->_var['adress']['city']; ?>
                            <?php else: ?>
                                <?php echo $this->_var['basic_info']['province']; ?>&nbsp;<?php echo $this->_var['basic_info']['city']; ?>
                            <?php endif; ?>   
                        </p>
                    </div>
					<?php if ($this->_var['seller_recommend']): ?>
                    <div class="seller-rec">
                        <div class="tit"><i class="iconfont icon-thumb"></i><h3>厂商推荐</h3></div>
                        <div class="sr-goods">
                            <div class="p-img"><a href="<?php echo $this->_var['seller_recommend']['goods_url']; ?>" target="_blank"><img src="<?php echo $this->_var['seller_recommend']['goods_thumb']; ?>"></a></div>
                            <div class="p-price"><?php echo $this->_var['seller_recommend']['price']; ?></div>
                        </div>
                    </div>
					<?php endif; ?>
                </div>
                <?php else: ?>
                <div class="seller-pop">
					<?php if ($this->_var['goods']['store_url'] || $this->_var['goods']['goods_brand_url']): ?>
                    <div class="seller-logo">
                        <?php if ($this->_var['goods']['shopinfo']['brand_thumb']): ?>
                        <a href="<?php echo $this->_var['goods']['store_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['shopinfo']['brand_thumb']; ?>" /></a>
                        <?php else: ?>
                        <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['brand_thumb']; ?>" /></a>
                        <?php endif; ?>
                    </div>
					<?php endif; ?>
                    <div class="seller-info">
                        <a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['shopinfo']['shop_name']; ?>" target="_blank" class="name"><?php echo $this->_var['goods']['shopinfo']['shop_name']; ?></a>
                        <?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
                            <a id="IM" href="javascript:;" onclick="openWin(this)" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="p-kefu p-c-org"><i class="iconfont icon-kefu"></i></a>
                        <?php else: ?>
                            <?php if ($this->_var['basic_info']['kf_type'] == 1): ?>
                            <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="p-kefu p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                            <?php else: ?>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes" class="p-kefu p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="seller-item">
                        <p>联系卖家：<?php echo $this->_var['shop_information']['kf_tel']; ?></p>
                        <p>所在地区：
                            <?php if ($this->_var['adress']['province'] && $this->_var['adress']['city']): ?>
                                <?php echo $this->_var['adress']['province']; ?>&nbsp;<?php echo $this->_var['adress']['city']; ?>
                            <?php else: ?>
                                <?php echo $this->_var['basic_info']['province']; ?>&nbsp;<?php echo $this->_var['basic_info']['city']; ?>
                            <?php endif; ?>   
                        </p>
                    </div>
                </div>				
                <?php endif; ?>
                <div class="clear"></div>
					
                <div class="goods-main-layout who-goods-main-layout">
                    <div class="g-m-left">	
                    	<div class="g-main g-store-info" ectype="gm-tabs">
                            <div class="mt">
                                <h3><?php echo $this->_var['goods']['rz_shopName']; ?></h3>
                                <?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
                                    <a id="IM" onclick="openWin(this)" href="javascript:;" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="s-a-kefu"><i class="icon i-kefu"></i></a>
                                <?php else: ?>
                                    <?php if ($this->_var['basic_info']['kf_type'] == 1): ?>
                                    <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="s-a-kefu" target="_blank"><i class="icon i-kefu"></i></a>
                                    <?php else: ?>
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes" class="s-a-kefu" target="_blank"><i class="icon i-kefu"></i></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="mc">
                                <div class="mc-warp">
                                    <div class="g-s-brand">
                                        <?php if ($this->_var['goods']['shopinfo']['brand_thumb']): ?>
                                        <a href="<?php echo $this->_var['goods']['store_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['shopinfo']['brand_thumb']; ?>" /></a>
                                        <?php else: ?>
                                        <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['brand_thumb']; ?>" /></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if ($this->_var['filename'] != 'group_buy' && $this->_var['filename'] != 'seckill'): ?>
                                <?php if ($this->_var['goods']['user_id']): ?>
                                <div class="mc-warp b-t-gary">
                                    <div class="s-search">
                                        <form action="merchants_store.php" method="get">
                                        <p class="sp-form-item1"><input type="text" name="keyword" class="text" id="sp-keyword" value="" placeholder="关键字"></p>
                                        <p class="sp-form-item2"><input type="text" id="sp-price" name="price_min" class="text" value="" placeholder="价格"><span>~</span><input type="text" name="price_max" class="text" id="sp-price1" value="" placeholder="价格"></p>
                                        <p class="sp-form-item3"><input type="submit" value="店内搜索" class="search-btn" id="btnShopSearch"></p>
                                        <input type="hidden" name="merchant_id" value="<?php echo $this->_var['goods']['user_id']; ?>">
                                        </form>
                                    </div>
                                </div>	
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="g-main g-history">
                            <div class="mt">
                                <h3>买家还在看</h3>
                            </div>
                            <div class="mc">
                                <div class="mc-warp" id="history_list">
                                    <ul>
                                        <?php $_from = $this->_var['see_more_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_77884500_1611044566');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_77884500_1611044566']):
?>
                                        <li>
                                            <div class="p-img"><a href="<?php echo $this->_var['goods_0_77884500_1611044566']['goods_url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_77884500_1611044566']['goods_name']); ?>"><img src="<?php echo $this->_var['goods_0_77884500_1611044566']['goods_thumb']; ?>" width="170" height="170"></a></div>
                                            <div class="p-name"><a href="<?php echo $this->_var['goods_0_77884500_1611044566']['goods_url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_77884500_1611044566']['goods_name']); ?>"><?php echo $this->_var['goods_0_77884500_1611044566']['goods_name']; ?></a></div>
                                            <div class="p-lie">
                                                <div class="p-price">
                                                    <?php echo $this->_var['goods_0_77884500_1611044566']['price']; ?>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; else: ?>
                                        <li class="no_notic">此商品还没有设置相关商品</li>
                                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <div class="g-m-detail">
                        <div class="gm-tabbox" ectype="gm-tabs">
                            <ul class="gm-tab">
                                <li class="curr" ectype="gm-tab-item">商品详情</li>
                                <?php if ($this->_var['properties']): ?><li ectype="gm-tab-item">规格参数</li><?php endif; ?>
                                <!--<li ectype="gm-tab-item">用户评论（<em class="ReviewsCount"><?php echo $this->_var['comment_all']['allmen']; ?></em>）</li>
                                <li ectype="gm-tab-item">网友讨论圈</li>-->
                            </ul>
                            <div class="extra">
                                <div class="item">
                                    <?php if ($this->_var['two_code']): ?>
                                    <div class="si-phone-code">
                                        <div class="qrcode-wrap">
                                            <div class="qrcode_tit"><?php echo $this->_var['lang']['summary_phone']; ?><i class="iconfont icon-qr-code"></i></div>
                                            <div class="qrcode_pop">
                                                <div class="mobile-qrcode"><img src="<?php echo $this->_var['weixin_img_url']; ?>" alt="<?php echo $this->_var['lang']['two_code']; ?>" title="<?php echo $this->_var['weixin_img_text']; ?>" width="175"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="inner">
                                        <a href="javascript:void(0)" class="btn sc-redBg-btn" id="btn-anchor" ectype="tb-tab-anchor"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a>
                                        <div class="tb-popsku">
                                            <span class="arrow-top"></span>
                                            <div class="tb-popsku-content">
                                                <div class="tb-list">
                                                    <div class="tb-label">价格：</div>
                                                    <div class="tb-value"><strong class="shop-price" ectype="SHOP_PRICE"></strong></div>
                                                </div>
                                                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                                                <?php if ($this->_var['spec']['values']): ?>
                                                <div class="tb-list is-attr goods_info_attr" ectype="is-attr" data-type="<?php if ($this->_var['spec']['attr_type'] == 1): ?>radio<?php else: ?>checkbox<?php endif; ?>">
                                                    <div class="tb-label"><?php echo $this->_var['spec']['name']; ?>:</div>
                                                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                                    <div class="tb-value">
                                                        <ul>
                                                            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['attrvalues'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attrvalues']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['attrvalues']['iteration']++;
?>  
                                                            <?php if ($this->_var['spec']['is_checked'] > 0): ?>
                                                            <li class="item<?php if ($this->_var['value']['checked'] == 1): ?> selected<?php endif; ?>" data-name="<?php echo $this->_var['value']['id']; ?>">
                                                                <b></b>
                                                                <a href="<?php if ($this->_var['value']['img_site']): ?><?php echo $this->_var['value']['img_site']; ?><?php else: ?>javascript:void(0);<?php endif; ?>"<?php if ($this->_var['value']['img_site']): ?> target="_blank"<?php endif; ?>>
                                                                    <?php if ($this->_var['value']['img_flie']): ?>
                                                                    <img src="<?php echo $this->_var['value']['img_flie']; ?>" width="24" height="24" />
                                                                    <?php endif; ?>
                                                                    <i><?php echo $this->_var['value']['label']; ?></i>
                                                                    <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="<?php if ($this->_var['spec']['attr_type'] == 2): ?>checkbox<?php else: ?>radio<?php endif; ?>" data-attrtype="<?php if ($this->_var['spec']['attr_type'] == 2): ?>2<?php else: ?>1<?php endif; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" class="hide" <?php if ($this->_var['value']['checked'] == 1): ?>checked<?php endif; ?> />
                                                                </a>
                                                            </li>
                                                            <?php else: ?>
                                                            <li class="item<?php if ($this->_var['key'] == 0): ?> selected<?php endif; ?>" data-name="<?php echo $this->_var['value']['id']; ?>">
                                                                <b></b>
                                                                <a href="javascript:void(0);" name="<?php echo $this->_var['value']['id']; ?>" class="noimg">
                                                                    <i><?php echo $this->_var['value']['label']; ?></i>
                                                                    <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="<?php if ($this->_var['spec']['attr_type'] == 2): ?>checkbox<?php else: ?>radio<?php endif; ?>" data-attrtype="<?php if ($this->_var['spec']['attr_type'] == 2): ?>2<?php else: ?>1<?php endif; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" class="hide" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a> 											
                                                                </a>
                                                            </li>									
                                                            <?php endif; ?>
                                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                        </ul>
                                                    </div>
                                                    <?php else: ?>
                                                    ...
                                                    <?php endif; ?>
                                                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['spec_key']; ?>" data-spectype="<?php if ($this->_var['spec']['attr_type'] == 1): ?>attr-radio<?php else: ?>attr-check<?php endif; ?>" />
                                                </div>
                                                <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                <div class="tb-list">
                                                    <div class="tb-label">数量：</div>
                                                    <div class="tb-value">
                                                        <div class="amount-warp">
                                                            <input class="text buy-num" ectype="quantity" onblur="changePrice()" value="1" name="number" defaultnumber="1">
                                                            <div class="a-btn">
                                                                <a href="javascript:void(0);" class="btn-add"><i class="iconfont icon-up"></i></a>
                                                                <a href="javascript:void(0);" class="btn-reduce btn-disabled"><i class="iconfont icon-down"></i></a>
                                                            </div>
                                                            <input name="confirm_type" id="confirm_type" type="hidden" value="3" />
                                                            <input type="hidden" ectype="perNumber" value="1000">
                                                            <input type="hidden" ectype="perMinNumber" value="1">																
                                                        </div>
                                                        <span class="lh30 ml10"><?php echo $this->_var['lang']['goods_inventory']; ?>&nbsp;<em ectype="goods_attr_num"></em>&nbsp;<?php if ($this->_var['goods']['goods_unit']): ?><?php echo $this->_var['goods']['goods_unit']; ?><?php else: ?><?php echo $this->_var['goods']['measure_unit']; ?><?php endif; ?></span>
                                                    </div>
                                                </div>
                                                <div class="tb-list">
                                                    <div class="tb-label">&nbsp;</div>
                                                    <div class="tb-value">
                                                        <a href="javascript:bool=0;addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>)" class="cz-btn cz-btn-true" ectype="btn-append">确定</a>
                                                        <a href="javascript:void(0);" class="cz-btn cz-btn-false" ectype="tb-cancel">取消</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gm-tab-qp-bort" ectype="qp-bort"></div>
                        </div>
                        <div class="gm-floors" ectype="gm-floors">
                            <div class="gm-f-item gm-f-details" ectype="gm-item">
                                <div class="gm-title">
                                    <h3>商品详情</h3>
                                </div>
                                <div class="goods-para-list">
                                    <dl class="goods-para">
                                        <dd class="column"><span><?php echo $this->_var['lang']['goods_name']; ?>：<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></span></dd>
                                        <dd class="column"><span><?php echo $this->_var['lang']['Commodity_number']; ?>：<?php echo $this->_var['goods']['goods_sn']; ?></span></dd>
                                        <dd class="column"><span><?php echo $this->_var['lang']['seller_store']; ?>：<a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['rz_shopName']; ?>" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a></span></dd>
                                        <?php if ($this->_var['cfg']['show_goodsweight']): ?>
                                        <dd class="column"><span><?php echo $this->_var['lang']['weight']; ?>：<?php echo $this->_var['goods']['goods_weight']; ?></span></dd>
                                        <?php endif; ?>
                                        <?php if ($this->_var['cfg']['show_addtime']): ?>
                                        <!--<dd class="column"><span><?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?></span></dd>-->
                                        <?php endif; ?>
                                    </dl>

                                    <?php if ($this->_var['properties']): ?>
                                    <dl class="goods-para">
                                        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                                        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');$this->_foreach['noproperty'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noproperty']['total'] > 0):
    foreach ($_from AS $this->_var['property']):
        $this->_foreach['noproperty']['iteration']++;
?>
                                        <?php if ($this->_foreach['noproperty']['iteration'] < 13): ?>
                                        <dd class="column"><span title="<?php echo $this->_var['property']['value']; ?>"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></span></dd>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </dl>
                                    <?php endif; ?>
                                    <?php if ($this->_var['extend_info']): ?>
                                    <dl class="goods-para">
                                        <?php $_from = $this->_var['extend_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'info');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['info']):
?>	
                                        <dd class="column"><span title="<?php echo htmlspecialchars($this->_var['info']); ?>"><?php echo $this->_var['key']; ?>：<?php echo htmlspecialchars($this->_var['info']); ?></span></dd>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </dl>
                                    <?php endif; ?>
                                    <?php if ($this->_var['properties']): ?>
                                    <p class="more-par">
                                        <a href="#product-detail" class="ftx-05">更多参数>></a>
                                    </p>
                                    <?php endif; ?>
                                </div>

                                <?php echo $this->_var['goods']['goods_desc']; ?>
                            </div>
                            <?php if ($this->_var['properties']): ?>
                            <div class="gm-f-item gm-f-parameter" ectype="gm-item" id="product-detail">
                                <div class="gm-title">
                                    <h3>规格参数</h3>
                                </div>
                                <div class="Ptable">
                                    <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                                    <div class="Ptable-item">
                                        <h3><?php echo $this->_var['key']; ?></h3>
                                        <dl>
                                            <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                                            <dt><?php echo htmlspecialchars($this->_var['property']['name']); ?></dt>
                                            <dd title="<?php echo $this->_var['property']['value']; ?>"><?php echo $this->_var['property']['value']; ?></dd>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </dl>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,warehouse.js,magiczoomplus.js,perfect-scrollbar/perfect-scrollbar.min.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>

<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;

$(function(){
	//商品详情
	goods_desc_floor();
	
	
	$("*[ectype='w-handle']").on("click",function(){
		var parent = $(this).parents("*[ectype='whodet']");
		var wginfo = parent.find("*[ectype='wginfo']");
		var top = wginfo.height();
		if(parent.hasClass("whodet-cur")){
			parent.removeClass("whodet-cur");
			wginfo.css({"top":0});
		}else{
			parent.addClass("whodet-cur");
			wginfo.css({"top":-(top+2)});
		}
	});
	
	$(document).on('click', '.btn-add',function(){
		var num = $(this).siblings('.buy-num').val();
		num = parseInt(num);
		$(this).siblings('.buy-num').val(num+1);
		
		$("*[ectype='whodet']").show();
		set_select_record($(this));
	});
	
	$(document).on('click', '.btn-reduce',function(){
		var num = $(this).siblings('.buy-num').val();
		num = parseInt(num);
		if(num>0){
			$(this).siblings('.buy-num').val(num-1);
		}
		set_select_record($(this));
	});
		
	$(document).on('keyup', '.buy-num', function(){
		if($(this).val() < 0 || isNaN($(this).val()) || $(this).val() == ''){
			$(this).val(0);
		}
		$("*[ectype='whodet']").show();
		set_select_record($(this));
	});
	
	$(document).on('blur', '.buy-num', function(){
		var val = $(this).val();
		if(val.length>1){
			$(this).val(val.replace(/\b(0+)/gi,""));
		}
	});
	
	//默认加载价格
	changePrice();
	
	//商品相册小图滚动
	$(".spec-list").slide({mainCell:".spec-items ul",effect:"left",trigger:"click",pnLoop:false,autoPage:true,scroll:1,vis:5,prevCell:".spec-prev",nextCell:".spec-next"});
});



//切换属性计算价格
function changePrice()
{
	var goods_attr_id = getSelectedAttributes(document.forms['ECS_FORMBUY']);
	var attr_id = goods_attr = getSelectedAttributesGroup(document.forms['ECS_FORMBUY']);
	var goods_attr = '&goods_attr=' + attr_id;
	
	Ajax.call('wholesale_goods.php', 'act=price&id=' + goodsId + '&attr=' + goods_attr_id + goods_attr, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
	if (res.err_msg.length > 0){
		pbDialog(res.err_msg,"",0);
	}else{
		//by wu
		$("[ectype='main_attr_list']").html(res.main_attr_list);
		
		$("*[ectype='main_attr_list']").perfectScrollbar("destroy");
		$("*[ectype='main_attr_list']").perfectScrollbar();
		
		get_select_record();
	}
}

//配送地区 常用地址选择
function get_region_change(goods_id, province_id, city_id, district_id){
	Ajax.call("ajax_dialog.php", 'id=' + goods_id + '&act=in_stock' + '&province=' + province_id + "&city=" + city_id + "&district=" + district_id, ajax_is_inStock, "GET", "JSON");
}

function ajax_is_inStock(res){
	var t = '&t=' + parseInt(Math.random()*1000);
	var str_new = window.location.href.replace(/\&t\=\d+/g,t);
	location.href = str_new;
}
/* 获取配送区域 end*/

/*****************************补充js by wu*****************************/
//设置添加记录
function set_select_record(obj){
	//转换对象
	if(!obj.hasClass('buy-num')){
		obj = obj.siblings('.buy-num');
	}
	var num = obj.val(); //数量
	var inventory = obj.data('inventory'); //库存
	
	//判断库存
	if(num > inventory){
		pbDialog('采购商品库存不足', '', 0);
		obj.val(inventory);
		num = inventory;
	}	

	//查看是否设置属性
	var goods_type = parseInt($("input[name='goods_type']").val());
	if(goods_type > 0){
		var attr_group = obj.parents("[ectype='attr_group']").data('attr_group');
		if(num > 0){	
			if($("[ectype='select_record'] [data-attr='"+attr_group+"']").length == 0){
				var html = "<li data-attr='"+attr_group+"' data-num='"+num+"'></li>";
				$("[ectype='select_record']").append(html)
			}else{
				$("[ectype='select_record'] [data-attr='"+attr_group+"']").attr('data-num', num);
			}
		}else if (num == 0){
			$("[ectype='select_record'] [data-attr='"+attr_group+"']").remove();
		}
	}
	
	calculate_select_record();
}

//获取添加记录
function get_select_record(){
	$("[ectype='attr_group']").each(function(){
		var attr_group = $(this).data('attr_group');
		var select_num = $("[ectype='select_record']").find("[data-attr='"+attr_group+"']").attr('data-num');
		if(/\d+/.test(select_num)){
			$(this).find(".buy-num").val(select_num);
		}else{
			$(this).find(".buy-num").val(0);
		}
	})
}	

//计算数量价格
function calculate_select_record(){
	var goods_id = $("input[name='goods_id']").val();
	//查看是否设置属性
	var goods_type = parseInt($("input[name='goods_type']").val());
	if(goods_type > 0){	
		/*加载已选择商品 by wu start*/
		var attr_array = new Array();
		var num_array = new Array();
		$("[ectype='select_record'] li").each(function(i){
			var attr = $(this).attr('data-attr');
			var num = $(this).attr('data-num');
			attr_array.push(attr);
			num_array.push(num);
		})
		//异步处理
		$.ajax({
			url:'wholesale_goods.php?act=get_select_record',
			type:'post',
			data:{'goods_id':goods_id, 'attr_array':attr_array, 'num_array':num_array}, //传递数组数据
			dataType:'json',		
			success:function(data){
				$("[ectype='w-number']").html(data.total_number);
				$("[ectype='w-total']").html(data.data.total_price_formatted);
				$("[ectype='main_attr_list'] .price").html(data.data.unit_price_formatted);
				$("[ectype='wginfo']").html(data.record_data);
			}
		})
		/*加载已选择商品 by wu end*/	
	}else{
		var goods_number = $("input[name='goods_number']").val();
		$.jqueryAjax('wholesale_goods.php?act=get_select_record', 'goods_id='+goods_id+'&goods_number='+goods_number, function(data){
			$("[ectype='w-number']").html(data.total_number);
			$("[ectype='w-total']").html(data.data.total_price_formatted);			
			$(".si-lie-list .price").html(data.data.unit_price_formatted);			
		});
	}
}

/* *
 * 添加商品到购物车 
 */
function addToWholesaleCart(goodsId, type)
{
    var goods_id = goodsId;
	var moq = parseInt($("input[name='moq']").val());
	var act_id = $("input[name='act_id']").val();
	var user_id = $("input[name='user_id']").val();
	//判断是否登录
	if(user_id == 0){
		$.notLogin("get_ajax_content.php?act=get_login_dialog",'wholesale_goods.php?id='+act_id);	
		return false;
	}	
        
	//查看是否设置属性
	var goods_type = parseInt($("input[name='goods_type']").val());
	if(goods_type > 0){
		var goods_number = 0;
		/*加载已选择商品 by wu start*/
		var attr_array = new Array();
		var num_array = new Array();
		$("[ectype='select_record'] li").each(function(i){
			var attr = $(this).attr('data-attr');
			var num = $(this).attr('data-num');
			attr_array.push(attr);
			num_array.push(num);
			goods_number += parseInt(num); //商品总数
		})
		if(goods_number == 0){
			pbDialog('您选择您需要购买的商品', '', 0);
		}else{
			//异步处理
			$.ajax({
				url:'wholesale_flow.php?step=add_to_cart',
				type:'post',
				data:{'goods_id':goods_id, 'attr_array':attr_array, 'num_array':num_array}, //传递数组数据
				dataType:'json',		
				success:function(data){
                                    if(data.error == 1){
                                        pbDialog(data.content, '', 0);
                                    }
                                    else if(data.error == 2){
                                        pbDialog(data.content, '', 0);
                                        $.notLogin("get_ajax_content.php?act=get_login_dialog",'wholesale_goods.php?id='+act_id);	
                                    }else{
					if(type == 0){
						if(goods_number < moq){
							pbDialog('您订购的商品少于最小起订量', '', 0);
						}else{
							location.href='wholesale_flow.php?step=cart&goods_id='+goods_id;
						}
					}else{
						var cartInfo = document.getElementById('ECS_WHOLESALE_CARTINFO');
						var cart_url = 'wholesale_flow.php?step=cart';
						if (cartInfo)
						{
							cartInfo.innerHTML = data.content;
							
							pb({
								divId:"b2b-cart-popup",
								title:"提示",
								width:455,
								height:50,
								content:"<div class='ts'>宝贝已成功添加到进货单！</div>",
								ok_title:"去结算",
								cl_title:"继续购物",
								onOk:function(){
									window.location.href = "wholesale_flow.php?step=cart";
								}
							});
						}
					}
                                    }
				}
			})	
		}
		/*加载已选择商品 by wu end*/	
	}else{
		var goods_number = parseInt($("input[name='goods_number']").val());
		if(goods_number == 0){
			pbDialog('您选择您需要购买的商品', '', 0);
		}else{
			$.jqueryAjax('wholesale_flow.php?step=add_to_cart', 'goods_id='+goods_id+'&goods_number='+goods_number, function(data){
                             if(data.error == 1){
                                        pbDialog(data.content, '', 0);
                                    }
                                    else if(data.error == 2){
                                        pbDialog(data.content, '', 0);
                                        $.notLogin("get_ajax_content.php?act=get_login_dialog",'wholesale_goods.php?id='+act_id);	
                                    }else{
                                        
                                    
				if(type == 0){
					if(goods_number < moq){
						pbDialog('您订购的商品少于最小起订量', '', 0);
					}else{
						location.href='wholesale_flow.php?step=cart&goods_id='+goods_id;
					}
				}else{
					var cartInfo = document.getElementById('ECS_WHOLESALE_CARTINFO');
					var cart_url = 'wholesale_flow.php?step=cart';
					if(cartInfo){
						cartInfo.innerHTML = data.content;
						pb({
							divId:"b2b-cart-popup",
							title:"提示",
							width:455,
							height:50,
							content:"<div class='ts'>宝贝已成功添加到进货单！</div>",
							ok_title:"去结算",
							cl_title:"继续购物",
							onOk:function(){
								window.location.href = "wholesale_flow.php?step=cart";
							}
						});
					}				
				}	
                                }
			});
		}
	}
}
/******************************************* js方法 end***********************************************/	
</script>
<?php 
$k = array (
  'name' => 'goods_delivery_area_js',
  'area' => $this->_var['area'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</body>
</html>
